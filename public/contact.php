<?php
header('Content-Type: application/json');

$response = [
    'success' => false,
    'errors' => [],
    'redirect' => 'thank-you.html'
];

// Get form data
$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

// Validate name
if (empty($name)) {
    $response['errors']['name'] = 'Name is required';
} elseif (strlen($name) < 2) {
    $response['errors']['name'] = 'Name must be at least 2 characters';
} elseif (strlen($name) > 100) {
    $response['errors']['name'] = 'Name must not exceed 100 characters';
}

// Validate email
if (empty($email)) {
    $response['errors']['email'] = 'Email is required';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $response['errors']['email'] = 'Invalid email address';
}

// Validate message
if (empty($message)) {
    $response['errors']['message'] = 'Message is required';
} elseif (strlen($message) < 10) {
    $response['errors']['message'] = 'Message must be at least 10 characters';
} elseif (strlen($message) > 5000) {
    $response['errors']['message'] = 'Message must not exceed 5000 characters';
}

// If there are errors, return them
if (!empty($response['errors'])) {
    http_response_code(400);
    echo json_encode($response);
    exit;
}

// Sanitize inputs
$name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

// Log submission to file
$logEntry = [
    'timestamp' => date('Y-m-d H:i:s'),
    'name' => $name,
    'email' => $email,
    'message' => $message,
    'ip_address' => $_SERVER['REMOTE_ADDR']
];

$logFile = __DIR__ . '/contact_log.json';

// Read existing log
$existingLogs = [];
if (file_exists($logFile)) {
    $existingLogs = json_decode(file_get_contents($logFile), true) ?? [];
}

// Add new entry
$existingLogs[] = $logEntry;

// Write updated log
if (file_put_contents($logFile, json_encode($existingLogs, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES))) {
    // Optional: Send email notification
    $adminEmail = 'admin@quickpos.com'; // Change this to your email
    
    $emailSubject = 'New Contact Form Submission - QuickPOS';
    $emailBody = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 20px; border-radius: 5px 5px 0 0; }
            .content { background: #f9f9f9; padding: 20px; border: 1px solid #ddd; border-radius: 0 0 5px 5px; }
            .field { margin: 15px 0; }
            .label { font-weight: bold; color: #667eea; }
            .value { margin-top: 5px; padding: 10px; background: white; border-left: 3px solid #667eea; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>New Contact Form Submission</h2>
            </div>
            <div class='content'>
                <div class='field'>
                    <div class='label'>Name:</div>
                    <div class='value'>{$name}</div>
                </div>
                <div class='field'>
                    <div class='label'>Email:</div>
                    <div class='value'>{$email}</div>
                </div>
                <div class='field'>
                    <div class='label'>Message:</div>
                    <div class='value'>" . nl2br($message) . "</div>
                </div>
                <div class='field'>
                    <div class='label'>Submitted at:</div>
                    <div class='value'>" . date('F j, Y g:i A') . "</div>
                </div>
                <div class='field'>
                    <div class='label'>IP Address:</div>
                    <div class='value'>" . $_SERVER['REMOTE_ADDR'] . "</div>
                </div>
            </div>
        </div>
    </body>
    </html>
    ";
    
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= "From: noreply@quickpos.com\r\n";
    $headers .= "Reply-To: {$email}\r\n";
    
    // Uncomment to enable email sending
    // mail($adminEmail, $emailSubject, $emailBody, $headers);
    
    // Also send confirmation email to user
    $userEmailSubject = 'Thank You for Contacting QuickPOS';
    $userEmailBody = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 20px; border-radius: 5px 5px 0 0; text-align: center; }
            .content { background: #f9f9f9; padding: 20px; border: 1px solid #ddd; border-radius: 0 0 5px 5px; }
            .message { line-height: 1.6; }
            .footer { margin-top: 20px; padding-top: 20px; border-top: 1px solid #ddd; font-size: 12px; color: #666; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>Thank You!</h2>
            </div>
            <div class='content'>
                <p>Dear {$name},</p>
                <p class='message'>
                    Thank you for contacting QuickPOS! We have received your message and appreciate your interest in our services.
                </p>
                <p class='message'>
                    Our team will review your inquiry and get back to you as soon as possible. We typically respond within 24 business hours.
                </p>
                <p class='message'>
                    In the meantime, feel free to explore our website or check out our <a href='https://quickpos.com/blog'>blog</a> for more information about our features and pricing.
                </p>
                <div class='footer'>
                    <p>Best regards,<br>QuickPOS Team</p>
                    <p>© 2025 QuickPOS. All rights reserved.</p>
                </div>
            </div>
        </div>
    </body>
    </html>
    ";
    
    $userHeaders = "MIME-Version: 1.0\r\n";
    $userHeaders .= "Content-type: text/html; charset=UTF-8\r\n";
    $userHeaders .= "From: noreply@quickpos.com\r\n";
    
    // Uncomment to enable email sending
    // mail($email, $userEmailSubject, $userEmailBody, $userHeaders);
    
    $response['success'] = true;
    $response['message'] = 'Message sent successfully!';
    http_response_code(200);
} else {
    $response['success'] = false;
    $response['errors']['general'] = 'Failed to save message. Please try again.';
    http_response_code(500);
}

echo json_encode($response);
exit;
?>