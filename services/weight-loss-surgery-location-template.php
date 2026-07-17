<?php
if (!isset($location) || !isset($slug)) {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: /services/bariatric-surgery");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weight Loss Surgery/Doctor in <?php echo htmlspecialchars($location); ?> | Dr. Arush Sabharwal</title>
    <meta name="description"
        content="Seeking expert weight loss surgery in <?php echo htmlspecialchars($location); ?>? Consult Dr. Arush Sabharwal for advanced bariatric treatments, personalized care, and weight management results.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
     <meta name="robots" content="index, follow">   
    <link rel="canonical" href="https://scodclinic.com/weight-loss-surgery-in-<?php echo htmlspecialchars($slug); ?>" />
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
  "name": "Dr. Arush Sabharwal: Weight Loss Surgery in <?php echo htmlspecialchars($location); ?>, Delhi, India | Diabetes, Weight Loss, Body Contouring, Dietician in <?php echo htmlspecialchars($location); ?>",
  "image": "",
  "@id": "",
  "url": "",
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
    "name": "What is Weight Loss Surgery",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Weight loss surgery (also known as bariatric surgery) is a medical procedure that helps people lose weight by changing the way the digestive system works. It reduces the size of the stomach or changes how food is absorbed, helping patients eat less and feel full sooner. Many people choose Weight Loss Surgery in <?php echo htmlspecialchars($location); ?> to manage severe obesity and improve overall health."
    }
  },{
    "@type": "Question",
    "name": "Who is a good candidate for Weight Loss Surgery?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Weight loss surgery is usually recommended for people with a Body Mass Index (BMI) above 40, or above 35 with obesity-related health conditions such as diabetes, high blood pressure, or sleep apnea."
    }
  },{
    "@type": "Question",
    "name": "How much weight can a person lose after Weight Loss Surgery?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Most patients lose around 50–70% of their excess weight within the first 12–18 months after surgery. The exact results depend on the type of procedure, lifestyle changes, and follow-up care provided by a Top Weight Loss Surgeon in <?php echo htmlspecialchars($location); ?>."
    }
  },{
    "@type": "Question",
    "name": "Is Weight Loss Surgery safe?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes, weight loss surgery is generally considered safe when performed by an experienced and qualified surgeon. Choosing a specialist who performs Weight Loss Surgery in <?php echo htmlspecialchars($location); ?> using modern surgical techniques can significantly reduce risks and improve outcomes."
    }
  },{
    "@type": "Question",
    "name": "How long does it take to recover after Weight Loss Surgery?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Recovery time varies depending on the procedure and the patient’s overall health. Most patients can return to light activities within 1–2 weeks, while full recovery may take a few weeks. Proper guidance from a Top Weight Loss Surgeon in <?php echo htmlspecialchars($location); ?> helps ensure a smooth recovery."
    }
  },{
    "@type": "Question",
    "name": "Will I need to follow a special diet after Weight Loss Surgery?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes, patients need to follow a structured diet plan after surgery. The diet usually starts with liquids and gradually progresses to soft and solid foods. Nutritional guidance is an important part of the recovery process after Weight Loss Surgery in <?php echo htmlspecialchars($location); ?>."
    }
  },{
    "@type": "Question",
    "name": "Can Weight Loss Surgery help improve other health conditions?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes, weight loss surgery can significantly improve or even resolve several obesity-related conditions such as type 2 diabetes, high blood pressure, sleep apnea, and joint pain. Many patients undergoing Weight Loss Surgery in <?php echo htmlspecialchars($location); ?> experience improved overall health and quality of life."
    }
  },{
    "@type": "Question",
    "name": "Why Dr. Arush Sabharwal is the Best Weight Loss Surgeon in <?php echo htmlspecialchars($location); ?>?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Dr. Arush Sabharwal is recognized as a Top Weight Loss Surgeon in <?php echo htmlspecialchars($location); ?> because of his extensive experience in treating obesity and performing advanced weight loss procedures. With more than 15 years of experience, he specializes in modern and minimally invasive techniques that support safe surgery and faster recovery."
    }
  }]
}
</script>
    
</head>
<body class="min-h-screen bg-white text-gray-900 pt-20">
    <!-- NAVBAR -->
    <?php
if (!isset($path_prefix)) {
    $path_prefix = '../';
}
include __DIR__ . '/../includes/header.php';
?>
    <!-- HERO SECTION -->
    <section class="relative h-[500px] flex items-center bg-gray-900 text-white overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://brandingpioneers.co.in/scod/scod-breadcrumbs/Bariatric Surgery.webp"
                alt="Weight Loss Surgery" class="w-full h-full object-cover object-center">
            <div class="absolute inset-0 bg-gradient-to-r from-scod/95 via-scod/30 to-transparent"></div>
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-2xl observe-animate" data-animation="fade-in-left">
                <div
                    class="inline-flex items-center space-x-2 bg-white/10 backdrop-blur-md px-4 py-2 rounded-full mb-6 border border-white/20">
                    <i data-feather="activity" class="w-5 h-5 text-emerald-300"></i>
                    <span class="text-sm font-bold tracking-wide uppercase">Advanced Metabolic Care</span>
                </div>
                <h1 class="text-4xl text-white md:text-6xl font-bold mb-6 leading-tight">Dr. Arush Sabharwal:<br><span
                        class="text-emerald-300">Weight Loss Surgery in <?php echo htmlspecialchars($location); ?></span></h1>
                <p class="text-lg md:text-xl text-blue-100 mb-8 leading-relaxed font-light">Expert surgical solutions
                    for sustainable weight loss, diabetes remission, and PCOD management. Reclaim your health with
                    minimally invasive precision.</p>
                <div class="flex flex-col sm:flex-row gap-5">
                    <a href="<?php echo $path_prefix; ?>contact.php"
                        class="bg-white text-scod px-8 py-3 rounded-full font-bold text-base hover:bg-gray-100 transition-all shadow-lg flex items-center justify-center space-x-2"><i
                            data-feather="calendar" class="w-5 h-5"></i><span>Book Assessment</span></a>
                    <a href="<?php echo $path_prefix; ?>resources.php"
                        class="bg-transparent border-2 border-white/30 backdrop-blur-sm text-white px-8 py-3 rounded-full font-bold text-base hover:bg-white/10 transition-all flex items-center justify-center space-x-2"><i
                            data-feather="download" class="w-5 h-5"></i><span>Pre-Op Checklist</span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- OVERVIEW SECTION -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="observe-animate" data-animation="fade-in-left">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="h-px w-10 bg-scod"></div><span
                            class="uppercase tracking-widest text-sm font-bold text-scod">Overview</span>
                    </div>
                    <h2 class="text-4xl font-bold text-gray-900 mb-6 leading-tight">Understanding <br><span
                            class="text-scod">Weight Loss Surgery</span></h2>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">Weight loss surgery, medically known as bariatric surgery, involves making changes to your digestive system to help you shed excess weight. It is not just about restricting food intake; it triggers positive metabolic shifts that influence hunger hormones and insulin sensitivity. Weight Loss Surgery in <?php echo htmlspecialchars($location); ?> has emerged as a highly successful option for individuals seeking a permanent solution to obesity and associated health concerns.</p>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">These procedures are performed when diet and exercise haven't worked or when you have serious health problems because of your weight. At SCOD, we view surgery as a powerful tool that, when combined with lifestyle changes, offers the best chance for long-term weight management and disease resolution.</p>
                    <div class="flex items-center space-x-8 text-gray-800 font-medium">
                        <div class="flex items-center space-x-2"><i data-feather="check"
                                class="text-emerald-500 w-5 h-5"></i><span>Minimally Invasive</span></div>
                        <div class="flex items-center space-x-2"><i data-feather="check"
                                class="text-emerald-500 w-5 h-5"></i><span>Evidence Based</span></div>
                        <div class="flex items-center space-x-2"><i data-feather="check"
                                class="text-emerald-500 w-5 h-5"></i><span>Life Changing</span></div>
                    </div>
                </div>
                <div class="relative observe-animate" data-animation="scale-in">
                    <div class="rounded-2xl overflow-hidden shadow-2xl border-8 border-gray-50">
                        <img src="https://brandingpioneers.co.in/scod/b461ecb8-4def-4ef8-a9d6-45e3326bc646.png"
                            alt="Medical Consultation" class="w-full h-auto object-cover">
                    </div>
                    <div
                        class="absolute -bottom-6 -left-6 bg-white p-6 rounded-xl shadow-xl border border-gray-100 max-w-xs hidden md:block">
                        <p class="text-scod font-bold text-4xl mb-1">15+</p>
                        <p class="text-gray-600 text-sm">Years of experience in transforming lives through metabolic
                            surgery.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- WHO IS A CANDIDATE -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="text-4xl font-bold text-gray-900">Who is a <span class="text-scod">Candidate?</span></h2>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Weight Loss Surgery in <?php echo htmlspecialchars($location); ?> is a life-saving medical intervention
                    for those struggling with obesity-related conditions.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div
                    class="rounded-2xl bg-white border border-gray-100 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group observe-animate">
                    <div class="h-48 overflow-hidden relative"><img
                            src="<?php echo $path_prefix; ?>assets/scod/treatment/Obesity Class II & III.webp" alt="Obesity"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <h3 class="absolute bottom-4 left-6 text-xl font-bold text-white mb-0">Obesity Class II & III
                        </h3>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 leading-relaxed">BMI ≥35 with comorbidities or BMI ≥40 regardless of
                            health status.</p>
                    </div>
                </div>
                <div
                    class="rounded-2xl bg-white border border-gray-100 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group observe-animate delay-100">
                    <div class="h-48 overflow-hidden relative"><img src="<?php echo $path_prefix; ?>assets/scod/treatment/Type 2 Diabetes.webp"
                            alt="Diabetes"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <h3 class="absolute bottom-4 left-6 text-xl font-bold text-white mb-0">Type 2 Diabetes</h3>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 leading-relaxed">Uncontrolled blood sugar despite medication, targeting
                            remission.</p>
                    </div>
                </div>
                <div
                    class="rounded-2xl bg-white border border-gray-100 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group observe-animate delay-200">
                    <div class="h-48 overflow-hidden relative"><img
                            src="https://images.unsplash.com/photo-1584515933487-779824d29309?auto=format&fit=crop&w=600&q=80"
                            alt="PCOD"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <h3 class="absolute bottom-4 left-6 text-xl font-bold text-white mb-0">PCOD / PCOS</h3>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 leading-relaxed">Hormonal imbalances and infertility issues related to
                            excess weight.</p>
                    </div>
                </div>
                <!-- More items... -->
                <div
                    class="rounded-2xl bg-white border border-gray-100 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group observe-animate">
                    <div class="h-48 overflow-hidden relative"><img
                            src="https://images.unsplash.com/photo-1520206183501-b80df61043c2?auto=format&fit=crop&w=600&q=80"
                            alt="Sleep Apnea"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <h3 class="absolute bottom-4 left-6 text-xl font-bold text-white mb-0">Sleep Apnea</h3>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 leading-relaxed">Obstructive sleep apnea requiring CPAP or causing
                            severe fatigue.</p>
                    </div>
                </div>
                <div
                    class="rounded-2xl bg-white border border-gray-100 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group observe-animate delay-100">
                    <div class="h-48 overflow-hidden relative"><img
                            src="https://images.unsplash.com/photo-1628348068343-c6a848d2b6dd?auto=format&fit=crop&w=600&q=80"
                            alt="Hypertension"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <h3 class="absolute bottom-4 left-6 text-xl font-bold text-white mb-0">Hypertension</h3>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 leading-relaxed">High blood pressure resistant to standard medical
                            therapy.</p>
                    </div>
                </div>
                <div
                    class="rounded-2xl bg-white border border-gray-100 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group observe-animate delay-200">
                    <div class="h-48 overflow-hidden relative"><img src="<?php echo $path_prefix; ?>assets/scod/treatment/Joint Pain.webp"
                            alt="Joint Pain"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <h3 class="absolute bottom-4 left-6 text-xl font-bold text-white mb-0">Joint Pain</h3>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 leading-relaxed">Osteoarthritis aggravated by excess weight load on
                            joints.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SURGICAL OPTIONS TABS -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <span class="uppercase tracking-widest text-sm font-bold text-scod">Our Expertise</span>
                <h2 class="text-4xl font-bold text-gray-900 mt-2">Surgical Options</h2>
            </div>
            <div class="flex flex-wrap justify-center gap-4 mb-10">
                <button
                    class="procedure-tab px-8 py-4 rounded-full font-bold text-sm md:text-base transition-all duration-300 shadow-sm border-2 bg-scod text-white border-scod shadow-lg scale-105"
                    data-tab="sleeve">Gastric Sleeve</button>
                <button
                    class="procedure-tab px-8 py-4 rounded-full font-bold text-sm md:text-base transition-all duration-300 shadow-sm border-2 bg-white text-gray-600 border-gray-100 hover:border-scod hover:text-scod"
                    data-tab="rygb">Gastric Bypass</button>
                <button
                    class="procedure-tab px-8 py-4 rounded-full font-bold text-sm md:text-base transition-all duration-300 shadow-sm border-2 bg-white text-gray-600 border-gray-100 hover:border-scod hover:text-scod"
                    data-tab="mgb">Mini Gastric Bypass</button>
                <button
                    class="procedure-tab px-8 py-4 rounded-full font-bold text-sm md:text-base transition-all duration-300 shadow-sm border-2 bg-white text-gray-600 border-gray-100 hover:border-scod hover:text-scod"
                    data-tab="revision">Revisional</button>
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
                        class="relative rounded-2xl overflow-hidden shadow-2xl border-4 border-white h-[400px] lg:h-[500px] z-10">
                        <img src="https://brandingpioneers.co.in/scod/dr-arush-final-image.png"
                            alt="Dr. Arush Sabharwal" class="w-full h-full object-cover object-top">
                    </div>
                </div>
                <div class="lg:col-span-7">
                    <div class="flex items-center space-x-4 mb-6">
                        <div class="h-px w-12 bg-scod"></div><span
                            class="text-scod font-bold tracking-widest uppercase text-sm">Meet The Surgeon</span>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">Dr. Arush Sabharwal: Leading Weight Loss Surgeon in <?php echo htmlspecialchars($location); ?></h2>
                    <h3 class="text-xl text-gray-500 font-medium mb-8 border-l-4 border-scod pl-4">Chairman & Chief
                        Surgeon, SCOD</h3>
                    <p class="text-gray-600 leading-relaxed mb-6 text-lg">Dr. Arush Sabharwal is a highly experienced Weight Loss Surgeon in <?php echo htmlspecialchars($location); ?> NCR with more than 15 years of expertise in the treatment of obesity and metabolic disorders. He specializes in advanced weight loss surgeries designed to help patients achieve long-term and sustainable results. With a strong focus on safety, precision, and patient well-being, he has helped many individuals manage severe obesity and improve their overall health through modern weight loss treatments.
                    </p>
                    <blockquote class="text-xl font-medium text-gray-800 italic mb-8 relative z-10">"My mission is not
                        just to perform surgery, but to partner with patients in their journey towards a healthier, more
                        active life."</blockquote>
                    <a href="<?php echo $path_prefix; ?>about.php"
                        class="inline-flex items-center space-x-2 bg-scod text-white px-8 py-4 rounded-full font-bold hover:bg-blue-700 transition-all shadow-lg"><span>View
                            Full Profile</span><i data-feather="arrow-right" class="w-4 h-4"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- DIABETES REMISSION -->
    <section class="py-12 bg-scod text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-black/20 to-transparent"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="observe-animate" data-animation="fade-in-left">
                    <h2 class="text-4xl md:text-5xl font-bold mb-6 leading-tight text-white">Type 2 Diabetes <br><span
                            class="text-emerald-300">Remission</span></h2>
                    <p class="text-xl text-blue-100 mb-8 leading-relaxed">Metabolic surgery is currently the most
                        effective treatment for Type 2 Diabetes. Unlike medication which manages symptoms, surgery
                        targets the root metabolic cause.</p>
                    <div class="grid grid-cols-2 gap-8 mb-8">
                        <div>
                            <div class="text-4xl font-bold text-white mb-1">85%</div>
                            <div class="text-blue-200 text-sm font-medium">Patients achieve remission</div>
                        </div>
                        <div>
                            <div class="text-4xl font-bold text-white mb-1">&lt;7.0</div>
                            <div class="text-blue-200 text-sm font-medium">Target HbA1c Levels</div>
                        </div>
                    </div>
                </div>
                <div class="bg-white/10 backdrop-blur-md rounded-3xl p-8 border border-white/20 observe-animate"
                    data-animation="scale-in">
                    <h3 class="text-2xl font-bold mb-4 text-white">Why it works?</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start"><span
                                class="w-8 h-8 rounded-full bg-emerald-500 flex items-center justify-center mr-4 flex-shrink-0 font-bold">1</span>
                            <p class="text-blue-50">Caloric restriction leads to immediate blood sugar reduction.</p>
                        </li>
                        <li class="flex items-start"><span
                                class="w-8 h-8 rounded-full bg-emerald-500 flex items-center justify-center mr-4 flex-shrink-0 font-bold">2</span>
                            <p class="text-blue-50">Gut hormone changes (GLP-1 increase) enhance insulin production.</p>
                        </li>
                        <li class="flex items-start"><span
                                class="w-8 h-8 rounded-full bg-emerald-500 flex items-center justify-center mr-4 flex-shrink-0 font-bold">3</span>
                            <p class="text-blue-50">Weight loss reduces insulin resistance long-term.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- NEW: BEFORE/AFTER GALLERY -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="text-4xl font-bold text-gray-900">Patient <span class="text-scod">Transformations</span></h2>
                <p class="text-gray-600 mt-2">Real results from our weight loss surgery patients.</p>
            </div>
            <!-- Simple JS Gallery -->
            <div class="relative max-w-4xl mx-auto">
                <div id="gallery-container"
                    class="grid grid-cols-1 md:grid-cols-2 gap-6 transition-opacity duration-500">
                    <!-- Populated by JS -->
                </div>
                <div class="flex justify-center mt-8 gap-4">
                    <button id="gallery-prev"
                        class="p-3 rounded-full bg-gray-100 hover:bg-blue-100 text-gray-600 hover:text-scod transition-all"><i
                            data-feather="chevron-left" class="w-6 h-6"></i></button>
                    <div id="gallery-label" class="py-2 px-6 bg-gray-50 rounded-full font-bold text-gray-800"></div>
                    <button id="gallery-next"
                        class="p-3 rounded-full bg-gray-100 hover:bg-blue-100 text-gray-600 hover:text-scod transition-all"><i
                            data-feather="chevron-right" class="w-6 h-6"></i></button>
                </div>
            </div>
        </div>
    </section>
    <!-- PATIENT TESTIMONIALS (Slider) -->
    <section class="py-12 bg-gray-50 overflow-hidden" id="testimonials-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-10 gap-6">
                <div class="text-left">
                    <span class="uppercase tracking-widest text-sm font-bold text-scod">Success Stories</span>
                    <h2 class="text-4xl font-bold text-gray-900 mt-2">Real Stories, <span class="text-scod">Real
                            Results</span></h2>
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
                        class="inline-flex items-center space-x-2 text-scod font-bold hover:text-blue-700 transition-colors"><span>View
                            All Stories</span><i data-feather="arrow-right" class="w-4 h-4"></i></a>
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
    <!-- MEDICAL AWARENESS (Slider) -->
    <section class="py-12 bg-white overflow-hidden" id="awareness-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-10 gap-6">
                <div class="text-left">
                    <span class="uppercase tracking-widest text-sm font-bold text-scod">Expert Insights</span>
                    <h2 class="text-4xl font-bold text-gray-900 mt-2">Medical <span class="text-scod">Awareness</span>
                    </h2>
                    <p class="text-gray-600 mt-4 max-w-2xl">Empowering you with knowledge. Watch Dr. Arush Sabharwal
                        explain complex medical topics in simple terms.</p>
                </div>
                <div class="flex flex-col items-end gap-4">
                    <div class="flex items-center gap-3">
                        <button id="awareness-prev-btn"
                            class="w-10 h-10 rounded-full border border-gray-200 flex items-center justify-center text-gray-600 hover:bg-scod hover:text-white hover:border-scod transition-all duration-300 shadow-sm bg-white"><i
                                data-feather="chevron-left" class="w-5 h-5"></i></button>
                        <button id="awareness-next-btn"
                            class="w-10 h-10 rounded-full border border-gray-200 flex items-center justify-center text-gray-600 hover:bg-scod hover:text-white hover:border-scod transition-all duration-300 shadow-sm bg-white"><i
                                data-feather="chevron-right" class="w-5 h-5"></i></button>
                    </div>
                    <a href="https://www.youtube.com/@drarushsabharwal" target="_blank" rel="noopener noreferrer"
                        class="inline-flex items-center space-x-2 text-scod font-bold hover:text-blue-700 transition-colors"><span>Visit
                            YouTube Channel</span><i data-feather="youtube" class="w-5 h-5"></i></a>
                </div>
            </div>
            <div class="-mx-4 overflow-hidden px-4 md:px-0">
                <div id="awareness-slider"
                    class="flex transition-transform duration-500 ease-out cursor-grab active:cursor-grabbing">
                    <!-- Populated by JS -->
                </div>
            </div>
        </div>
    </section>
    <!-- FAQs -->
    <section class="py-12 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold text-gray-900">Frequently <span class="text-scod">Asked Questions</span></h2>
            </div>
            <div class="space-y-4">
                <div id="faq-container" class="space-y-4">
                    <!-- Populated by JS -->
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT FORM SECTION -->
    <section class="py-12 bg-white border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                <div>
                    <h2 class="text-4xl font-bold text-gray-900 mb-6">Ready to Start Your <br><span
                            class="text-scod">Journey?</span></h2>
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">Take the first step towards a healthier,
                        happier you. Fill out the form to schedule a consultation with Dr. Arush Sabharwal.</p>
                    <div class="space-y-6 mb-8">
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-12 h-12 bg-gray-50 rounded-xl shadow-sm flex items-center justify-center text-scod border border-gray-100">
                                <i data-feather="phone" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">Call Us</h4>
                                <a href="tel:+918130130489" class="text-gray-600 hover:text-scod transition-colors">+91
                                    8130130489</a>
                                <p class="text-sm text-gray-400">Mon-Sat, 9am - 6pm</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-12 h-12 bg-gray-50 rounded-xl shadow-sm flex items-center justify-center text-scod border border-gray-100">
                                <i data-feather="mail" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">Email Us</h4>
                                <a href="mailto:info@scodclinic.com"
                                    class="text-gray-600 hover:text-scod transition-colors">info@scodclinic.com</a>
                                <p class="text-sm text-gray-400">We reply within 24 hours</p>
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
                                <input type="text" name="name" required placeholder="John Doe"
                                    class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-scod focus:border-scod transition-all bg-white">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                                <div class="relative">
                                    <i data-feather="mail" class="absolute left-3 top-3.5 text-gray-400 w-5 h-5"></i>
                                    <input type="email" name="email" required placeholder="john@example.com"
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
                            <label class="block text-sm font-medium text-gray-700 mb-1">Your Message</label>
                            <div class="relative">
                                <i data-feather="message-square"
                                    class="absolute left-3 top-3.5 text-gray-400 w-5 h-5"></i>
                                <textarea name="message" rows="4" placeholder="Tell us about your goals or questions..."
                                    class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-scod focus:border-scod transition-all bg-white"></textarea>
                            </div>
                        </div>
                        <button type="submit"
                            class="w-full bg-scod text-white font-bold text-lg py-4 rounded-lg hover:bg-blue-700 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1 flex items-center justify-center space-x-2">
                            <i data-feather="send" class="w-5 h-5"></i>
                            <span>Send Message</span>
                        </button>
                        <p class="text-xs text-gray-500 text-center mt-4">
                            Your information is secure and confidential.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- FOOTER -->
    <?php include __DIR__ . '/../includes/footer.php'; ?>
    <script>
        // Data populated from React Component
        const testimonialVideos = [
            { id: 1, title: "Weight Loss Surgery", author: "Mr. Sudesh Gupta", videoId: "R_1SeIg3FaQ", type: "youtube", thumbnail: "https://img.youtube.com/vi/NnSd1zg_Ndk/maxresdefault.jpg", quote: "Mr. Sudesh Gupta shares all the things he is able to do and how much more he enjoys life since having weight loss surgery." },
            { id: 2, title: "Gastric Bypass", author: "Akanksha Bhardwaj", videoId: "u_dbxl4Y7Vs", type: "youtube", thumbnail: "https://img.youtube.com/vi/u_dbxl4Y7Vs/maxresdefault.jpg", quote: "Akanksha Bhardwaj underwent a Gastric Bypass with HDFC ERGO Insurance." },
            { id: 3, title: "Super Obesity Transformation", author: "Mrs. Noor Bano", videoId: "1QnINDPc1WU", type: "youtube", thumbnail: "https://img.youtube.com/vi/1GjE_mEZMBM/maxresdefault.jpg", quote: "Mrs. Noor Bano who fought the battle suffering from Super obesity with Multiple Obesity associated comorbidities." },
            { id: 4, title: "Metabolic Surgery", author: "Mrs. Neetu Aggarwal", videoId: "_IBJ0_YzXog", type: "youtube", thumbnail: "https://img.youtube.com/vi/_IBJ0_YzXog/maxresdefault.jpg", quote: "Mrs. Neetu Aggarwal is a story worth sharing. Before the surgery, her weight was 88 kg with diabetes level very low." },
            { id: 5, title: "Laparoscopic Gastric Sleeve", author: "Mrs. Shabana", videoId: "6Z4eXkmuRJU", type: "youtube", thumbnail: "https://img.youtube.com/vi/6Z4eXkmuRJU/maxresdefault.jpg", quote: "Mrs. Shabana from Roorkee who underwent Laparoscopic Gastric Sleeve." },
            { id: 6, title: "Patient Success Story 1", author: "Verified Patient", videoId: "69539d8dd73a53e69e26a898", type: "gumlet", thumbnail: "https://video.gumlet.io/6553f91b3699cbd2c01ab6a9/69539d8dd73a53e69e26a898/thumbnail-1-0.png", quote: "Witness the life-changing results and incredible journey of our patients who chose health and vitality." },
            { id: 7, title: "Patient Success Story 2", author: "Verified Patient", videoId: "69539d8df3928b38fcf8f0a8", type: "gumlet", thumbnail: "https://video.gumlet.io/6553f91b3699cbd2c01ab6a9/69539d8df3928b38fcf8f0a8/thumbnail-1-0.png", quote: "A remarkable journey of regaining health and confidence through advanced metabolic care." },
            { id: 8, title: "Patient Success Story 3", author: "Verified Patient", videoId: "69539d9415b21a591c0e9cde", type: "gumlet", thumbnail: "https://video.gumlet.io/6553f91b3699cbd2c01ab6a9/69539d9415b21a591c0e9cde/thumbnail-1-0.png", quote: "Sharing the experience of transformation and the support received during the recovery phase." },
            { id: 9, title: "Patient Success Story 4", author: "Verified Patient", videoId: "69539d8ef3928b38fcf8f0cd", type: "gumlet", thumbnail: "https://video.gumlet.io/6553f91b3699cbd2c01ab6a9/69539d8ef3928b38fcf8f0cd/thumbnail-1-0.png", quote: "How specialized weight loss surgery helped overcome long-standing health challenges." },
            { id: 11, title: "Patient Success Story 6", author: "Verified Patient", videoId: "69539d56f3928b38fcf8ec28", type: "gumlet", thumbnail: "https://video.gumlet.io/6553f91b3699cbd2c01ab6a9/69539d56f3928b38fcf8ec28/thumbnail-1-0.png", quote: "Every step of the way was handled with care, from the first consult to post-op follow-ups." },
            { id: 12, title: "Patient Success Story 7", author: "Verified Patient", videoId: "69539d5615b21a591c0e97c5", type: "gumlet", thumbnail: "https://video.gumlet.io/6553f91b3699cbd2c01ab6a9/69539d5615b21a591c0e97c5/thumbnail-1-0.png", quote: "Finding health and wellness again. A heartfelt testimonial of a life transformed." },
            { id: 13, title: "Patient Success Story 8", author: "Verified Patient", videoId: "69539d53d73a53e69e26a3b4", type: "gumlet", thumbnail: "https://video.gumlet.io/6553f91b3699cbd2c01ab6a9/69539d53d73a53e69e26a3b4/thumbnail-1-0.png", quote: "Overcoming obesity and diabetes. A true story of resilience and medical excellence." },
            { id: 14, title: "Patient Success Story 9", author: "Verified Patient", videoId: "69539c6df3928b38fcf8d9dd", type: "gumlet", thumbnail: "https://video.gumlet.io/6553f91b3699cbd2c01ab6a9/69539c6df3928b38fcf8d9dd/thumbnail-1-0.png", quote: "A journey of hope turned into reality. Witness the metabolic transformation that changed everything." },
            { id: 15, title: "Patient Success Story 10", author: "Verified Patient", videoId: "69539cf4d73a53e69e269ca1", type: "gumlet", thumbnail: "https://video.gumlet.io/6553f91b3699cbd2c01ab6a9/69539cf4d73a53e69e269ca1/thumbnail-1-0.png", quote: "Reclaiming vitality and freedom. How our specialized care protocols supported this patient's success." },
            { id: 16, title: "Patient Success Story 11", author: "Verified Patient", videoId: "69539c6dd73a53e69e2691c8", type: "gumlet", thumbnail: "https://video.gumlet.io/6553f91b3699cbd2c01ab6a9/69539c6dd73a53e69e2691c8/thumbnail-1-0.png", quote: "Sustainable results and a brand new lifestyle. A powerful account of the SCOD surgical experience." }
        ];
        const awarenessVideos = [
            { id: 1, title: "Weightloss Experience with Bariatric Surgery and Options for weight regain explained with GLP1", category: "Awareness", thumbnail: "https://img.youtube.com/vi/TaOuNUjv_Dc/hqdefault.jpg", videoId: "TaOuNUjv_Dc" },
            { id: 2, title: "Shri Durgiana Temple, Amritsar is the oldest temple of lord hanuman", category: "Awareness", thumbnail: "https://img.youtube.com/vi/G4Cqz8ZMGts/hqdefault.jpg", videoId: "G4Cqz8ZMGts" },
            { id: 3, title: "A New Beginning Post-Surgery at SCOD Clinic Associated Hospital, New Delhi", category: "Recovery", thumbnail: "https://img.youtube.com/vi/JPaK5uLhBsw/hqdefault.jpg", videoId: "JPaK5uLhBsw" },
            { id: 4, title: "Happy Diwali to you and your loved ones from SCOD Family", category: "Festive", thumbnail: "https://img.youtube.com/vi/SKy44XwIORo/hqdefault.jpg", videoId: "SKy44XwIORo" },
            { id: 5, title: "Enjoy festive feast without any guilt!", category: "Festive", thumbnail: "https://img.youtube.com/vi/XOm8ba9_h4M/hqdefault.jpg", videoId: "XOm8ba9_h4M" },
            { id: 6, title: "Types of weight loss surgeries", category: "Education", thumbnail: "https://img.youtube.com/vi/rEd-4Pov_iw/hqdefault.jpg", videoId: "rEd-4Pov_iw" },
            { id: 7, title: "The truth about diabetes!", category: "Diabetes", thumbnail: "https://img.youtube.com/vi/V-gaaGIaKGw/hqdefault.jpg", videoId: "V-gaaGIaKGw" },
            { id: 8, title: "OMAD- Shortcut or Setback?", category: "Lifestyle", thumbnail: "https://img.youtube.com/vi/c0s3MIIC4Nc/hqdefault.jpg", videoId: "c0s3MIIC4Nc" },
            { id: 9, title: "How Bariatric Surgery is done?", category: "Education", thumbnail: "https://img.youtube.com/vi/bNoFXoLDnEc/hqdefault.jpg", videoId: "bNoFXoLDnEc" },
            { id: 10, title: "Is Bariatric Surgery covered in Insurance?", category: "Insurance", thumbnail: "https://img.youtube.com/vi/wBhZyyHeWtI/hqdefault.jpg", videoId: "wBhZyyHeWtI" },
            { id: 11, title: "PM targets obesity crisis", category: "Awareness", thumbnail: "https://img.youtube.com/vi/xeHuxyORptg/hqdefault.jpg", videoId: "xeHuxyORptg" },
            { id: 12, title: "Changes after Bariatric Surgery!", category: "Post-Surgery", thumbnail: "https://img.youtube.com/vi/vs2gB7Zyuks/hqdefault.jpg", videoId: "vs2gB7Zyuks" },
            { id: 13, title: "TIPS FOR GUT HEALTH!", category: "Gut Health", thumbnail: "https://img.youtube.com/vi/RxVX8HEQULc/hqdefault.jpg", videoId: "RxVX8HEQULc" },
            { id: 14, title: "Amit Shah beats diabetes: Dr. Arush’s take!", category: "Diabetes", thumbnail: "https://img.youtube.com/vi/RXYX-e51hsA/hqdefault.jpg", videoId: "RXYX-e51hsA" },
            { id: 15, title: "Is Bariatric Surgery cheating?", category: "Myths", thumbnail: "https://img.youtube.com/vi/N1eoPQnLlis/hqdefault.jpg", videoId: "N1eoPQnLlis" }
        ];
        const procedures = {
            sleeve: {
                title: "Laparoscopic Sleeve Gastrectomy (LSG)",
                subtitle: "The restrictive gold standard",
                what: "A minimally invasive procedure where approximately 80% of the stomach is removed, leaving a banana-shaped 'sleeve'.",
                how: "It restricts food intake and removes the hunger-hormone (Ghrelin) producing portion of the stomach, significantly reducing appetite.",
                suitability: "Ideal for patients with BMI >30, lower surgical risk profile, or those taking medications that require stomach absorption.",
                recovery: "1-2 nights hospital stay. Return to work in 1-2 weeks. Full recovery in 4 weeks.",
                faqs: [
                    { q: "Is it reversible?", a: "No, the portion of the stomach removed is permanent." },
                    { q: "Will I have dietary restrictions?", a: "Yes, focused on protein and small portions, but most foods can be tolerated over time." }
                ]
            },
            rygb: {
                title: "Roux-en-Y Gastric Bypass (RYGB)",
                subtitle: "The metabolic gold standard",
                what: "Creates a small stomach pouch and bypasses a portion of the small intestine to restrict intake and reduce absorption.",
                how: "Changes gut hormones to promote satiety and suppress hunger while limiting calorie absorption.",
                suitability: "Best for patients with severe acid reflux (GERD) or uncontrolled Type 2 Diabetes.",
                recovery: "2 nights hospital stay. Return to work in 2 weeks. Full recovery in 4-6 weeks.",
                faqs: [
                    { q: "Does it cure diabetes?", a: "It leads to remission in up to 80% of patients, often within days of surgery." },
                    { q: "What is dumping syndrome?", a: "Nausea/dizziness after eating sugar/fats, which acts as a deterrent for unhealthy eating." }
                ]
            },
            mgb: {
                title: "Mini Gastric Bypass (MGB/OAGB)",
                subtitle: "High efficacy, single anastomosis",
                what: "A simplified bypass connecting a long stomach pouch directly to the small intestine loop.",
                how: "Combines restriction with significant malabsorption, often resulting in superior weight loss for higher BMIs.",
                suitability: "Patients with very high BMI or metabolic syndrome. Not recommended for severe reflux sufferers.",
                recovery: "1-2 nights hospital stay. Rapid recovery due to fewer connection points.",
                faqs: [
                    { q: "Is it reversible?", a: "It is technically reversible or convertible to standard bypass if needed." },
                    { q: "Why choose MGB over RYGB?", a: "Shorter operative time and often greater weight loss maintenance." }
                ]
            },
            revision: {
                title: "Revisional Bariatric Surgery",
                subtitle: "Corrective solutions for long-term success",
                what: "Procedures performed to correct or enhance the results of a previous weight loss surgery.",
                how: "Converts one procedure to another (e.g., Sleeve to Bypass) or modifies existing anatomy.",
                suitability: "Patients with weight regain, unresolved comorbidities, or complications like severe reflux.",
                recovery: "Varies by procedure complexity. Typically 2-3 nights hospital stay.",
                faqs: [
                    { q: "Is revision riskier?", a: "It is technically more complex, requiring an expert surgeon like Dr. Arush." },
                    { q: "Can I have surgery again?", a: "Yes, evaluation is key to understanding why the first procedure didn't yield optimal results." }
                ]
            }
        };
        // const generalFaqs = [
        //     { q: "How much weight can I expect to lose?", a: "Most patients lose between 60% to 80% of their excess body weight within 12-18 months after surgery. The exact amount depends on the procedure chosen and your adherence to lifestyle changes." },
        //     { q: "Is bariatric surgery safe?", a: "Yes, modern bariatric surgery is considered as safe as gallbladder surgery. At SCOD, we use advanced minimally invasive laparoscopic techniques which significantly reduce risks and recovery time." },
        //     { q: "Will my insurance cover the procedure?", a: "Many insurance plans cover bariatric surgery if you meet specific medical criteria, such as a BMI over 40, or over 35 with comorbidities like diabetes. Our team helps navigate the insurance approval process." },
        //     { q: "Can I get pregnant after surgery?", a: "Yes, but we generally recommend waiting 12-18 months after surgery to ensure your weight is stable and nutritional status is optimal for a healthy pregnancy. Women often find their fertility improves significantly after weight loss." },
        //     { q: "Will I have to take vitamins forever?", a: "Yes. Because these surgeries alter how your body absorbs nutrients, lifelong vitamin and mineral supplementation is essential to prevent deficiencies and maintain health." }
        // ];
        
        const generalFaqs = [
    { 
        q: "What is Weight Loss Surgery?", 
        a: "Weight loss surgery (also known as bariatric surgery) is a medical procedure that helps people lose weight by changing the way the digestive system works. It reduces the size of the stomach or changes how food is absorbed, helping patients eat less and feel full sooner. Many people choose Weight Loss Surgery in <?php echo htmlspecialchars($location); ?> to manage severe obesity and improve overall health." 
    },
    { 
        q: "Who is a good candidate for Weight Loss Surgery?", 
        a: "Weight loss surgery is usually recommended for people with a Body Mass Index (BMI) above 40, or above 35 with obesity-related health conditions such as diabetes, high blood pressure, or sleep apnea." 
    },
    { 
        q: "How much weight can a person lose after Weight Loss Surgery?", 
        a: "Most patients lose around 50–70% of their excess weight within the first 12–18 months after surgery. The exact results depend on the type of procedure, lifestyle changes, and follow-up care provided by a Top Weight Loss Surgeon in <?php echo htmlspecialchars($location); ?>." 
    },
    { 
        q: "Is Weight Loss Surgery safe?", 
        a: "Yes, weight loss surgery is generally considered safe when performed by an experienced and qualified surgeon. Choosing a specialist who performs Weight Loss Surgery in <?php echo htmlspecialchars($location); ?> using modern surgical techniques can significantly reduce risks and improve outcomes." 
    },
    { 
        q: "How long does it take to recover after Weight Loss Surgery?", 
        a: "Recovery time varies depending on the procedure and the patient’s overall health. Most patients can return to light activities within 1–2 weeks, while full recovery may take a few weeks. Proper guidance from a Top Weight Loss Surgeon in <?php echo htmlspecialchars($location); ?> helps ensure a smooth recovery." 
    },
    { 
        q: "Will I need to follow a special diet after Weight Loss Surgery?", 
        a: "Yes, patients need to follow a structured diet plan after surgery. The diet usually starts with liquids and gradually progresses to soft and solid foods. Nutritional guidance is an important part of the recovery process after Weight Loss Surgery in <?php echo htmlspecialchars($location); ?>." 
    },
    { 
        q: "Can Weight Loss Surgery help improve other health conditions?", 
        a: "Yes, weight loss surgery can significantly improve or even resolve several obesity-related conditions such as type 2 diabetes, high blood pressure, sleep apnea, and joint pain. Many patients undergoing Weight Loss Surgery in <?php echo htmlspecialchars($location); ?> experience improved overall health and quality of life." 
    },
    { 
        q: "Why Dr. Arush Sabharwal is the Best Weight Loss Surgeon in <?php echo htmlspecialchars($location); ?>?", 
        a: "Dr. Arush Sabharwal is recognized as a Top Weight Loss Surgeon in <?php echo htmlspecialchars($location); ?> because of his extensive experience in treating obesity and performing advanced weight loss procedures. With more than 15 years of experience, he specializes in modern and minimally invasive techniques that support safe surgery and faster recovery." 
    }
];
        // Feather Icons
        feather.replace();
        // Render Functions
        // Initialize State
        let activeGalleryIndex = 0;
        let activeTestimonialIndex = 0;
        let activeAwarenessIndex = 0;
        let itemsPerView = 1;
        // Gallery Data
        const galleryImages = [
            { before: "https://brandingpioneers.co.in/scod/patient3-scod.webp", after: "https://brandingpioneers.co.in/scod/patient2-scod.webp", label: "Gastric Sleeve" },
            { before: "https://brandingpioneers.co.in/scod/patient4-scod.webp", after: "https://brandingpioneers.co.in/scod/patient5-scod.webp", label: "Gastric Bypass" },
            { before: "https://brandingpioneers.co.in/scod/patient1-scod.webp", after: "https://brandingpioneers.co.in/scod/patient3-scod.webp", label: "Metabolic Surgery" }
        ];
        // 1. Render Gallery (Matches React Grid Layout)
        function renderGallery() {
            const container = document.getElementById('gallery-container');
            const label = document.getElementById('gallery-label');
            const current = galleryImages[activeGalleryIndex];
            // Update Label
            label.textContent = current.label;
            // Render Before/After Grid
            container.innerHTML = `
                <div class="relative group overflow-hidden rounded-2xl shadow-lg border border-gray-100 h-80">
                    <div class="absolute top-4 left-4 bg-black/70 text-white px-3 py-1 rounded-full text-sm font-bold z-10">Before</div>
                    <img src="${current.before}" alt="Before" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                </div>
                <div class="relative group overflow-hidden rounded-2xl shadow-lg border border-gray-100 h-80">
                    <div class="absolute top-4 left-4 bg-scod text-white px-3 py-1 rounded-full text-sm font-bold z-10">After</div>
                    <img src="${current.after}" alt="After" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                </div>
            `;
        }
        // 2. Render Testimonials Slider (Matches React Card Design - Framer Motion Style)
        function renderTestimonialSlider() {
            const container = document.getElementById('testimonials-slider');
            const totalItems = testimonialVideos.length;
            // React: style={{ width: `${(testimonialVideos.length * 100) / itemsPerView}%` }}
            const containerWidth = (totalItems * 100) / itemsPerView;
            container.style.width = `${containerWidth}%`;
            // React: style={{ width: `${100 / testimonialVideos.length}%` }} for each item
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
            const totalItems = testimonialVideos.length;
            // React: animate={{ x: `-${testimonialIndex * (100 / testimonialVideos.length)}%` }}
            const translateX = activeTestimonialIndex * (100 / totalItems);
            container.style.transition = 'transform 0.5s cubic-bezier(0.25, 1, 0.5, 1)';
            container.style.transform = `translateX(-${translateX}%)`;
        }
        // 3. Render Awareness Slider (Matches React Card Design - Framer Motion Style)
        function renderAwarenessSlider() {
            const container = document.getElementById('awareness-slider');
            const totalItems = awarenessVideos.length;
            // React: style={{ width: `${(awarenessVideos.length * 100) / itemsPerView}%` }}
            const containerWidth = (totalItems * 100) / itemsPerView;
            container.style.width = `${containerWidth}%`;
            // React: style={{ width: `${100 / awarenessVideos.length}%` }} for each item
            const itemWidth = 100 / totalItems;
            container.innerHTML = awarenessVideos.map(video => `
                <div class="px-4 flex-shrink-0 box-border" style="width: ${itemWidth}%;">
                    <div class="bg-gray-50 rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group cursor-pointer border border-gray-100 h-full flex flex-col video-trigger"
                         data-video-id="${video.videoId}" data-video-type="${video.type || 'youtube'}">
                        <div class="relative aspect-video overflow-hidden">
                            <img src="${video.thumbnail}" alt="${video.title}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-black/10 group-hover:bg-black/20 transition-colors flex items-center justify-center">
                                <div class="w-14 h-14 bg-white/90 rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                                    <i data-feather="play" class="w-5 h-5 text-scod ml-1"></i>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 flex-grow">
                            <h3 class="font-bold text-lg text-gray-900 group-hover:text-scod transition-colors">${video.title}</h3>
                        </div>
                    </div>
                </div>
            `).join('');
            feather.replace();
            attachVideoModalListeners();
            updateAwarenessSliderPosition();
        }
        function updateAwarenessSliderPosition() {
            const container = document.getElementById('awareness-slider');
            const totalItems = awarenessVideos.length;
            // React: animate={{ x: `-${awarenessIndex * (100 / awarenessVideos.length)}%` }}
            const translateX = activeAwarenessIndex * (100 / totalItems);
            container.style.transition = 'transform 0.5s cubic-bezier(0.25, 1, 0.5, 1)';
            container.style.transform = `translateX(-${translateX}%)`;
        }
        // Helper to update items per view
        function updateItemsPerView() {
            if (window.innerWidth >= 1024) itemsPerView = 3;
            else if (window.innerWidth >= 768) itemsPerView = 2;
            else itemsPerView = 1;
            // Re-render is not strictly needed if we just use CSS for widths, 
            // but we do need it for the logic of next/prev bounds.
            renderTestimonialSlider();
            renderAwarenessSlider();
        }
        // Event Listeners for Sliders (Need to add buttons in HTML first?)
        // The HTML fileview showed buttons for Gallery, but didn't show buttons for Testimonials/Awareness in the View.
        // Let's check the HTML file content again around line 500-530.
        // Ah, the HTML I viewed earlier (lines 1-800) did NOT show the buttons for Testimonials/Awareness nearby the headers.
        // The React code HAS buttons. I might need to inject the buttons too if they are missing.
        // Let's assume for this step I am just fixing the Render logic and will check buttons in next step?
        // No, I should do it all at once.
        // React code for controls:
        // <div class="flex flex-col items-end gap-4"> ... buttons ... </div>
        // I will inject the entire section content (Header + Controls + Slider Container) via JS? 
        // Or just modify the "render" functions to target the container and assume buttons exist?
        // The HTML view showed: 
        // <section> ... <h2...> ... <div id="testimonials-slider"> ... </section>
        // It seems the buttons are MISSING in HTML.
        // Strategy: Rewrite the entire innerHTML of the sections to include the header/buttons/slider wrapper.
        function renderProcedure(key) {
            const data = procedures[key];
            const container = document.getElementById('procedure-content-container');
            if (!container) return;
            let imgPath = '';
            // Adjust paths to match your project structure
            if (key === 'sleeve') imgPath = '<?php echo $path_prefix; ?>assets/scod/treatment/bariatric/Laparoscopic Sleeve Gastrectomy (LSG).webp';
            else if (key === 'rygb') imgPath = '<?php echo $path_prefix; ?>assets/scod/treatment/bariatric/Roux-en-Y Gastric Bypass (RYGB).webp';
            else if (key === 'revision') imgPath = '<?php echo $path_prefix; ?>assets/scod/treatment/bariatric/Revisional Bariatric Surgery.webp';
            else imgPath = 'https://brandingpioneers.co.in/scod/Metabolic.webp';
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
                                <h4 class="text-lg font-bold text-gray-900 mb-2 flex items-center"><i data-feather="trending-up" class="w-5 h-5 text-scod mr-2"></i> How it works</h4>
                                <p class="text-gray-600 leading-relaxed">${data.how}</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-gray-900 mb-2 flex items-center"><i data-feather="user-check" class="w-5 h-5 text-scod mr-2"></i> Ideal Candidate</h4>
                                <p class="text-gray-600 leading-relaxed">${data.suitability}</p>
                            </div>
                            <div class="bg-white p-6 rounded-xl border-l-4 border-scod">
                                <h4 class="font-bold text-gray-900 mb-1">Recovery Timeline</h4>
                                <p class="text-gray-600 text-sm">${data.recovery}</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col h-full">
                        <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-200 h-64 mb-8 flex items-center justify-center relative group">
                            <img src="${imgPath}" alt="${data.title}" class="w-full h-full object-contain p-4 group-hover:scale-105 transition-transform duration-500">
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
            // Add click handlers for FAQ toggle
            document.querySelectorAll('.faq-btn').forEach(btn => {
                btn.addEventListener('click', function () {
                    const item = this.closest('.faq-item');
                    const content = item.querySelector('.faq-content');
                    const iconContainer = this.querySelector('.faq-icon');
                    const plusIcon = this.querySelector('.faq-plus');
                    const minusIcon = this.querySelector('.faq-minus');
                    // Close other FAQs
                    document.querySelectorAll('.faq-item').forEach(other => {
                        if (other !== item && !other.querySelector('.faq-content').classList.contains('hidden')) {
                            other.querySelector('.faq-content').classList.add('hidden');
                            other.querySelector('.faq-icon').classList.remove('bg-scod', 'text-white');
                            other.querySelector('.faq-icon').classList.add('bg-gray-100', 'text-gray-500');
                            other.querySelector('.faq-plus').classList.remove('hidden');
                            other.querySelector('.faq-minus').classList.add('hidden');
                        }
                    });
                    // Toggle current FAQ
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
        // Gallery Data is already defined above at line 787
        // Just update button listeners to use activeGalleryIndex and renderGallery
        const nextBtn = document.getElementById('gallery-next');
        const prevBtn = document.getElementById('gallery-prev');
        if (nextBtn) nextBtn.addEventListener('click', () => {
            activeGalleryIndex = (activeGalleryIndex + 1) % galleryImages.length;
            renderGallery();
        });
        if (prevBtn) prevBtn.addEventListener('click', () => {
            activeGalleryIndex = (activeGalleryIndex - 1 + galleryImages.length) % galleryImages.length;
            renderGallery();
        });
        // Video Modal Logic
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
        if (closeBtn) {
            closeBtn.addEventListener('click', () => {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
                iframe.src = '';
            });
        }
        // Initialize itemsPerView first based on screen width
        if (window.innerWidth >= 1024) itemsPerView = 3;
        else if (window.innerWidth >= 768) itemsPerView = 2;
        else itemsPerView = 1;
        // Initialize components
        renderGallery();
        renderTestimonialSlider();
        renderAwarenessSlider();
        renderFaqs();
        renderProcedure('sleeve');
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
        // Slider Navigation - Awareness
        const awarenessPrevBtn = document.getElementById('awareness-prev-btn');
        const awarenessNextBtn = document.getElementById('awareness-next-btn');
        function nextAwareness() {
            if (activeAwarenessIndex < awarenessVideos.length - itemsPerView) {
                activeAwarenessIndex++;
            } else {
                activeAwarenessIndex = 0;
            }
            updateAwarenessSliderPosition();
        }
        function prevAwareness() {
            if (activeAwarenessIndex > 0) {
                activeAwarenessIndex--;
            } else {
                activeAwarenessIndex = Math.max(0, awarenessVideos.length - itemsPerView);
            }
            updateAwarenessSliderPosition();
        }
        if (awarenessNextBtn) awarenessNextBtn.addEventListener('click', nextAwareness);
        if (awarenessPrevBtn) awarenessPrevBtn.addEventListener('click', prevAwareness);
        // Handle Resize
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