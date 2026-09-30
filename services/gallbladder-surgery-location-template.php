<?php
if (!isset($location) || !isset($slug)) {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: /services/laparoscopic-surgery");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Gallbladder Surgeon in <?php echo htmlspecialchars($location); ?> | Dr. Arush Sabharwal</title>
    <meta name="description"
        content="Seeking the best gallbladder surgeon in <?php echo htmlspecialchars($location); ?>? Consult Dr. Arush Sabharwal for safe, painless laparoscopic gallbladder stone surgery (cholecystectomy) and rapid recovery.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="robots" content="index, follow">   
    <link rel="canonical" href="https://scodclinic.com/gallbladder-surgeon-in-<?php echo htmlspecialchars($slug); ?>" />
    <script>tailwind.config = { theme: { extend: { colors: { scod: '#1876AA' }, fontFamily: { sans: ['"Nunito Sans"', 'sans-serif'] } } } }</script>
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="<?php echo $path_prefix; ?>css/custom.css">
    <style>
        html {
            scroll-behavior: smooth;
        }
        .observe-animate {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.6s ease-out;
        }
        .observe-animate.visible {
            opacity: 1;
            transform: translateY(0);
        }
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
    
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Dr. Arush Sabharwal: Gallbladder Surgeon in <?php echo htmlspecialchars($location); ?>, Delhi, India | Laparoscopic Cholecystectomy & Gallstone Removal Specialist",
  "image": "https://scodclinic.com/assets/scod/dr-arush-final-image.png",
  "@id": "https://scodclinic.com/gallbladder-surgeon-in-<?php echo htmlspecialchars($slug); ?>",
  "url": "https://scodclinic.com/gallbladder-surgeon-in-<?php echo htmlspecialchars($slug); ?>",
  "telephone": "8130130489",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "66A/2, New Rohtak Rd, Block 67, Karol Bagh",
    "addressLocality": "New Delhi",
    "postalCode": "110005",
    "addressCountry": "IN"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 28.6583642,
    "longitude": 77.1937378
  }  
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "What is Laparoscopic Gallbladder Surgery (Cholecystectomy)?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Laparoscopic cholecystectomy is a minimally invasive surgical procedure used to remove a diseased or stone-filled gallbladder through 3 to 4 tiny keyhole incisions (5-10mm). It is the worldwide gold standard treatment for gallstones, offering fast healing, negligible scarring, and minimal discomfort."
    }
  },{
    "@type": "Question",
    "name": "What are the common symptoms of gallstones that indicate surgery is needed?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Common symptoms include sharp, intense pain in the upper right abdomen (often after consuming fatty meals), pain radiating to the right shoulder or back, severe bloating, indigestion, nausea, vomiting, and in complicated cases, jaundice or fever."
    }
  },{
    "@type": "Question",
    "name": "Can gallstones be cured or dissolved with medicines alone?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Medications are generally ineffective for long-term gallstone management. While some oral bile acid medicines may temporarily reduce small cholesterol stones over many months, recurrence rates exceed 50% once medication stops. Surgical removal of the gallbladder is the only definitive and permanent cure."
    }
  },{
    "@type": "Question",
    "name": "How long is the hospital stay and recovery time after gallbladder surgery?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Most patients are discharged within 24 hours of laparoscopic surgery. Patients can typically walk comfortably on the same day and resume light desk work within 5 to 7 days, with full recovery achieved within 2 to 3 weeks."
    }
  },{
    "@type": "Question",
    "name": "Can a person live a normal, healthy life without a gallbladder?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes, absolutely. The liver continuously produces bile to digest fats. Without a gallbladder, bile flows directly into the small intestine. After a brief adjustment period of 2 to 4 weeks with light dietary modifications, patients digest food normally and experience no compromise to life expectancy or health."
    }
  },{
    "@type": "Question",
    "name": "Is laparoscopic gallbladder surgery safe?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes, laparoscopic cholecystectomy is one of the safest and most frequently performed abdominal surgeries worldwide. When performed by an experienced laparoscopic specialist like Dr. Arush Sabharwal using advanced 4K visualization and precision instruments, complications are exceptionally rare."
    }
  },{
    "@type": "Question",
    "name": "Is gallbladder stone surgery covered by health insurance?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes, symptomatic gallbladder stone removal is recognized as a medically necessary surgery and is covered by virtually all health insurance policies and TPAs in India. SCOD Clinic assists patients with seamless cashless insurance approval."
    }
  },{
    "@type": "Question",
    "name": "Why choose Dr. Arush Sabharwal as the best gallbladder surgeon in <?php echo htmlspecialchars($location); ?>?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Dr. Arush Sabharwal has over 15 years of dedicated gastrointestinal and advanced laparoscopic surgical experience. With thousands of successful procedures, cutting-edge surgical infrastructure, zero-compromise safety protocols, and personalized patient care, he is widely regarded as a leading gallbladder specialist in <?php echo htmlspecialchars($location); ?> and Delhi NCR."
    }
  }]
}
</script>
    
</head>
<body class="min-h-screen bg-white text-gray-900 pt-20">
    <!-- NAVBAR -->
    <?php
    if (!isset($path_prefix)) {
        $path_prefix = '';
    }
    include __DIR__ . '/../includes/header.php';
    ?>

    <!-- HERO SECTION -->
    <section class="relative h-[520px] flex items-center bg-gray-900 text-white overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="<?php echo $path_prefix; ?>assets/scod/Laparoscopic Surgery.webp"
                alt="Gallbladder Surgery in <?php echo htmlspecialchars($location); ?>" class="w-full h-full object-cover object-center">
            <div class="absolute inset-0 bg-gradient-to-r from-scod/95 via-scod/40 to-black/30"></div>
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-2xl observe-animate" data-animation="fade-in-left">
                <div
                    class="inline-flex items-center space-x-2 bg-white/10 backdrop-blur-md px-4 py-2 rounded-full mb-6 border border-white/20">
                    <i data-feather="shield" class="w-5 h-5 text-emerald-300"></i>
                    <span class="text-sm font-bold tracking-wide uppercase">Advanced Laparoscopic & GI Surgery</span>
                </div>
                <h1 class="text-4xl text-white md:text-6xl font-bold mb-6 leading-tight">Dr. Arush Sabharwal:<br><span
                        class="text-emerald-300">Gallbladder Surgeon in <?php echo htmlspecialchars($location); ?></span></h1>
                <p class="text-lg md:text-xl text-blue-100 mb-8 leading-relaxed font-light">Painless, minimally invasive laparoscopic gallbladder removal (cholecystectomy) for permanent relief from gallstones and abdominal pain. Experience same-day discharge and swift recovery.</p>
                <div class="flex flex-col sm:flex-row gap-5">
                    <a href="#consultation-form"
                        class="bg-white text-scod px-8 py-3 rounded-full font-bold text-base hover:bg-gray-100 transition-all shadow-lg flex items-center justify-center space-x-2"><i
                            data-feather="calendar" class="w-5 h-5"></i><span>Book Consultation</span></a>
                    <a href="tel:+918130130489"
                        class="bg-transparent border-2 border-white/30 backdrop-blur-sm text-white px-8 py-3 rounded-full font-bold text-base hover:bg-white/10 transition-all flex items-center justify-center space-x-2"><i
                            data-feather="phone-call" class="w-5 h-5"></i><span>Call: +91 8130130489</span></a>
                </div>
            </div>
        </div>
    </section>

    <!-- OVERVIEW SECTION -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="observe-animate" data-animation="fade-in-left">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="h-px w-10 bg-scod"></div><span
                            class="uppercase tracking-widest text-sm font-bold text-scod">Overview</span>
                    </div>
                    <h2 class="text-4xl font-bold text-gray-900 mb-6 leading-tight">Expert Care for <br><span
                            class="text-scod">Gallbladder & Gallstones</span></h2>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">The gallbladder is a small, pear-shaped digestive organ nestled beneath the liver that stores bile. When hardened deposits form inside—known as gallstones or cholelithiasis—they can obstruct bile flow, leading to severe spasms, inflammation (cholecystitis), infection, or even acute pancreatitis. For residents seeking a trusted <strong>Gallbladder Surgeon in <?php echo htmlspecialchars($location); ?></strong>, SCOD Clinic provides world-class laparoscopic care.</p>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">Laparoscopic cholecystectomy is the undisputed gold standard for permanent relief. Rather than using large, painful open incisions, Dr. Arush Sabharwal utilizes tiny keyhole access points (5-10mm) and high-definition optical cameras. This guarantees minimal tissue trauma, zero blood loss, almost no visible scarring, and a quick return to your daily life.</p>
                    <div class="flex flex-wrap items-center gap-6 text-gray-800 font-medium">
                        <div class="flex items-center space-x-2"><i data-feather="check-circle"
                                class="text-emerald-500 w-5 h-5"></i><span>Minimally Invasive (Keyhole)</span></div>
                        <div class="flex items-center space-x-2"><i data-feather="check-circle"
                                class="text-emerald-500 w-5 h-5"></i><span>24-Hour Discharge</span></div>
                        <div class="flex items-center space-x-2"><i data-feather="check-circle"
                                class="text-emerald-500 w-5 h-5"></i><span>Painless & Quick Recovery</span></div>
                    </div>
                </div>
                <div class="relative observe-animate" data-animation="scale-in">
                    <div class="rounded-2xl overflow-hidden shadow-2xl border-8 border-gray-50">
                        <img src="<?php echo $path_prefix; ?>assets/scod/treatment/laparoscopic/gallstones.webp"
                            alt="Gallbladder Stone Treatment in <?php echo htmlspecialchars($location); ?>" class="w-full h-auto object-cover">
                    </div>
                    <div
                        class="absolute -bottom-6 -left-6 bg-white p-6 rounded-xl shadow-xl border border-gray-100 max-w-xs hidden md:block">
                        <p class="text-scod font-bold text-4xl mb-1">15+</p>
                        <p class="text-gray-600 text-sm">Years of surgical excellence in laparoscopic GI & gallbladder procedures.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHO NEEDS SURGERY / SYMPTOMS -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="uppercase tracking-widest text-sm font-bold text-scod">Clinical Indicators</span>
                <h2 class="text-4xl font-bold text-gray-900 mt-2">When Do You Need <span class="text-scod">Gallbladder Surgery?</span></h2>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Gallbladder stones do not resolve on their own. If you experience any of the following symptoms, consult an experienced Gallbladder Surgeon in <?php echo htmlspecialchars($location); ?> promptly to avoid acute complications.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div
                    class="rounded-2xl bg-white border border-gray-100 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group observe-animate">
                    <div class="p-8">
                        <div class="w-14 h-14 rounded-2xl bg-blue-50 text-scod flex items-center justify-center mb-6 group-hover:bg-scod group-hover:text-white transition-colors duration-300">
                            <i data-feather="alert-triangle" class="w-7 h-7"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Biliary Colic (Severe Pain)</h3>
                        <p class="text-gray-600 leading-relaxed">Sudden, intensifying pain in the upper right abdomen or center of your stomach, typically triggered 30 to 60 minutes after consuming oily or fatty foods.</p>
                    </div>
                </div>
                <div
                    class="rounded-2xl bg-white border border-gray-100 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group observe-animate delay-100">
                    <div class="p-8">
                        <div class="w-14 h-14 rounded-2xl bg-blue-50 text-scod flex items-center justify-center mb-6 group-hover:bg-scod group-hover:text-white transition-colors duration-300">
                            <i data-feather="disc" class="w-7 h-7"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Symptomatic Gallstones</h3>
                        <p class="text-gray-600 leading-relaxed">Multiple or single large gallstones confirmed by ultrasound causing persistent dyspepsia, chronic acid indigestion, abdominal gas, and persistent bloating.</p>
                    </div>
                </div>
                <div
                    class="rounded-2xl bg-white border border-gray-100 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group observe-animate delay-200">
                    <div class="p-8">
                        <div class="w-14 h-14 rounded-2xl bg-blue-50 text-scod flex items-center justify-center mb-6 group-hover:bg-scod group-hover:text-white transition-colors duration-300">
                            <i data-feather="thermometer" class="w-7 h-7"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Acute Cholecystitis (Infection)</h3>
                        <p class="text-gray-600 leading-relaxed">Bacterial infection and inflammation of the gallbladder wall characterized by persistent fever, chills, severe tenderness, and elevated white blood cell counts.</p>
                    </div>
                </div>
                <div
                    class="rounded-2xl bg-white border border-gray-100 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group observe-animate">
                    <div class="p-8">
                        <div class="w-14 h-14 rounded-2xl bg-blue-50 text-scod flex items-center justify-center mb-6 group-hover:bg-scod group-hover:text-white transition-colors duration-300">
                            <i data-feather="shield-alert" class="w-7 h-7"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Gallbladder Polyps & Thickening</h3>
                        <p class="text-gray-600 leading-relaxed">Polyps exceeding 8-10mm or chronic gallbladder wall thickening (>3-4mm), which carry potential malignant risks if left unmonitored or unremoved.</p>
                    </div>
                </div>
                <div
                    class="rounded-2xl bg-white border border-gray-100 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group observe-animate delay-100">
                    <div class="p-8">
                        <div class="w-14 h-14 rounded-2xl bg-blue-50 text-scod flex items-center justify-center mb-6 group-hover:bg-scod group-hover:text-white transition-colors duration-300">
                            <i data-feather="eye" class="w-7 h-7"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Jaundice (Bile Duct Obstruction)</h3>
                        <p class="text-gray-600 leading-relaxed">Yellowing of the eyes and skin, dark urine, or pale stools resulting when small stones slip into the common bile duct (choledocholithiasis).</p>
                    </div>
                </div>
                <div
                    class="rounded-2xl bg-white border border-gray-100 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group observe-animate delay-200">
                    <div class="p-8">
                        <div class="w-14 h-14 rounded-2xl bg-blue-50 text-scod flex items-center justify-center mb-6 group-hover:bg-scod group-hover:text-white transition-colors duration-300">
                            <i data-feather="zap" class="w-7 h-7"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Gallstone Pancreatitis</h3>
                        <p class="text-gray-600 leading-relaxed">A serious emergency where a gallstone blocks the pancreatic duct, triggering acute pancreas inflammation that necessitates timely surgical intervention.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SURGICAL OPTIONS TABS -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <span class="uppercase tracking-widest text-sm font-bold text-scod">Our Expertise</span>
                <h2 class="text-4xl font-bold text-gray-900 mt-2">Gallbladder Surgical Options</h2>
                <p class="text-gray-600 mt-3 max-w-2xl mx-auto">Advanced surgical modalities customized to each patient’s clinical status and anatomy.</p>
            </div>
            <div class="flex flex-wrap justify-center gap-4 mb-10">
                <button
                    class="procedure-tab px-8 py-4 rounded-full font-bold text-sm md:text-base transition-all duration-300 shadow-sm border-2 bg-scod text-white border-scod shadow-lg scale-105"
                    data-tab="standard-lap">Laparoscopic Cholecystectomy</button>
                <button
                    class="procedure-tab px-8 py-4 rounded-full font-bold text-sm md:text-base transition-all duration-300 shadow-sm border-2 bg-white text-gray-600 border-gray-100 hover:border-scod hover:text-scod"
                    data-tab="single-incision">Single Incision (SILS)</button>
                <button
                    class="procedure-tab px-8 py-4 rounded-full font-bold text-sm md:text-base transition-all duration-300 shadow-sm border-2 bg-white text-gray-600 border-gray-100 hover:border-scod hover:text-scod"
                    data-tab="emergency-gall">Emergency Cholecystectomy</button>
                <button
                    class="procedure-tab px-8 py-4 rounded-full font-bold text-sm md:text-base transition-all duration-300 shadow-sm border-2 bg-white text-gray-600 border-gray-100 hover:border-scod hover:text-scod"
                    data-tab="complex-biliary">Complex Biliary Surgery</button>
            </div>
            <div class="min-h-[500px]" id="procedure-content-container">
                <!-- Populated by JS -->
            </div>
        </div>
    </section>

    <!-- DOCTOR PROFILE SECTION -->
    <section class="py-16 bg-gray-50 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-5 relative">
                    <div
                        class="relative rounded-2xl overflow-hidden shadow-2xl border-4 border-white h-[420px] lg:h-[500px] z-10">
                        <img src="<?php echo $path_prefix; ?>assets/scod/dr-arush-final-image.png"
                            alt="Dr. Arush Sabharwal - Gallbladder Surgeon in <?php echo htmlspecialchars($location); ?>" class="w-full h-full object-cover object-top">
                    </div>
                </div>
                <div class="lg:col-span-7">
                    <div class="flex items-center space-x-4 mb-6">
                        <div class="h-px w-12 bg-scod"></div><span
                            class="text-scod font-bold tracking-widest uppercase text-sm">Meet The Surgeon</span>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">Dr. Arush Sabharwal: Leading Gallbladder Surgeon in <?php echo htmlspecialchars($location); ?></h2>
                    <h3 class="text-xl text-gray-500 font-medium mb-8 border-l-4 border-scod pl-4">Chairman & Chief Surgeon, SCOD</h3>
                    <p class="text-gray-600 leading-relaxed mb-6 text-lg">Dr. Arush Sabharwal is an esteemed Gastrointestinal and Advanced Laparoscopic Surgeon serving patients in <?php echo htmlspecialchars($location); ?> and across Delhi NCR with more than 15 years of dedicated surgical expertise. Known for his surgical precision and gentle bedside approach, he has conducted thousands of successful keyhole gallbladder removals with near-zero complication rates.
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-6 text-lg">Using high-definition 4K endoscopic visualization and ultra-fine instrumentation, Dr. Sabharwal ensures gentle handling of delicate biliary anatomy, eliminating the risk of recurrent attacks and enabling same-day or 24-hour discharge.</p>
                    <blockquote class="text-xl font-medium text-gray-800 italic mb-8 relative z-10">"Gallbladder surgery through modern laparoscopy allows patients to return to their normal lives pain-free in just days, completely eliminating the fear of sudden, debilitating gallstone attacks."</blockquote>
                    <a href="<?php echo $path_prefix; ?>about.php"
                        class="inline-flex items-center space-x-2 bg-scod text-white px-8 py-4 rounded-full font-bold hover:bg-blue-700 transition-all shadow-lg"><span>View Full Profile</span><i data-feather="arrow-right" class="w-4 h-4"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- KEY ADVANTAGES SECTION -->
    <section class="py-16 bg-scod text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-black/25 to-transparent"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="observe-animate" data-animation="fade-in-left">
                    <h2 class="text-4xl md:text-5xl font-bold mb-6 leading-tight text-white">Why Choose SCOD for <br><span
                            class="text-emerald-300">Gallbladder Surgery?</span></h2>
                    <p class="text-xl text-blue-100 mb-8 leading-relaxed">At SCOD Clinic, we combine cutting-edge German optical technology, international infection control protocols, and empathetic clinical care to guarantee you a safe, painless, and rapid recovery.</p>
                    <div class="grid grid-cols-2 gap-8 mb-8">
                        <div>
                            <div class="text-4xl font-bold text-white mb-1">99.8%</div>
                            <div class="text-blue-200 text-sm font-medium">Successful Laparoscopic Completion</div>
                        </div>
                        <div>
                            <div class="text-4xl font-bold text-white mb-1">24 Hrs</div>
                            <div class="text-blue-200 text-sm font-medium">Average Hospital Discharge</div>
                        </div>
                    </div>
                </div>
                <div class="bg-white/10 backdrop-blur-md rounded-3xl p-8 border border-white/20 observe-animate"
                    data-animation="scale-in">
                    <h3 class="text-2xl font-bold mb-6 text-white">Patient-First Excellence</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start"><span
                                class="w-8 h-8 rounded-full bg-emerald-500 flex items-center justify-center mr-4 flex-shrink-0 font-bold">1</span>
                            <p class="text-blue-50"><strong>High-Definition 4K Laparoscopy:</strong> Unsurpassed anatomical clarity ensuring complete biliary safety and accurate dissection.</p>
                        </li>
                        <li class="flex items-start"><span
                                class="w-8 h-8 rounded-full bg-emerald-500 flex items-center justify-center mr-4 flex-shrink-0 font-bold">2</span>
                            <p class="text-blue-50"><strong>Minimal Post-Op Pain:</strong> Micro-keyhole incisions and advanced local analgesia protocols ensure comfortable, pain-free recovery.</p>
                        </li>
                        <li class="flex items-start"><span
                                class="w-8 h-8 rounded-full bg-emerald-500 flex items-center justify-center mr-4 flex-shrink-0 font-bold">3</span>
                            <p class="text-blue-50"><strong>Cashless Insurance Assistance:</strong> Full support for 100% cashless mediclaim approvals with all leading TPAs and insurers.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- COMPARISON: KEYHOLE VS OPEN SURGERY -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="uppercase tracking-widest text-sm font-bold text-scod">Clinical Comparison</span>
                <h2 class="text-4xl font-bold text-gray-900 mt-2">Laparoscopic vs Traditional Open Surgery</h2>
                <p class="text-gray-600 mt-3 max-w-2xl mx-auto">Why keyhole gallbladder surgery is the preferred approach for patients in <?php echo htmlspecialchars($location); ?>.</p>
            </div>
            <div class="max-w-4xl mx-auto overflow-hidden rounded-2xl border border-gray-200 shadow-md">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-100 text-gray-800">
                            <th class="py-4 px-6 font-bold text-sm uppercase tracking-wider">Feature</th>
                            <th class="py-4 px-6 font-bold text-sm uppercase tracking-wider text-scod bg-blue-50/70">Laparoscopic Surgery (SCOD)</th>
                            <th class="py-4 px-6 font-bold text-sm uppercase tracking-wider text-gray-500">Traditional Open Surgery</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 text-sm">
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="py-4 px-6 font-semibold text-gray-800">Incision Size</td>
                            <td class="py-4 px-6 font-semibold text-emerald-600 bg-blue-50/30">3 to 4 tiny dots (5-10 mm)</td>
                            <td class="py-4 px-6 text-gray-600">Single 5 to 7 inch long incision</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="py-4 px-6 font-semibold text-gray-800">Hospital Stay</td>
                            <td class="py-4 px-6 font-semibold text-emerald-600 bg-blue-50/30">24 Hours (Same day in some cases)</td>
                            <td class="py-4 px-6 text-gray-600">4 to 7 Days</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="py-4 px-6 font-semibold text-gray-800">Post-Op Pain</td>
                            <td class="py-4 px-6 font-semibold text-emerald-600 bg-blue-50/30">Minimal; manageable with mild oral pain relievers</td>
                            <td class="py-4 px-6 text-gray-600">Significant; often requiring strong IV analgesics</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="py-4 px-6 font-semibold text-gray-800">Return to Work</td>
                            <td class="py-4 px-6 font-semibold text-emerald-600 bg-blue-50/30">5 to 7 Days</td>
                            <td class="py-4 px-6 text-gray-600">4 to 6 Weeks</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="py-4 px-6 font-semibold text-gray-800">Infection Risk</td>
                            <td class="py-4 px-6 font-semibold text-emerald-600 bg-blue-50/30">Extremely Low (< 0.5%)</td>
                            <td class="py-4 px-6 text-gray-600">Higher risk of wound infection and hernia</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- PATIENT TESTIMONIALS (Slider) -->
    <section class="py-16 bg-gray-50 overflow-hidden" id="testimonials-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-10 gap-6">
                <div class="text-left">
                    <span class="uppercase tracking-widest text-sm font-bold text-scod">Success Stories</span>
                    <h2 class="text-4xl font-bold text-gray-900 mt-2">Real Patients, <span class="text-scod">Real Relief</span></h2>
                    <p class="text-gray-600 mt-2">Hear directly from patients who received prompt, compassionate care at SCOD Clinic.</p>
                </div>
                <div class="flex flex-col items-end gap-4">
                    <div class="flex items-center gap-3">
                        <button id="testimonials-prev-btn"
                            class="w-10 h-10 rounded-full border border-gray-200 flex items-center justify-center text-gray-600 hover:bg-scod hover:text-white hover:border-scod transition-all duration-300 shadow-sm bg-white"><i
                                data-feather="chevron-left" class="w-5 h-5"></i></button>
                        <button id="testimonials-next-btn"
                            class="w-10 h-10 rounded-full border border-gray-200 flex items-center justify-center text-gray-600 hover:bg-scod hover:text-white hover:border-scod transition-all duration-300 shadow-sm bg-white"><i
                                data-feather="chevron-right" class="w-5 h-5"></i></button>
                    </div>
                    <a href="<?php echo $path_prefix; ?>resources.php"
                        class="inline-flex items-center space-x-2 text-scod font-bold hover:text-blue-700 transition-colors"><span>View All Stories</span><i data-feather="arrow-right" class="w-4 h-4"></i></a>
                </div>
            </div>
            <div class="-mx-4 overflow-hidden px-4 md:px-0">
                <div id="testimonials-slider"
                    class="flex transition-transform duration-500 ease-out cursor-grab active:cursor-grabbing">
                    <!-- Populated by JS -->
                </div>
            </div>
        </div>
    </section>


    <!-- Gallbladder Surgeon Near Me -->
    <section class="py-16 bg-white border-t border-gray-100" id="gallbladder-surgeon-near-me">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="uppercase tracking-widest text-sm font-bold text-scod">Regional Accessibility</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">Gallbladder Surgeon <span class="text-scod">Near Me</span></h2>
                <p class="text-gray-600 mt-3 max-w-2xl mx-auto">Providing advanced laparoscopic gallbladder surgery consultations and surgical care across neighboring locations in Delhi NCR.</p>
            </div>
            
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <?php
                $all_locations = [
                    'Adarsh Nagar' => 'adarsh-nagar',
                    'Badarpur' => 'badarpur',
                    'Bawana' => 'bawana',
                    'Bijwasan' => 'bijwasan',
                    'Burari' => 'burari',
                    'Chandni Chowk' => 'chandni-chowk',
                    'Chhatarpur' => 'chhatarpur',
                    'Deoli' => 'deoli',
                    'Dwarka' => 'dwarka',
                    'Gandhi Nagar' => 'gandhi-nagar',
                    'Gokal Puri' => 'gokal-puri',
                    'Janakpuri' => 'janakpuri',
                    'Jangpura' => 'jangpura',
                    'Kalkaji' => 'kalkaji',
                    'Karawal Nagar' => 'karawal-nagar',
                    'Karol Bagh' => 'karol-bagh',
                    'Kirari' => 'kirari',
                    'Malviya Nagar' => 'malviya-nagar',
                    'Matiala' => 'matiala',
                    'Mehrauli' => 'mehrauli',
                    'Model Town' => 'model-town',
                    'Mundka' => 'mundka',
                    'Najafgarh' => 'najafgarh',
                    'Nangloi Jat' => 'nangloi-jat',
                    'Narela' => 'narela',
                    'Patel Nagar' => 'patel-nagar',
                    'Patparganj' => 'patparganj',
                    'Rajouri Garden' => 'rajouri-garden',
                    'Rohini' => 'rohini',
                    'Sadar Bazar' => 'sadar-bazar',
                    'Shahdara' => 'shahdara',
                    'Shakur Basti' => 'shakur-basti',
                    'Shalimar Bagh' => 'shalimar-bagh',
                    'Vikaspuri' => 'vikaspuri',
                    'Vishwas Nagar' => 'vishwas-nagar',
                    'Yamuna Vihar' => 'yamuna-vihar'
                ];
                $current_slug = isset($slug) ? $slug : '';
                foreach ($all_locations as $loc_name => $loc_slug):
                    if ($loc_slug === $current_slug):
                ?>
                    <div class="bg-scod text-white border border-scod rounded-xl p-4 flex items-center gap-3 shadow-md">
                        <i data-feather="map-pin" class="w-4 h-4 text-white shrink-0"></i>
                        <span class="text-xs font-bold line-clamp-1"><?php echo htmlspecialchars($loc_name); ?></span>
                    </div>
                <?php else: ?>
                    <a href="/gallbladder-surgeon-in-<?php echo $loc_slug; ?>" 
                       class="group bg-gray-50 hover:bg-scod border border-gray-200 hover:border-scod rounded-xl p-4 flex items-center gap-3 transition-all duration-300 shadow-sm hover:shadow-md hover:-translate-y-0.5">
                        <i data-feather="map-pin" class="w-4 h-4 text-scod group-hover:text-white shrink-0 transition-colors"></i>
                        <span class="text-xs font-semibold text-gray-700 group-hover:text-white transition-colors line-clamp-1"><?php echo htmlspecialchars($loc_name); ?></span>
                    </a>
                <?php endif; endforeach; ?>
            </div>
        </div>
    </section>

    <!-- FAQs SECTION -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="uppercase tracking-widest text-sm font-bold text-scod">Common Questions</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">Frequently <span class="text-scod">Asked Questions</span></h2>
                <p class="text-gray-600 mt-3">Helpful answers regarding gallbladder stone surgery in <?php echo htmlspecialchars($location); ?>.</p>
            </div>
            <div class="space-y-4">
                <div id="faq-container" class="space-y-4">
                    <!-- Populated by JS -->
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT FORM SECTION -->
    <section class="py-16 bg-white border-t border-gray-200" id="consultation-form">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                <div>
                    <h2 class="text-4xl font-bold text-gray-900 mb-6">Schedule Your Gallbladder <br><span
                            class="text-scod">Consultation Today</span></h2>
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">Don't wait for a painful gallbladder attack or sudden complication. Book an appointment with Dr. Arush Sabharwal for an expert clinical evaluation.</p>
                    <div class="space-y-6 mb-8">
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-12 h-12 bg-gray-50 rounded-xl shadow-sm flex items-center justify-center text-scod border border-gray-100">
                                <i data-feather="phone" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">Direct Helpline</h4>
                                <a href="tel:+918130130489" class="text-gray-600 hover:text-scod transition-colors">+91 8130130489</a>
                                <p class="text-sm text-gray-400">Monday - Saturday, 9:00 AM - 6:00 PM</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-12 h-12 bg-gray-50 rounded-xl shadow-sm flex items-center justify-center text-scod border border-gray-100">
                                <i data-feather="mail" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">Email Inquiries</h4>
                                <a href="mailto:info@scodclinic.com"
                                    class="text-gray-600 hover:text-scod transition-colors">info@scodclinic.com</a>
                                <p class="text-sm text-gray-400">Response within 24 hours</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-12 h-12 bg-gray-50 rounded-xl shadow-sm flex items-center justify-center text-scod border border-gray-100">
                                <i data-feather="map-pin" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">Clinic Address</h4>
                                <p class="text-gray-600">66A/2, New Rohtak Rd, Block 67, Karol Bagh, New Delhi, Delhi 110005</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Form with icons inside inputs -->
                <div class="bg-gray-50 rounded-2xl shadow-xl p-8 border border-gray-100">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Request a Consultation</h3>
                    <form acceptCharset="UTF-8" action="https://app.formester.com/forms/vt4kzZ2it/submissions"
                        method="POST" class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                            <div class="relative">
                                <i data-feather="user" class="absolute left-3 top-3.5 text-gray-400 w-5 h-5"></i>
                                <input type="text" name="name" required placeholder="Your Full Name"
                                    class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-scod focus:border-scod transition-all bg-white">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                                <div class="relative">
                                    <i data-feather="mail" class="absolute left-3 top-3.5 text-gray-400 w-5 h-5"></i>
                                    <input type="email" name="email" required placeholder="name@example.com"
                                        class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-scod focus:border-scod transition-all bg-white">
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                                <div class="relative">
                                    <i data-feather="phone" class="absolute left-3 top-3.5 text-gray-400 w-5 h-5"></i>
                                    <input type="tel" name="phone" required placeholder="+91 00000 00000"
                                        class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-scod focus:border-scod transition-all bg-white">
                                </div>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Symptoms or Questions</label>
                            <div class="relative">
                                <i data-feather="message-square"
                                    class="absolute left-3 top-3.5 text-gray-400 w-5 h-5"></i>
                                <textarea name="message" rows="4" placeholder="Describe your symptoms, ultrasound findings, or queries..."
                                    class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-scod focus:border-scod transition-all bg-white"></textarea>
                            </div>
                        </div>
                        <button type="submit"
                            class="w-full bg-scod text-white font-bold text-lg py-4 rounded-lg hover:bg-blue-700 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1 flex items-center justify-center space-x-2">
                            <i data-feather="send" class="w-5 h-5"></i>
                            <span>Send Consultation Request</span>
                        </button>
                        <p class="text-xs text-gray-500 text-center mt-4">
                            Your medical details are kept strictly confidential under doctor-patient privilege.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <?php include __DIR__ . '/../includes/footer.php'; ?>

    <script>
        const testimonialVideos = [
            { id: 1, title: "Weight Loss & GI Surgery", author: "Mr. Sudesh Gupta", videoId: "R_1SeIg3FaQ", type: "youtube", thumbnail: "https://img.youtube.com/vi/NnSd1zg_Ndk/maxresdefault.jpg", quote: "Mr. Sudesh Gupta shares his seamless surgical experience and fast recovery under Dr. Arush Sabharwal." },
            { id: 2, title: "Laparoscopic Surgical Journey", author: "Akanksha Bhardwaj", videoId: "u_dbxl4Y7Vs", type: "youtube", thumbnail: "https://img.youtube.com/vi/u_dbxl4Y7Vs/maxresdefault.jpg", quote: "Underwent advanced laparoscopic surgery with effortless insurance coverage and warm medical support." },
            { id: 3, title: "Transformative Medical Care", author: "Mrs. Noor Bano", videoId: "1QnINDPc1WU", type: "youtube", thumbnail: "https://img.youtube.com/vi/1GjE_mEZMBM/maxresdefault.jpg", quote: "Mrs. Noor Bano shares how expert surgical intervention relieved her long-standing health challenges." },
            { id: 4, title: "Advanced Laparoscopic Recovery", author: "Mrs. Neetu Aggarwal", videoId: "_IBJ0_YzXog", type: "youtube", thumbnail: "https://img.youtube.com/vi/_IBJ0_YzXog/maxresdefault.jpg", quote: "Mrs. Neetu Aggarwal discusses her smooth hospital stay and rapid recovery back to routine." },
            { id: 5, title: "Minimally Invasive Procedure", author: "Mrs. Shabana", videoId: "6Z4eXkmuRJU", type: "youtube", thumbnail: "https://img.youtube.com/vi/6Z4eXkmuRJU/maxresdefault.jpg", quote: "Mrs. Shabana from Roorkee talks about the outstanding surgical results and compassionate care." },
            { id: 6, title: "Patient Success Story", author: "Verified Patient", videoId: "69539d8dd73a53e69e26a898", type: "gumlet", thumbnail: "https://video.gumlet.io/6553f91b3699cbd2c01ab6a9/69539d8dd73a53e69e26a898/thumbnail-1-0.png", quote: "Witness the life-changing results and incredible surgical journey of our patients at SCOD Clinic." }
        ];


        const procedures = {
            'standard-lap': {
                title: "Laparoscopic Cholecystectomy (Keyhole)",
                subtitle: "The Worldwide Gold Standard",
                what: "A minimally invasive procedure where the surgeon removes the gallbladder containing stones through 3 to 4 tiny incisions (5-10mm) using a high-definition laparoscope.",
                how: "Carbon dioxide gas gently inflates the abdomen to provide a crystal-clear working space. The cystic duct and cystic artery are safely clipped with surgical titanium clips, and the gallbladder is gently detached from the liver bed.",
                suitability: "Symptomatic gallstones (cholelithiasis), recurring biliary colic, gallbladder polyps, or chronic cholecystitis.",
                recovery: "24-hour hospital stay. Light mobility starts on the same evening. Return to routine office work within 5 to 7 days.",
                image: "<?php echo $path_prefix; ?>assets/scod/treatment/laparoscopic/gallstones.webp",
                faqs: [
                    { q: "Will I have prominent scars?", a: "No, the micro-incisions are tiny (5-10mm) and placed inconspicuously, fading into faint lines over time." },
                    { q: "Can gallstones recur after gallbladder removal?", a: "No, since the organ where stones form (the gallbladder) is removed, gallbladder stones cannot recur." }
                ]
            },
            'single-incision': {
                title: "Single Incision Laparoscopic Surgery (SILS)",
                subtitle: "Virtually Scarless Precision",
                what: "An advanced refinement of laparoscopy where the entire gallbladder removal is completed through a single small entry inside the belly button (umbilicus).",
                how: "A specialized multi-channel port is introduced through the navel. Flexible, articulating instruments allow complete excision without additional puncture wounds on the abdomen.",
                suitability: "Patients seeking premier cosmetic results with uncomplicated gallstones and suitable body habitus.",
                recovery: "Discharged within 24 hours. Minimal wound discomfort and the scar is hidden within the natural folds of the navel.",
                image: "<?php echo $path_prefix; ?>assets/scod/Laparoscopic Surgery.webp",
                faqs: [
                    { q: "Is SILS suitable for all patients?", a: "It is ideal for non-acute, uncomplicated gallbladder cases. Severe infections or prior upper abdominal surgeries may require standard 3-4 port laparoscopy for optimal safety." },
                    { q: "Is the recovery different from standard laparoscopy?", a: "Recovery time is equally fast, with the additional benefit of enhanced cosmetic satisfaction." }
                ]
            },
            'emergency-gall': {
                title: "Emergency Cholecystectomy",
                subtitle: "Immediate Relief for Acute Complications",
                what: "Urgent surgical intervention for acute, infected, or gangrenous gallbladder disease requiring prompt treatment.",
                how: "Rapid pre-op stabilization, intravenous antibiotic therapy, and emergency laparoscopic decompression and dissection to prevent gallbladder rupture or peritonitis.",
                suitability: "Patients with acute cholecystitis, empyema (pus in gallbladder), gallbladder gangrene, or severe unrelenting pain with high fever.",
                recovery: "1 to 2 days hospital stay depending on infection severity. Monitored until vital signs and inflammatory markers normalize.",
                image: "<?php echo $path_prefix; ?>assets/scod/b461ecb8-4def-4ef8-a9d6-45e3326bc646.png",
                faqs: [
                    { q: "Can emergency gallbladder surgery be done laparoscopically?", a: "Yes, Dr. Arush Sabharwal performs emergency gallbladder removals via laparoscopy in over 98% of cases, avoiding open conversion whenever safely possible." },
                    { q: "What happens if acute cholecystitis is not operated upon quickly?", a: "Delaying surgery can lead to gallbladder perforation, widespread abdominal infection (peritonitis), and sepsis." }
                ]
            },
            'complex-biliary': {
                title: "Complex & Revisional Biliary Surgery",
                subtitle: "Specialized Surgical Mastery",
                what: "Advanced procedures for patients with complicated biliary anatomy, severe dense adhesions from prior surgeries, or impacted stones in Hartmann's pouch.",
                how: "Utilizing 4K optical magnification, intraoperative cholangiography when indicated, and meticulous blunt-and-sharp dissection to safeguard the common bile duct and major vascular structures.",
                suitability: "Patients with previous abdominal surgeries, porcelain gallbladder, Mirizzi syndrome, or anatomical variations.",
                recovery: "1 to 3 days hospital stay with comprehensive post-operative monitoring.",
                image: "<?php echo $path_prefix; ?>assets/scod/dr-arush-final-image.png",
                faqs: [
                    { q: "Why is complex biliary surgery specialized?", a: "Inflammation or scarring can distort biliary anatomy; having a surgeon with advanced GI surgical fellowship training ensures absolute safety." },
                    { q: "Will I need a surgical drain?", a: "In complex cases with dense adhesions, a temporary soft drain may be placed for 24-48 hours to ensure zero fluid collection." }
                ]
            }
        };

        const generalFaqs = [
            { 
                q: "What is Laparoscopic Gallbladder Surgery (Cholecystectomy)?", 
                a: "Laparoscopic cholecystectomy is a minimally invasive surgical procedure used to remove a diseased or stone-filled gallbladder through 3 to 4 tiny keyhole incisions (5-10mm). It is the worldwide gold standard treatment for gallstones, offering fast healing, negligible scarring, and minimal discomfort." 
            },
            { 
                q: "What are the common symptoms of gallstones that indicate surgery is needed?", 
                a: "Common symptoms include sharp, intense pain in the upper right abdomen (often after consuming fatty meals), pain radiating to the right shoulder or back, severe bloating, indigestion, nausea, vomiting, and in complicated cases, jaundice or fever." 
            },
            { 
                q: "Can gallstones be cured or dissolved with medicines alone?", 
                a: "Medications are generally ineffective for long-term gallstone management. While some oral bile acid medicines may temporarily reduce small cholesterol stones over many months, recurrence rates exceed 50% once medication stops. Surgical removal of the gallbladder is the only definitive and permanent cure." 
            },
            { 
                q: "How long is the hospital stay and recovery time after gallbladder surgery?", 
                a: "Most patients are discharged within 24 hours of laparoscopic surgery. Patients can typically walk comfortably on the same day and resume light desk work within 5 to 7 days, with full recovery achieved within 2 to 3 weeks." 
            },
            { 
                q: "Can a person live a normal, healthy life without a gallbladder?", 
                a: "Yes, absolutely. The liver continuously produces bile to digest fats. Without a gallbladder, bile flows directly into the small intestine. After a brief adjustment period of 2 to 4 weeks with light dietary modifications, patients digest food normally and experience no compromise to life expectancy or health." 
            },
            { 
                q: "Is laparoscopic gallbladder surgery safe?", 
                a: "Yes, laparoscopic cholecystectomy is one of the safest and most frequently performed abdominal surgeries worldwide. When performed by an experienced laparoscopic specialist like Dr. Arush Sabharwal using advanced 4K visualization and precision instruments, complications are exceptionally rare." 
            },
            { 
                q: "Is gallbladder stone surgery covered by health insurance?", 
                a: "Yes, symptomatic gallbladder stone removal is recognized as a medically necessary surgery and is covered by virtually all health insurance policies and TPAs in India. SCOD Clinic assists patients with seamless cashless insurance approval." 
            },
            { 
                q: "Why choose Dr. Arush Sabharwal as the best gallbladder surgeon in <?php echo htmlspecialchars($location); ?>?", 
                a: "Dr. Arush Sabharwal has over 15 years of dedicated gastrointestinal and advanced laparoscopic surgical experience. With thousands of successful procedures, cutting-edge surgical infrastructure, zero-compromise safety protocols, and personalized patient care, he is widely regarded as a leading gallbladder specialist in <?php echo htmlspecialchars($location); ?> and Delhi NCR." 
            }
        ];

        // Feather Icons
        feather.replace();

        // State Management
        let activeTestimonialIndex = 0;
        let itemsPerView = 1;

        // Render Procedures Tab Content
        function renderProcedure(key) {
            const data = procedures[key];
            const container = document.getElementById('procedure-content-container');
            if (!container) return;
            container.innerHTML = `
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 animate-fadeIn">
                    <div>
                        <span class="inline-block px-4 py-1 bg-blue-100 text-scod rounded-full text-sm font-bold mb-4">${data.subtitle}</span>
                        <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">${data.title}</h3>
                        <div class="space-y-6">
                            <div>
                                <h4 class="text-lg font-bold text-gray-900 mb-2 flex items-center"><i data-feather="activity" class="w-5 h-5 text-scod mr-2"></i> What is it?</h4>
                                <p class="text-gray-600 leading-relaxed">${data.what}</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-gray-900 mb-2 flex items-center"><i data-feather="crosshair" class="w-5 h-5 text-scod mr-2"></i> How it works</h4>
                                <p class="text-gray-600 leading-relaxed">${data.how}</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-gray-900 mb-2 flex items-center"><i data-feather="user-check" class="w-5 h-5 text-scod mr-2"></i> Recommended For</h4>
                                <p class="text-gray-600 leading-relaxed">${data.suitability}</p>
                            </div>
                            <div class="bg-white p-6 rounded-xl border-l-4 border-scod shadow-sm">
                                <h4 class="font-bold text-gray-900 mb-1">Expected Recovery</h4>
                                <p class="text-gray-600 text-sm">${data.recovery}</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col h-full">
                        <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-200 h-64 mb-8 flex items-center justify-center relative group">
                            <img src="${data.image}" alt="${data.title}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute top-4 right-4 bg-scod text-white text-xs font-bold px-3 py-1 rounded-full">Minimally Invasive</div>
                        </div>
                        <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-200 flex-grow">
                            <h4 class="font-bold text-gray-900 mb-4 flex items-center"><i data-feather="help-circle" class="w-5 h-5 text-scod mr-2"></i> Common Questions</h4>
                            <div class="space-y-4">
                                ${data.faqs.map(faq => `
                                    <div class="border-b border-gray-100 last:border-0 pb-4 last:pb-0">
                                        <p class="font-semibold text-gray-800 text-sm mb-1">${faq.q}</p>
                                        <p class="text-gray-600 text-sm">${faq.a}</p>
                                    </div>
                                `).join('')}
                            </div>
                        </div>
                    </div>
                </div>
            `;
            feather.replace();
        }

        // Render Testimonials Slider
        function renderTestimonialSlider() {
            const container = document.getElementById('testimonials-slider');
            if (!container) return;
            const totalItems = testimonialVideos.length;
            const containerWidth = (totalItems * 100) / itemsPerView;
            container.style.width = `${containerWidth}%`;
            const itemWidth = 100 / totalItems;
            container.innerHTML = testimonialVideos.map(video => `
                <div class="px-4 flex-shrink-0 box-border" style="width: ${itemWidth}%;">
                    <div class="bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100 group cursor-pointer h-full flex flex-col video-trigger"
                        data-video-id="${video.videoId}" data-video-type="${video.type || 'youtube'}">
                        <div class="relative aspect-video overflow-hidden">
                            <img src="${video.thumbnail}" alt="${video.title}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-black/30 flex items-center justify-center group-hover:bg-black/20 transition-colors">
                                <div class="w-16 h-16 bg-scod/90 rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                                    <i data-feather="play" class="w-6 h-6 text-white ml-1"></i>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 flex-grow">
                            <h3 class="font-bold text-lg text-gray-900 mb-1">${video.title}</h3>
                            <p class="text-scod font-medium">${video.author}</p>
                        </div>
                    </div>
                </div>
            `).join('');
            feather.replace();
            attachVideoModalListeners();
            updateTestimonialSliderPosition();
        }

        function updateTestimonialSliderPosition() {
            const container = document.getElementById('testimonials-slider');
            if (!container) return;
            const totalItems = testimonialVideos.length;
            const translateX = activeTestimonialIndex * (100 / totalItems);
            container.style.transition = 'transform 0.5s cubic-bezier(0.25, 1, 0.5, 1)';
            container.style.transform = `translateX(-${translateX}%)`;
        }

        // Helper to update items per view
        function updateItemsPerView() {
            if (window.innerWidth >= 1024) itemsPerView = 3;
            else if (window.innerWidth >= 768) itemsPerView = 2;
            else itemsPerView = 1;
            renderTestimonialSlider();
        }

        // FAQs Accordion Logic
        function renderFaqs() {
            const container = document.getElementById('faq-container');
            if (!container) return;
            container.innerHTML = generalFaqs.map((faq, index) => `
                <div class="border border-gray-200 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 bg-white faq-item" data-index="${index}">
                    <button class="faq-btn w-full flex items-center justify-between p-6 text-left bg-white focus:outline-none">
                        <span class="text-lg font-bold text-gray-900 pr-8">${faq.q}</span>
                        <div class="faq-icon flex-shrink-0 w-8 h-8 rounded-full flex items-center justify-center transition-colors duration-300 bg-gray-100 text-gray-500">
                            <i data-feather="plus" class="w-4 h-4 faq-plus"></i>
                            <i data-feather="minus" class="w-4 h-4 faq-minus hidden"></i>
                        </div>
                    </button>
                    <div class="faq-content hidden overflow-hidden bg-gray-50">
                        <div class="p-6 pt-0 text-gray-600 leading-relaxed border-t border-gray-100 mt-2 pt-4">
                            ${faq.a}
                        </div>
                    </div>
                </div>
            `).join('');
            feather.replace();

            document.querySelectorAll('.faq-btn').forEach(btn => {
                btn.addEventListener('click', function () {
                    const item = this.closest('.faq-item');
                    const content = item.querySelector('.faq-content');
                    const iconContainer = this.querySelector('.faq-icon');
                    const plusIcon = this.querySelector('.faq-plus');
                    const minusIcon = this.querySelector('.faq-minus');

                    document.querySelectorAll('.faq-item').forEach(other => {
                        if (other !== item && !other.querySelector('.faq-content').classList.contains('hidden')) {
                            other.querySelector('.faq-content').classList.add('hidden');
                            other.querySelector('.faq-icon').classList.remove('bg-scod', 'text-white');
                            other.querySelector('.faq-icon').classList.add('bg-gray-100', 'text-gray-500');
                            other.querySelector('.faq-plus').classList.remove('hidden');
                            other.querySelector('.faq-minus').classList.add('hidden');
                        }
                    });

                    content.classList.toggle('hidden');
                    const isOpen = !content.classList.contains('hidden');
                    if (isOpen) {
                        iconContainer.classList.remove('bg-gray-100', 'text-gray-500');
                        iconContainer.classList.add('bg-scod', 'text-white');
                        plusIcon.classList.add('hidden');
                        minusIcon.classList.remove('hidden');
                    } else {
                        iconContainer.classList.add('bg-gray-100', 'text-gray-500');
                        iconContainer.classList.remove('bg-scod', 'text-white');
                        plusIcon.classList.remove('hidden');
                        minusIcon.classList.add('hidden');
                    }
                });
            });
        }

        // Video Modal Event Listeners
        const modal = document.getElementById('video-modal');
        const iframe = document.getElementById('video-iframe');
        const closeBtn = document.getElementById('video-modal-close');

        function attachVideoModalListeners() {
            document.querySelectorAll('.video-trigger').forEach(trigger => {
                trigger.addEventListener('click', function () {
                    const videoId = this.dataset.videoId;
                    const type = this.dataset.videoType;
                    let src = '';
                    if (type === 'youtube') {
                        src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
                    } else if (type === 'gumlet') {
                        src = `https://play.gumlet.io/embed/${videoId}`;
                    }
                    if (iframe) iframe.src = src;
                    if (modal) {
                        modal.classList.remove('hidden');
                        modal.classList.add('flex');
                    }
                });
            });
        }

        if (closeBtn && modal && iframe) {
            closeBtn.addEventListener('click', () => {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
                iframe.src = '';
            });
        }

        // Initialize components on load
        if (window.innerWidth >= 1024) itemsPerView = 3;
        else if (window.innerWidth >= 768) itemsPerView = 2;
        else itemsPerView = 1;

        renderTestimonialSlider();
        renderFaqs();
        renderProcedure('standard-lap');

        // Slider Navigation - Testimonials
        const testimonialsPrevBtn = document.getElementById('testimonials-prev-btn');
        const testimonialsNextBtn = document.getElementById('testimonials-next-btn');

        function nextTestimonial() {
            if (activeTestimonialIndex < testimonialVideos.length - itemsPerView) {
                activeTestimonialIndex++;
            } else {
                activeTestimonialIndex = 0;
            }
            updateTestimonialSliderPosition();
        }

        function prevTestimonial() {
            if (activeTestimonialIndex > 0) {
                activeTestimonialIndex--;
            } else {
                activeTestimonialIndex = Math.max(0, testimonialVideos.length - itemsPerView);
            }
            updateTestimonialSliderPosition();
        }

        if (testimonialsNextBtn) testimonialsNextBtn.addEventListener('click', nextTestimonial);
        if (testimonialsPrevBtn) testimonialsPrevBtn.addEventListener('click', prevTestimonial);

        window.addEventListener('resize', updateItemsPerView);

        // Tab Event Listeners
        document.querySelectorAll('.procedure-tab').forEach(tab => {
            tab.addEventListener('click', function () {
                document.querySelectorAll('.procedure-tab').forEach(t => {
                    t.classList.remove('bg-scod', 'text-white', 'border-scod', 'shadow-lg', 'scale-105');
                    t.classList.add('bg-white', 'text-gray-600', 'border-gray-100');
                });
                this.classList.add('bg-scod', 'text-white', 'border-scod', 'shadow-lg', 'scale-105');
                this.classList.remove('bg-white', 'text-gray-600', 'border-gray-100');
                renderProcedure(this.dataset.tab);
            });
        });
    </script>
</body>
</html>
