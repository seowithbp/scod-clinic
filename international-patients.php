<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>International Patient Services | SCOD Clinic India</title>
    <meta name="description"
        content="World-class bariatric care for international patients at SCOD Clinic, India. Dedicated support for travel, luxury accommodation, and global-standard surgical treatment.">
    <link href="./css/custom.css" rel="stylesheet">
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
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body class="min-h-screen bg-white text-gray-900">
    <!-- ===================== NAVBAR ===================== -->
    <?php include 'includes/header.php'; ?>
    <!-- 1. HERO SECTION -->
    <section class="relative h-[500px] flex items-center bg-gray-900 text-white overflow-hidden mt-20">
        <div class="absolute inset-0 z-0">
            <img src="https://brandingpioneers.co.in/scod/scod-breadcrumbs/International Patient Guide.webp"
                alt="International Medical Travel" class="w-full h-full object-cover object-center opacity-40">
            <div class="absolute inset-0 bg-gradient-to-r from-scod/95 via-scod/80 to-transparent"></div>
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full text-left">
            <div class="max-w-3xl">
                <div
                    class="inline-flex items-center space-x-2 bg-white/10 backdrop-blur-md px-4 py-2 rounded-full mb-6 border border-white/20">
                    <i data-feather="globe" class="w-5 h-5 text-emerald-300"></i>
                    <span class="text-sm font-bold tracking-wide uppercase">International Patient Center</span>
                </div>
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight text-white">
                    World-Class Care <br> <span class="text-emerald-300">Global Destination</span>
                </h1>
                <p class="text-xl text-blue-100 max-w-2xl leading-relaxed mb-8">
                    Seamless medical travel to India. We combine surgical excellence with compassionate hospitality to
                    make your healing journey comfortable and successful.
                </p>
                <div class="flex flex-col sm:flex-row gap-5 items-start">
                    <a href="contact.php"
                        class="bg-white text-scod px-8 py-4 rounded-full font-bold text-lg hover:bg-gray-100 transition-all shadow-lg flex items-center justify-center space-x-2">
                        <i data-feather="send" class="w-5 h-5"></i>
                        <span>Get a Quote</span>
                    </a>
                    <a href="mailto:info@scodclinic.com"
                        class="bg-transparent border-2 border-white/30 backdrop-blur-sm text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-white/10 transition-all flex items-center justify-center space-x-2">
                        <i data-feather="message-circle" class="w-5 h-5"></i>
                        <span>Talk to Coordinator</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- 2. WHY CHOOSE SCOD -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-left mb-16">
                <span class="text-scod font-bold tracking-widest uppercase text-sm">The SCOD Advantage</span>
                <h2 class="text-4xl font-bold text-gray-900 mt-2">Why Choose Us?</h2>
                <p class="text-gray-600 mt-4 max-w-2xl">We understand the anxiety of traveling for surgery. Here is why
                    patients from over 20 countries trust us.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div
                    class="bg-gray-50 p-8 rounded-2xl border border-gray-100 hover:border-scod hover:shadow-xl transition-all duration-300 group text-left">
                    <div
                        class="w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-sm mb-6 mr-auto group-hover:bg-scod group-hover:text-white transition-colors text-scod">
                        <i data-feather="award" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Global Expertise</h3>
                    <p class="text-gray-600 leading-relaxed text-sm">Led by Dr. Arush Sabharwal, a surgeon with
                        international fellowships from USA, France, and Australia.</p>
                </div>
                <div
                    class="bg-gray-50 p-8 rounded-2xl border border-gray-100 hover:border-scod hover:shadow-xl transition-all duration-300 group text-left">
                    <div
                        class="w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-sm mb-6 mr-auto group-hover:bg-scod group-hover:text-white transition-colors text-scod">
                        <i data-feather="dollar-sign" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Cost Advantage</h3>
                    <p class="text-gray-600 leading-relaxed text-sm">World-class treatment at 60-80% less cost compared
                        to US, UK, or UAE, with transparent pricing.</p>
                </div>
                <div
                    class="bg-gray-50 p-8 rounded-2xl border border-gray-100 hover:border-scod hover:shadow-xl transition-all duration-300 group text-left">
                    <div
                        class="w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-sm mb-6 mr-auto group-hover:bg-scod group-hover:text-white transition-colors text-scod">
                        <i data-feather="activity" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Advanced Technology</h3>
                    <p class="text-gray-600 leading-relaxed text-sm">We use the latest 4K laparoscopic systems and
                        FDA-approved staplers for maximum safety.</p>
                </div>
                <div
                    class="bg-gray-50 p-8 rounded-2xl border border-gray-100 hover:border-scod hover:shadow-xl transition-all duration-300 group text-left">
                    <div
                        class="w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-sm mb-6 mr-auto group-hover:bg-scod group-hover:text-white transition-colors text-scod">
                        <i data-feather="briefcase" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Concierge Care</h3>
                    <p class="text-gray-600 leading-relaxed text-sm">A dedicated international team handles your
                        logistics, appointments, and non-medical needs.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- 3. FOCUS: TANZANIA & EAST AFRICA -->
    <section class="py-20 bg-scod text-white overflow-hidden relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <div
                        class="inline-flex items-center space-x-2 bg-white/10 backdrop-blur-md px-3 py-1 rounded-full mb-6 border border-white/20">
                        <i data-feather="map-pin" class="w-4 h-4 text-emerald-300"></i>
                        <span class="text-xs font-bold tracking-wide uppercase text-emerald-100">Regional Focus</span>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">
                        Trusted in <br> <span class="text-emerald-300">Tanzania & East Africa</span>
                    </h2>
                    <p class="text-xl text-blue-100 mb-8 leading-relaxed">
                        We have a special connection with East Africa. Dr. Arush Sabharwal regularly conducts OPDs in
                        Dar es Salaam, making us the preferred choice for patients from Kenya, Uganda, and Tanzania.
                    </p>
                    <ul class="space-y-4 mb-8">
                        <li
                            class="flex items-center bg-white/10 px-4 py-3 rounded-lg backdrop-blur-sm border border-white/5">
                            <i data-feather="check" class="w-5 h-5 text-emerald-400 mr-3 flex-shrink-0"></i>
                            <span>Regular OPDs in Dar es Salaam</span>
                        </li>
                        <li
                            class="flex items-center bg-white/10 px-4 py-3 rounded-lg backdrop-blur-sm border border-white/5">
                            <i data-feather="check" class="w-5 h-5 text-emerald-400 mr-3 flex-shrink-0"></i>
                            <span>Dedicated Swahili-speaking coordinators</span>
                        </li>
                        <li
                            class="flex items-center bg-white/10 px-4 py-3 rounded-lg backdrop-blur-sm border border-white/5">
                            <i data-feather="check" class="w-5 h-5 text-emerald-400 mr-3 flex-shrink-0"></i>
                            <span>Direct flight connectivity to New Delhi</span>
                        </li>
                    </ul>
                    <a href="contact.php"
                        class="inline-flex items-center bg-emerald-500 text-white px-8 py-4 rounded-full font-bold hover:bg-emerald-600 transition-all shadow-lg">
                        <span>Check Next OPD Dates</span>
                        <i data-feather="calendar" class="ml-2 w-5 h-5"></i>
                    </a>
                </div>
                <div class="relative">
                    <div class="rounded-2xl overflow-hidden shadow-2xl border-4 border-white/20">
                        <img src="assets/scod/africa/african-1.webp" alt="SCOD Africa Connection"
                            class="w-full h-[500px] object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent">
                        </div>
                        <div class="absolute bottom-0 left-0 p-8">
                            <h3 class="text-2xl font-bold text-white mb-2">Bridging Continents</h3>
                            <p class="text-blue-200">Bringing advanced metabolic care to your doorstep.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 4. PACKAGES & EXPECTATIONS -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-left mb-16">
                <span class="text-scod font-bold tracking-widest uppercase text-sm">Transparent Pricing</span>
                <h2 class="text-4xl font-bold text-gray-900 mt-2">All-Inclusive Packages</h2>
                <p class="text-gray-600 mt-4 max-w-2xl">No hidden costs. Our international packages are designed to
                    cover your entire medical journey.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div
                    class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex items-center space-x-4 hover:shadow-md transition-shadow">
                    <div
                        class="w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center text-scod flex-shrink-0">
                        <i data-feather="check" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900 text-sm uppercase tracking-wide">Airport Transfer</h4>
                        <p class="text-gray-600 font-medium">Complimentary VIP Pick & Drop</p>
                    </div>
                </div>
                <div
                    class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex items-center space-x-4 hover:shadow-md transition-shadow">
                    <div
                        class="w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center text-scod flex-shrink-0">
                        <i data-feather="check" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900 text-sm uppercase tracking-wide">Hospital Stay</h4>
                        <p class="text-gray-600 font-medium">Private Deluxe Room Included</p>
                    </div>
                </div>
                <div
                    class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex items-center space-x-4 hover:shadow-md transition-shadow">
                    <div
                        class="w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center text-scod flex-shrink-0">
                        <i data-feather="check" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900 text-sm uppercase tracking-wide">Pre-Op Evaluation</h4>
                        <p class="text-gray-600 font-medium">Complete Cardiac & Metabolic Profile</p>
                    </div>
                </div>
                <div
                    class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex items-center space-x-4 hover:shadow-md transition-shadow">
                    <div
                        class="w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center text-scod flex-shrink-0">
                        <i data-feather="check" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900 text-sm uppercase tracking-wide">Surgery</h4>
                        <p class="text-gray-600 font-medium">All OT Charges, Consumables & Surgeon Fees</p>
                    </div>
                </div>
                <div
                    class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex items-center space-x-4 hover:shadow-md transition-shadow">
                    <div
                        class="w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center text-scod flex-shrink-0">
                        <i data-feather="check" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900 text-sm uppercase tracking-wide">Medication</h4>
                        <p class="text-gray-600 font-medium">Discharge Kit & Initial Supplements</p>
                    </div>
                </div>
                <div
                    class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex items-center space-x-4 hover:shadow-md transition-shadow">
                    <div
                        class="w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center text-scod flex-shrink-0">
                        <i data-feather="check" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900 text-sm uppercase tracking-wide">Post-Op Care</h4>
                        <p class="text-gray-600 font-medium">Telemedicine Follow-up Back Home</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 5. LOGISTICS: VISA, STAY, LANGUAGE -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-5">
                    <span class="text-scod font-bold tracking-widest uppercase text-sm">Hassle-Free Travel</span>
                    <h2 class="text-4xl font-bold text-gray-900 mt-2 mb-6">We Handle the Logistics</h2>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        Traveling for surgery can be daunting. Our concierge team takes care of the paperwork, stay, and
                        communication so you can focus solely on your recovery.
                    </p>
                    <div class="space-y-8">
                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 bg-emerald-50 rounded-xl flex items-center justify-center text-emerald-600 flex-shrink-0 mr-4">
                                <i data-feather="file-text" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 text-lg">Visa Assistance</h4>
                                <p class="text-gray-600 text-sm mt-1">We provide official medical invitation letters to
                                    expedite your medical visa processing for you and your attendant.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 bg-emerald-50 rounded-xl flex items-center justify-center text-emerald-600 flex-shrink-0 mr-4">
                                <i data-feather="home" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 text-lg">Accommodation</h4>
                                <p class="text-gray-600 text-sm mt-1">We have partnerships with hotels and guest houses
                                    near the clinic, ranging from budget-friendly to 5-star luxury.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 bg-emerald-50 rounded-xl flex items-center justify-center text-emerald-600 flex-shrink-0 mr-4">
                                <i data-feather="message-circle" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 text-lg">Language Support</h4>
                                <p class="text-gray-600 text-sm mt-1">Communication is never a barrier. We offer
                                    interpretation services for Arabic, French, Swahili, and Russian speakers.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-7">
                    <div class="grid grid-cols-2 gap-4">
                        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=600&q=80"
                            alt="Luxury Hotel"
                            class="rounded-2xl shadow-lg w-full h-64 object-cover transform translate-y-8">
                        <img src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?auto=format&fit=crop&w=600&q=80"
                            alt="Travel" class="rounded-2xl shadow-lg w-full h-64 object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 6. PATIENT COLLAGE SECTION -->
    <section class="py-20 bg-gray-50 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-left mb-12">
                <span class="text-scod font-bold tracking-widest uppercase text-sm">Global Smiles</span>
                <h2 class="text-4xl font-bold text-gray-900 mt-2">Our International Family</h2>
            </div>
            <div class="columns-1 md:columns-3 gap-6 space-y-6" id="patient-collage"></div>
        </div>
    </section>
    <!-- 7. CTA SECTION -->
    <section class="py-20 bg-scod text-white text-left">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">Start Your Medical Journey</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl">
                Get a free treatment plan and cost estimate. Our international team will respond within 24 hours.
            </p>
            <div class="bg-white/10 backdrop-blur-md p-8 rounded-3xl max-w-lg border border-white/20">
                <form class="space-y-4 text-left">
                    <div>
                        <label class="text-sm font-bold text-blue-100 ml-1">Name</label>
                        <input type="text"
                            class="w-full px-4 py-3 rounded-lg bg-white text-gray-900 focus:outline-none focus:ring-2 focus:ring-emerald-300"
                            placeholder="Your Name">
                    </div>
                    <div>
                        <label class="text-sm font-bold text-blue-100 ml-1">Country</label>
                        <select
                            class="w-full px-4 py-3 rounded-lg bg-white text-gray-900 focus:outline-none focus:ring-2 focus:ring-emerald-300">
                            <option>Select Country</option>
                            <option>Tanzania</option>
                            <option>Kenya</option>
                            <option>Uganda</option>
                            <option>USA/UK</option>
                            <option>Other</option>
                        </select>
                    </div>
                    <div>
                        <label class="text-sm font-bold text-blue-100 ml-1">Phone / WhatsApp</label>
                        <input type="tel"
                            class="w-full px-4 py-3 rounded-lg bg-white text-gray-900 focus:outline-none focus:ring-2 focus:ring-emerald-300"
                            placeholder="+1 ...">
                    </div>
                    <button type="submit"
                        class="w-full bg-emerald-500 text-white font-bold py-4 rounded-lg hover:bg-emerald-600 transition-all shadow-lg mt-2">
                        Enquire Now
                    </button>
                </form>
            </div>
        </div>
    </section>
    <script>
        feather.replace();
        const patientCollage = [
            "assets/scod/africa/african-weightloss.png",
            "assets/scod/africa/tanzanean-weightloss.png",
            "assets/scod/africa/african-weightloss-3.png",
            "assets/scod/africa/african-realistic-1.png",
            "assets/scod/africa/african-realistic-2.png",
            "assets/scod/africa/tanzanean-realistic-3.png"
        ];
        const collageContainer = document.getElementById('patient-collage');
        collageContainer.innerHTML = patientCollage.map(src => `
            <div class="break-inside-avoid rounded-2xl overflow-hidden shadow-lg border border-gray-100 group relative">
                <img src="${src}" alt="Happy Patient" class="w-full h-auto object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <span class="text-white font-bold tracking-wide">SCOD Patient</span>
                </div>
            </div>
        `).join('');
    </script>
    <!-- ===================== FOOTER ===================== -->
    <?php include 'includes/footer.php'; ?>
</body>
</html>