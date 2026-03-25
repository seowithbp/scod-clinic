<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Bariatric Journey | Step-by-Step Guide - SCOD Clinic</title>
    <meta name="description"
        content="Walk through your weight loss transformation at SCOD Clinic. From your initial consultation to lifelong success, we guide you through every step.">
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
    <style>
        .checklist-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }
        .checklist-content.open {
            max-height: 500px;
        }
    </style>
</head>
<body class="min-h-screen bg-white text-gray-900">
    <!-- ===================== NAVBAR ===================== -->
    <?php include 'includes/header.php'; ?>
    <!-- 1. HERO SECTION -->
    <section class="relative h-[500px] flex items-center bg-gray-900 text-white overflow-hidden mt-20">
        <div class="absolute inset-0 z-0">
            <img src="https://brandingpioneers.co.in/scod/scod-breadcrumbs/Patient Journey.webp" alt="Patient Journey"
                class="w-full h-full object-cover object-center opacity-40">
            <div class="absolute inset-0 bg-gradient-to-r from-scod/95 via-scod/80 to-transparent"></div>
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full text-left">
            <div class="max-w-3xl">
                <div
                    class="inline-flex items-center space-x-2 bg-white/10 backdrop-blur-md px-4 py-2 rounded-full mb-6 border border-white/20">
                    <i data-feather="calendar" class="w-5 h-5 text-emerald-300"></i>
                    <span class="text-sm font-bold tracking-wide uppercase">Your Path to Wellness</span>
                </div>
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight text-white">
                    Your Journey at <span class="text-emerald-300">SCOD</span>
                </h1>
                <p class="text-xl text-blue-100 max-w-2xl leading-relaxed">
                    From your first consultation to your new healthy life, we are with you every step of the way.
                    Explore our structured pathway to transformation.
                </p>
                <div class="mt-8">
                    <a href="contact.php"
                        class="inline-flex items-center space-x-2 bg-white text-scod px-8 py-4 rounded-full font-bold text-lg hover:bg-gray-100 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        <span>Start Your Journey</span>
                        <i data-feather="arrow-right" class="w-5 h-5"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- 2. TIMELINE SECTION -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-left mb-16">
                <span class="text-scod font-bold tracking-widest uppercase text-sm">Step-by-Step Guide</span>
                <h2 class="text-4xl font-bold text-gray-900 mt-2">The Roadmap to Health</h2>
            </div>
            <div class="relative" id="timeline-container">
                <!-- Vertical Line -->
                <div
                    class="absolute left-4 md:left-1/2 top-0 bottom-0 w-1 bg-gray-200 transform md:-translate-x-1/2 rounded-full">
                </div>
            </div>
        </div>
    </section>
    <!-- 3. CTA SECTION -->
    <section class="py-20 bg-gradient-to-r from-scod to-blue-700 text-white text-left relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <svg class="h-full w-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path d="M0 100 C 20 0 50 0 100 100 Z" fill="white"></path>
            </svg>
        </div>
        <div class="max-w-4xl mx-auto px-4 relative z-10">
            <h2 class="text-4xl font-bold mb-6">Ready to Take the First Step?</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl">
                You've seen the path ahead. Now, let's walk it together. Our team is ready to guide you towards a
                healthier, happier you.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-start">
                <a href="contact.php"
                    class="bg-white text-scod px-8 py-4 rounded-full font-bold text-lg shadow-lg hover:bg-gray-50 transition-all transform hover:scale-105">Book
                    Consultation</a>
                <a href="tel:+918130130489"
                    class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-white/10 transition-all flex items-center justify-center gap-2">
                    <i data-feather="phone" class="w-5 h-5"></i>
                    <span>Call Now</span>
                </a>
            </div>
        </div>
    </section>
    <script>
        const journeySteps = [
            { id: 1, title: "First Contact", subtitle: "Taking the First Step", timeframe: "Day 1", icon: "phone", description: "Reach out to our team via phone, email, or our website. Our patient coordinators will listen to your needs and schedule your initial appointment.", checklist: ["Fill out the online contact form or call us", "Have your insurance card ready (if applicable)", "Prepare a list of initial questions", "Check your calendar for availability"], color: "bg-blue-500", textColor: "text-blue-600", badgeColor: "bg-blue-50 text-blue-700", image: "https://images.unsplash.com/photo-1516387938699-a93567ec168e?auto=format&fit=crop&w=800&q=80" },
            { id: 2, title: "Initial Consultation", subtitle: "Meeting Dr. Arush", timeframe: "Week 1", icon: "user-check", description: "A comprehensive 45-minute consultation with Dr. Arush Sabharwal to discuss your medical history, weight loss goals, and potential treatment options.", checklist: ["Bring recent medical records & blood work", "List of current medications", "Write down your weight loss history", "Bring a support person (friend/family) if desired"], color: "bg-scod", textColor: "text-scod", badgeColor: "bg-blue-50 text-scod", image: "https://images.unsplash.com/photo-1666214280557-f1b5022eb634?auto=format&fit=crop&w=800&q=80" },
            { id: 3, title: "Evaluation & Tests", subtitle: "Comprehensive Health Check", timeframe: "Week 1-2", icon: "activity", description: "We perform a 360-degree health assessment including metabolic profiling, cardiac clearance, and nutritional evaluation to ensure safety.", checklist: ["Complete prescribed blood tests (fasting required)", "Undergo cardiac evaluation (ECG/ECHO)", "Attend nutritional assessment session", "Psychological screening (if required)"], color: "bg-cyan-600", textColor: "text-cyan-600", badgeColor: "bg-cyan-50 text-cyan-700", image: "https://images.unsplash.com/photo-1579154204601-01588f351e67?auto=format&fit=crop&w=800&q=80" },
            { id: 4, title: "Decision & Approval", subtitle: "Choosing Your Path", timeframe: "Week 2-3", icon: "file-text", description: "Review test results with the team. We finalize the best procedure for you (Sleeve, Bypass, or Medical Mgmt) and handle insurance pre-authorization.", checklist: ["Select surgery date", "Sign consent forms", "Submit insurance documents", "Review cost and payment options"], color: "bg-indigo-600", textColor: "text-indigo-600", badgeColor: "bg-indigo-50 text-indigo-700", image: "https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=80" },
            { id: 5, title: "Pre-Op Preparation", subtitle: "Getting Body Ready", timeframe: "Week 3-4", icon: "clipboard", description: "Begin the liver-shrinking diet and lifestyle adjustments to optimize your body for a safe surgery and faster recovery.", checklist: ["Start Pre-Op Liquid/High-Protein Diet", "Stop smoking and specific medications (as advised)", "Purchase post-op vitamins & protein shakes", "Pack your hospital bag"], color: "bg-teal-600", textColor: "text-teal-600", badgeColor: "bg-teal-50 text-teal-700", image: "https://images.unsplash.com/photo-1490645935967-10de6ba17061?auto=format&fit=crop&w=800&q=80" },
            { id: 6, title: "Surgery Day", subtitle: "The Transformation Begins", timeframe: "Day 0", icon: "heart", description: "Arrive at the center for your procedure. Our expert team ensures a comfortable, minimally invasive experience using advanced technology.", checklist: ["Arrive fasting (nothing to eat/drink for 8 hours)", "Bring ID and Insurance Card", "Leave valuables at home", "Wear loose, comfortable clothing"], color: "bg-blue-800", textColor: "text-blue-800", badgeColor: "bg-blue-50 text-blue-900", image: "https://images.unsplash.com/photo-1551076805-e1869033e561?auto=format&fit=crop&w=800&q=80" },
            { id: 7, title: "Recovery & Aftercare", subtitle: "Lifetime Support", timeframe: "Week 1 Onwards", icon: "check-circle", description: "Your journey doesn't end at surgery. We provide lifetime follow-up, support groups, and nutritional counseling to ensure lasting success.", checklist: ["Follow discharge diet instructions strictly", "Attend 1-week post-op checkup", "Join our monthly support group", "Schedule 3, 6, and 12-month follow-ups"], color: "bg-emerald-600", textColor: "text-emerald-600", badgeColor: "bg-emerald-50 text-emerald-700", image: "https://images.unsplash.com/photo-1571019614242-c5c5dee9f50b?auto=format&fit=crop&w=800&q=80" }
        ];
        let activeStep = null;
        function renderTimeline() {
            const container = document.getElementById('timeline-container');
            let html = '';
            journeySteps.forEach((step, index) => {
                const isEven = index % 2 === 0;
                html += `
                    <div class="relative flex flex-col md:flex-row items-center mb-16 ${isEven ? 'md:flex-row-reverse' : ''}">
                        <!-- Desktop Image Side -->
                        <div class="flex-1 w-full hidden md:block px-8 lg:px-12">
                            <div class="relative overflow-hidden rounded-2xl shadow-lg h-64 border-4 border-white transform transition-transform hover:scale-[1.02] duration-300 group">
                                <img src="${step.image}" alt="${step.title}" class="w-full h-full object-cover">
                                <div class="absolute inset-0 ${step.color} opacity-0 group-hover:opacity-10 transition-opacity duration-300"></div>
                            </div>
                        </div>
                        <!-- Timeline Node -->
                        <div class="absolute left-4 md:left-1/2 transform -translate-x-1/2 flex items-center justify-center z-10">
                            <div class="w-12 h-12 rounded-full ${step.color} border-4 border-white shadow-lg flex items-center justify-center text-white">
                                <i data-feather="${step.icon}" class="w-5 h-5"></i>
                            </div>
                        </div>
                        <!-- Content Card -->
                        <div class="flex-1 w-full pl-16 md:pl-0 md:px-12">
                            <div class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 relative group cursor-pointer step-card" data-step-id="${step.id}" onclick="toggleStep(${step.id})">
                                <div class="flex flex-col sm:flex-row sm:items-start justify-between gap-3 mb-4">
                                    <div class="pr-0 sm:pr-4">
                                        <h3 class="text-xl font-bold text-gray-900">${step.title}</h3>
                                        <p class="text-sm font-medium ${step.textColor}">${step.subtitle}</p>
                                    </div>
                                    <span class="self-start text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider ${step.badgeColor} whitespace-nowrap">${step.timeframe}</span>
                                </div>
                                <p class="text-gray-600 mb-4 text-sm leading-relaxed">${step.description}</p>
                                <!-- Expandable Checklist -->
                                <div class="border-t border-gray-100 pt-4 mt-2">
                                    <button class="flex items-center text-sm font-bold text-gray-700 hover:text-scod transition-colors w-full justify-between focus:outline-none">
                                        <span class="flex items-center"><i data-feather="clipboard" class="w-4 h-4 mr-2"></i>Patient Checklist</span>
                                        <i data-feather="arrow-right" class="w-4 h-4 arrow-icon transform transition-transform duration-300"></i>
                                    </button>
                                    <ul class="checklist-content space-y-2 mt-4" id="checklist-${step.id}">
                                        ${step.checklist.map(item => `
                                            <li class="flex items-start text-sm text-gray-600 bg-gray-50 p-2 rounded-lg">
                                                <i data-feather="check" class="w-4 h-4 text-emerald-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                                <span>${item}</span>
                                            </li>
                                        `).join('')}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
            });
            container.innerHTML += html;
            feather.replace();
        }
        function toggleStep(stepId) {
            const checklist = document.getElementById(`checklist-${stepId}`);
            const card = document.querySelector(`[data-step-id="${stepId}"]`);
            const arrow = card.querySelector('.arrow-icon');
            // Close all other checklists
            document.querySelectorAll('.checklist-content').forEach(el => {
                if (el.id !== `checklist-${stepId}`) el.classList.remove('open');
            });
            document.querySelectorAll('.arrow-icon').forEach(el => {
                if (el !== arrow) el.style.transform = 'rotate(0deg)';
            });
            document.querySelectorAll('.step-card').forEach(el => {
                if (el !== card) el.classList.remove('ring-2', 'ring-scod');
            });
            checklist.classList.toggle('open');
            card.classList.toggle('ring-2');
            card.classList.toggle('ring-scod');
            if (checklist.classList.contains('open')) {
                arrow.style.transform = 'rotate(90deg)';
            } else {
                arrow.style.transform = 'rotate(0deg)';
            }
        }
        renderTimeline();
        feather.replace();
    </script>
    <!-- ===================== FOOTER ===================== -->
    <?php include 'includes/footer.php'; ?>
</body>
</html>