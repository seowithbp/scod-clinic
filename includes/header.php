<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo isset($meta_title) ? $meta_title : 'SCOD Clinic'; ?></title>
    <?php if (isset($meta_description)): ?>
    <meta name="description" content="<?php echo htmlspecialchars($meta_description); ?>">
    <?php endif; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="/assets/scod/favicon/scod-favicon.PNG" type="image/png">
    <link rel="apple-touch-icon" href="/assets/scod/favicon/scod-favicon.PNG">
    <link rel="shortcut icon" href="/assets/scod/favicon/scod-favicon.PNG" type="image/png">

    <!-- Tailwind via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/typography@0.5.10/dist/typography.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: { scod: '#1876AA' },
                    fontFamily: { sans: ['Nunito Sans', 'sans-serif'] }
                }
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/custom.css">
    <link rel="stylesheet" href="/css/blog-content.css">

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    
</head>

<body>


<?php
if (!isset($path_prefix)) {
    $path_prefix = '';
}
if (!isset($is_home)) {
    $is_home = false;
}

// Logic for Transparent Header (Home) vs Solid Header (Others)
$nav_bg_class = $is_home ? 'navbar-transparent' : 'bg-white shadow-md border-b border-gray-100';
$text_class = $is_home ? 'text-white' : 'text-gray-700';
$hover_class = $is_home ? 'hover:text-blue-200' : 'hover:text-scod';
$logo_class = $is_home ? 'brightness-0 invert' : '';
$cta_class = $is_home ? 'bg-white text-scod hover:bg-blue-50' : 'bg-scod text-white hover:bg-blue-700';
$mobile_btn_class = $is_home ? 'text-white' : 'text-gray-700';
?>

<!-- NAVBAR -->
<nav id="navbar" class="fixed top-0 left-0 w-full z-[100] transition-all duration-300 <?php echo $nav_bg_class; ?>">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <a href="/index.php" class="flex items-center z-50">
                <img src="https://brandingpioneers.co.in/scod/Scod-Logo-Big-Size-180x74.webp" alt="SCOD Logo"
                    class="nav-logo h-12 md:h-14 w-auto object-contain transition-all duration-300 <?php echo $logo_class; ?>">
            </a>

            <!-- Desktop Nav -->
            <div class="hidden lg:flex items-center space-x-6">
                <a href="/index.php"
                    class="nav-link relative font-medium <?php echo $text_class . ' ' . $hover_class; ?> transition-colors duration-300">Home</a>

                <!-- About Dropdown -->
                <div class="dropdown relative h-full flex items-center">
                    <button
                        class="nav-link font-medium flex items-center space-x-1 <?php echo $text_class . ' ' . $hover_class; ?> transition-colors duration-300">
                        <span>About</span>
                        <i data-feather="chevron-down" class="w-4 h-4"></i>
                    </button>
                    <div
                        class="dropdown-menu absolute top-full left-0 mt-2 w-64 bg-white rounded-xl shadow-xl border-t-4 border-scod ring-1 ring-black/5 overflow-hidden">
                        <a href="/about.php"
                            class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-scod transition-colors"><i
                                data-feather="user" class="w-4 h-4 mr-3 text-gray-400"></i><span class="text-sm">About
                                Dr.
                                Arush</span></a>
                        <a href="/dr-shivani-sabharwal.php"
                            class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-scod transition-colors"><i
                                data-feather="heart" class="w-4 h-4 mr-3 text-gray-400"></i><span class="text-sm">About
                                Dr.
                                Shivani</span></a>
                        <a href="/about-clinic.php"
                            class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-scod transition-colors"><i
                                data-feather="activity" class="w-4 h-4 mr-3 text-gray-400"></i><span
                                class="text-sm">About SCOD
                                Clinic</span></a>
                    </div>
                </div>

                <!-- Treatments Dropdown -->
                <div class="dropdown relative h-full flex items-center">
                    <button
                        class="nav-link font-medium flex items-center space-x-1 <?php echo $text_class . ' ' . $hover_class; ?> transition-colors duration-300">
                        <span>Treatments</span>
                        <i data-feather="chevron-down" class="w-4 h-4"></i>
                    </button>
                    <div
                        class="dropdown-menu absolute top-full left-0 mt-2 w-72 bg-white rounded-xl shadow-xl border-t-4 border-scod ring-1 ring-black/5 overflow-hidden">
                        <a href="/services/index.php"
                            class="flex items-center px-4 py-3 text-gray-900 font-medium border-b border-gray-100 hover:bg-gray-50 hover:text-scod transition-colors"><i
                                data-feather="activity" class="w-4 h-4 mr-3 text-scod"></i><span class="text-sm">Surgery
                                Overview</span></a>
                        <a href="/services/bariatric-surgery.php"
                            class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-scod transition-colors"><i
                                data-feather="trending-up" class="w-4 h-4 mr-3 text-gray-400"></i><span
                                class="text-sm">Bariatric
                                Surgery</span></a>
                        <a href="/services/laparoscopic-surgery.php"
                            class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-scod transition-colors"><i
                                data-feather="activity" class="w-4 h-4 mr-3 text-gray-400"></i><span
                                class="text-sm">Laparoscopic
                                Surgery</span></a>
                        <a href="/services/body-contouring.php"
                            class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-scod transition-colors"><i
                                data-feather="users" class="w-4 h-4 mr-3 text-gray-400"></i><span class="text-sm">Body
                                Contouring</span></a>
                        <a href="/feel-great-system.php"
                            class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-scod transition-colors"><i
                                data-feather="zap" class="w-4 h-4 mr-3 text-gray-400"></i><span
                                class="text-sm">Plant-Based Nutrition
                                (FGS)</span></a>
                    </div>
                </div>

                <!-- Medical Mgmt Dropdown -->
                <div class="dropdown relative h-full flex items-center">
                    <button
                        class="nav-link font-medium flex items-center space-x-1 <?php echo $text_class . ' ' . $hover_class; ?> transition-colors duration-300">
                        <span>Medical Mgmt</span>
                        <i data-feather="chevron-down" class="w-4 h-4"></i>
                    </button>
                    <div
                        class="dropdown-menu absolute top-full left-0 mt-2 w-80 bg-white rounded-xl shadow-xl border-t-4 border-scod ring-1 ring-black/5 overflow-hidden">
                        <a href="/services/metabolic-surgery.php"
                            class="flex items-center px-4 py-3 text-gray-900 font-medium border-b border-gray-100 hover:bg-gray-50 hover:text-scod transition-colors"><i
                                data-feather="shield" class="w-4 h-4 mr-3 text-scod"></i><span
                                class="text-sm">Metabolic
                                Management</span></a>
                        <a href="/services/weight-loss-injectables.php"
                            class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-scod transition-colors"><i
                                data-feather="activity" class="w-4 h-4 mr-3 text-gray-400"></i><span
                                class="text-sm">Weight Loss
                                Injectables</span></a>
                        <a href="/services/obesity-management.php"
                            class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-scod transition-colors"><i
                                data-feather="heart" class="w-4 h-4 mr-3 text-gray-400"></i><span class="text-sm">Diet &
                                Counselling</span></a>
                        <a href="/services/weight-regain.php"
                            class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-scod transition-colors"><i
                                data-feather="trending-up" class="w-4 h-4 mr-3 text-gray-400"></i><span
                                class="text-sm">Weight Regain
                                Support</span></a>
                    </div>
                </div>

                <!-- International Dropdown -->
                <div class="dropdown relative h-full flex items-center">
                    <button
                        class="nav-link font-medium flex items-center space-x-1 <?php echo $text_class . ' ' . $hover_class; ?> transition-colors duration-300">
                        <span>International</span>
                        <i data-feather="chevron-down" class="w-4 h-4"></i>
                    </button>
                    <div
                        class="dropdown-menu absolute top-full left-0 mt-2 w-72 bg-white rounded-xl shadow-xl border-t-4 border-scod ring-1 ring-black/5 overflow-hidden">
                        <a href="/international-patients.php"
                            class="flex items-center px-4 py-3 text-gray-900 font-medium border-b border-gray-100 hover:bg-gray-50 hover:text-scod transition-colors"><i
                                data-feather="globe" class="w-4 h-4 mr-3 text-scod"></i><span class="text-sm">Overseas
                                Patient
                                Guide</span></a>
                        <a href="/international-bariatric.php"
                            class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-scod transition-colors"><i
                                data-feather="navigation" class="w-4 h-4 mr-3 text-gray-400"></i><span
                                class="text-sm">Bariatric
                                Medical Travel</span></a>
                        <a href="/patient-journey.php"
                            class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-scod transition-colors"><i
                                data-feather="activity" class="w-4 h-4 mr-3 text-gray-400"></i><span
                                class="text-sm">International
                                Patient Journey</span></a>
                    </div>
                </div>

                <!-- Resources Dropdown -->
                <div class="dropdown relative h-full flex items-center">
                    <button
                        class="nav-link font-medium flex items-center space-x-1 <?php echo $text_class . ' ' . $hover_class; ?> transition-colors duration-300">
                        <span>Resources</span>
                        <i data-feather="chevron-down" class="w-4 h-4"></i>
                    </button>
                    <div
                        class="dropdown-menu absolute top-full left-0 mt-2 w-72 bg-white rounded-xl shadow-xl border-t-4 border-scod ring-1 ring-black/5 overflow-hidden">
                        <a href="/resources.php"
                            class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-scod transition-colors"><i
                                data-feather="help-circle" class="w-4 h-4 mr-3 text-gray-400"></i><span
                                class="text-sm">FAQs &
                                Guides</span></a>
                        <a href="/testimonials.php"
                            class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-scod transition-colors"><i
                                data-feather="users" class="w-4 h-4 mr-3 text-gray-400"></i><span class="text-sm">Success
                                Stories</span></a>
                        <a href="/blog/"
                            class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-scod transition-colors"><i
                                data-feather="help-circle" class="w-4 h-4 mr-3 text-gray-400"></i><span
                                class="text-sm">Blog</span></a>
                    </div>
                </div>

                <a href="/contact.php"
                    class="nav-link relative font-medium <?php echo $text_class . ' ' . $hover_class; ?> transition-colors duration-300">Contact</a>
            </div>

            <!-- CTA Button -->
            <div class="hidden lg:flex items-center space-x-4">
                <a href="tel:+918130130489"
                    class="nav-cta flex items-center space-x-2 px-6 py-3 rounded-full font-bold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 <?php echo $cta_class; ?>">
                    <i data-feather="phone" class="w-4 h-4"></i>
                    <span class="text-sm font-bold">Call Now</span>
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn"
                class="lg:hidden p-2 rounded-lg transition-colors z-50 <?php echo $mobile_btn_class; ?>">
                <i id="menu-icon" data-feather="menu" class="w-7 h-7"></i>
                <i id="close-icon" data-feather="x" class="w-7 h-7 hidden"></i>
            </button>
        </div>

        <!-- Mobile Overlay -->
        <div id="mobile-overlay" class="fixed inset-0 bg-black/50 backdrop-blur-sm lg:hidden z-40 hidden"></div>

        <!-- Mobile Menu -->
        <div id="mobile-menu"
            class="mobile-menu lg:hidden absolute top-20 left-0 w-full bg-white shadow-2xl border-t border-gray-100 rounded-b-2xl overflow-hidden max-h-[85vh] overflow-y-auto z-50">
            <div class="px-4 py-6 space-y-2">
                <a href="/index.php"
                    class="block font-bold text-lg px-2 py-2 rounded-lg text-gray-700 hover:text-scod">Home</a>

                <!-- About Accordion -->
                <div class="border-b border-gray-100 pb-2">
                    <button class="mobile-accordion-btn flex items-center justify-between w-full px-2 py-3 text-left">
                        <span class="font-bold text-lg text-gray-700">About</span>
                        <i data-feather="plus" class="accordion-icon w-5 h-5 transition-transform"></i>
                    </button>
                    <div class="mobile-submenu overflow-hidden pl-4 space-y-1 bg-gray-50 rounded-lg mb-2">
                        <a href="/about.php" class="block px-3 py-3 text-gray-600 font-medium">About Dr.
                            Arush</a>
                        <a href="/dr-shivani-sabharwal.php"
                            class="block px-3 py-3 text-gray-600 font-medium">About Dr.
                            Shivani</a>
                        <a href="/about-clinic.php"
                            class="block px-3 py-3 text-gray-600 font-medium">About SCOD Clinic</a>
                    </div>
                </div>

                <!-- Treatments Accordion -->
                <div class="border-b border-gray-100 pb-2">
                    <button class="mobile-accordion-btn flex items-center justify-between w-full px-2 py-3 text-left">
                        <span class="font-bold text-lg text-gray-700">Treatments</span>
                        <i data-feather="plus" class="accordion-icon w-5 h-5 transition-transform"></i>
                    </button>
                    <div class="mobile-submenu overflow-hidden pl-4 space-y-1 bg-gray-50 rounded-lg mb-2">
                        <a href="/services/index.php"
                            class="block px-3 py-3 text-gray-600 font-medium">Surgery Overview</a>
                        <a href="/services/bariatric-surgery.php"
                            class="block px-3 py-3 text-gray-600 font-medium">Bariatric
                            Surgery</a>
                        <a href="/services/laparoscopic-surgery.php"
                            class="block px-3 py-3 text-gray-600 font-medium">Laparoscopic Surgery</a>
                        <a href="/services/body-contouring.php"
                            class="block px-3 py-3 text-gray-600 font-medium">Body
                            Contouring</a>
                        <a href="/feel-great-system.php"
                            class="block px-3 py-3 text-gray-600 font-medium">Plant-Based Nutrition
                            (FGS)</a>
                    </div>
                </div>

                <!-- Medical Mgmt Accordion -->
                <div class="border-b border-gray-100 pb-2">
                    <button class="mobile-accordion-btn flex items-center justify-between w-full px-2 py-3 text-left">
                        <span class="font-bold text-lg text-gray-700">Medical Mgmt</span>
                        <i data-feather="plus" class="accordion-icon w-5 h-5 transition-transform"></i>
                    </button>
                    <div class="mobile-submenu overflow-hidden pl-4 space-y-1 bg-gray-50 rounded-lg mb-2">
                        <a href="/services/metabolic-surgery.php"
                            class="block px-3 py-3 text-gray-600 font-medium">Metabolic
                            Management</a>
                        <a href="/services/weight-loss-injectables.php"
                            class="block px-3 py-3 text-gray-600 font-medium">Weight
                            Loss Injectables</a>
                        <a href="/services/obesity-management.php"
                            class="block px-3 py-3 text-gray-600 font-medium">Diet &
                            Counselling</a>
                        <a href="/services/weight-regain.php"
                            class="block px-3 py-3 text-gray-600 font-medium">Weight Regain
                            Support</a>
                    </div>
                </div>

                <!-- International Accordion -->
                <div class="border-b border-gray-100 pb-2">
                    <button class="mobile-accordion-btn flex items-center justify-between w-full px-2 py-3 text-left">
                        <span class="font-bold text-lg text-gray-700">International</span>
                        <i data-feather="plus" class="accordion-icon w-5 h-5 transition-transform"></i>
                    </button>
                    <div class="mobile-submenu overflow-hidden pl-4 space-y-1 bg-gray-50 rounded-lg mb-2">
                        <a href="/international-patients.php"
                            class="block px-3 py-3 text-gray-600 font-medium">Overseas Patient
                            Guide</a>
                        <a href="/international-bariatric.php"
                            class="block px-3 py-3 text-gray-600 font-medium">Bariatric Medical
                            Travel</a>
                        <a href="/patient-journey.php"
                            class="block px-3 py-3 text-gray-600 font-medium">International Patient
                            Journey</a>
                    </div>
                </div>

                <!-- Resources Accordion -->
                <div class="border-b border-gray-100 pb-2">
                    <button class="mobile-accordion-btn flex items-center justify-between w-full px-2 py-3 text-left">
                        <span class="font-bold text-lg text-gray-700">Resources</span>
                        <i data-feather="plus" class="accordion-icon w-5 h-5 transition-transform"></i>
                    </button>
                    <div class="mobile-submenu overflow-hidden pl-4 space-y-1 bg-gray-50 rounded-lg mb-2">
                        <a href="/resources.php"
                            class="block px-3 py-3 text-gray-600 font-medium">FAQs & Guides</a>
                        <a href="/testimonials.php"
                            class="block px-3 py-3 text-gray-600 font-medium">Success Stories</a>
                    </div>
                </div>

                <a href="/contact.php"
                    class="block font-bold text-lg px-2 py-3 rounded-lg text-gray-700">Contact</a>

                <div class="pt-4">
                    <a href="tel:+918130130489"
                        class="flex items-center justify-center space-x-2 w-full bg-scod text-white py-4 rounded-xl font-bold shadow-lg">
                        <i data-feather="phone" class="w-5 h-5"></i>
                        <span>Call +91 8130130489</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>

    <!-- Mobile Menu & Dropdown Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');

            if (mobileMenuBtn && mobileMenu) {
                mobileMenuBtn.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                });
            }

            // Close mobile menu when clicking outside
            document.addEventListener('click', function(e) {
                if (mobileMenu && !mobileMenu.classList.contains('hidden') &&
                    !mobileMenu.contains(e.target) && !mobileMenuBtn.contains(e.target)) {
                    mobileMenu.classList.add('hidden');
                }
            });

            // Dropdown functionality
            const dropdowns = document.querySelectorAll('.dropdown');
            dropdowns.forEach(dropdown => {
                const btn = dropdown.querySelector('button');
                const menu = dropdown.querySelector('.dropdown-menu');
                if (btn && menu) {
                    let timeout;

                    const showMenu = () => {
                        clearTimeout(timeout);
                        menu.classList.remove('hidden');
                    };

                    const hideMenu = () => {
                        timeout = setTimeout(() => {
                            menu.classList.add('hidden');
                        }, 200);
                    };

                    // Desktop: hover
                    dropdown.addEventListener('mouseenter', showMenu);
                    dropdown.addEventListener('mouseleave', hideMenu);

                    // Mobile: click toggle
                    btn.addEventListener('click', (e) => {
                        e.preventDefault();
                        if (window.innerWidth < 1024) {
                            menu.classList.toggle('hidden');
                        }
                    });

                    // Keep menu open when hovering on it
                    menu.addEventListener('mouseenter', showMenu);
                    menu.addEventListener('mouseleave', hideMenu);
                }
            });

            // Navbar scroll effect
            const navbar = document.getElementById('navbar');
            if (navbar && !navbar.classList.contains('navbar-transparent')) {
                window.addEventListener('scroll', () => {
                    if (window.scrollY > 50) {
                        navbar.classList.add('shadow-md');
                    } else {
                        navbar.classList.remove('shadow-md');
                    }
                });
            }
        });
    </script>
