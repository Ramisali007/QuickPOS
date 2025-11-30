document.addEventListener('DOMContentLoaded', () => {
  // Navbar Scroll Effect
  const navbar = document.querySelector('.navbar-premium');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  });

  // Intersection Observer for Scroll Animations
  const observerOptions = {
    root: null,
    rootMargin: '0px',
    threshold: 0.1
  };

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.animationPlayState = 'running';
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);

  document.querySelectorAll('.animate-on-scroll').forEach((el) => {
    el.style.animationPlayState = 'paused'; // Pause initially
    observer.observe(el);
  });

  // Counter Animation
  const counters = document.querySelectorAll('.counter');
  const counterObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const target = +entry.target.getAttribute('data-target');
        const duration = 2000; // 2 seconds
        const increment = target / (duration / 16); // 60fps

        let current = 0;
        const updateCounter = () => {
          current += increment;
          if (current < target) {
            entry.target.textContent = Math.ceil(current);
            requestAnimationFrame(updateCounter);
          } else {
            entry.target.textContent = target;
            if(target > 100) entry.target.textContent += '+'; // Add + for big numbers
          }
        };
        updateCounter();
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);

  counters.forEach(counter => counterObserver.observe(counter));

  // Smooth Scroll for Anchor Links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        target.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });

  // Pricing Toggle
  const pricingToggle = document.getElementById('pricingToggle');
  if (pricingToggle) {
    pricingToggle.addEventListener('change', function() {
      const monthlyPrices = document.querySelectorAll('.monthly-price');
      const annualPrices = document.querySelectorAll('.annual-price');
      
      if (this.checked) {
        monthlyPrices.forEach(el => el.style.display = 'none');
        annualPrices.forEach(el => el.style.display = 'block');
      } else {
        monthlyPrices.forEach(el => el.style.display = 'block');
        annualPrices.forEach(el => el.style.display = 'none');
      }
    });
  }
  
  // Scroll to Top Button
  const scrollToTopBtn = document.getElementById('scrollToTop');
  if (scrollToTopBtn) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 300) {
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
});
