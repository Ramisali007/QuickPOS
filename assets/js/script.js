// DOM Ready
document.addEventListener('DOMContentLoaded', function() {
  initializeAnimations();
  initializeNavbar();
  initializeScrollButtons();
  initializeContactForm();
  initializeScrollAnimations();
  initializeStatsCounter();
  initializeParallax();
  initializeCardHoverEffects();
  initializeCounterAnimation();
  initializeButtonRipple();
  initializeScrollProgress();
  initializePricingToggle();
});

// Pricing Toggle (Monthly/Annual)
function initializePricingToggle() {
  const toggle = document.getElementById('pricingToggle');
  if (!toggle) return;

  toggle.addEventListener('change', function() {
    const monthlyPrices = document.querySelectorAll('.monthly-price');
    const annualPrices = document.querySelectorAll('.annual-price');

    if (this.checked) {
      monthlyPrices.forEach(el => el.style.display = 'none');
      annualPrices.forEach(el => el.style.display = 'inline');
    } else {
      monthlyPrices.forEach(el => el.style.display = 'inline');
      annualPrices.forEach(el => el.style.display = 'none');
    }
  });
}

// Initialize Animations
function initializeAnimations() {
  const animatedElements = document.querySelectorAll('.animate__animated');
  animatedElements.forEach(el => {
    el.style.opacity = '1';
  });
}

// Navbar Scroll Effect
function initializeNavbar() {
  const navbar = document.querySelector('.navbar');
  const navLinks = document.querySelectorAll('.nav-link');
  
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      navbar.classList.add('scrolled');
      navbar.style.boxShadow = '0 8px 32px rgba(102, 126, 234, 0.15)';
    } else {
      navbar.classList.remove('scrolled');
      navbar.style.boxShadow = 'none';
    }
  });

  navLinks.forEach(link => {
    link.addEventListener('click', function(e) {
      e.preventDefault();
      
      const targetId = this.getAttribute('href');
      const targetSection = document.querySelector(targetId);
      
      if (targetSection) {
        const offsetTop = targetSection.offsetTop - 80;
        window.scrollTo({
          top: offsetTop,
          behavior: 'smooth'
        });
        
        const navbarCollapse = document.querySelector('.navbar-collapse');
        if (navbarCollapse.classList.contains('show')) {
          document.querySelector('.navbar-toggler').click();
        }
      }
    });
  });
}

// Scroll to Top Button
function initializeScrollButtons() {
  const scrollToTopBtn = document.getElementById('scrollToTop');
  
  if (!scrollToTopBtn) return;
  
  window.addEventListener('scroll', () => {
    if (window.scrollY > 500) {
      scrollToTopBtn.classList.add('show');
    } else {
      scrollToTopBtn.classList.remove('show');
    }
  });
  
  scrollToTopBtn.addEventListener('click', () => {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });
}

// Contact Form Handling
function initializeContactForm() {
  const contactForm = document.querySelector('.contact-form');
  
  if (!contactForm) return;
  
  contactForm.addEventListener('submit', async function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    const submitBtn = this.querySelector('button[type="submit"]');
    const originalText = submitBtn.textContent;
    
    try {
      submitBtn.disabled = true;
      submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Sending...';
      
      const response = await fetch('contact.php', {
        method: 'POST',
        body: formData
      });
      
      const result = await response.json();
      
      if (result.success) {
        showSuccessMessage('Message sent successfully!');
        this.reset();
        setTimeout(() => {
          window.location.href = result.redirect;
        }, 1500);
      } else {
        showErrorMessages(result.errors);
      }
    } catch (error) {
      showErrorAlert('An error occurred. Please try again.');
    } finally {
      submitBtn.disabled = false;
      submitBtn.textContent = originalText;
    }
  });
  
  const inputs = contactForm.querySelectorAll('.form-input');
  inputs.forEach(input => {
    input.addEventListener('blur', function() {
      validateField(this);
    });
    
    input.addEventListener('focus', function() {
      clearError(this);
    });
  });
}

// Validate Form Field
function validateField(field) {
  const errorMsg = field.nextElementSibling;
  let isValid = true;
  let message = '';
  
  if (field.name === 'email') {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    isValid = emailRegex.test(field.value);
    message = 'Invalid email address';
  } else if (field.value.trim() === '') {
    isValid = false;
    message = `${field.name.charAt(0).toUpperCase() + field.name.slice(1)} is required`;
  }
  
  if (!isValid) {
    field.classList.add('error');
    if (errorMsg && errorMsg.classList.contains('form-error-message')) {
      errorMsg.textContent = message;
      errorMsg.style.display = 'block';
    }
  } else {
    field.classList.remove('error');
    if (errorMsg && errorMsg.classList.contains('form-error-message')) {
      errorMsg.style.display = 'none';
    }
  }
  
  return isValid;
}

// Clear Error
function clearError(field) {
  field.classList.remove('error');
  const errorMsg = field.nextElementSibling;
  if (errorMsg && errorMsg.classList.contains('form-error-message')) {
    errorMsg.style.display = 'none';
  }
}

// Show Error Messages
function showErrorMessages(errors) {
  Object.keys(errors).forEach(fieldName => {
    const field = document.querySelector(`[name="${fieldName}"]`);
    if (field) {
      field.classList.add('error');
      const errorMsg = field.nextElementSibling;
      if (errorMsg && errorMsg.classList.contains('form-error-message')) {
        errorMsg.textContent = errors[fieldName];
        errorMsg.style.display = 'block';
      }
    }
  });
}

// Show Success Message
function showSuccessMessage(message) {
  const alert = document.createElement('div');
  alert.className = 'alert alert-success alert-dismissible fade show';
  alert.style.cssText = `
    position: fixed;
    top: 20px;
    right: 20px;
    z-index: 9999;
    animation: slideInRight 0.5s ease-out;
    max-width: 400px;
  `;
  alert.innerHTML = `
    ${message}
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  `;
  document.body.appendChild(alert);
  
  setTimeout(() => {
    alert.remove();
  }, 5000);
}

// Show Error Alert
function showErrorAlert(message) {
  const alert = document.createElement('div');
  alert.className = 'alert alert-danger alert-dismissible fade show';
  alert.style.cssText = `
    position: fixed;
    top: 20px;
    right: 20px;
    z-index: 9999;
    animation: slideInRight 0.5s ease-out;
    max-width: 400px;
  `;
  alert.innerHTML = `
    ${message}
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  `;
  document.body.appendChild(alert);
  
  setTimeout(() => {
    alert.remove();
  }, 5000);
}

// Scroll Animations
function initializeScrollAnimations() {
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -100px 0px'
  };
  
  const observer = new IntersectionObserver(function(entries) {
    entries.forEach((entry, index) => {
      if (entry.isIntersecting) {
        entry.target.style.animation = `fadeInUp 0.8s ease-out ${index * 0.1}s forwards`;
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);
  
  document.querySelectorAll('.animate-on-scroll').forEach(el => {
    el.style.opacity = '0';
    observer.observe(el);
  });
}

// Stats Counter Animation
function initializeStatsCounter() {
  const statNumbers = document.querySelectorAll('.stat-number');
  let hasAnimated = false;
  
  const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
      if (entry.isIntersecting && !hasAnimated) {
        hasAnimated = true;
        statNumbers.forEach(stat => {
          animateCounter(stat);
        });
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });
  
  if (statNumbers.length > 0) {
    const statsSection = statNumbers[0].closest('.stats-section');
    if (statsSection) {
      observer.observe(statsSection);
    }
  }
}

// Animate Counter
function animateCounter(element) {
  const finalValue = element.textContent;
  const numericValue = parseInt(finalValue.replace(/[^0-9]/g, ''));
  const increment = numericValue / 100;
  let currentValue = 0;
  
  const timer = setInterval(() => {
    currentValue += increment;
    if (currentValue >= numericValue) {
      element.textContent = finalValue;
      clearInterval(timer);
    } else {
      if (finalValue.includes('$')) {
        element.textContent = '$' + Math.floor(currentValue) + 'M+';
      } else if (finalValue.includes('%')) {
        element.textContent = (currentValue / 1000).toFixed(1) + '%';
      } else {
        element.textContent = Math.floor(currentValue) + '+';
      }
    }
  }, 20);
}

// ===== PARALLAX EFFECT =====
function initializeParallax() {
  window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;
    const parallaxElements = document.querySelectorAll('[data-parallax]');
    
    parallaxElements.forEach(element => {
      const speed = element.getAttribute('data-parallax');
      element.style.transform = `translateY(${scrolled * speed}px)`;
    });

    const fadeElements = document.querySelectorAll('[data-fade]');
    fadeElements.forEach(element => {
      const elementTop = element.getBoundingClientRect().top;
      const windowHeight = window.innerHeight;
      
      if (elementTop < windowHeight - 100) {
        element.classList.add('fade-in');
      }
    });
  });
}

// ===== CARD HOVER EFFECTS =====
function initializeCardHoverEffects() {
  const cards = document.querySelectorAll('.card');
  cards.forEach(card => {
    card.addEventListener('mouseenter', function() {
      this.style.transform = 'translateY(-12px) scale(1.02)';
      this.style.boxShadow = '0 20px 40px rgba(102, 126, 234, 0.3)';
    });

    card.addEventListener('mouseleave', function() {
      this.style.transform = 'translateY(0) scale(1)';
      this.style.boxShadow = '0 10px 30px rgba(0, 0, 0, 0.1)';
    });
  });
}

// ===== COUNTER ANIMATION =====
function initializeCounterAnimation() {
  const counters = document.querySelectorAll('.counter');
  const speed = 200;

  const runCounter = (counter) => {
    const target = +counter.getAttribute('data-target');
    const increment = target / speed;
    let count = 0;

    const updateCount = () => {
      count += increment;
      if (count < target) {
        counter.innerText = Math.ceil(count) + '+';
        setTimeout(updateCount, 10);
      } else {
        counter.innerText = target + '+';
      }
    };

    updateCount();
  };

  const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        runCounter(entry.target);
        counterObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });

  counters.forEach(counter => counterObserver.observe(counter));
}

// ===== BUTTON RIPPLE EFFECT =====
function initializeButtonRipple() {
  document.querySelectorAll('.btn').forEach(button => {
    button.addEventListener('click', function(e) {
      const ripple = document.createElement('span');
      const rect = this.getBoundingClientRect();
      const size = Math.max(rect.width, rect.height);
      const x = e.clientX - rect.left - size / 2;
      const y = e.clientY - rect.top - size / 2;

      ripple.style.width = ripple.style.height = size + 'px';
      ripple.style.left = x + 'px';
      ripple.style.top = y + 'px';
      ripple.classList.add('ripple');

      if (!this.style.position || this.style.position === 'static') {
        this.style.position = 'relative';
        this.style.overflow = 'hidden';
      }

      this.appendChild(ripple);

      setTimeout(() => ripple.remove(), 600);
    });
  });
}

// ===== SCROLL PROGRESS BAR =====
function initializeScrollProgress() {
  const progressBar = document.querySelector('.scroll-progress');
  if (!progressBar) return;

  window.addEventListener('scroll', () => {
    const scrollTop = window.scrollY;
    const docHeight = document.documentElement.scrollHeight - window.innerHeight;
    const scrollPercent = (scrollTop / docHeight) * 100;
    
    progressBar.style.width = scrollPercent + '%';
  });
}

// Add CSS animations dynamically
const styleSheet = document.createElement('style');
styleSheet.textContent = `
  @keyframes slideInRight {
    from {
      opacity: 0;
      transform: translateX(100px);
    }
    to {
      opacity: 1;
      transform: translateX(0);
    }
  }

  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(30px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @keyframes float {
    0%, 100% {
      transform: translateY(0px);
    }
    50% {
      transform: translateY(-20px);
    }
  }

  @keyframes ripple {
    from {
      opacity: 1;
      transform: scale(0);
    }
    to {
      opacity: 0;
      transform: scale(1);
    }
  }

  .ripple {
    position: absolute;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.6);
    animation: ripple 0.6s ease-out;
    pointer-events: none;
  }

  .form-input.error {
    border-color: #f56565 !important;
    background: rgba(245, 101, 101, 0.05);
  }

  .form-input.error:focus {
    box-shadow: 0 0 0 4px rgba(245, 101, 101, 0.1);
  }

  .fade-in {
    opacity: 1 !important;
    animation: fadeInUp 0.8s ease-out;
  }

  .page-loaded {
    opacity: 1;
  }

  .scroll-progress {
    position: fixed;
    top: 0;
    left: 0;
    height: 3px;
    background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
    width: 0%;
    z-index: 9999;
    transition: width 0.1s ease;
  }
`;
document.head.appendChild(styleSheet);

// Performance optimization
let ticking = false;
window.addEventListener('scroll', () => {
  if (!ticking) {
    window.requestAnimationFrame(() => {
      ticking = false;
    });
    ticking = true;
  }
});