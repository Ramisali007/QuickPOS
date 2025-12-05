<?php
session_start();

$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

$errors = [];

// Validate name
if (empty($name)) {
    $errors['name'] = 'Name is required';
} elseif (strlen($name) < 2) {
    $errors['name'] = 'Name must be at least 2 characters';
} elseif (strlen($name) > 100) {
    $errors['name'] = 'Name must not exceed 100 characters';
}

// Validate email
if (empty($email)) {
    $errors['email'] = 'Email is required';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Invalid email address';
}

// Validate message
if (empty($message)) {
    $errors['message'] = 'Message is required';
} elseif (strlen($message) < 10) {
    $errors['message'] = 'Message must be at least 10 characters';
} elseif (strlen($message) > 5000) {
    $errors['message'] = 'Message must not exceed 5000 characters';
}

if (!empty($errors)) {
    $_SESSION['contact_errors'] = $errors;
    $_SESSION['contact_old'] = [
        'name' => $name,
        'email' => $email,
        'message' => $message
    ];
    header('Location: /#contact');
    exit;
}

// Sanitize inputs
$safeName = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$safeEmail = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$safeMessage = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

// Log submission to file (if writable)
// On Vercel, file system is read-only, so we'll try to log but continue if it fails
$logFile = __DIR__ . '/../public/assets/contact_log.txt';
$logLine = sprintf(
    "%s | %s | %s | %s | %s%s",
    date('Y-m-d H:i:s'),
    $safeName,
    $safeEmail,
    str_replace(["\r", "\n"], [' ', ' '], $safeMessage),
    $_SERVER['REMOTE_ADDR'] ?? 'unknown',
    PHP_EOL
);

// Try to write log file, but don't fail if it's not writable (e.g., on Vercel)
@file_put_contents($logFile, $logLine, FILE_APPEND);

header('Location: /thank-you-new.html?name=' . urlencode($safeName));
exit;