<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SCOD Clinic- Surgical Center for Obesity and Diabetes</title>
  <meta name="description"
    content="Transform your life at SCOD Clinic, Delhi's premier institute for bariatric & metabolic surgery. Led by Dr. Arush Sabharwal, we offer advanced, minimally invasive weight loss solutions.">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;500;600;700;800&display=swap"
    rel="stylesheet">
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: { scod: '#1876AA' },
          fontFamily: { sans: ['"Nunito Sans"', 'sans-serif'] }
        }
      }
    }
  </script>
  <!-- Feather Icons -->
  <script src="https://unpkg.com/feather-icons"></script>
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/custom.css">
  <meta name="google-site-verification" content="GLkFsz0h0ZT-0nlbHwOQgDHU7kGsxp7VFZZ7toZ75p4" />
</head>
<body class="min-h-screen bg-white text-gray-900 home-page">
  <!-- ===================== NAVBAR ===================== -->
  <?php $is_home = true; include 'includes/header.php'; ?>
  <!-- ===================== HERO SECTION ===================== -->
  <section class="relative h-screen w-full overflow-hidden font-sans">
    <div class="absolute inset-0 z-0">
      <img src="https://brandingpioneers.co.in/scod/scod-bannner-2.webp" alt="SCOD Banner"
        class="w-full h-full object-cover object-center">
      <div class="absolute inset-0 bg-gradient-to-r from-black/60 via-black/30 to-transparent"></div>
    </div>
    <div class="relative z-10 h-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="h-full flex flex-col justify-center relative">
        <div class="max-w-3xl text-white pt-20 observe-animate" data-animation="fade-in-left">
          <h1 class="text-5xl md:text-7xl font-bold leading-[1.1] mb-6 tracking-tight text-white drop-shadow-lg">
            <span class="italic font-serif font-light block text-4xl md:text-5xl mb-2 text-blue-100">Transforming
              Lives</span>
            Through <span class="italic text-white">Advanced</span> Care.
          </h1>
          <p class="text-lg md:text-xl text-gray-100 font-medium mb-10 leading-relaxed max-w-xl drop-shadow-md">
            Your weight management journey is personal. We provide the scientific expertise and compassionate support
            you need to achieve lasting results.
          </p>
          <div class="flex flex-col sm:flex-row gap-5 items-start w-full sm:w-auto">
            <a href="contact.php"
              class="group bg-scod text-white px-8 py-4 rounded-full font-bold text-sm uppercase tracking-wider hover:bg-blue-700 transition-all duration-300 shadow-[0_0_20px_rgba(24,118,170,0.4)] hover:shadow-[0_0_30px_rgba(24,118,170,0.6)] min-w-[260px] text-center flex justify-center items-center border-2 border-transparent">
              <span>Book Consultation</span>
              <i data-feather="arrow-right" class="w-5 h-5 ml-2"></i>
            </a>
            <a href="tel:+918130130489"
              class="group bg-transparent backdrop-blur-sm text-white px-8 py-4 rounded-full font-bold text-sm uppercase tracking-wider hover:bg-white hover:text-scod transition-all duration-300 shadow-lg min-w-[260px] text-center flex justify-center items-center border-2 border-white">
              <span>Call Now</span>
              <i data-feather="phone" class="w-4 h-4 ml-2"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ===================== ABOUT PREVIEW SECTION ===================== -->
  <section class="py-12 bg-white text-gray-900 overflow-hidden relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        <!-- Left Column - Text Content -->
        <div class="lg:col-span-5 relative z-10 observe-animate" data-animation="fade-in-up">
          <div class="flex items-center space-x-4 mb-4">
            <div class="h-px w-10 bg-scod"></div>
            <span class="uppercase tracking-widest text-sm font-bold text-scod">About Us</span>
          </div>
          <h2 class="text-4xl md:text-5xl font-bold leading-tight mb-6 text-gray-900">
            Healthier Lives <br> Start Here At <br> <span class="text-scod">SCOD.</span>
          </h2>
          <p class="text-gray-600 text-lg mb-8 leading-relaxed max-w-md">
            We understand that the journey to wellness is personal. Our advanced medical practices focus on preventive
            care, surgical excellence, and long-term treatment for a healthier future.
          </p>
          <div class="flex items-center space-x-8 relative">
            <a href="about.php"
              class="bg-scod text-white px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-800 transition-colors z-20 shadow-lg">
              More About Us
            </a>
          </div>
        </div>
        <!-- Center Column - Video -->
        <div class="lg:col-span-4 relative mt-12 lg:mt-0 observe-animate" data-animation="scale-in">
          <div class="relative rounded-2xl overflow-hidden h-[500px] w-full shadow-2xl bg-gray-100 group">
            <video id="about-video" src="https://brandingpioneers.co.in/scod/Intro-Web-Scod.mp4"
              class="w-full h-full object-cover cursor-pointer" loop playsinline></video>
            <!-- Desktop Play Badge -->
            <div id="video-play-btn" class="absolute top-1/2 -left-12 transform -translate-y-1/2 hidden md:block z-20">
              <div
                class="relative w-32 h-32 bg-white rounded-full flex items-center justify-center cursor-pointer shadow-xl group border border-gray-100">
                <div id="rotating-text" class="absolute inset-0 p-1">
                  <svg viewBox="0 0 100 100" width="100%" height="100%" class="overflow-visible">
                    <defs>
                      <path id="circle" d="M 50,50 m -37,0 a 37,37 0 1,1 74,0 a 37,37 0 1,1 -74,0" />
                    </defs>
                    <text font-size="11.5" font-weight="bold" fill="#111827" letter-spacing="1.5">
                      <textPath href="#circle">• CLICK TO PLAY • WATCH VIDEO</textPath>
                    </text>
                  </svg>
                </div>
                <div class="w-12 h-12 bg-scod rounded-full flex items-center justify-center text-white shadow-lg">
                  <i id="play-icon" data-feather="play" class="w-5 h-5 ml-1"></i>
                  <i id="pause-icon" data-feather="pause" class="w-5 h-5 hidden"></i>
                </div>
              </div>
            </div>
            <!-- Mobile Play Overlay -->
            <div class="absolute inset-0 flex items-center justify-center md:hidden z-20 bg-black/30"
              onclick="document.getElementById('about-video').paused ? document.getElementById('about-video').play() : document.getElementById('about-video').pause(); this.classList.toggle('bg-transparent')">
              <div
                class="w-16 h-16 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center shadow-lg">
                <i data-feather="play" class="w-6 h-6 text-scod ml-1"></i>
              </div>
            </div>
          </div>
        </div>
        <!-- Right Column - Stats -->
        <div class="lg:col-span-3 flex flex-col justify-center space-y-12 lg:pl-12 mt-12 lg:mt-0">
          <div class="relative observe-animate" data-animation="fade-in-right">
            <div class="text-6xl font-bold text-gray-900 mb-2 tracking-tight">15+</div>
            <div class="text-gray-500 font-medium text-lg uppercase tracking-wide pl-1">Expert Surgeons</div>
          </div>
          <div class="relative observe-animate delay-200" data-animation="fade-in-right">
            <div class="text-6xl font-bold text-gray-900 mb-2 tracking-tight">4+</div>
            <div class="text-gray-500 font-medium text-lg uppercase tracking-wide pl-1">Specialized Depts</div>
          </div>
          <div class="relative observe-animate delay-400" data-animation="fade-in-right">
            <div class="text-6xl font-bold text-gray-900 mb-2 tracking-tight">5k+</div>
            <div class="text-gray-500 font-medium text-lg uppercase tracking-wide pl-1">Happy Patients</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ===================== SERVICES OVERVIEW SECTION ===================== -->
  <section class="py-10 font-sans bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <!-- Header -->
      <div class="max-w-3xl mb-8 lg:mb-10 text-left observe-animate" data-animation="fade-in-up">
        <div class="flex items-center space-x-4 mb-4">
          <div class="h-px w-10 bg-scod"></div>
          <span class="uppercase tracking-widest text-sm font-bold text-scod">Our Expertise</span>
        </div>
        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Specialized Medical Care</h2>
        <p class="text-lg text-gray-600 leading-relaxed max-w-2xl">
          Advanced surgical treatments for obesity, metabolic disorders, and general abdominal conditions.
        </p>
      </div>
      <!-- Service Tabs -->
      <div class="mb-8 sticky top-20 z-30 lg:static lg:z-auto">
        <div
          class="bg-white border border-gray-200 rounded-xl p-2 shadow-lg shadow-gray-100/50 overflow-x-auto scrollbar-hidden">
          <div class="flex space-x-2 min-w-max lg:min-w-0 lg:grid lg:grid-cols-3">
            <button
              class="service-tab flex-shrink-0 flex items-center justify-center space-x-2 px-6 py-4 rounded-lg font-semibold text-sm transition-all duration-300 bg-scod text-white shadow-md scale-105">
              <i data-feather="activity" class="w-5 h-5"></i>
              <span class="whitespace-nowrap">Bariatric Surgery</span>
            </button>
            <button
              class="service-tab flex-shrink-0 flex items-center justify-center space-x-2 px-6 py-4 rounded-lg font-semibold text-sm transition-all duration-300 bg-transparent text-gray-600 hover:bg-gray-50">
              <i data-feather="layers" class="w-5 h-5 text-scod"></i>
              <span class="whitespace-nowrap">Laparoscopic Surgery</span>
            </button>
            <button
              class="service-tab flex-shrink-0 flex items-center justify-center space-x-2 px-6 py-4 rounded-lg font-semibold text-sm transition-all duration-300 bg-transparent text-gray-600 hover:bg-gray-50">
              <i data-feather="user" class="w-5 h-5 text-scod"></i>
              <span class="whitespace-nowrap">Body Contouring</span>
            </button>
          </div>
        </div>
      </div>
      <!-- Service Content Cards -->
      <div id="service-content-0"
        class="service-content active bg-white border border-gray-200 rounded-3xl overflow-hidden shadow-xl">
        <div class="flex flex-col lg:flex-row items-stretch">
          <div class="lg:w-2/5 relative min-h-[300px] lg:min-h-[500px]">
            <img src="https://brandingpioneers.co.in/scod/b461ecb8-4def-4ef8-a9d6-45e3326bc646.png"
              alt="Bariatric Surgery" class="absolute inset-0 w-full h-full object-cover">
            <div
              class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent lg:bg-gradient-to-r lg:from-transparent lg:to-black/10">
            </div>
            <div
              class="absolute bottom-6 left-6 bg-white/95 backdrop-blur-sm px-5 py-3 rounded-2xl shadow-lg border border-white/20">
              <div class="text-2xl font-bold text-scod">95%</div>
              <div class="text-xs text-gray-600 font-bold uppercase tracking-wide">Success Rate</div>
            </div>
            <div
              class="absolute top-6 left-6 bg-white w-12 h-12 rounded-2xl flex items-center justify-center shadow-lg">
              <i data-feather="activity" class="w-6 h-6 text-scod"></i>
            </div>
          </div>
          <div class="lg:w-3/5 p-6 md:p-10 lg:p-12">
            <div class="mb-3"><span
                class="text-sm font-bold text-scod uppercase tracking-wider bg-blue-50 px-3 py-1 rounded-full">Surgical
                Weight Loss Solutions</span></div>
            <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Bariatric Surgery</h3>
            <p class="text-gray-600 leading-relaxed mb-8 text-lg">Advanced surgical procedures including gastric bypass
              and sleeve gastrectomy for effective, long-term weight loss with minimally invasive techniques.</p>
            <div class="grid md:grid-cols-2 gap-8 mb-8">
              <div>
                <h4 class="text-sm font-bold text-gray-900 mb-4 uppercase tracking-wide flex items-center"><span
                    class="w-1.5 h-1.5 bg-scod rounded-full mr-2"></span>Key Procedures</h4>
                <div class="flex flex-wrap gap-2">
                  <div
                    class="px-3 py-1.5 bg-gray-50 text-gray-700 text-sm rounded-lg font-medium border border-gray-100">
                    Gastric Bypass</div>
                  <div
                    class="px-3 py-1.5 bg-gray-50 text-gray-700 text-sm rounded-lg font-medium border border-gray-100">
                    Sleeve Gastrectomy</div>
                  <div
                    class="px-3 py-1.5 bg-gray-50 text-gray-700 text-sm rounded-lg font-medium border border-gray-100">
                    Adjustable Gastric Band</div>
                </div>
              </div>
              <div>
                <h4 class="text-sm font-bold text-gray-900 mb-4 uppercase tracking-wide flex items-center"><span
                    class="w-1.5 h-1.5 bg-scod rounded-full mr-2"></span>Key Benefits</h4>
                <div class="space-y-2">
                  <div class="flex items-start space-x-3 text-gray-700 text-sm"><i data-feather="check"
                      class="w-5 h-5 text-emerald-500 flex-shrink-0"></i><span>Significant long-term weight loss</span>
                  </div>
                  <div class="flex items-start space-x-3 text-gray-700 text-sm"><i data-feather="check"
                      class="w-5 h-5 text-emerald-500 flex-shrink-0"></i><span>Improved metabolic health</span></div>
                  <div class="flex items-start space-x-3 text-gray-700 text-sm"><i data-feather="check"
                      class="w-5 h-5 text-emerald-500 flex-shrink-0"></i><span>Enhanced quality of life</span></div>
                  <div class="flex items-start space-x-3 text-gray-700 text-sm"><i data-feather="check"
                      class="w-5 h-5 text-emerald-500 flex-shrink-0"></i><span>Reduced obesity conditions</span></div>
                </div>
              </div>
            </div>
            <div class="flex flex-col sm:flex-row gap-4 pt-6 border-t border-gray-100">
              <a href="services/bariatric-surgery.php"
                class="inline-flex items-center justify-center space-x-2 bg-scod text-white px-8 py-4 rounded-xl text-base font-bold hover:bg-scod/90 transition-all duration-300 shadow-lg shadow-blue-900/10">
                <span>Schedule Consultation</span><i data-feather="arrow-right" class="w-4 h-4 ml-1"></i>
              </a>
              <a href="services/bariatric-surgery.php"
                class="inline-flex items-center justify-center space-x-2 bg-white text-gray-700 px-8 py-4 rounded-xl text-base font-bold border border-gray-200 hover:bg-gray-50 hover:border-gray-300 transition-all duration-300">
                <span>Learn More</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div id="service-content-1"
        class="service-content bg-white border border-gray-200 rounded-3xl overflow-hidden shadow-xl">
        <div class="flex flex-col lg:flex-row items-stretch">
          <div class="lg:w-2/5 relative min-h-[300px] lg:min-h-[500px]">
            <img src="assets/scod/Laparoscopic Surgery.webp" alt="Laparoscopic Surgery"
              class="absolute inset-0 w-full h-full object-cover">
            <div
              class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent lg:bg-gradient-to-r lg:from-transparent lg:to-black/10">
            </div>
            <div class="absolute bottom-6 left-6 bg-white/95 backdrop-blur-sm px-5 py-3 rounded-2xl shadow-lg">
              <div class="text-2xl font-bold text-scod">100%</div>
              <div class="text-xs text-gray-600 font-bold uppercase tracking-wide">Precision Tech</div>
            </div>
            <div
              class="absolute top-6 left-6 bg-white w-12 h-12 rounded-2xl flex items-center justify-center shadow-lg"><i
                data-feather="layers" class="w-6 h-6 text-scod"></i></div>
          </div>
          <div class="lg:w-3/5 p-6 md:p-10 lg:p-12">
            <div class="mb-3"><span
                class="text-sm font-bold text-scod uppercase tracking-wider bg-blue-50 px-3 py-1 rounded-full">Minimally
                Invasive Procedures</span></div>
            <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Laparoscopic Surgery</h3>
            <p class="text-gray-600 leading-relaxed mb-8 text-lg">State-of-the-art keyhole surgery for gallstones,
              hernias, and other abdominal conditions, ensuring faster recovery and minimal scarring.</p>
            <div class="grid md:grid-cols-2 gap-8 mb-8">
              <div>
                <h4 class="text-sm font-bold text-gray-900 mb-4 uppercase tracking-wide flex items-center"><span
                    class="w-1.5 h-1.5 bg-scod rounded-full mr-2"></span>Key Procedures</h4>
                <div class="flex flex-wrap gap-2">
                  <div
                    class="px-3 py-1.5 bg-gray-50 text-gray-700 text-sm rounded-lg font-medium border border-gray-100">
                    Gallbladder Removal</div>
                  <div
                    class="px-3 py-1.5 bg-gray-50 text-gray-700 text-sm rounded-lg font-medium border border-gray-100">
                    Hernia Repair</div>
                  <div
                    class="px-3 py-1.5 bg-gray-50 text-gray-700 text-sm rounded-lg font-medium border border-gray-100">
                    Appendectomy</div>
                </div>
              </div>
              <div>
                <h4 class="text-sm font-bold text-gray-900 mb-4 uppercase tracking-wide flex items-center"><span
                    class="w-1.5 h-1.5 bg-scod rounded-full mr-2"></span>Key Benefits</h4>
                <div class="space-y-2">
                  <div class="flex items-start space-x-3 text-gray-700 text-sm"><i data-feather="check"
                      class="w-5 h-5 text-emerald-500 flex-shrink-0"></i><span>Minimal post-op pain</span></div>
                  <div class="flex items-start space-x-3 text-gray-700 text-sm"><i data-feather="check"
                      class="w-5 h-5 text-emerald-500 flex-shrink-0"></i><span>Tiny incisions</span></div>
                  <div class="flex items-start space-x-3 text-gray-700 text-sm"><i data-feather="check"
                      class="w-5 h-5 text-emerald-500 flex-shrink-0"></i><span>Fast recovery time</span></div>
                  <div class="flex items-start space-x-3 text-gray-700 text-sm"><i data-feather="check"
                      class="w-5 h-5 text-emerald-500 flex-shrink-0"></i><span>Same-day discharge (often)</span></div>
                </div>
              </div>
            </div>
            <div class="flex flex-col sm:flex-row gap-4 pt-6 border-t border-gray-100"><a
                href="services/laparoscopic-surgery.php"
                class="inline-flex items-center justify-center space-x-2 bg-scod text-white px-8 py-4 rounded-xl text-base font-bold hover:bg-scod/90 transition-all duration-300 shadow-lg shadow-blue-900/10"><span>Schedule
                  Consultation</span><i data-feather="arrow-right" class="w-4 h-4 ml-1"></i></a><a
                href="services/laparoscopic-surgery.php"
                class="inline-flex items-center justify-center space-x-2 bg-white text-gray-700 px-8 py-4 rounded-xl text-base font-bold border border-gray-200 hover:bg-gray-50 hover:border-gray-300 transition-all duration-300"><span>Learn
                  More</span></a></div>
          </div>
        </div>
      </div>
      <div id="service-content-2"
        class="service-content bg-white border border-gray-200 rounded-3xl overflow-hidden shadow-xl">
        <div class="flex flex-col lg:flex-row items-stretch">
          <div class="lg:w-2/5 relative min-h-[300px] lg:min-h-[500px]">
            <img src="assets/scod/Body Contouring.webp" alt="Body Contouring"
              class="absolute inset-0 w-full h-full object-cover">
            <div
              class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent lg:bg-gradient-to-r lg:from-transparent lg:to-black/10">
            </div>
            <div class="absolute bottom-6 left-6 bg-white/95 backdrop-blur-sm px-5 py-3 rounded-2xl shadow-lg">
              <div class="text-2xl font-bold text-scod">Top</div>
              <div class="text-xs text-gray-600 font-bold uppercase tracking-wide">Aesthetic Results</div>
            </div>
            <div
              class="absolute top-6 left-6 bg-white w-12 h-12 rounded-2xl flex items-center justify-center shadow-lg"><i
                data-feather="user" class="w-6 h-6 text-scod"></i></div>
          </div>
          <div class="lg:w-3/5 p-6 md:p-10 lg:p-12">
            <div class="mb-3"><span
                class="text-sm font-bold text-scod uppercase tracking-wider bg-blue-50 px-3 py-1 rounded-full">Post-Weight
                Loss Reconstruction</span></div>
            <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Body Contouring</h3>
            <p class="text-gray-600 leading-relaxed mb-8 text-lg">Specialized plastic surgery procedures to remove
              excess skin and contour the body after significant weight loss.</p>
            <div class="grid md:grid-cols-2 gap-8 mb-8">
              <div>
                <h4 class="text-sm font-bold text-gray-900 mb-4 uppercase tracking-wide flex items-center"><span
                    class="w-1.5 h-1.5 bg-scod rounded-full mr-2"></span>Key Procedures</h4>
                <div class="flex flex-wrap gap-2">
                  <div
                    class="px-3 py-1.5 bg-gray-50 text-gray-700 text-sm rounded-lg font-medium border border-gray-100">
                    Tummy Tuck</div>
                  <div
                    class="px-3 py-1.5 bg-gray-50 text-gray-700 text-sm rounded-lg font-medium border border-gray-100">
                    Body Lift</div>
                  <div
                    class="px-3 py-1.5 bg-gray-50 text-gray-700 text-sm rounded-lg font-medium border border-gray-100">
                    Arm/Thigh Lift</div>
                </div>
              </div>
              <div>
                <h4 class="text-sm font-bold text-gray-900 mb-4 uppercase tracking-wide flex items-center"><span
                    class="w-1.5 h-1.5 bg-scod rounded-full mr-2"></span>Key Benefits</h4>
                <div class="space-y-2">
                  <div class="flex items-start space-x-3 text-gray-700 text-sm"><i data-feather="check"
                      class="w-5 h-5 text-emerald-500 flex-shrink-0"></i><span>Restored body shape</span></div>
                  <div class="flex items-start space-x-3 text-gray-700 text-sm"><i data-feather="check"
                      class="w-5 h-5 text-emerald-500 flex-shrink-0"></i><span>Improved clothing fit</span></div>
                  <div class="flex items-start space-x-3 text-gray-700 text-sm"><i data-feather="check"
                      class="w-5 h-5 text-emerald-500 flex-shrink-0"></i><span>Removal of excess skin</span></div>
                  <div class="flex items-start space-x-3 text-gray-700 text-sm"><i data-feather="check"
                      class="w-5 h-5 text-emerald-500 flex-shrink-0"></i><span>Enhanced confidence</span></div>
                </div>
              </div>
            </div>
            <div class="flex flex-col sm:flex-row gap-4 pt-6 border-t border-gray-100"><a
                href="services/body-contouring.php"
                class="inline-flex items-center justify-center space-x-2 bg-scod text-white px-8 py-4 rounded-xl text-base font-bold hover:bg-scod/90 transition-all duration-300 shadow-lg shadow-blue-900/10"><span>Schedule
                  Consultation</span><i data-feather="arrow-right" class="w-4 h-4 ml-1"></i></a><a
                href="services/body-contouring.php"
                class="inline-flex items-center justify-center space-x-2 bg-white text-gray-700 px-8 py-4 rounded-xl text-base font-bold border border-gray-200 hover:bg-gray-50 hover:border-gray-300 transition-all duration-300"><span>Learn
                  More</span></a></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ===================== DOCTOR INFO SECTION ===================== -->
  <section class="py-10 bg-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        <div class="lg:col-span-5 relative observe-animate" data-animation="fade-in-left">
          <div class="relative pr-4 pb-4">
            <div class="relative rounded-2xl overflow-hidden shadow-2xl border-4 border-white z-10">
              <img src="https://brandingpioneers.co.in/scod/dr-arush-final-image.png" alt="Dr. Arush Sabharwal"
                class="w-full h-[500px] object-cover object-top">
              <div
                class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-scod/90 via-scod/70 to-transparent pt-20 pb-6 px-6 text-white">
                <h3 class="text-2xl font-bold">Dr. Arush Sabharwal</h3>
                <p class="text-blue-100 font-medium">Chairman & Chief Surgeon</p>
              </div>
            </div>
            <div
              class="absolute bottom-0 right-0 w-full h-full border-2 border-scod/20 rounded-2xl -z-10 translate-x-4 translate-y-4">
            </div>
          </div>
        </div>
        <div class="lg:col-span-7 lg:pl-10 observe-animate" data-animation="fade-in-right">
          <div class="flex items-center space-x-4 mb-4">
            <div class="h-px w-10 bg-scod"></div>
            <span class="uppercase tracking-widest text-sm font-bold text-scod">Meet The Surgeon</span>
          </div>
          <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">Your Health in <br><span
              class="text-scod">Expert Hands</span></h2>
          <p class="text-lg text-gray-600 mb-6 leading-relaxed">Dr. Arush Sabharwal is a globally recognized pioneer in
            Minimal Access, Metabolic, and Bariatric Surgery. With a patient-centric approach and mastery of advanced
            surgical techniques, he has dedicated his career to transforming lives through sustainable weight loss and
            diabetes management solutions.</p>
          <p class="text-lg text-gray-600 mb-8 leading-relaxed">As the founder of SCOD, he leads a multidisciplinary
            team that combines surgical excellence with compassionate care, ensuring every patient receives a
            personalized path to long-term wellness.</p>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4 gap-x-8 mb-8">
            <div class="flex items-start space-x-3"><i data-feather="check-circle"
                class="w-5 h-5 text-emerald-500 flex-shrink-0 mt-1"></i><span
                class="text-gray-800 font-medium">Designated Center of Excellence Surgeon</span></div>
            <div class="flex items-start space-x-3"><i data-feather="check-circle"
                class="w-5 h-5 text-emerald-500 flex-shrink-0 mt-1"></i><span class="text-gray-800 font-medium">Fellow
                of American College of Surgeons (FACS)</span></div>
            <div class="flex items-start space-x-3"><i data-feather="check-circle"
                class="w-5 h-5 text-emerald-500 flex-shrink-0 mt-1"></i><span class="text-gray-800 font-medium">Over
                5,000 Successful Procedures</span></div>
            <div class="flex items-start space-x-3"><i data-feather="check-circle"
                class="w-5 h-5 text-emerald-500 flex-shrink-0 mt-1"></i><span class="text-gray-800 font-medium">Pioneer
                in Single-Incision Surgery</span></div>
          </div>
          <div class="flex items-center gap-6">
            <a href="about.php"
              class="inline-flex items-center space-x-3 bg-scod text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-scod/90 transition-all shadow-lg hover:shadow-xl hover:-translate-y-1">
              <span>View Full Profile</span><i data-feather="arrow-right" class="w-5 h-5"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ===================== WHY CHOOSE US SECTION ===================== -->
  <section class="py-10 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
        <div class="lg:pr-8">
          <div class="mb-8 observe-animate" data-animation="fade-in-up">
            <div class="flex items-center space-x-4 mb-4">
              <div class="h-px w-10 bg-scod"></div>
              <span class="uppercase tracking-widest text-sm font-bold text-scod">Why Choose Us</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight">Experience Care <br>Like Never Before
            </h2>
          </div>
          <div class="space-y-2">
            <div class="why-choose-item cursor-pointer group active"
              onclick="this.parentElement.querySelectorAll('.why-choose-item').forEach(i=>i.classList.remove('active'));this.classList.add('active')">
              <div class="flex items-center py-5 border-b border-scod"><span
                  class="text-xl font-medium mr-8 text-scod">01</span>
                <h3 class="text-xl font-semibold text-gray-900">Super-Specialized Bariatric & Metabolic Care</h3>
              </div>
              <div class="accordion-content active">
                <p class="text-gray-600 leading-relaxed text-lg">Your treatment is led exclusively by highly trained
                  bariatric surgeons who focus 100% on obesity, metabolic disorders, and advanced minimally invasive
                  surgery — ensuring unmatched expertise at every step.</p>
              </div>
            </div>
            <div class="why-choose-item cursor-pointer group"
              onclick="this.parentElement.querySelectorAll('.why-choose-item').forEach(i=>i.classList.remove('active'));this.classList.add('active')">
              <div class="flex items-center py-5 border-b border-gray-200"><span
                  class="text-xl font-medium mr-8 text-gray-400">02</span>
                <h3 class="text-xl font-semibold text-gray-500 group-hover:text-gray-700">Holistic, Multidisciplinary
                  Approach</h3>
              </div>
              <div class="accordion-content">
                <p class="text-gray-600 leading-relaxed text-lg">SCOD integrates surgeons, nutritionists, psychologists,
                  and lifestyle coaches under one roof. You receive a complete care plan — surgery, diet, counselling,
                  and follow-ups — designed for long-term success.</p>
              </div>
            </div>
            <div class="why-choose-item cursor-pointer group"
              onclick="this.parentElement.querySelectorAll('.why-choose-item').forEach(i=>i.classList.remove('active'));this.classList.add('active')">
              <div class="flex items-center py-5 border-b border-gray-200"><span
                  class="text-xl font-medium mr-8 text-gray-400">03</span>
                <h3 class="text-xl font-semibold text-gray-500 group-hover:text-gray-700">Precision Surgery With
                  Latest-Generation Tech</h3>
              </div>
              <div class="accordion-content">
                <p class="text-gray-600 leading-relaxed text-lg">We use the latest HD/4K laparoscopic platforms,
                  AI-assisted diagnostics, and advanced energy devices to deliver safer surgeries, minimal scars, and
                  faster recovery compared to traditional methods.</p>
              </div>
            </div>
            <div class="why-choose-item cursor-pointer group"
              onclick="this.parentElement.querySelectorAll('.why-choose-item').forEach(i=>i.classList.remove('active'));this.classList.add('active')">
              <div class="flex items-center py-5 border-b border-gray-200"><span
                  class="text-xl font-medium mr-8 text-gray-400">04</span>
                <h3 class="text-xl font-semibold text-gray-500 group-hover:text-gray-700">Personalised Treatment Plans
                </h3>
              </div>
              <div class="accordion-content">
                <p class="text-gray-600 leading-relaxed text-lg">No two bodies are the same. Your procedure, nutrition
                  protocol, and recovery pathway are customized based on your metabolism, medical history, lifestyle,
                  and weight-loss goals for maximum effectiveness.</p>
              </div>
            </div>
            <div class="why-choose-item cursor-pointer group"
              onclick="this.parentElement.querySelectorAll('.why-choose-item').forEach(i=>i.classList.remove('active'));this.classList.add('active')">
              <div class="flex items-center py-5 border-b border-gray-200"><span
                  class="text-xl font-medium mr-8 text-gray-400">05</span>
                <h3 class="text-xl font-semibold text-gray-500 group-hover:text-gray-700">Exceptional Outcomes &
                  Post-Surgery Support</h3>
              </div>
              <div class="accordion-content">
                <p class="text-gray-600 leading-relaxed text-lg">With thousands of successful transformations and
                  long-term follow-ups, we ensure your journey continues well beyond surgery. Continuous monitoring,
                  nutrition counselling, and lifestyle support help you sustain results.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="grid grid-cols-2 gap-6 h-full observe-animate" data-animation="scale-in">
          <div class="col-span-2 h-80 rounded-[2rem] overflow-hidden shadow-lg"><img
              src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&w=1000&q=80"
              alt="Modern Clinic Interior"
              class="w-full h-full object-cover hover:scale-105 transition-transform duration-700"></div>
          <div class="h-64 rounded-[2rem] overflow-hidden shadow-lg"><img
              src="https://brandingpioneers.co.in/scod/Technology & Equipment.png" alt="Advanced Medical Equipment"
              class="w-full h-full object-cover hover:scale-105 transition-transform duration-700"></div>
          <div class="h-64 rounded-[2rem] overflow-hidden shadow-lg"><img
              src="https://brandingpioneers.co.in/scod/Why-choose-us-scod.webp" alt="Compassionate Patient Care"
              class="w-full h-full object-cover hover:scale-105 transition-transform duration-700"></div>
        </div>
      </div>
    </div>
  </section>
  <!-- ===================== TESTIMONIALS SECTION ===================== -->
  <section class="py-10 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex flex-col md:flex-row justify-between items-end mb-8 gap-6">
        <div class="text-left flex flex-col items-start observe-animate" data-animation="fade-in-up">
          <div class="flex items-center space-x-4 mb-4">
            <div class="h-px w-10 bg-scod"></div><span
              class="uppercase tracking-widest text-sm font-bold text-scod">Patient Stories</span>
          </div>
          <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Watch their <span
              class="text-scod">stories</span></h2>
          <p class="text-xl text-gray-500">Real patients, real results.</p>
        </div>
        <div class="mb-4 md:mb-0"><a href="testimonials.php"
            class="group flex items-center gap-2 text-scod font-bold text-lg hover:gap-3 transition-all"><span>View All
              Stories</span><i data-feather="arrow-right" class="w-5 h-5"></i></a></div>
      </div>
      <div class="relative h-[500px] flex items-center justify-center">
        <button id="testimonial-prev"
          class="absolute left-4 md:left-12 z-30 p-3 rounded-full bg-white shadow-lg text-gray-800 hover:bg-emerald-50 transition-colors border border-gray-100"><i
            data-feather="chevron-left" class="w-6 h-6"></i></button>
        <button id="testimonial-next"
          class="absolute right-4 md:right-12 z-30 p-3 rounded-full bg-white shadow-lg text-gray-800 hover:bg-emerald-50 transition-colors border border-gray-100"><i
            data-feather="chevron-right" class="w-6 h-6"></i></button>
        <div class="relative w-full max-w-4xl h-[400px] flex justify-center items-center">
          <div
            class="testimonial-card absolute w-[300px] md:w-[600px] h-[350px] md:h-[400px] rounded-2xl shadow-2xl overflow-hidden bg-gray-900 cursor-pointer"
            data-video-id="R_1SeIg3FaQ"
            style="background-image:url('https://img.youtube.com/vi/NnSd1zg_Ndk/maxresdefault.jpg');background-size:cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent opacity-90"></div>
            <div class="absolute inset-0 flex flex-col justify-between p-8">
              <div class="flex-1 flex items-center justify-center">
                <div
                  class="w-16 h-16 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center hover:scale-110 transition-transform duration-300 border border-white/30">
                  <i data-feather="play" class="w-6 h-6 text-white ml-1"></i>
                </div>
              </div>
              <div class="relative z-10">
                <p class="text-white text-lg md:text-xl font-medium leading-relaxed line-clamp-3 mb-3">"Mr. Sudesh Gupta
                  shares all the things he is able to do and how much more he enjoys life since having weight loss
                  surgery with Dr. Arush Sabharwal."</p>
                <h3 class="text-white font-bold text-lg">Mr. Sudesh Gupta</h3>
                <p class="text-gray-300 text-sm">Weight Loss Surgery</p>
              </div>
            </div>
          </div>
          <div
            class="testimonial-card absolute w-[300px] md:w-[600px] h-[350px] md:h-[400px] rounded-2xl shadow-2xl overflow-hidden bg-gray-900 cursor-pointer"
            data-video-id="u_dbxl4Y7Vs"
            style="background-image:url('https://img.youtube.com/vi/u_dbxl4Y7Vs/maxresdefault.jpg');background-size:cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent opacity-90"></div>
            <div class="absolute inset-0 flex flex-col justify-between p-8">
              <div class="flex-1 flex items-center justify-center">
                <div
                  class="w-16 h-16 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center hover:scale-110 transition-transform duration-300 border border-white/30">
                  <i data-feather="play" class="w-6 h-6 text-white ml-1"></i>
                </div>
              </div>
              <div class="relative z-10">
                <p class="text-white text-lg md:text-xl font-medium leading-relaxed line-clamp-3 mb-3">"Akanksha
                  Bhardwaj underwent a Gastric Bypass with HDFC ERGO Insurance"</p>
                <h3 class="text-white font-bold text-lg">Akanksha Bhardwaj</h3>
                <p class="text-gray-300 text-sm">Gastric Bypass</p>
              </div>
            </div>
          </div>
          <div
            class="testimonial-card absolute w-[300px] md:w-[600px] h-[350px] md:h-[400px] rounded-2xl shadow-2xl overflow-hidden bg-gray-900 cursor-pointer"
            data-video-id="1QnINDPc1WU"
            style="background-image:url('https://img.youtube.com/vi/1GjE_mEZMBM/maxresdefault.jpg');background-size:cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent opacity-90"></div>
            <div class="absolute inset-0 flex flex-col justify-between p-8">
              <div class="flex-1 flex items-center justify-center">
                <div
                  class="w-16 h-16 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center hover:scale-110 transition-transform duration-300 border border-white/30">
                  <i data-feather="play" class="w-6 h-6 text-white ml-1"></i>
                </div>
              </div>
              <div class="relative z-10">
                <p class="text-white text-lg md:text-xl font-medium leading-relaxed line-clamp-3 mb-3">"Mrs. Noor Bano
                  who fought the battle suffering from Super obesity with Multiple Obesity associated comorbidities"</p>
                <h3 class="text-white font-bold text-lg">Mrs. Noor Bano</h3>
                <p class="text-gray-300 text-sm">Super Obesity Recovery</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ===================== PATIENT TRANSFORMATIONS ===================== -->
  <section class="py-12 bg-gray-50 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
        <div>
          <div class="observe-animate" data-animation="fade-in-up">
            <div class="flex items-center space-x-4 mb-4">
              <div class="h-px w-10 bg-scod"></div><span
                class="uppercase tracking-widest text-sm font-bold text-scod">Real Results</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">Trusted by Thousands of
              <br><span class="text-scod">Transformed Patients</span>
            </h2>
            <p class="text-lg text-gray-600 mb-8 leading-relaxed">From first-time consultations to full lifestyle
              transformations, our patients share their inspiring stories of reclaiming their health.</p>
          </div>
          <div class="min-h-[160px]">
            <div class="transform-slide">
              <p class="text-xl md:text-2xl font-medium text-gray-900 mb-6 leading-relaxed">"Losing 45kg was just the
                beginning. The real victory was reversing my Type 2 Diabetes and regaining the energy to run with my
                grandchildren. Dr. Arush and his team didn't just perform a surgery; they gave me a second life."</p>
              <div>
                <h4 class="font-bold text-gray-900">Atul Kumar Singh</h4>
                <p class="text-gray-500">Bariatric Success Story</p>
              </div>
            </div>
            <div class="transform-slide hidden">
              <p class="text-xl md:text-2xl font-medium text-gray-900 mb-6 leading-relaxed">"I was hesitant about
                surgery, but the counseling at SCOD changed my perspective. Today, I am 38kg lighter and my hypertension
                is a thing of the past. The holistic approach—from nutrition to mental support—is what makes them the
                best."</p>
              <div>
                <h4 class="font-bold text-gray-900">Savita Ranga</h4>
                <p class="text-gray-500">Metabolic Transformation</p>
              </div>
            </div>
            <div class="transform-slide hidden">
              <p class="text-xl md:text-2xl font-medium text-gray-900 mb-6 leading-relaxed">"The personalized care I
                received was unmatched. Every question was answered, and every fear was addressed. 18 months
                post-surgery, I have maintained my weight loss and feel stronger than I did in my 20s."</p>
              <div>
                <h4 class="font-bold text-gray-900">Anuj Gupta</h4>
                <p class="text-gray-500">Gastric Bypass Patient</p>
              </div>
            </div>
          </div>
          <div class="flex space-x-4 mt-8">
            <button id="transform-prev"
              class="w-12 h-12 rounded-full border border-gray-200 flex items-center justify-center hover:bg-gray-50 hover:border-gray-300 transition-all text-gray-600 shadow-sm"><i
                data-feather="chevron-left" class="w-5 h-5"></i></button>
            <button id="transform-next"
              class="w-12 h-12 rounded-full border border-gray-200 flex items-center justify-center hover:bg-gray-50 hover:border-gray-300 transition-all text-gray-600 shadow-sm"><i
                data-feather="chevron-right" class="w-5 h-5"></i></button>
          </div>
        </div>
        <div class="relative observe-animate" data-animation="scale-in">
          <div class="grid grid-cols-1 gap-6">
            <div class="relative rounded-[2rem] overflow-hidden h-64 md:h-72 shadow-xl group"><img
                src="https://brandingpioneers.co.in/scod/patient3-scod.webp" alt="Before transformation"
                class="w-full h-full object-cover grayscale-[20%] group-hover:grayscale-0 transition-all duration-700">
            </div>
            <div class="relative rounded-[2rem] overflow-hidden h-64 md:h-72 shadow-xl group"><img
                src="https://brandingpioneers.co.in/scod/patient2-scod.webp" alt="After transformation"
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"></div>
          </div>
          <div
            class="absolute -z-10 -right-12 top-1/2 transform -translate-y-1/2 w-64 h-64 bg-scod/10 rounded-full blur-3xl opacity-60">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ===================== AWARDS SECTION ===================== -->
  <section class="py-12 bg-gray-50 border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-8 gap-6">
        <div class="text-left flex flex-col items-start max-w-2xl observe-animate" data-animation="fade-in-up">
          <div class="flex items-center space-x-4 mb-4">
            <div class="h-px w-10 bg-scod"></div><span
              class="uppercase tracking-widest text-sm font-bold text-scod">Excellence</span>
          </div>
          <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Accreditations & <span
              class="text-scod">Awards</span></h2>
          <p class="text-gray-600">We are proud to be recognized by leading national organizations for our commitment to
            safety, quality, and patient outcomes.</p>
        </div>
        <div class="flex-shrink-0 mb-2 md:mb-0"><a href="about.php"
            class="group flex items-center gap-2 text-scod font-bold text-lg hover:gap-3 transition-all"><span>View All
              Awards</span><i data-feather="arrow-right" class="w-5 h-5"></i></a></div>
      </div>
      <div
        class="flex overflow-x-auto snap-x snap-mandatory gap-4 pb-6 -mx-4 px-4 md:grid md:grid-cols-2 lg:grid-cols-4 md:gap-8 md:pb-0 md:mx-0 md:px-0 scrollbar-hidden">
        <div
          class="flex-shrink-0 w-[85%] md:w-auto snap-center flex flex-col items-center text-center group cursor-pointer"
          data-image-src="https://brandingpioneers.co.in/scod/dalailamahonor.jpg">
          <div
            class="w-full h-64 flex items-center justify-center p-6 mb-4 rounded-2xl group-hover:shadow-[0_8px_30px_rgb(0,0,0,0.06)] transition-all duration-300 border border-gray-100 group-hover:border-scod/20 bg-white">
            <img src="https://brandingpioneers.co.in/scod/dalailamahonor.jpg" alt="Dalai Lama Honor"
              class="max-w-full max-h-full object-contain transition-transform duration-500 group-hover:scale-105">
          </div>
        </div>
        <div
          class="flex-shrink-0 w-[85%] md:w-auto snap-center flex flex-col items-center text-center group cursor-pointer"
          data-image-src="https://brandingpioneers.co.in/scod/award1.jpg">
          <div
            class="w-full h-64 flex items-center justify-center p-6 mb-4 rounded-2xl group-hover:shadow-[0_8px_30px_rgb(0,0,0,0.06)] transition-all duration-300 border border-gray-100 group-hover:border-scod/20 bg-white">
            <img src="https://brandingpioneers.co.in/scod/award1.jpg" alt="Award"
              class="max-w-full max-h-full object-contain transition-transform duration-500 group-hover:scale-105">
          </div>
        </div>
        <div
          class="flex-shrink-0 w-[85%] md:w-auto snap-center flex flex-col items-center text-center group cursor-pointer"
          data-image-src="https://brandingpioneers.co.in/scod/2016.jpg">
          <div
            class="w-full h-64 flex items-center justify-center p-6 mb-4 rounded-2xl group-hover:shadow-[0_8px_30px_rgb(0,0,0,0.06)] transition-all duration-300 border border-gray-100 group-hover:border-scod/20 bg-white">
            <img src="https://brandingpioneers.co.in/scod/2016.jpg" alt="2016 Award"
              class="max-w-full max-h-full object-contain transition-transform duration-500 group-hover:scale-105">
          </div>
        </div>
        <div
          class="flex-shrink-0 w-[85%] md:w-auto snap-center flex flex-col items-center text-center group cursor-pointer"
          data-image-src="https://brandingpioneers.co.in/scod/2015.jpg">
          <div
            class="w-full h-64 flex items-center justify-center p-6 mb-4 rounded-2xl group-hover:shadow-[0_8px_30px_rgb(0,0,0,0.06)] transition-all duration-300 border border-gray-100 group-hover:border-scod/20 bg-white">
            <img src="https://brandingpioneers.co.in/scod/2015.jpg" alt="2015 Award"
              class="max-w-full max-h-full object-contain transition-transform duration-500 group-hover:scale-105">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ===================== MORE STORIES SECTION ===================== -->
  <section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-10 gap-6">
        <div class="text-left flex flex-col items-start observe-animate" data-animation="fade-in-up">
          <div class="flex items-center space-x-4 mb-4">
            <div class="h-px w-10 bg-scod"></div>
            <span class="uppercase tracking-widest text-sm font-bold text-scod">From The Community</span>
          </div>
          <h2 class="text-4xl md:text-5xl font-bold text-gray-900">Read more <span class="text-scod">stories</span></h2>
        </div>
        <div class="mb-2 md:mb-0">
          <a href="testimonials.php"
            class="group flex items-center gap-2 text-scod font-bold text-lg hover:gap-3 transition-all">
            <span>View All Reviews</span>
            <i data-feather="arrow-right" class="w-5 h-5"></i>
          </a>
        </div>
      </div>
      <div
        class="flex overflow-x-auto snap-x snap-mandatory gap-4 pb-6 -mx-4 px-4 md:block md:columns-2 lg:columns-3 md:gap-6 md:space-y-6 md:mx-0 md:px-0 md:pb-0 scrollbar-hidden">
        <!-- Story 1 -->
        <div
          class="flex-shrink-0 w-[85%] md:w-full snap-center h-auto break-inside-avoid bg-gray-50 rounded-2xl p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] hover:shadow-xl transition-all duration-300 border border-gray-100 mb-0 md:mb-6">
          <div class="flex items-center space-x-4 mb-4">
            <img src="https://brandingpioneers.co.in/scod/google_g_icon_download.png" alt="Atul Kumar Singh"
              class="w-12 h-12 rounded-full object-cover border-2 border-white shadow-sm">
            <div>
              <h4 class="font-bold text-gray-900 text-sm">Atul Kumar Singh</h4>
              <p class="text-xs text-gray-500 font-medium">Bariatric Surgery Patient</p>
            </div>
          </div>
          <p class="text-gray-600 text-sm leading-relaxed">We are highly satisfied with the life-changing bariatric
            surgery performed by Dr. Aarush Sabarwal for my wife. The entire process—from counseling to recovery—was
            handled with exceptional care.</p>
        </div>
        <!-- Story 2 -->
        <div
          class="flex-shrink-0 w-[85%] md:w-full snap-center h-auto break-inside-avoid bg-gray-50 rounded-2xl p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] hover:shadow-xl transition-all duration-300 border border-gray-100 mb-0 md:mb-6">
          <div class="flex items-center space-x-4 mb-4">
            <img src="https://brandingpioneers.co.in/scod/google_g_icon_download.png" alt="Ujwala B"
              class="w-12 h-12 rounded-full object-cover border-2 border-white shadow-sm">
            <div>
              <h4 class="font-bold text-gray-900 text-sm">Ujwala B</h4>
              <p class="text-xs text-gray-500 font-medium">Bariatric Surgery Patient</p>
            </div>
          </div>
          <p class="text-gray-600 text-sm leading-relaxed">I went to Dr. Arush clueless about bariatric surgery and had
            hundreds of questions. He answered everything with patience and clarity.</p>
        </div>
        <!-- Story 3 -->
        <div
          class="flex-shrink-0 w-[85%] md:w-full snap-center h-auto break-inside-avoid bg-gray-50 rounded-2xl p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] hover:shadow-xl transition-all duration-300 border border-gray-100 mb-0 md:mb-6">
          <div class="flex items-center space-x-4 mb-4">
            <img src="https://brandingpioneers.co.in/scod/google_g_icon_download.png" alt="Nazim Saifi"
              class="w-12 h-12 rounded-full object-cover border-2 border-white shadow-sm">
            <div>
              <h4 class="font-bold text-gray-900 text-sm">Nazim Saifi</h4>
              <p class="text-xs text-gray-500 font-medium">Bariatric Surgery Patient</p>
            </div>
          </div>
          <p class="text-gray-600 text-sm leading-relaxed">Absolutely loved their services. The best bariatric facility
            around Delhi. A must-visit for anyone considering bariatric surgery.</p>
        </div>
        <!-- Story 4 -->
        <div
          class="flex-shrink-0 w-[85%] md:w-full snap-center h-auto break-inside-avoid bg-gray-50 rounded-2xl p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] hover:shadow-xl transition-all duration-300 border border-gray-100 mb-0 md:mb-6">
          <div class="flex items-center space-x-4 mb-4">
            <img src="https://brandingpioneers.co.in/scod/google_g_icon_download.png" alt="Arif"
              class="w-12 h-12 rounded-full object-cover border-2 border-white shadow-sm">
            <div>
              <h4 class="font-bold text-gray-900 text-sm">Arif</h4>
              <p class="text-xs text-gray-500 font-medium">Bariatric Surgery Patient</p>
            </div>
          </div>
          <p class="text-gray-600 text-sm leading-relaxed">After thorough research, I chose SCOD Clinic and have zero
            regrets. Ethical practice and amazing patient care.</p>
        </div>
        <!-- Story 5 -->
        <div
          class="flex-shrink-0 w-[85%] md:w-full snap-center h-auto break-inside-avoid bg-gray-50 rounded-2xl p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] hover:shadow-xl transition-all duration-300 border border-gray-100 mb-0 md:mb-6">
          <div class="flex items-center space-x-4 mb-4">
            <img src="https://brandingpioneers.co.in/scod/google_g_icon_download.png" alt="Savita Ranga"
              class="w-12 h-12 rounded-full object-cover border-2 border-white shadow-sm">
            <div>
              <h4 class="font-bold text-gray-900 text-sm">Savita Ranga</h4>
              <p class="text-xs text-gray-500 font-medium">Bariatric Surgery Patient</p>
            </div>
          </div>
          <p class="text-gray-600 text-sm leading-relaxed">Best bariatric surgery experience. I joined after seeing my
            sister's results. Proud to be part of the SCOD family now.</p>
        </div>
        <!-- Story 6 -->
        <div
          class="flex-shrink-0 w-[85%] md:w-full snap-center h-auto break-inside-avoid bg-gray-50 rounded-2xl p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] hover:shadow-xl transition-all duration-300 border border-gray-100 mb-0 md:mb-6">
          <div class="flex items-center space-x-4 mb-4">
            <img src="https://brandingpioneers.co.in/scod/google_g_icon_download.png" alt="Anuj Gupta"
              class="w-12 h-12 rounded-full object-cover border-2 border-white shadow-sm">
            <div>
              <h4 class="font-bold text-gray-900 text-sm">Anuj Gupta</h4>
              <p class="text-xs text-gray-500 font-medium">Bariatric Surgery Patient</p>
            </div>
          </div>
          <p class="text-gray-600 text-sm leading-relaxed">Wonderful experience with Dr. Arush Sabharwal. Smooth
            procedure and very helpful staff. Highly recommended.</p>
        </div>
        <!-- Story 7 -->
        <div
          class="flex-shrink-0 w-[85%] md:w-full snap-center h-auto break-inside-avoid bg-gray-50 rounded-2xl p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] hover:shadow-xl transition-all duration-300 border border-gray-100 mb-0 md:mb-6">
          <div class="flex items-center space-x-4 mb-4">
            <img src="https://brandingpioneers.co.in/scod/google_g_icon_download.png" alt="Parkash Raina"
              class="w-12 h-12 rounded-full object-cover border-2 border-white shadow-sm">
            <div>
              <h4 class="font-bold text-gray-900 text-sm">Parkash Raina</h4>
              <p class="text-xs text-gray-500 font-medium">Patient</p>
            </div>
          </div>
          <p class="text-gray-600 text-sm leading-relaxed">All insurances cover bariatric and metabolic surgery if the
            patient meets guidelines. SCOD follows proper standards and procedures.</p>
        </div>
        <!-- Story 8 -->
        <div
          class="flex-shrink-0 w-[85%] md:w-full snap-center h-auto break-inside-avoid bg-gray-50 rounded-2xl p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] hover:shadow-xl transition-all duration-300 border border-gray-100 mb-0 md:mb-6">
          <div class="flex items-center space-x-4 mb-4">
            <img src="https://brandingpioneers.co.in/scod/google_g_icon_download.png" alt="Kaushal Suraj"
              class="w-12 h-12 rounded-full object-cover border-2 border-white shadow-sm">
            <div>
              <h4 class="font-bold text-gray-900 text-sm">Kaushal Suraj</h4>
              <p class="text-xs text-gray-500 font-medium">Bariatric Surgery Patient</p>
            </div>
          </div>
          <p class="text-gray-600 text-sm leading-relaxed">Got my surgery done in 2019. A very successful procedure and
            I'm extremely happy.</p>
        </div>
        <!-- Story 9 -->
        <div
          class="flex-shrink-0 w-[85%] md:w-full snap-center h-auto break-inside-avoid bg-gray-50 rounded-2xl p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] hover:shadow-xl transition-all duration-300 border border-gray-100 mb-0 md:mb-6">
          <div class="flex items-center space-x-4 mb-4">
            <img src="https://brandingpioneers.co.in/scod/google_g_icon_download.png" alt="Tribhuvan"
              class="w-12 h-12 rounded-full object-cover border-2 border-white shadow-sm">
            <div>
              <h4 class="font-bold text-gray-900 text-sm">Tribhuvan</h4>
              <p class="text-xs text-gray-500 font-medium">Bariatric Surgery Patient</p>
            </div>
          </div>
          <p class="text-gray-600 text-sm leading-relaxed">The surgeon explains everything in the first consultation and
            answers all questions clearly. Very transparent approach.</p>
        </div>
        <!-- Story 10 -->
        <div
          class="flex-shrink-0 w-[85%] md:w-full snap-center h-auto break-inside-avoid bg-gray-50 rounded-2xl p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] hover:shadow-xl transition-all duration-300 border border-gray-100 mb-0 md:mb-6">
          <div class="flex items-center space-x-4 mb-4">
            <img src="https://brandingpioneers.co.in/scod/google_g_icon_download.png" alt="IxRxMADARA"
              class="w-12 h-12 rounded-full object-cover border-2 border-white shadow-sm">
            <div>
              <h4 class="font-bold text-gray-900 text-sm">IxRxMADARA</h4>
              <p class="text-xs text-gray-500 font-medium">Mini Gastric Bypass Patient</p>
            </div>
          </div>
          <p class="text-gray-600 text-sm leading-relaxed">Very satisfied with all the services. My wife had her mini
            gastric bypass from Dr. Arush and the team made her feel extremely comfortable.</p>
        </div>
        <!-- Story 11 -->
        <div
          class="flex-shrink-0 w-[85%] md:w-full snap-center h-auto break-inside-avoid bg-gray-50 rounded-2xl p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] hover:shadow-xl transition-all duration-300 border border-gray-100 mb-0 md:mb-6">
          <div class="flex items-center space-x-4 mb-4">
            <img src="https://brandingpioneers.co.in/scod/google_g_icon_download.png" alt="Alisha Khan"
              class="w-12 h-12 rounded-full object-cover border-2 border-white shadow-sm">
            <div>
              <h4 class="font-bold text-gray-900 text-sm">Alisha Khan</h4>
              <p class="text-xs text-gray-500 font-medium">Bariatric Surgery Patient</p>
            </div>
          </div>
          <p class="text-gray-600 text-sm leading-relaxed">Excellent facility for bariatric surgery. Dr. Arush and the
            team are exceptional at their work.</p>
        </div>
        <!-- Story 12 -->
        <div
          class="flex-shrink-0 w-[85%] md:w-full snap-center h-auto break-inside-avoid bg-gray-50 rounded-2xl p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] hover:shadow-xl transition-all duration-300 border border-gray-100 mb-0 md:mb-6">
          <div class="flex items-center space-x-4 mb-4">
            <img src="https://brandingpioneers.co.in/scod/google_g_icon_download.png" alt="Parkash Raina"
              class="w-12 h-12 rounded-full object-cover border-2 border-white shadow-sm">
            <div>
              <h4 class="font-bold text-gray-900 text-sm">Parkash Raina</h4>
              <p class="text-xs text-gray-500 font-medium">Bariatric Surgery Patient</p>
            </div>
          </div>
          <p class="text-gray-600 text-sm leading-relaxed">My aunt was suffering from morbid obesity and breathlessness.
            Her journey to good health began after consulting Dr. Aarush Sabarwal.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- ===================== MEDICAL AWARENESS SECTION ===================== -->
  <section class="py-12 bg-white relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0 pointer-events-none">
      <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] bg-blue-50 rounded-full blur-[100px] opacity-60">
      </div>
      <div
        class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] bg-emerald-50 rounded-full blur-[100px] opacity-60">
      </div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      <div class="flex flex-col md:flex-row justify-between items-end mb-8 gap-6">
        <div class="text-left observe-animate" data-animation="fade-in-up">
          <div class="flex items-center space-x-4 mb-4">
            <div class="h-px w-10 bg-scod"></div>
            <span class="uppercase tracking-widest text-sm font-bold text-scod">Expert Insights</span>
          </div>
          <h2 class="text-4xl md:text-5xl font-bold mb-4 text-gray-900">Medical <span class="text-scod">Awareness</span>
          </h2>
          <p class="text-lg text-gray-600 max-w-2xl">Empowering you with knowledge. Watch Dr. Arush Sabharwal explain
            complex medical topics in simple terms.</p>
        </div>
        <div class="flex flex-col items-end gap-6 mb-4 md:mb-0">
          <div class="flex items-center gap-3">
            <button id="awareness-prev"
              class="w-12 h-12 rounded-full border border-gray-200 flex items-center justify-center text-gray-600 hover:bg-scod hover:text-white hover:border-scod transition-all duration-300 shadow-sm hover:shadow-md bg-white">
              <i data-feather="chevron-left" class="w-6 h-6"></i>
            </button>
            <button id="awareness-next"
              class="w-12 h-12 rounded-full border border-gray-200 flex items-center justify-center text-gray-600 hover:bg-scod hover:text-white hover:border-scod transition-all duration-300 shadow-sm hover:shadow-md bg-white">
              <i data-feather="chevron-right" class="w-6 h-6"></i>
            </button>
          </div>
          <a href="https://www.youtube.com/@drarushsabharwal" target="_blank" rel="noopener noreferrer"
            class="group flex items-center gap-2 text-scod font-bold text-lg hover:text-blue-700 transition-all">
            <span>Visit YouTube Channel</span>
            <i data-feather="arrow-right" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
          </a>
        </div>
      </div>
      <div class="overflow-hidden -mx-4">
        <div id="awareness-slider" class="flex transition-transform duration-500 ease-out" style="width: 500%;">
          <!-- Video 1 -->
          <div class="w-full md:w-1/2 lg:w-1/3 px-4 flex-shrink-0 cursor-pointer group" style="width: 6.67%;"
            data-video-id="TaOuNUjv_Dc">
            <div
              class="relative rounded-2xl overflow-hidden aspect-video mb-6 shadow-lg group-hover:shadow-xl transition-all duration-300 border border-gray-100 bg-gray-100">
              <img src="https://img.youtube.com/vi/TaOuNUjv_Dc/hqdefault.jpg" alt="Weight Loss Experience"
                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
              <div
                class="absolute inset-0 bg-black/10 group-hover:bg-black/20 transition-colors duration-300 flex items-center justify-center">
                <div
                  class="w-16 h-16 rounded-full bg-white/90 backdrop-blur-sm flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg">
                  <i data-feather="play" class="w-6 h-6 text-scod ml-1"></i>
                </div>
              </div>
            </div>
            <div>
              <span class="text-scod text-sm font-bold uppercase tracking-wider">Awareness</span>
              <h3 class="text-xl font-bold text-gray-900 mt-2 group-hover:text-scod transition-colors line-clamp-2">
                Weightloss Experience with Bariatric Surgery</h3>
            </div>
          </div>
          <!-- Video 2 -->
          <div class="w-full md:w-1/2 lg:w-1/3 px-4 flex-shrink-0 cursor-pointer group" style="width: 6.67%;"
            data-video-id="rEd-4Pov_iw">
            <div
              class="relative rounded-2xl overflow-hidden aspect-video mb-6 shadow-lg group-hover:shadow-xl transition-all duration-300 border border-gray-100 bg-gray-100">
              <img src="https://img.youtube.com/vi/rEd-4Pov_iw/hqdefault.jpg" alt="Types of Weight Loss Surgeries"
                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
              <div
                class="absolute inset-0 bg-black/10 group-hover:bg-black/20 transition-colors duration-300 flex items-center justify-center">
                <div
                  class="w-16 h-16 rounded-full bg-white/90 backdrop-blur-sm flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg">
                  <i data-feather="play" class="w-6 h-6 text-scod ml-1"></i>
                </div>
              </div>
            </div>
            <div>
              <span class="text-scod text-sm font-bold uppercase tracking-wider">Education</span>
              <h3 class="text-xl font-bold text-gray-900 mt-2 group-hover:text-scod transition-colors line-clamp-2">
                Types of Weight Loss Surgeries</h3>
            </div>
          </div>
          <!-- Video 3 -->
          <div class="w-full md:w-1/2 lg:w-1/3 px-4 flex-shrink-0 cursor-pointer group" style="width: 6.67%;"
            data-video-id="bNoFXoLDnEc">
            <div
              class="relative rounded-2xl overflow-hidden aspect-video mb-6 shadow-lg group-hover:shadow-xl transition-all duration-300 border border-gray-100 bg-gray-100">
              <img src="https://img.youtube.com/vi/bNoFXoLDnEc/hqdefault.jpg" alt="How Bariatric Surgery is done"
                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
              <div
                class="absolute inset-0 bg-black/10 group-hover:bg-black/20 transition-colors duration-300 flex items-center justify-center">
                <div
                  class="w-16 h-16 rounded-full bg-white/90 backdrop-blur-sm flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg">
                  <i data-feather="play" class="w-6 h-6 text-scod ml-1"></i>
                </div>
              </div>
            </div>
            <div>
              <span class="text-scod text-sm font-bold uppercase tracking-wider">Education</span>
              <h3 class="text-xl font-bold text-gray-900 mt-2 group-hover:text-scod transition-colors line-clamp-2">How
                Bariatric Surgery is done?</h3>
            </div>
          </div>
          <!-- Video 4 -->
          <div class="w-full md:w-1/2 lg:w-1/3 px-4 flex-shrink-0 cursor-pointer group" style="width: 6.67%;"
            data-video-id="wBhZyyHeWtI">
            <div
              class="relative rounded-2xl overflow-hidden aspect-video mb-6 shadow-lg group-hover:shadow-xl transition-all duration-300 border border-gray-100 bg-gray-100">
              <img src="https://img.youtube.com/vi/wBhZyyHeWtI/hqdefault.jpg" alt="Bariatric Surgery Insurance"
                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
              <div
                class="absolute inset-0 bg-black/10 group-hover:bg-black/20 transition-colors duration-300 flex items-center justify-center">
                <div
                  class="w-16 h-16 rounded-full bg-white/90 backdrop-blur-sm flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg">
                  <i data-feather="play" class="w-6 h-6 text-scod ml-1"></i>
                </div>
              </div>
            </div>
            <div>
              <span class="text-scod text-sm font-bold uppercase tracking-wider">Insurance</span>
              <h3 class="text-xl font-bold text-gray-900 mt-2 group-hover:text-scod transition-colors line-clamp-2">Is
                Bariatric Surgery covered in Insurance?</h3>
            </div>
          </div>
          <!-- Video 5 -->
          <div class="w-full md:w-1/2 lg:w-1/3 px-4 flex-shrink-0 cursor-pointer group" style="width: 6.67%;"
            data-video-id="V-gaaGIaKGw">
            <div
              class="relative rounded-2xl overflow-hidden aspect-video mb-6 shadow-lg group-hover:shadow-xl transition-all duration-300 border border-gray-100 bg-gray-100">
              <img src="https://img.youtube.com/vi/V-gaaGIaKGw/hqdefault.jpg" alt="Truth about Diabetes"
                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
              <div
                class="absolute inset-0 bg-black/10 group-hover:bg-black/20 transition-colors duration-300 flex items-center justify-center">
                <div
                  class="w-16 h-16 rounded-full bg-white/90 backdrop-blur-sm flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg">
                  <i data-feather="play" class="w-6 h-6 text-scod ml-1"></i>
                </div>
              </div>
            </div>
            <div>
              <span class="text-scod text-sm font-bold uppercase tracking-wider">Diabetes</span>
              <h3 class="text-xl font-bold text-gray-900 mt-2 group-hover:text-scod transition-colors line-clamp-2">The
                Truth about Diabetes!</h3>
            </div>
          </div>
          <!-- Video 6 -->
          <div class="w-full md:w-1/2 lg:w-1/3 px-4 flex-shrink-0 cursor-pointer group" style="width: 6.67%;"
            data-video-id="vs2gB7Zyuks">
            <div
              class="relative rounded-2xl overflow-hidden aspect-video mb-6 shadow-lg group-hover:shadow-xl transition-all duration-300 border border-gray-100 bg-gray-100">
              <img src="https://img.youtube.com/vi/vs2gB7Zyuks/hqdefault.jpg" alt="Changes after Bariatric Surgery"
                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
              <div
                class="absolute inset-0 bg-black/10 group-hover:bg-black/20 transition-colors duration-300 flex items-center justify-center">
                <div
                  class="w-16 h-16 rounded-full bg-white/90 backdrop-blur-sm flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg">
                  <i data-feather="play" class="w-6 h-6 text-scod ml-1"></i>
                </div>
              </div>
            </div>
            <div>
              <span class="text-scod text-sm font-bold uppercase tracking-wider">Post-Surgery</span>
              <h3 class="text-xl font-bold text-gray-900 mt-2 group-hover:text-scod transition-colors line-clamp-2">
                Changes after Bariatric Surgery!</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ===================== FOOTER ===================== -->
  <?php include 'includes/footer.php'; ?>
  <!-- Custom JS -->
  <script>
    feather.replace();
    // Medical Awareness Slider
    (function () {
      const slider = document.getElementById('awareness-slider');
      const prevBtn = document.getElementById('awareness-prev');
      const nextBtn = document.getElementById('awareness-next');
      if (!slider || !prevBtn || !nextBtn) return;
      const items = slider.children;
      let index = 0;
      function getItemsPerView() {
        if (window.innerWidth >= 1024) return 3;
        if (window.innerWidth >= 768) return 2;
        return 1;
      }
      function updateSlider() {
        const itemsPerView = getItemsPerView();
        const maxIndex = Math.max(0, items.length - itemsPerView);
        index = Math.min(index, maxIndex);
        const itemWidth = 100 / items.length;
        slider.style.transform = `translateX(-${index * itemWidth}%)`;
      }
      prevBtn.addEventListener('click', () => {
        index = Math.max(0, index - 1);
        updateSlider();
      });
      nextBtn.addEventListener('click', () => {
        const itemsPerView = getItemsPerView();
        const maxIndex = Math.max(0, items.length - itemsPerView);
        index = Math.min(maxIndex, index + 1);
        updateSlider();
      });
      window.addEventListener('resize', updateSlider);
      updateSlider();
      // Video Modal for Awareness section
      const videoCards = document.querySelectorAll('#awareness-slider [data-video-id]');
      const modal = document.getElementById('video-modal');
      const iframe = document.getElementById('video-iframe');
      const closeBtn = document.getElementById('video-modal-close');
      if (modal && iframe) {
        videoCards.forEach(card => {
          card.addEventListener('click', () => {
            const videoId = card.dataset.videoId;
            if (videoId) {
              iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
              modal.classList.add('active');
              document.body.style.overflow = 'hidden';
            }
          });
        });
      }
    })();
  </script>
</body>
</html>