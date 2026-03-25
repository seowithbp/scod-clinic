/**
 * SCOD Components Loader
 * This script dynamically loads the header and footer components
 * and handles path adjustments for pages in subdirectories
 */

(function() {
  'use strict';

  // Determine if we're in a subdirectory
  const pathParts = window.location.pathname.split('/');
  const isInSubdir = pathParts.includes('services');
  const basePath = isInSubdir ? '../' : '';

  /**
   * Load HTML component into a placeholder element
   */
  async function loadComponent(elementId, componentPath) {
    const element = document.getElementById(elementId);
    if (!element) return;

    try {
      const response = await fetch(basePath + componentPath);
      if (!response.ok) throw new Error(`Failed to load ${componentPath}`);
      
      let html = await response.text();
      
      // Adjust paths for subdirectory pages
      if (isInSubdir) {
        // Fix all href and src attributes that start with relative paths
        html = html.replace(/href="(?!http|#|tel:|mailto:)([^"]+)"/g, (match, path) => {
          if (path.startsWith('../') || path.startsWith('/')) return match;
          return `href="../${path}"`;
        });
        html = html.replace(/src="(?!http)([^"]+)"/g, (match, path) => {
          if (path.startsWith('../') || path.startsWith('/')) return match;
          return `src="../${path}"`;
        });
      }
      
      element.innerHTML = html;
      
      // Re-initialize feather icons after loading
      if (typeof feather !== 'undefined') {
        feather.replace();
      }
      
      // Initialize mobile menu functionality
      initMobileMenu();
      
      // Initialize navbar scroll behavior
      initNavbarScroll();
      
      // Set active nav item based on current page
      setActiveNavItem();
      
    } catch (error) {
      console.error('Error loading component:', error);
    }
  }

  /**
   * Initialize mobile menu toggle functionality
   */
  function initMobileMenu() {
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileOverlay = document.getElementById('mobile-overlay');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');

    if (!mobileMenuBtn || !mobileMenu) return;

    let isOpen = false;

    function toggleMenu() {
      isOpen = !isOpen;
      mobileMenu.classList.toggle('active', isOpen);
      mobileOverlay?.classList.toggle('hidden', !isOpen);
      menuIcon?.classList.toggle('hidden', isOpen);
      closeIcon?.classList.toggle('hidden', !isOpen);
      document.body.style.overflow = isOpen ? 'hidden' : '';
    }

    mobileMenuBtn.addEventListener('click', toggleMenu);
    mobileOverlay?.addEventListener('click', toggleMenu);

    // Mobile accordion buttons
    const accordionBtns = document.querySelectorAll('.mobile-accordion-btn');
    accordionBtns.forEach(btn => {
      btn.addEventListener('click', function() {
        const submenu = this.nextElementSibling;
        const icon = this.querySelector('.accordion-icon');
        const isExpanded = submenu.style.maxHeight && submenu.style.maxHeight !== '0px';

        // Close all other submenus
        document.querySelectorAll('.mobile-submenu').forEach(sm => {
          sm.style.maxHeight = '0px';
          const smIcon = sm.previousElementSibling?.querySelector('.accordion-icon');
          if (smIcon) smIcon.style.transform = 'rotate(0deg)';
        });

        // Toggle current submenu
        if (!isExpanded) {
          submenu.style.maxHeight = submenu.scrollHeight + 'px';
          if (icon) icon.style.transform = 'rotate(45deg)';
        }
      });
    });

    // Initialize all submenus as closed
    document.querySelectorAll('.mobile-submenu').forEach(sm => {
      sm.style.maxHeight = '0px';
      sm.style.transition = 'max-height 0.3s ease-out';
    });
  }

  /**
   * Initialize navbar scroll behavior (transparent to solid)
   */
  function initNavbarScroll() {
    const navbar = document.getElementById('navbar');
    if (!navbar) return;

    const isHomePage = document.body.classList.contains('home-page');
    const hasTransparent = navbar.dataset.transparent === 'true' && isHomePage;

    function updateNavbar() {
      const scrolled = window.scrollY > 50;

      if (hasTransparent) {
        if (scrolled) {
          navbar.classList.remove('navbar-transparent');
          navbar.classList.add('bg-white', 'shadow-md');
          // Update link colors
          navbar.querySelectorAll('.nav-link').forEach(link => {
            link.classList.remove('text-white', 'hover:text-blue-200');
            link.classList.add('text-gray-700', 'hover:text-scod');
          });
          // Update logo
          const logo = navbar.querySelector('.nav-logo');
          if (logo) logo.classList.remove('brightness-0', 'invert');
          // Update CTA
          const cta = navbar.querySelector('.nav-cta');
          if (cta) {
            cta.classList.remove('bg-white', 'text-scod', 'hover:bg-blue-50');
            cta.classList.add('bg-scod', 'text-white', 'hover:bg-blue-700');
          }
          // Update mobile button
          const mobileBtn = document.getElementById('mobile-menu-btn');
          if (mobileBtn) {
            mobileBtn.classList.remove('text-white');
            mobileBtn.classList.add('text-gray-700');
          }
        } else {
          navbar.classList.add('navbar-transparent');
          navbar.classList.remove('bg-white', 'shadow-md');
          // Update link colors
          navbar.querySelectorAll('.nav-link').forEach(link => {
            link.classList.add('text-white', 'hover:text-blue-200');
            link.classList.remove('text-gray-700', 'hover:text-scod');
          });
          // Update logo
          const logo = navbar.querySelector('.nav-logo');
          if (logo) logo.classList.add('brightness-0', 'invert');
          // Update CTA
          const cta = navbar.querySelector('.nav-cta');
          if (cta) {
            cta.classList.add('bg-white', 'text-scod', 'hover:bg-blue-50');
            cta.classList.remove('bg-scod', 'text-white', 'hover:bg-blue-700');
          }
          // Update mobile button
          const mobileBtn = document.getElementById('mobile-menu-btn');
          if (mobileBtn) {
            mobileBtn.classList.add('text-white');
            mobileBtn.classList.remove('text-gray-700');
          }
        }
      } else {
        // Non-home pages: always solid
        navbar.classList.add('bg-white', 'shadow-md');
        navbar.classList.remove('navbar-transparent');
        navbar.querySelectorAll('.nav-link').forEach(link => {
          link.classList.remove('text-white', 'hover:text-blue-200');
          link.classList.add('text-gray-700', 'hover:text-scod');
        });
        const logo = navbar.querySelector('.nav-logo');
        if (logo) logo.classList.remove('brightness-0', 'invert');
        const cta = navbar.querySelector('.nav-cta');
        if (cta) {
          cta.classList.remove('bg-white', 'text-scod', 'hover:bg-blue-50');
          cta.classList.add('bg-scod', 'text-white', 'hover:bg-blue-700');
        }
        const mobileBtn = document.getElementById('mobile-menu-btn');
        if (mobileBtn) {
          mobileBtn.classList.remove('text-white');
          mobileBtn.classList.add('text-gray-700');
        }
      }
    }

    window.addEventListener('scroll', updateNavbar);
    updateNavbar(); // Initial call
  }

  /**
   * Set active state for current page in navigation
   */
  function setActiveNavItem() {
    const currentPath = window.location.pathname;
    const pageName = currentPath.split('/').pop() || 'index.html';
    
    // Desktop nav links
    document.querySelectorAll('.nav-link, .dropdown-menu a').forEach(link => {
      const href = link.getAttribute('href');
      if (href && (href === pageName || href.endsWith('/' + pageName))) {
        link.classList.add('text-scod', 'font-semibold');
      }
    });

    // Mobile nav links
    document.querySelectorAll('#mobile-menu a').forEach(link => {
      const href = link.getAttribute('href');
      if (href && (href === pageName || href.endsWith('/' + pageName))) {
        link.classList.add('text-scod', 'bg-blue-50');
      }
    });
  }

  /**
   * Initialize components when DOM is ready
   */
  function init() {
    // Load header if placeholder exists
    if (document.getElementById('header-placeholder')) {
      loadComponent('header-placeholder', 'components/header.html');
    }

    // Load footer if placeholder exists
    if (document.getElementById('footer-placeholder')) {
      loadComponent('footer-placeholder', 'components/footer.html');
    }
  }

  // Run initialization
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
