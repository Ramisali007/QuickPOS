<?php
// QuickPOS Landing Page
// Main entry point for the application
$pageTitle = "QuickPOS - Modern POS System";
$pageDescription = "The last POS system you'll ever need. Manage stock, sales, and everything with ease.";
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php echo $pageDescription; ?>">
  <meta name="keywords" content="POS, Point of Sale, Inventory Management, Sales Analytics, Business Software">
  <meta name="author" content="QuickPOS Team">

  <!-- Open Graph / Social Media -->
  <meta property="og:title" content="<?php echo $pageTitle; ?>">
  <meta property="og:description" content="<?php echo $pageDescription; ?>">
  <meta property="og:type" content="website">

  <title><?php echo $pageTitle; ?></title>

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico">

  <!-- Stylesheets -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<!-- SCROLL PROGRESS BAR -->
<div class="scroll-progress"></div>

<!-- NAVIGATION -->
<nav class="navbar navbar-expand-lg bg-white sticky-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#home">
      <i class="fas fa-cash-register me-2"></i>QuickPOS
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
        <li class="nav-item"><a class="nav-link" href="#pricing">Pricing</a></li>
        <li class="nav-item"><a class="nav-link" href="#stats">Stats</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
      </ul>
      <a href="#contact" class="btn btn-primary ms-3">Sign Up</a>
    </div>
  </div>
</nav>

<!-- HERO SECTION -->
<header id="home" class="hero-section py-5" data-parallax="0.5">
  <div class="hero-bg">
    <div class="gradient-orb gradient-orb-1"></div>
    <div class="gradient-orb gradient-orb-2"></div>
    <div class="gradient-orb gradient-orb-3"></div>
  </div>
  <div class="container hero-container">
    <div class="row align-items-center min-vh-75">
      <div class="col-lg-6 hero-content animate-on-scroll">
        <h1 class="hero-title">
          <span class="gradient-text">The Last POS System</span><br>
          You'll Ever Need
        </h1>
        <p class="hero-subtitle">
          Manage Stock, Sales and Everything with Ease. Powerful analytics, seamless integrations, and enterprise-grade security for businesses of all sizes.
        </p>
        <div class="hero-buttons">
          <a href="#contact" class="btn btn-premium btn-lg">
            <i class="fas fa-rocket me-2"></i>Get Started for Free
          </a>
          <a href="#features" class="btn btn-outline-premium btn-lg">
            <i class="fas fa-play me-2"></i>Learn More
          </a>
        </div>
      </div>
      <div class="col-lg-6 hero-image animate-on-scroll">
        <div class="hero-card">
          <div class="card-header">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <div class="dashboard-preview">
            <div class="dashboard-item">
              <i class="fas fa-chart-line dashboard-icon text-primary"></i>
              <span>Sales Today: $12,450</span>
            </div>
            <div class="dashboard-item">
              <i class="fas fa-boxes dashboard-icon text-success"></i>
              <span>Items in Stock: 1,234</span>
            </div>
            <div class="dashboard-item">
              <i class="fas fa-users dashboard-icon text-info"></i>
              <span>Active Customers: 89</span>
            </div>
            <div class="dashboard-item">
              <i class="fas fa-shopping-cart dashboard-icon text-warning"></i>
              <span>Orders Pending: 23</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="scroll-indicator">
    <span></span>
  </div>
</header>

<!-- FEATURES SECTION -->
<section id="features" class="features-section py-5">
  <div class="container">
    <h2 class="text-center mb-5 fw-bold animate-on-scroll">
      <span class="gradient-text">Key Features</span>
    </h2>
    <div class="row g-4">
      <div class="col-lg-4 col-md-6 animate-on-scroll">
        <div class="card feature-card h-100 p-4 text-center border-0">
          <div class="feature-icon mb-3">
            <i class="fas fa-boxes fa-3x text-primary"></i>
          </div>
          <h5 class="card-title fw-bold">Inventory Management</h5>
          <p class="card-text text-muted">Real-time stock tracking and automated reordering with smart alerts</p>
          <div class="feature-badge">Advanced</div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 animate-on-scroll">
        <div class="card feature-card h-100 p-4 text-center border-0">
          <div class="feature-icon mb-3">
            <i class="fas fa-chart-line fa-3x text-success"></i>
          </div>
          <h5 class="card-title fw-bold">Sales Analytics</h5>
          <p class="card-text text-muted">Detailed reports and insights on your business performance</p>
          <div class="feature-badge">Analytics</div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 animate-on-scroll">
        <div class="card feature-card h-100 p-4 text-center border-0">
          <div class="feature-icon mb-3">
            <i class="fas fa-plug fa-3x text-danger"></i>
          </div>
          <h5 class="card-title fw-bold">Easy Integration</h5>
          <p class="card-text text-muted">Seamlessly connect with your existing tools and platforms</p>
          <div class="feature-badge">Integration</div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 animate-on-scroll">
        <div class="card feature-card h-100 p-4 text-center border-0">
          <div class="feature-icon mb-3">
            <i class="fas fa-lock fa-3x text-warning"></i>
          </div>
          <h5 class="card-title fw-bold">Enterprise Security</h5>
          <p class="card-text text-muted">Bank-level encryption and compliance with all standards</p>
          <div class="feature-badge">Security</div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 animate-on-scroll">
        <div class="card feature-card h-100 p-4 text-center border-0">
          <div class="feature-icon mb-3">
            <i class="fas fa-mobile-alt fa-3x text-info"></i>
          </div>
          <h5 class="card-title fw-bold">Mobile Ready</h5>
          <p class="card-text text-muted">Access your POS from anywhere, anytime on any device</p>
          <div class="feature-badge">Mobile</div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 animate-on-scroll">
        <div class="card feature-card h-100 p-4 text-center border-0">
          <div class="feature-icon mb-3">
            <i class="fas fa-headset fa-3x text-primary"></i>
          </div>
          <h5 class="card-title fw-bold">24/7 Support</h5>
          <p class="card-text text-muted">Dedicated support team always ready to help you</p>
          <div class="feature-badge">Support</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- STATS SECTION -->
<section id="stats" class="stats-section py-5 bg-gradient">
  <div class="container">
    <div class="row text-center g-4">
      <div class="col-lg-3 col-md-6 animate-on-scroll">
        <div class="stat-box">
          <div class="stat-number counter" data-target="5000">0</div>
          <p class="stat-label">Active Users</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 animate-on-scroll">
        <div class="stat-box">
          <div class="stat-number counter" data-target="150">0</div>
          <p class="stat-label">Countries</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 animate-on-scroll">
        <div class="stat-box">
          <div class="stat-number counter" data-target="98">0</div>
          <p class="stat-label">% Uptime</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 animate-on-scroll">
        <div class="stat-box">
          <div class="stat-number counter" data-target="24">0</div>
          <p class="stat-label">Years Experience</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PRICING SECTION -->
<section id="pricing" class="pricing-section py-5">
  <div class="container">
    <h2 class="text-center mb-5 fw-bold animate-on-scroll">
      <span class="gradient-text">Simple Pricing Plans</span>
    </h2>
    
    <!-- Pricing Toggle -->
    <div class="text-center mb-5 animate-on-scroll">
      <div class="pricing-toggle-wrapper">
        <span class="me-3">Monthly</span>
        <div class="form-check form-switch">
          <input class="form-check-input pricing-toggle" type="checkbox" id="pricingToggle">
          <label class="form-check-label" for="pricingToggle">Annual (Save 20%)</label>
        </div>
      </div>
    </div>

    <div class="row g-4">
      <!-- Basic Plan -->
      <div class="col-lg-4 col-md-6 animate-on-scroll">
        <div class="card pricing-card h-100 border-0">
          <div class="card-body p-5">
            <div class="pricing-badge">Basic</div>
            <h5 class="card-title fw-bold mb-3">Starter</h5>
            <div class="pricing-amount">
              <span class="monthly-price">
                <span class="amount">$29</span>
                <span class="period">/month</span>
              </span>
              <span class="annual-price" style="display: none;">
                <span class="amount">$278</span>
                <span class="period">/year</span>
              </span>
            </div>
            <ul class="pricing-list list-unstyled my-4">
              <li class="py-2"><i class="fas fa-check text-success me-2"></i>Up to 100 transactions</li>
              <li class="py-2"><i class="fas fa-check text-success me-2"></i>Basic reporting</li>
              <li class="py-2"><i class="fas fa-check text-success me-2"></i>Email support</li>
              <li class="py-2"><i class="fas fa-check text-success me-2"></i>1 user account</li>
              <li class="py-2 text-muted"><i class="fas fa-times me-2"></i>Analytics</li>
              <li class="py-2 text-muted"><i class="fas fa-times me-2"></i>API access</li>
            </ul>
            <button class="btn btn-outline-primary w-100 btn-lg">
              Get Started
            </button>
          </div>
        </div>
      </div>

      <!-- Pro Plan -->
      <div class="col-lg-4 col-md-6 animate-on-scroll">
        <div class="card pricing-card pricing-card-featured h-100 border-0">
          <div class="pricing-badge-featured">Most Popular</div>
          <div class="card-body p-5">
            <div class="pricing-badge">Pro</div>
            <h5 class="card-title fw-bold mb-3">Professional</h5>
            <div class="pricing-amount">
              <span class="monthly-price">
                <span class="amount">$79</span>
                <span class="period">/month</span>
              </span>
              <span class="annual-price" style="display: none;">
                <span class="amount">$758</span>
                <span class="period">/year</span>
              </span>
            </div>
            <ul class="pricing-list list-unstyled my-4">
              <li class="py-2"><i class="fas fa-check text-success me-2"></i>Unlimited transactions</li>
              <li class="py-2"><i class="fas fa-check text-success me-2"></i>Advanced analytics</li>
              <li class="py-2"><i class="fas fa-check text-success me-2"></i>Priority support</li>
              <li class="py-2"><i class="fas fa-check text-success me-2"></i>5 user accounts</li>
              <li class="py-2"><i class="fas fa-check text-success me-2"></i>Full analytics</li>
              <li class="py-2"><i class="fas fa-check text-success me-2"></i>API access</li>
            </ul>
            <button class="btn btn-primary w-100 btn-lg">
              Start Free Trial
            </button>
          </div>
        </div>
      </div>

      <!-- Enterprise Plan -->
      <div class="col-lg-4 col-md-6 animate-on-scroll">
        <div class="card pricing-card h-100 border-0">
          <div class="card-body p-5">
            <div class="pricing-badge">Enterprise</div>
            <h5 class="card-title fw-bold mb-3">Enterprise</h5>
            <div class="pricing-amount">
              <span class="amount">Custom</span>
            </div>
            <ul class="pricing-list list-unstyled my-4">
              <li class="py-2"><i class="fas fa-check text-success me-2"></i>Everything in Pro</li>
              <li class="py-2"><i class="fas fa-check text-success me-2"></i>Unlimited users</li>
              <li class="py-2"><i class="fas fa-check text-success me-2"></i>Custom features</li>
              <li class="py-2"><i class="fas fa-check text-success me-2"></i>Dedicated support</li>
              <li class="py-2"><i class="fas fa-check text-success me-2"></i>SLA guarantee</li>
              <li class="py-2"><i class="fas fa-check text-success me-2"></i>On-premise option</li>
            </ul>
            <button class="btn btn-outline-primary w-100 btn-lg">
              Contact Sales
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CONTACT SECTION -->
<section id="contact" class="contact-section py-5 bg-light">
  <div class="container">
    <div class="row align-items-center g-4">
      <div class="col-lg-6 animate-on-scroll">
        <h2 class="fw-bold mb-4">
          <span class="gradient-text">Ready to Transform Your Business?</span>
        </h2>
        <p class="lead text-muted mb-4">
          Join thousands of businesses already using QuickPOS to manage their operations efficiently.
        </p>
        <div class="row g-3">
          <div class="col-6">
            <div class="contact-benefit">
              <i class="fas fa-check-circle text-success me-2"></i>
              <span>Free Setup</span>
            </div>
          </div>
          <div class="col-6">
            <div class="contact-benefit">
              <i class="fas fa-check-circle text-success me-2"></i>
              <span>No Credit Card</span>
            </div>
          </div>
          <div class="col-6">
            <div class="contact-benefit">
              <i class="fas fa-check-circle text-success me-2"></i>
              <span>14-Day Trial</span>
            </div>
          </div>
          <div class="col-6">
            <div class="contact-benefit">
              <i class="fas fa-check-circle text-success me-2"></i>
              <span>Cancel Anytime</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 animate-on-scroll">
        <div class="contact-form-wrapper">
          <form class="contact-form needs-validation" novalidate>
            <div class="mb-4">
              <label for="name" class="form-label fw-bold">Full Name</label>
              <input type="text" class="form-control form-input" id="name" name="name" placeholder="John Doe" required>
              <div class="form-error-message"></div>
            </div>
            <div class="mb-4">
              <label for="email" class="form-label fw-bold">Email Address</label>
              <input type="email" class="form-control form-input" id="email" name="email" placeholder="john@example.com" required>
              <div class="form-error-message"></div>
            </div>
            <div class="mb-4">
              <label for="message" class="form-label fw-bold">Message</label>
              <textarea class="form-control form-input" id="message" name="message" rows="5" placeholder="Tell us about your business..." required></textarea>
              <div class="form-error-message"></div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg w-100">
              <i class="fas fa-paper-plane me-2"></i>Send Message
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="footer-section py-5 bg-dark text-white">
  <div class="container">
    <div class="row g-4 mb-5 animate-on-scroll">
      <div class="col-lg-3 col-md-6">
        <h6 class="fw-bold mb-3">About QuickPOS</h6>
        <p class="text-muted small">
          QuickPOS is a modern, cloud-based point of sale system designed for businesses of all sizes.
        </p>
      </div>
      <div class="col-lg-3 col-md-6">
        <h6 class="fw-bold mb-3">Product</h6>
        <ul class="list-unstyled text-muted small">
          <li class="py-2"><a href="#" class="text-decoration-none text-muted">Features</a></li>
          <li class="py-2"><a href="#" class="text-decoration-none text-muted">Pricing</a></li>
          <li class="py-2"><a href="#" class="text-decoration-none text-muted">Security</a></li>
          <li class="py-2"><a href="#" class="text-decoration-none text-muted">Status</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6">
        <h6 class="fw-bold mb-3">Company</h6>
        <ul class="list-unstyled text-muted small">
          <li class="py-2"><a href="#" class="text-decoration-none text-muted">About</a></li>
          <li class="py-2"><a href="#" class="text-decoration-none text-muted">Blog</a></li>
          <li class="py-2"><a href="#" class="text-decoration-none text-muted">Careers</a></li>
          <li class="py-2"><a href="#" class="text-decoration-none text-muted">Contact</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6">
        <h6 class="fw-bold mb-3">Follow Us</h6>
        <div class="social-links">
          <a href="#" class="social-link"><i class="fab fa-facebook"></i></a>
          <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
          <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
          <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>
    <hr class="bg-secondary">
    <div class="row align-items-center py-3">
      <div class="col-md-6 text-center text-md-start">
        <p class="mb-0 text-muted small">&copy; 2025 QuickPOS. All rights reserved.</p>
      </div>
      <div class="col-md-6 text-center text-md-end">
        <ul class="list-unstyled d-flex justify-content-center justify-content-md-end gap-3 mb-0">
          <li><a href="#" class="text-muted text-decoration-none small">Privacy Policy</a></li>
          <li><a href="#" class="text-muted text-decoration-none small">Terms of Service</a></li>
          <li><a href="#" class="text-muted text-decoration-none small">Cookie Policy</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>

<!-- SCROLL TO TOP BUTTON -->
<button id="scrollToTop" class="scroll-to-top">
  <i class="fas fa-arrow-up"></i>
</button>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
<script src="../assets/js/script.js"></script>

</body>
</html>