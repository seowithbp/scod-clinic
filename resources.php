<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Resources & FAQs | Preparing for Surgery - SCOD</title>
    <meta name="description"
        content="Comprehensive resources for SCOD Clinic patients. Access pre-op checklists, FAQs, and essential guides to ensure a smooth, informed, and successful bariatric surgery journey from start to finish.">
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
<body class="min-h-screen bg-gray-50 text-gray-900">
    <!-- ===================== NAVBAR ===================== -->
    <?php include 'includes/header.php'; ?>
    <!-- 1. HERO SECTION -->
    <section class="relative h-[500px] flex items-center bg-gray-900 text-white overflow-hidden mt-20">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=1920&q=80"
                alt="Patient Resources" class="w-full h-full object-cover object-center opacity-40">
            <div class="absolute inset-0 bg-gradient-to-r from-scod/95 via-scod/80 to-transparent"></div>
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full text-left">
            <div
                class="inline-flex items-center space-x-2 bg-white/10 backdrop-blur-md px-4 py-2 rounded-full mb-6 border border-white/20">
                <i data-feather="help-circle" class="w-5 h-5 text-emerald-300"></i>
                <span class="text-sm font-bold tracking-wide uppercase">Knowledge Center</span>
            </div>
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight text-white">
                Patient <span class="text-emerald-300">Resources</span>
            </h1>
            <p class="text-xl text-blue-100 max-w-2xl leading-relaxed mb-8">
                Find answers to your questions, understand procedures, and prepare for your journey to wellness with
                SCOD.
            </p>
            <!-- Search Bar -->
            <div class="max-w-xl relative">
                <input type="text" id="faq-search" placeholder="Search for answers (e.g., 'recovery', 'insurance')..."
                    class="w-full pl-12 pr-6 py-4 rounded-full text-gray-900 focus:outline-none focus:ring-4 focus:ring-emerald-500/30 shadow-xl">
                <i data-feather="search"
                    class="absolute left-5 top-1/2 transform -translate-y-1/2 text-gray-400 w-5 h-5"></i>
            </div>
        </div>
    </section>
    <!-- 2. MAIN CONTENT -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-12">
                <!-- Sidebar Categories (Desktop) -->
                <div class="lg:w-1/4">
                    <div class="sticky top-24 space-y-2">
                        <h3 class="text-gray-900 font-bold text-lg mb-4 px-2">Browse Topics</h3>
                        <!-- Mobile Dropdown (Hidden on Desktop) -->
                        <div class="lg:hidden mb-6">
                            <select id="category-select"
                                class="w-full p-4 rounded-xl border border-gray-200 bg-white font-bold text-gray-700 focus:ring-2 focus:ring-scod outline-none">
                                <option value="General">General Information</option>
                                <option value="Surgery">Surgical Procedures</option>
                                <option value="Medical">Medical Management</option>
                                <option value="Diet">Diet & Nutrition</option>
                                <option value="International">International Patients</option>
                                <option value="Billing">Billing & Insurance</option>
                                <option value="FGS">Endoscopy & Diagnostics</option>
                            </select>
                        </div>
                        <!-- Desktop List -->
                        <div class="hidden lg:block space-y-2" id="category-buttons">
                            <button
                                class="category-btn w-full flex items-center space-x-3 px-4 py-3 rounded-lg transition-all duration-200 bg-scod text-white shadow-md"
                                data-category="General">
                                <i data-feather="help-circle" class="w-5 h-5"></i>
                                <span class="font-medium text-sm">General Information</span>
                            </button>
                            <button
                                class="category-btn w-full flex items-center space-x-3 px-4 py-3 rounded-lg transition-all duration-200 bg-white text-gray-600 hover:bg-blue-50 hover:text-scod"
                                data-category="Surgery">
                                <i data-feather="activity" class="w-5 h-5"></i>
                                <span class="font-medium text-sm">Surgical Procedures</span>
                            </button>
                            <button
                                class="category-btn w-full flex items-center space-x-3 px-4 py-3 rounded-lg transition-all duration-200 bg-white text-gray-600 hover:bg-blue-50 hover:text-scod"
                                data-category="Medical">
                                <i data-feather="shield" class="w-5 h-5"></i>
                                <span class="font-medium text-sm">Medical Management</span>
                            </button>
                            <button
                                class="category-btn w-full flex items-center space-x-3 px-4 py-3 rounded-lg transition-all duration-200 bg-white text-gray-600 hover:bg-blue-50 hover:text-scod"
                                data-category="Diet">
                                <i data-feather="coffee" class="w-5 h-5"></i>
                                <span class="font-medium text-sm">Diet & Nutrition</span>
                            </button>
                            <button
                                class="category-btn w-full flex items-center space-x-3 px-4 py-3 rounded-lg transition-all duration-200 bg-white text-gray-600 hover:bg-blue-50 hover:text-scod"
                                data-category="International">
                                <i data-feather="globe" class="w-5 h-5"></i>
                                <span class="font-medium text-sm">International Patients</span>
                            </button>
                            <button
                                class="category-btn w-full flex items-center space-x-3 px-4 py-3 rounded-lg transition-all duration-200 bg-white text-gray-600 hover:bg-blue-50 hover:text-scod"
                                data-category="Billing">
                                <i data-feather="dollar-sign" class="w-5 h-5"></i>
                                <span class="font-medium text-sm">Billing & Insurance</span>
                            </button>
                            <button
                                class="category-btn w-full flex items-center space-x-3 px-4 py-3 rounded-lg transition-all duration-200 bg-white text-gray-600 hover:bg-blue-50 hover:text-scod"
                                data-category="FGS">
                                <i data-feather="file-text" class="w-5 h-5"></i>
                                <span class="font-medium text-sm">Endoscopy & Diagnostics</span>
                            </button>
                        </div>
                        <!-- Quick Contact Card -->
                        <div class="hidden lg:block mt-8 bg-blue-50 p-6 rounded-2xl border border-blue-100">
                            <h4 class="font-bold text-scod mb-2">Still have questions?</h4>
                            <p class="text-sm text-gray-600 mb-4">Our dedicated coordinators are here to help.</p>
                            <a href="contact.php"
                                class="text-sm font-bold text-emerald-600 hover:text-emerald-700 flex items-center">
                                Contact Support <i data-feather="arrow-right" class="ml-2 w-4 h-4"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- FAQ List Area -->
                <div class="lg:w-3/4">
                    <div class="mb-6 flex items-center justify-between">
                        <h2 class="text-3xl font-bold text-gray-900" id="current-category-title">General Information
                        </h2>
                        <span class="text-sm text-gray-500 bg-white px-3 py-1 rounded-full border shadow-sm"
                            id="article-count">5 Articles</span>
                    </div>
                    <!-- Empty State -->
                    <div class="hidden text-center py-20 bg-white rounded-2xl border border-dashed border-gray-300"
                        id="no-results">
                        <i data-feather="search" class="w-12 h-12 text-gray-300 mx-auto mb-4"></i>
                        <p class="text-gray-500 text-lg">No questions match your search.</p>
                        <button onclick="clearSearch()" class="mt-4 text-scod font-bold hover:underline">Clear
                            Search</button>
                    </div>
                    <!-- FAQ Items Container -->
                    <div class="space-y-4" id="faq-container"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- 3. CTA & DOWNLOADS -->
    <section class="py-20 bg-white border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div
                class="bg-gradient-to-r from-scod to-blue-800 rounded-3xl p-10 md:p-16 text-white text-left shadow-2xl relative overflow-hidden">
                <!-- Decorative Background -->
                <div
                    class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2">
                </div>
                <div
                    class="absolute bottom-0 left-0 w-64 h-64 bg-emerald-500/20 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2">
                </div>
                <div class="relative z-10">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">Need Personalized Answers?</h2>
                    <p class="text-xl text-blue-100 max-w-2xl mb-10">
                        Every patient is unique. Schedule a consultation with Dr. Arush Sabharwal to discuss your
                        specific medical needs.
                    </p>
                    <div class="flex flex-col sm:flex-row justify-start gap-6">
                        <a href="contact.php"
                            class="bg-white text-scod px-8 py-4 rounded-full font-bold text-lg hover:bg-gray-100 transition-all shadow-lg flex items-center justify-center">
                            <i data-feather="activity" class="w-5 h-5 mr-2"></i>
                            Book Consultation
                        </a>
                        <a href="tel:+918130130489"
                            class="bg-transparent border-2 border-white/30 text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-white/10 transition-all flex items-center justify-center">
                            <i data-feather="coffee" class="w-5 h-5 mr-2"></i>
                            Call Our Team
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===================== FOOTER ===================== -->
    <?php include 'includes/footer.php'; ?>
    <script>
        // FAQ Data (matching React component exactly)
        const faqData = [
            // --- GENERAL ---
            { category: 'General', q: "Why should I choose SCOD for my treatment?", a: "SCOD is a Center of Excellence led by Dr. Arush Sabharwal, carrying a 100-year medical legacy. We combine world-class surgical expertise with a holistic multidisciplinary approach.", link: "about.html", linkText: "Learn about our legacy" },
            { category: 'General', q: "How do I schedule a consultation?", a: "You can book an appointment online through our contact page, call our hotline at +91 8130130489, or request a callback via WhatsApp.", link: "contact.html", linkText: "Book Appointment" },
            { category: 'General', q: "Do you offer online video consultations?", a: "Yes, we offer secure video consultations for international and out-of-station patients to discuss treatment plans before traveling." },
            { category: 'General', q: "What are your clinic hours?", a: "Our main center is open Monday to Saturday, 9:00 AM to 6:00 PM. Emergency services are available 24/7." },
            { category: 'General', q: "Is there parking available at the center?", a: "Yes, we provide valet parking services for all patients and visitors at our main centers in Delhi and Noida." },
            // --- SURGERY ---
            { category: 'Surgery', q: "Am I a candidate for Bariatric Surgery?", a: "Generally, you qualify if your BMI is ≥40, or ≥35 with comorbidities like Diabetes or Hypertension. A thorough evaluation is required.", link: "services/bariatric-surgery.html", linkText: "Check BMI Criteria" },
            { category: 'Surgery', q: "What is the difference between Sleeve and Bypass?", a: "Sleeve Gastrectomy removes 80% of the stomach (restrictive). Gastric Bypass reroutes the intestines (malabsorptive + restrictive). Bypass is often better for diabetes and acid reflux." },
            { category: 'Surgery', q: "Is the surgery reversible?", a: "Sleeve Gastrectomy is non-reversible as a portion of the stomach is removed. Gastric Bypass is technically reversible but is intended to be permanent." },
            { category: 'Surgery', q: "How long is the recovery time?", a: "Most patients return to desk jobs within 1-2 weeks. Full recovery for heavy physical activity typically takes 4-6 weeks." },
            { category: 'Surgery', q: "Will I have a lot of loose skin?", a: "Skin elasticity depends on age and genetics. We offer Body Contouring procedures to address excess skin after weight stabilization.", link: "services/body-contouring.html", linkText: "View Body Contouring" },
            { category: 'Surgery', q: "Does the surgery hurt?", a: "Procedures are performed laparoscopically (keyhole), minimizing pain. Discomfort is well-managed with medication and typically subsides within a few days." },
            { category: 'Surgery', q: "Can I get pregnant after bariatric surgery?", a: "Yes, in fact, fertility often increases. We recommend waiting 12-18 months post-surgery to ensure nutritional stability for the baby." },
            { category: 'Surgery', q: "What is 'Dumping Syndrome'?", a: "A reaction to eating sugar or simple carbs too quickly, causing nausea/dizziness. It is more common with Gastric Bypass and acts as a deterrent to unhealthy eating." },
            // --- MEDICAL MANAGEMENT ---
            { category: 'Medical', q: "What are weight loss injectables?", a: "These are GLP-1 receptor agonists (like Semaglutide) that mimic natural hormones to regulate appetite and blood sugar.", link: "services/weight-loss-injectables.html", linkText: "Learn about Injectables" },
            { category: 'Medical', q: "How much weight can I lose with medication?", a: "Clinical trials show an average of 15-20% body weight loss when combined with lifestyle changes, depending on the specific medication." },
            { category: 'Medical', q: "Are there side effects to the injections?", a: "Common side effects include nausea, bloating, or constipation, which usually subside as your body adjusts to the dosage." },
            { category: 'Medical', q: "Do I have to take them forever?", a: "Obesity is a chronic condition. Many patients require long-term maintenance dosing, though some can taper off with significant lifestyle changes." },
            { category: 'Medical', q: "Can I switch from medication to surgery?", a: "Yes. Many patients use medication as a bridge to surgery or if they do not qualify for surgery initially." },
            // --- DIET ---
            { category: 'Diet', q: "What is the pre-op diet?", a: "A liver-shrinking diet high in protein and low in carbs/fats, usually started 2 weeks before surgery to ensure safety.", link: "services/obesity-management.html", linkText: "View Diet Phases" },
            { category: 'Diet', q: "Can I ever eat sugar again?", a: "Small amounts are tolerated, but high sugar intake can cause dumping syndrome (especially in bypass) and weight regain." },
            { category: 'Diet', q: "Will I need to take vitamins?", a: "Yes, lifelong multivitamin, calcium, and iron supplementation is mandatory to prevent nutritional deficiencies." },
            { category: 'Diet', q: "Can I drink alcohol after surgery?", a: "Alcohol absorption changes drastically. It enters the bloodstream faster and stays longer. We recommend avoiding it for the first 6-12 months." },
            { category: 'Diet', q: "What about caffeine/coffee?", a: "Caffeine can irritate the stomach and cause dehydration. We advise avoiding it for the first 30 days post-op." },
            { category: 'Diet', q: "How much protein do I need daily?", a: "The standard goal is 60-80 grams of protein per day to maintain muscle mass and aid healing." },
            // --- INTERNATIONAL ---
            { category: 'International', q: "Do you provide medical visa assistance?", a: "Yes, we provide an official Medical Visa Invitation Letter once your appointment is confirmed to expedite your travel.", link: "international-patients.html", linkText: "International Guide" },
            { category: 'International', q: "Is airport transfer included?", a: "Yes, our international packages include complimentary VIP pick-up and drop-off services." },
            { category: 'International', q: "Where will I stay during recovery?", a: "We have partnerships with several hotels near the hospital, ranging from budget to 5-star, offering special rates for our patients." },
            { category: 'International', q: "Do you have translators?", a: "Yes, we have interpreters for French, Arabic, Russian, and Swahili to ensure smooth communication." },
            { category: 'International', q: "How long do I need to stay in India?", a: "Typically 10-14 days total: 2 days pre-op, 2-3 days in hospital, and 5-7 days post-op recovery before flying back." },
            // --- BILLING ---
            { category: 'Billing', q: "Is bariatric surgery covered by insurance?", a: "Yes, most Indian insurers cover it if: BMI >40 OR BMI >35 with comorbidities. There is usually a waiting period for pre-existing conditions.", link: "services/risks-costs.html", linkText: "Insurance Details" },
            { category: 'Billing', q: "Do you offer EMI or financing?", a: "Yes, we partner with specialized medical finance companies to offer 0% interest EMI options for eligible patients." },
            { category: 'Billing', q: "Are there hidden costs?", a: "No. We provide a transparent package that covers room rent, surgeon fees, OT charges, and standard consumables." },
            { category: 'Billing', q: "Do you accept TPA / Cashless?", a: "Yes, we are empaneled with all major TPAs and insurance providers for cashless hospitalization." },
            // --- FGS / DIAGNOSTICS ---
            { category: 'FGS', q: "What is an Upper GI Endoscopy?", a: "A diagnostic procedure using a thin flexible tube to examine the esophagus and stomach. It is mandatory before bariatric surgery." },
            { category: 'FGS', q: "Is endoscopy painful?", a: "It is performed under sedation, so you will not feel pain or discomfort during the procedure." },
            { category: 'FGS', q: "Why do I need an ultrasound?", a: "To check for gallstones and fatty liver, which are common in patients with obesity and may need to be addressed during surgery." },
            { category: 'FGS', q: "What blood tests are required?", a: "A comprehensive metabolic profile including HbA1c, Thyroid profile, Lipid profile, Cortisol, and vitamin levels." }
        ];
        const categories = [
            { id: 'General', label: 'General Information', icon: 'help-circle' },
            { id: 'Surgery', label: 'Surgical Procedures', icon: 'activity' },
            { id: 'Medical', label: 'Medical Management', icon: 'shield' },
            { id: 'Diet', label: 'Diet & Nutrition', icon: 'coffee' },
            { id: 'International', label: 'International Patients', icon: 'globe' },
            { id: 'Billing', label: 'Billing & Insurance', icon: 'dollar-sign' },
            { id: 'FGS', label: 'Endoscopy & Diagnostics', icon: 'file-text' }
        ];
        let activeCategory = 'General';
        let searchQuery = '';
        let openIndex = null;
        function renderFAQs() {
            const container = document.getElementById('faq-container');
            const noResults = document.getElementById('no-results');
            const articleCount = document.getElementById('article-count');
            const categoryTitle = document.getElementById('current-category-title');
            // Filter FAQs
            const filteredFAQs = faqData.filter(item =>
                (activeCategory === 'All' || item.category === activeCategory) &&
                (item.q.toLowerCase().includes(searchQuery.toLowerCase()) || item.a.toLowerCase().includes(searchQuery.toLowerCase()))
            );
            // Update title
            const currentCat = categories.find(c => c.id === activeCategory);
            categoryTitle.textContent = currentCat ? currentCat.label : 'All';
            articleCount.textContent = `${filteredFAQs.length} Articles`;
            if (filteredFAQs.length === 0) {
                container.innerHTML = '';
                noResults.classList.remove('hidden');
                return;
            }
            noResults.classList.add('hidden');
            container.innerHTML = filteredFAQs.map((item, index) => `
                <div class="faq-item bg-white rounded-xl border transition-all duration-300 ${openIndex === index ? 'border-scod shadow-md ring-1 ring-scod/10' : 'border-gray-200 hover:border-blue-300'}" data-index="${index}">
                    <button onclick="toggleFAQ(${index})" class="w-full flex items-start justify-between p-6 text-left">
                        <span class="font-bold text-lg pr-8 ${openIndex === index ? 'text-scod' : 'text-gray-800'}">${item.q}</span>
                        <div class="flex-shrink-0 mt-1 w-6 h-6 rounded-full flex items-center justify-center transition-colors ${openIndex === index ? 'bg-scod text-white' : 'bg-gray-100 text-gray-500'}">
                            <i data-feather="${openIndex === index ? 'minus' : 'plus'}" class="w-3 h-3"></i>
                        </div>
                    </button>
                    <div class="${openIndex === index ? '' : 'hidden'} overflow-hidden">
                        <div class="px-6 pb-6 pt-0">
                            <p class="text-gray-600 leading-relaxed border-t border-gray-100 pt-4">${item.a}</p>
                            ${item.link ? `
                                <a href="${item.link}" class="inline-flex items-center mt-4 text-sm font-bold text-emerald-600 hover:text-emerald-700 bg-emerald-50 px-3 py-2 rounded-lg transition-colors">
                                    ${item.linkText || "Learn More"} <i data-feather="arrow-right" class="ml-2 w-4 h-4"></i>
                                </a>
                            ` : ''}
                        </div>
                    </div>
                </div>
            `).join('');
            feather.replace();
        }
        function toggleFAQ(index) {
            openIndex = openIndex === index ? null : index;
            renderFAQs();
        }
        function setCategory(category) {
            activeCategory = category;
            openIndex = null;
            // Update button styles
            document.querySelectorAll('.category-btn').forEach(btn => {
                if (btn.dataset.category === category) {
                    btn.classList.add('bg-scod', 'text-white', 'shadow-md');
                    btn.classList.remove('bg-white', 'text-gray-600', 'hover:bg-blue-50', 'hover:text-scod');
                } else {
                    btn.classList.remove('bg-scod', 'text-white', 'shadow-md');
                    btn.classList.add('bg-white', 'text-gray-600', 'hover:bg-blue-50', 'hover:text-scod');
                }
            });
            // Sync mobile dropdown
            document.getElementById('category-select').value = category;
            renderFAQs();
        }
        function clearSearch() {
            document.getElementById('faq-search').value = '';
            searchQuery = '';
            setCategory('General');
        }
        // Event Listeners
        document.querySelectorAll('.category-btn').forEach(btn => {
            btn.addEventListener('click', () => setCategory(btn.dataset.category));
        });
        document.getElementById('category-select').addEventListener('change', (e) => {
            setCategory(e.target.value);
        });
        document.getElementById('faq-search').addEventListener('input', (e) => {
            searchQuery = e.target.value;
            if (searchQuery === '') {
                renderFAQs();
            } else {
                // Global search across all categories
                activeCategory = 'All';
                openIndex = null;
                renderFAQs();
            }
        });
        // Initialize
        feather.replace();
        renderFAQs();
    </script>
</body>
</html>