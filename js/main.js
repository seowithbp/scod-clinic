/**
 * SCOD Website - Main JavaScript
 * Handles: Navbar scroll, Mobile menu, Dropdowns, Modals, Carousels, Accordions, Observer animations
 */

document.addEventListener('DOMContentLoaded', function () {

  // ===================================
  // Navbar Scroll Effect
  // ===================================
  const navbar = document.getElementById('navbar');
  const isHomePage = document.body.classList.contains('home-page');

  function handleNavbarScroll() {
    if (!navbar) return;

    const scrolled = window.scrollY > 20;

    if (isHomePage) {
      if (scrolled) {
        navbar.classList.remove('navbar-transparent');
        navbar.classList.add('navbar-solid');
        navbar.querySelectorAll('.nav-link').forEach(link => {
          link.classList.remove('text-white', 'hover:text-blue-200');
          link.classList.add('text-gray-700', 'hover:text-scod');
        });
        const logo = navbar.querySelector('.nav-logo');
        if (logo) logo.classList.remove('brightness-0', 'invert');
        const ctaBtn = navbar.querySelector('.nav-cta');
        if (ctaBtn) {
          ctaBtn.classList.remove('bg-white', 'text-scod');
          ctaBtn.classList.add('bg-scod', 'text-white');
        }
      } else {
        navbar.classList.add('navbar-transparent');
        navbar.classList.remove('navbar-solid');
        navbar.querySelectorAll('.nav-link').forEach(link => {
          link.classList.add('text-white', 'hover:text-blue-200');
          link.classList.remove('text-gray-700', 'hover:text-scod');
        });
        const logo = navbar.querySelector('.nav-logo');
        if (logo) logo.classList.add('brightness-0', 'invert');
        const ctaBtn = navbar.querySelector('.nav-cta');
        if (ctaBtn) {
          ctaBtn.classList.add('bg-white', 'text-scod');
          ctaBtn.classList.remove('bg-scod', 'text-white');
        }
      }
    }
  }

  window.addEventListener('scroll', handleNavbarScroll);
  handleNavbarScroll(); // Initial call

  // ===================================
  // Mobile Menu Toggle
  // ===================================
  const mobileMenuBtn = document.getElementById('mobile-menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  const mobileOverlay = document.getElementById('mobile-overlay');
  const menuIcon = document.getElementById('menu-icon');
  const closeIcon = document.getElementById('close-icon');

  function toggleMobileMenu() {
    const isOpen = mobileMenu.classList.contains('active');

    if (isOpen) {
      mobileMenu.classList.remove('active');
      mobileOverlay.classList.add('hidden');
      menuIcon.classList.remove('hidden');
      closeIcon.classList.add('hidden');
      document.body.style.overflow = '';
    } else {
      mobileMenu.classList.add('active');
      mobileOverlay.classList.remove('hidden');
      menuIcon.classList.add('hidden');
      closeIcon.classList.remove('hidden');
      document.body.style.overflow = 'hidden';
    }
  }

  if (mobileMenuBtn) {
    mobileMenuBtn.addEventListener('click', toggleMobileMenu);
  }

  if (mobileOverlay) {
    mobileOverlay.addEventListener('click', toggleMobileMenu);
  }

  // ===================================
  // Mobile Submenu Accordions
  // ===================================
  const mobileAccordions = document.querySelectorAll('.mobile-accordion-btn');

  mobileAccordions.forEach(btn => {
    btn.addEventListener('click', function () {
      const submenu = this.nextElementSibling;
      const icon = this.querySelector('.accordion-icon');

      // Close all other submenus
      mobileAccordions.forEach(otherBtn => {
        if (otherBtn !== this) {
          const otherSubmenu = otherBtn.nextElementSibling;
          const otherIcon = otherBtn.querySelector('.accordion-icon');
          if (otherSubmenu) otherSubmenu.classList.remove('active');
          if (otherIcon) otherIcon.classList.remove('rotate-180');
        }
      });

      // Toggle current submenu
      if (submenu) submenu.classList.toggle('active');
      if (icon) icon.classList.toggle('rotate-180');
    });
  });

  // ===================================
  // Desktop Dropdown Menus
  // ===================================
  const dropdowns = document.querySelectorAll('.dropdown');

  dropdowns.forEach(dropdown => {
    dropdown.addEventListener('mouseenter', function () {
      this.classList.add('active');
    });

    dropdown.addEventListener('mouseleave', function () {
      this.classList.remove('active');
    });
  });

  // ===================================
  // Service Tabs
  // ===================================
  const serviceTabs = document.querySelectorAll('.service-tab');
  const serviceContents = document.querySelectorAll('.service-content');

  serviceTabs.forEach((tab, index) => {
    tab.addEventListener('click', function () {
      // Remove active from all tabs and contents
      serviceTabs.forEach(t => t.classList.remove('bg-scod', 'text-white', 'shadow-md', 'scale-105'));
      serviceTabs.forEach(t => t.classList.add('bg-transparent', 'text-gray-600'));
      serviceContents.forEach(c => c.classList.remove('active'));

      // Add active to clicked tab
      this.classList.add('bg-scod', 'text-white', 'shadow-md', 'scale-105');
      this.classList.remove('bg-transparent', 'text-gray-600');

      // Show corresponding content
      const content = document.getElementById(`service-content-${index}`);
      if (content) content.classList.add('active');
    });
  });

  // ===================================
  // Why Choose Us Accordion
  // ===================================
  const whyChooseItems = document.querySelectorAll('.why-choose-item');

  whyChooseItems.forEach((item, index) => {
    item.addEventListener('click', function () {
      const content = this.querySelector('.accordion-content');
      const allContents = document.querySelectorAll('.why-choose-item .accordion-content');
      const allItems = document.querySelectorAll('.why-choose-item');

      // Close all
      allContents.forEach(c => c.classList.remove('active'));
      allItems.forEach(i => i.classList.remove('active'));

      // Open this one
      if (content) content.classList.add('active');
      this.classList.add('active');
    });
  });

  // ===================================
  // Video Modal
  // ===================================
  const videoModal = document.getElementById('video-modal');
  const videoModalClose = document.getElementById('video-modal-close');
  const videoIframe = document.getElementById('video-iframe');
  const videoTriggers = document.querySelectorAll('[data-video-id]');

  function openVideoModal(videoId) {
    if (videoModal && videoIframe) {
      videoIframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
      videoModal.classList.add('active');
      document.body.style.overflow = 'hidden';
    }
  }

  function closeVideoModal() {
    if (videoModal && videoIframe) {
      videoModal.classList.remove('active');
      videoIframe.src = '';
      document.body.style.overflow = '';
    }
  }

  videoTriggers.forEach(trigger => {
    trigger.addEventListener('click', function () {
      const videoId = this.dataset.videoId;
      if (videoId) openVideoModal(videoId);
    });
  });

  if (videoModalClose) {
    videoModalClose.addEventListener('click', closeVideoModal);
  }

  if (videoModal) {
    videoModal.addEventListener('click', function (e) {
      if (e.target === this) closeVideoModal();
    });
  }

  // ===================================
  // Image Modal
  // ===================================
  const imageModal = document.getElementById('image-modal');
  const imageModalClose = document.getElementById('image-modal-close');
  const imageModalImg = document.getElementById('image-modal-img');
  const imageTriggers = document.querySelectorAll('[data-image-src]');

  function openImageModal(imageSrc) {
    if (imageModal && imageModalImg) {
      imageModalImg.src = imageSrc;
      imageModal.classList.add('active');
      document.body.style.overflow = 'hidden';
    }
  }

  function closeImageModal() {
    if (imageModal && imageModalImg) {
      imageModal.classList.remove('active');
      imageModalImg.src = '';
      document.body.style.overflow = '';
    }
  }

  imageTriggers.forEach(trigger => {
    trigger.addEventListener('click', function () {
      const imageSrc = this.dataset.imageSrc;
      if (imageSrc) openImageModal(imageSrc);
    });
  });

  if (imageModalClose) {
    imageModalClose.addEventListener('click', closeImageModal);
  }

  if (imageModal) {
    imageModal.addEventListener('click', function (e) {
      if (e.target === this) closeImageModal();
    });
  }

  // ===================================
  // Testimonial Carousel
  // ===================================
  let testimonialIndex = 1;
  const testimonialCards = document.querySelectorAll('.testimonial-card');
  const testimonialPrev = document.getElementById('testimonial-prev');
  const testimonialNext = document.getElementById('testimonial-next');

  function updateTestimonialCarousel() {
    const length = testimonialCards.length;

    testimonialCards.forEach((card, index) => {
      card.classList.remove('center', 'left', 'right', 'hidden');

      const distance = (index - testimonialIndex + length) % length;

      if (distance === 0) {
        card.classList.add('center');
        card.style.filter = 'blur(0px)';
      } else if (distance === 1 || distance === -(length - 1)) {
        card.classList.add('right');
        card.style.filter = 'blur(1px) brightness(0.7)';
      } else if (distance === length - 1 || distance === -1) {
        card.classList.add('left');
        card.style.filter = 'blur(1px) brightness(0.7)';
      } else {
        card.classList.add('hidden');
      }
    });
  }

  if (testimonialPrev) {
    testimonialPrev.addEventListener('click', function () {
      testimonialIndex = (testimonialIndex - 1 + testimonialCards.length) % testimonialCards.length;
      updateTestimonialCarousel();
    });
  }

  if (testimonialNext) {
    testimonialNext.addEventListener('click', function () {
      testimonialIndex = (testimonialIndex + 1) % testimonialCards.length;
      updateTestimonialCarousel();
    });
  }

  updateTestimonialCarousel();

  // ===================================
  // Patient Transformations Carousel
  // ===================================
  let transformIndex = 0;
  const transformData = document.querySelectorAll('.transform-slide');
  const transformPrev = document.getElementById('transform-prev');
  const transformNext = document.getElementById('transform-next');

  function updateTransformCarousel() {
    transformData.forEach((slide, index) => {
      if (index === transformIndex) {
        slide.classList.remove('hidden');
        slide.classList.add('animate-fade-in');
      } else {
        slide.classList.add('hidden');
        slide.classList.remove('animate-fade-in');
      }
    });
  }

  if (transformPrev) {
    transformPrev.addEventListener('click', function () {
      transformIndex = (transformIndex - 1 + transformData.length) % transformData.length;
      updateTransformCarousel();
    });
  }

  if (transformNext) {
    transformNext.addEventListener('click', function () {
      transformIndex = (transformIndex + 1) % transformData.length;
      updateTransformCarousel();
    });
  }

  updateTransformCarousel();

  // ===================================
  // Medical Awareness Slider
  // ===================================
  let awarenessIndex = 0;
  const awarenessSlider = document.getElementById('awareness-slider');
  const awarenessPrev = document.getElementById('awareness-prev');
  const awarenessNext = document.getElementById('awareness-next');
  const awarenessItems = document.querySelectorAll('.awareness-item');

  function getItemsPerView() {
    if (window.innerWidth >= 1024) return 3;
    if (window.innerWidth >= 768) return 2;
    return 1;
  }

  function updateAwarenessSlider() {
    if (!awarenessSlider) return;
    const itemsPerView = getItemsPerView();
    const maxIndex = Math.max(0, awarenessItems.length - itemsPerView);
    awarenessIndex = Math.min(awarenessIndex, maxIndex);

    const translateX = -(awarenessIndex * (100 / awarenessItems.length));
    awarenessSlider.style.transform = `translateX(${translateX}%)`;
  }

  if (awarenessPrev) {
    awarenessPrev.addEventListener('click', function () {
      awarenessIndex = Math.max(0, awarenessIndex - 1);
      updateAwarenessSlider();
    });
  }

  if (awarenessNext) {
    awarenessNext.addEventListener('click', function () {
      const itemsPerView = getItemsPerView();
      const maxIndex = Math.max(0, awarenessItems.length - itemsPerView);
      awarenessIndex = Math.min(maxIndex, awarenessIndex + 1);
      if (awarenessIndex > maxIndex) awarenessIndex = 0;
      updateAwarenessSlider();
    });
  }

  window.addEventListener('resize', updateAwarenessSlider);
  updateAwarenessSlider();

  // ===================================
  // Video Play/Pause Toggle (About Section)
  // ===================================
  const videoPlayer = document.getElementById('about-video');
  const playBtn = document.getElementById('video-play-btn');
  const playIcon = document.getElementById('play-icon');
  const pauseIcon = document.getElementById('pause-icon');
  const rotatingText = document.getElementById('rotating-text');

  if (videoPlayer && playBtn) {
    function toggleVideo() {
      if (videoPlayer.paused) {
        videoPlayer.play();
        if (playIcon) playIcon.classList.add('hidden');
        if (pauseIcon) pauseIcon.classList.remove('hidden');
        if (rotatingText) rotatingText.classList.add('animate-spin-slow');
      } else {
        videoPlayer.pause();
        if (playIcon) playIcon.classList.remove('hidden');
        if (pauseIcon) pauseIcon.classList.add('hidden');
        if (rotatingText) rotatingText.classList.remove('animate-spin-slow');
      }
    }

    playBtn.addEventListener('click', toggleVideo);
    videoPlayer.addEventListener('click', toggleVideo);
  }

  // ===================================
  // Intersection Observer for Animations
  // ===================================
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        // Add the animation class based on data attribute
        const animationType = entry.target.dataset.animation;
        if (animationType) {
          entry.target.classList.add(`animate-${animationType}`);
        }
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);

  document.querySelectorAll('.observe-animate').forEach(el => {
    observer.observe(el);
  });

  // ===================================
  // Close modals on Escape key
  // ===================================
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
      closeVideoModal();
      closeImageModal();
      // Close mobile menu if open
      if (mobileMenu && mobileMenu.classList.contains('active')) {
        toggleMobileMenu();
      }
    }
  });

  // ===================================
  // Active Link Highlighter
  // ===================================
  function setActiveLink() {
    if (document.body.classList.contains('home-page')) return;

    // Normalize path: /index.html or /index.php -> /, /about.html -> /about.php
    // We normalize everything to use .php extension internally for comparison, or just strip extension?
    // Stripping extension is safer. /about.html -> /about. /about.php -> /about.
    const normalize = (p) => p.replace(/\/index\.(html|php)$/, '/').replace(/\.(html|php)$/, '').replace(/\/$/, '');

    // However, if we strip extension, /about.html and /about.php match.
    // currentPath might be /about.php.
    const currentPath = normalize(window.location.pathname);

    // Select links
    const links = document.querySelectorAll('.nav-link, .mobile-menu a, .dropdown-menu a');

    links.forEach(link => {
      const href = link.getAttribute('href');
      if (!href || href === '#' || href.startsWith('tel:') || href.startsWith('mailto:')) return;

      let linkPath;
      try {
        linkPath = new URL(link.href).pathname;
      } catch (e) { return; }

      if (normalize(linkPath) === currentPath) {
        link.classList.add('text-scod', 'font-bold');
        link.classList.remove('text-gray-700', 'text-white');

        // Highlight parent dropdown
        const parentDropdown = link.closest('.dropdown');
        if (parentDropdown) {
          const btn = parentDropdown.querySelector('button') || parentDropdown.querySelector('.nav-link');
          if (btn) {
            btn.classList.add('text-scod', 'font-bold');
            btn.classList.remove('text-gray-700', 'text-white');
          }
        }

        // Highlight mobile accordion parent
        const mobileSubmenu = link.closest('.mobile-submenu');
        if (mobileSubmenu) {
          const accordionBtn = mobileSubmenu.previousElementSibling;
          if (accordionBtn) {
            const span = accordionBtn.querySelector('span');
            if (span) span.classList.add('text-scod');
          }
        }
      }
    });
  }

  setActiveLink();

});
