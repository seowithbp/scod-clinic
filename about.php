<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr. Arush Sabharwal | Chairman & Chief Surgeon at SCOD Clinic</title>
    <meta name="description"
        content="Meet Dr. Arush Sabharwal, a pioneer in bariatric and metabolic surgery with 15+ years of global experience.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>tailwind.config = { theme: { extend: { colors: { scod: '#1876AA' }, fontFamily: { sans: ['"Nunito Sans"', 'sans-serif'] } } } }</script>
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="css/custom.css">
</head>
<body class="min-h-screen bg-white text-gray-900 pt-20">
    <!-- NAVBAR -->
    <?php include 'includes/header.php'; ?>
    <!-- HERO SECTION -->
    <section class="relative py-12 lg:py-14 bg-blue-50 overflow-hidden">
        <div class="absolute top-0 right-0 w-1/2 h-full bg-white opacity-50 transform skew-x-12 translate-x-20"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="observe-animate" data-animation="fade-in-left">
                    <div class="flex items-center space-x-4 mb-6">
                        <div class="h-px w-12 bg-scod"></div><span
                            class="uppercase tracking-widest text-sm font-bold text-scod">Founder & Chairman,
                            SCOD </span>
                    </div>
                    <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight text-gray-900">Dr. Arush <br><span
                            class="text-scod">Sabharwal</span></h1>
                    <div class="flex flex-wrap gap-3 mb-8 text-sm font-medium text-gray-600">
                        <span class="bg-white px-4 py-2 rounded-full border border-gray-200 shadow-sm">MBBS</span>
                        <span class="bg-white px-4 py-2 rounded-full border border-gray-200 shadow-sm">MS</span>
                        <span class="bg-white px-4 py-2 rounded-full border border-gray-200 shadow-sm">FMAS</span>
                        <span class="bg-white px-4 py-2 rounded-full border border-gray-200 shadow-sm">DMAS
                            (France)</span>
                    </div>
                    <p class="text-xl text-gray-700 leading-relaxed mb-10">A legacy of healing passed down through
                        generations. Building a healthier future for India through advanced metabolic care.</p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#origin"
                            class="bg-scod text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-blue-700 transition-all shadow-lg">Read
                            The Origin Story</a>
                        <button id="hero-video-btn"
                            class="group flex items-center space-x-3 bg-white text-scod border border-scod px-8 py-4 rounded-full font-bold text-lg hover:bg-blue-50 transition-all"><i
                                data-feather="play" class="w-5 h-5"></i><span>Watch Intro</span></button>
                    </div>
                </div>
                <div class="relative hidden lg:block observe-animate" data-animation="fade-in-right">
                    <div
                        class="relative rounded-3xl overflow-hidden shadow-2xl border-8 border-white aspect-video bg-black">
                        <video src="https://brandingpioneers.co.in/scod/Dr-Arush-Video-2.mp4"
                            class="w-full h-full object-cover" autoplay loop muted playsinline controls></video>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ORIGIN STORY -->
    <section id="origin" class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="order-2 lg:order-1 observe-animate" data-animation="fade-in-left">
                    <div class="flex items-center space-x-4 mb-6">
                        <div class="w-12 h-1 bg-scod"></div><span
                            class="text-scod font-bold uppercase tracking-widest">The Legacy</span>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-8">The Origin of a <br><span
                            class="text-scod">Medical Dynasty</span></h2>
                    <div class="space-y-6 text-lg text-gray-700 leading-relaxed">
                        <p>"It all started with my great great grandfather, <span class="font-bold text-gray-900">Lala
                                Jeevanmal Sabharwal</span>, who was a station master in Lahore. One day he heard
                            Gandhiji talking about health and education. Inspired by Gandhiji's speech, he then insisted
                            that all his four sons would study medicine."</p>
                        <p>That singular moment of inspiration in 1919 birthed the family's first doctor — <span
                                class="font-bold text-gray-900">Dr. Bodhraj</span>.</p>
                        <p>Dr. Bodhraj then decreed that every subsequent generation had to study medicine. And every
                            son had to marry a doctor bride. Following the partition, the family moved to Delhi and
                            opened five more hospitals, each bearing the name of the patriarch of the family — <span
                                class="font-bold text-scod">"Jeevan"</span>.</p>
                        <p class="font-medium p-4 bg-gray-50 border-l-4 border-scod rounded-r-lg">Today, Dr. Arush
                            Sabharwal stands as a proud successor of this lineage — a breed of <span
                                class="text-scod font-bold">Best Bariatric Surgeon</span>, carrying forward a
                            century-old promise to serve humanity.</p>
                    </div>
                </div>
                <div class="order-1 lg:order-2 relative observe-animate" data-animation="scale-in">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-gray-200">
                        <img src="https://brandingpioneers.co.in/scod/sabharwal-family.webp" alt="Medical History"
                            class="w-full h-full object-cover">
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-white/90 backdrop-blur-sm p-6 border-t border-gray-100">
                            <p class="text-gray-900 font-bold text-lg text-center">Serving Humanity Since 1919</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- VISION & BIOGRAPHY -->
    <section class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-5 observe-animate" data-animation="fade-in-left">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl border-4 border-white">
                        <img src="https://brandingpioneers.co.in/scod/dr-arush-final-image.png"
                            alt="Dr. Arush Sabharwal Vision" class="w-full h-auto object-cover">
                        <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/80 to-transparent p-6">
                            <p class="text-white font-bold text-lg">Dr. Arush Sabharwal</p>
                            <p class="text-blue-200 text-sm">Founder & Chairman</p>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-7 observe-animate" data-animation="fade-in-right">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Fighting the <span
                            class="text-scod">Silent Epidemic</span></h2>
                    <div class="space-y-6 text-lg text-gray-700 leading-relaxed">
                        <p>Dr. Arush Sabharwal is the founder and chairman of the <span
                                class="font-semibold text-gray-900">Surgical Center for Obesity and Diabetes
                                (SCOD)</span>. With four active clinics in Delhi NCR and plans for pan-India expansion,
                            Dr. Sabharwal is on a mission to establish exclusive state-of-the-art centers for metabolic
                            care across the country.</p>
                        <p>His vision stems from a deep concern for the growing health crisis. India has become the
                            <span class="font-semibold text-gray-900">Diabetes Capital of the World</span>. Dr.
                            Sabharwal believes that obesity is the root cause of widespread metabolic issues including
                            diabetes, infertility, and joint pain.
                        </p>
                        <p>He currently serves as the Chief of Bariatric and Metabolic Surgery at prestigious
                            institutions including <span class="font-semibold text-gray-900">Jeewan Mala Hospital,
                                Apollo Spectra Hospital (Karol Bagh), and Fortis C-Doc Hospital (Nehru Place)</span>.
                        </p>
                    </div>
                    <div class="mt-8 p-6 bg-white rounded-xl shadow-sm border border-gray-100">
                        <p class="italic text-gray-800 font-medium text-lg">"I wish to contribute to society by
                            eradicating these metabolic problems from my country. It is not just about surgery; it is
                            about restoring the health of a nation."</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TRAINING JOURNEY -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-left mb-16 observe-animate" data-animation="fade-in-up">
                <span class="text-scod font-bold tracking-widest uppercase text-sm">International Expertise</span>
                <h2 class="text-4xl font-bold text-gray-900 mt-2">Fellowships & Training</h2>
                <p class="text-gray-600 mt-4 max-w-2xl">Dr. Sabharwal has trained with global pioneers in bariatric
                    surgery across three continents to bring world-class care to India.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-gray-50 p-8 rounded-2xl border border-gray-100 hover:shadow-xl transition-all duration-300 group hover:border-scod/20 observe-animate"
                    data-animation="fade-in-up">
                    <div class="flex items-start justify-between mb-6">
                        <div
                            class="w-14 h-14 bg-blue-100 text-scod rounded-xl flex items-center justify-center text-2xl">
                            <i data-feather="book-open" class="w-7 h-7"></i>
                        </div>
                        <span
                            class="px-4 py-1 bg-white border border-gray-200 text-gray-600 rounded-full text-sm font-bold uppercase tracking-wider">India</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Foundation & Specialization</h3>
                    <div class="text-scod font-semibold mb-4 text-sm">Sir Ganga Ram Hospital</div>
                    <p class="text-gray-600 leading-relaxed">Completed MBBS and MS in General Surgery. Fellowship in
                        Minimal Access, Metabolic and Bariatric Surgery at Sir Ganga Ram Hospital, New Delhi.</p>
                </div>
                <div class="bg-gray-50 p-8 rounded-2xl border border-gray-100 hover:shadow-xl transition-all duration-300 group hover:border-scod/20 observe-animate delay-100"
                    data-animation="fade-in-up">
                    <div class="flex items-start justify-between mb-6">
                        <div
                            class="w-14 h-14 bg-blue-100 text-scod rounded-xl flex items-center justify-center text-2xl">
                            <i data-feather="globe" class="w-7 h-7"></i>
                        </div>
                        <span
                            class="px-4 py-1 bg-white border border-gray-200 text-gray-600 rounded-full text-sm font-bold uppercase tracking-wider">France</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">European Advanced Training</h3>
                    <div class="text-scod font-semibold mb-4 text-sm">Strasbourg University & IRCAD</div>
                    <p class="text-gray-600 leading-relaxed">Diploma in Minimal Access Surgery (DMAS). Certified
                        Laparoscopic Training at European Institute of Tele Surgery (EITS).</p>
                </div>
                <div class="bg-gray-50 p-8 rounded-2xl border border-gray-100 hover:shadow-xl transition-all duration-300 group hover:border-scod/20 observe-animate delay-200"
                    data-animation="fade-in-up">
                    <div class="flex items-start justify-between mb-6">
                        <div
                            class="w-14 h-14 bg-blue-100 text-scod rounded-xl flex items-center justify-center text-2xl">
                            <i data-feather="activity" class="w-7 h-7"></i>
                        </div>
                        <span
                            class="px-4 py-1 bg-white border border-gray-200 text-gray-600 rounded-full text-sm font-bold uppercase tracking-wider">Australia</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">International Fellowships</h3>
                    <div class="text-scod font-semibold mb-4 text-sm">John Flynn & Holy Spirit Hospitals</div>
                    <p class="text-gray-600 leading-relaxed">Fellowship in Obesity & Metabolic Surgery (Goldcoast) and
                        Advanced Laparoscopy training with Dr. George Hopkins (Brisbane).</p>
                </div>
                <div class="bg-gray-50 p-8 rounded-2xl border border-gray-100 hover:shadow-xl transition-all duration-300 group hover:border-scod/20 observe-animate delay-300"
                    data-animation="fade-in-up">
                    <div class="flex items-start justify-between mb-6">
                        <div
                            class="w-14 h-14 bg-blue-100 text-scod rounded-xl flex items-center justify-center text-2xl">
                            <i data-feather="award" class="w-7 h-7"></i>
                        </div>
                        <span
                            class="px-4 py-1 bg-white border border-gray-200 text-gray-600 rounded-full text-sm font-bold uppercase tracking-wider">USA</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Global Expertise</h3>
                    <div class="text-scod font-semibold mb-4 text-sm">Fresno, California</div>
                    <p class="text-gray-600 leading-relaxed">Advanced Minimal Access Surgery Training with Dr. Kelvin
                        Higa, a pioneer in the field.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- VIDEO PODCASTS -->
    <section class="py-12 bg-gray-50 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
                <div>
                    <div class="flex items-center space-x-3 mb-4 text-scod"><i data-feather="youtube"
                            class="w-8 h-8"></i><span class="font-bold tracking-wider uppercase text-sm">Official
                            Channel</span></div>
                    <h2 class="text-4xl md:text-5xl font-bold mb-4 text-gray-900">Dr. Arush on YouTube</h2>
                    <p class="text-gray-600 max-w-xl text-lg">Watch expert analysis, patient stories, and deep dives
                        into metabolic health.</p>
                </div>
                <div class="flex flex-col items-end gap-6 mb-4 md:mb-0">
                    <div class="flex items-center gap-3">
                        <button id="podcast-prev"
                            class="w-12 h-12 rounded-full border border-gray-200 flex items-center justify-center text-gray-600 hover:bg-scod hover:text-white hover:border-scod transition-all duration-300 shadow-sm bg-white"><i
                                data-feather="chevron-left" class="w-6 h-6"></i></button>
                        <button id="podcast-next"
                            class="w-12 h-12 rounded-full border border-gray-200 flex items-center justify-center text-gray-600 hover:bg-scod hover:text-white hover:border-scod transition-all duration-300 shadow-sm bg-white"><i
                                data-feather="chevron-right" class="w-6 h-6"></i></button>
                    </div>
                    <a href="https://www.youtube.com/@DRARUSHSABHARWALWEIGHTLOSSSU" target="_blank"
                        class="inline-flex items-center space-x-2 bg-scod hover:bg-blue-700 px-6 py-3 rounded-full text-white font-semibold transition-all shadow-lg"><span>Subscribe
                            Now</span><i data-feather="arrow-right" class="w-5 h-5"></i></a>
                </div>
            </div>
            <div class="overflow-hidden">
                <div id="podcast-slider" class="flex transition-transform duration-300" style="width: 166.66%;">
                    <div class="w-1/5 px-4 flex-shrink-0">
                        <div class="group cursor-pointer bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 h-full flex flex-col"
                            data-video-id="TaOuNUjv_Dc">
                            <div class="relative aspect-video overflow-hidden">
                                <img src="https://img.youtube.com/vi/TaOuNUjv_Dc/maxresdefault.jpg" alt="Video"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <div
                                    class="absolute inset-0 flex items-center justify-center bg-black/20 group-hover:bg-black/10 transition-colors">
                                    <div
                                        class="w-14 h-14 bg-scod rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                                        <i data-feather="play" class="w-6 h-6 text-white ml-1"></i>
                                    </div>
                                </div>
                                <div
                                    class="absolute bottom-2 right-2 bg-black/80 text-white text-xs font-bold px-2 py-1 rounded flex items-center">
                                    <i data-feather="clock" class="w-3 h-3 mr-1"></i>15:20
                                </div>
                            </div>
                            <div class="p-5 flex-grow">
                                <h3
                                    class="text-lg font-bold mb-2 text-gray-900 group-hover:text-scod transition-colors line-clamp-2 leading-tight">
                                    Weightloss Experience with Bariatric Surgery</h3>
                                <p class="text-gray-500 text-sm font-medium flex items-center mt-3"><span
                                        class="text-scod mr-2">●</span>Watch Video Podcast</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/5 px-4 flex-shrink-0">
                        <div class="group cursor-pointer bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 h-full flex flex-col"
                            data-video-id="V-gaaGIaKGw">
                            <div class="relative aspect-video overflow-hidden">
                                <img src="https://img.youtube.com/vi/V-gaaGIaKGw/maxresdefault.jpg" alt="Video"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <div
                                    class="absolute inset-0 flex items-center justify-center bg-black/20 group-hover:bg-black/10 transition-colors">
                                    <div
                                        class="w-14 h-14 bg-scod rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                                        <i data-feather="play" class="w-6 h-6 text-white ml-1"></i>
                                    </div>
                                </div>
                                <div
                                    class="absolute bottom-2 right-2 bg-black/80 text-white text-xs font-bold px-2 py-1 rounded flex items-center">
                                    <i data-feather="clock" class="w-3 h-3 mr-1"></i>12:45
                                </div>
                            </div>
                            <div class="p-5 flex-grow">
                                <h3
                                    class="text-lg font-bold mb-2 text-gray-900 group-hover:text-scod transition-colors line-clamp-2 leading-tight">
                                    The Truth About Diabetes & Metabolic Surgery</h3>
                                <p class="text-gray-500 text-sm font-medium flex items-center mt-3"><span
                                        class="text-scod mr-2">●</span>Watch Video Podcast</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/5 px-4 flex-shrink-0">
                        <div class="group cursor-pointer bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 h-full flex flex-col"
                            data-video-id="rEd-4Pov_iw">
                            <div class="relative aspect-video overflow-hidden">
                                <img src="https://img.youtube.com/vi/rEd-4Pov_iw/maxresdefault.jpg" alt="Video"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <div
                                    class="absolute inset-0 flex items-center justify-center bg-black/20 group-hover:bg-black/10 transition-colors">
                                    <div
                                        class="w-14 h-14 bg-scod rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                                        <i data-feather="play" class="w-6 h-6 text-white ml-1"></i>
                                    </div>
                                </div>
                                <div
                                    class="absolute bottom-2 right-2 bg-black/80 text-white text-xs font-bold px-2 py-1 rounded flex items-center">
                                    <i data-feather="clock" class="w-3 h-3 mr-1"></i>18:30
                                </div>
                            </div>
                            <div class="p-5 flex-grow">
                                <h3
                                    class="text-lg font-bold mb-2 text-gray-900 group-hover:text-scod transition-colors line-clamp-2 leading-tight">
                                    Types of Weight Loss Surgeries Explained</h3>
                                <p class="text-gray-500 text-sm font-medium flex items-center mt-3"><span
                                        class="text-scod mr-2">●</span>Watch Video Podcast</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/5 px-4 flex-shrink-0">
                        <div class="group cursor-pointer bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 h-full flex flex-col"
                            data-video-id="bNoFXoLDnEc">
                            <div class="relative aspect-video overflow-hidden">
                                <img src="https://img.youtube.com/vi/bNoFXoLDnEc/maxresdefault.jpg" alt="Video"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <div
                                    class="absolute inset-0 flex items-center justify-center bg-black/20 group-hover:bg-black/10 transition-colors">
                                    <div
                                        class="w-14 h-14 bg-scod rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                                        <i data-feather="play" class="w-6 h-6 text-white ml-1"></i>
                                    </div>
                                </div>
                                <div
                                    class="absolute bottom-2 right-2 bg-black/80 text-white text-xs font-bold px-2 py-1 rounded flex items-center">
                                    <i data-feather="clock" class="w-3 h-3 mr-1"></i>10:15
                                </div>
                            </div>
                            <div class="p-5 flex-grow">
                                <h3
                                    class="text-lg font-bold mb-2 text-gray-900 group-hover:text-scod transition-colors line-clamp-2 leading-tight">
                                    Bariatric Surgery & Type 2 Diabetes Remission</h3>
                                <p class="text-gray-500 text-sm font-medium flex items-center mt-3"><span
                                        class="text-scod mr-2">●</span>Watch Video Podcast</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/5 px-4 flex-shrink-0">
                        <div class="group cursor-pointer bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 h-full flex flex-col"
                            data-video-id="vs2gB7Zyuks">
                            <div class="relative aspect-video overflow-hidden">
                                <img src="https://img.youtube.com/vi/vs2gB7Zyuks/maxresdefault.jpg" alt="Video"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <div
                                    class="absolute inset-0 flex items-center justify-center bg-black/20 group-hover:bg-black/10 transition-colors">
                                    <div
                                        class="w-14 h-14 bg-scod rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                                        <i data-feather="play" class="w-6 h-6 text-white ml-1"></i>
                                    </div>
                                </div>
                                <div
                                    class="absolute bottom-2 right-2 bg-black/80 text-white text-xs font-bold px-2 py-1 rounded flex items-center">
                                    <i data-feather="clock" class="w-3 h-3 mr-1"></i>08:45
                                </div>
                            </div>
                            <div class="p-5 flex-grow">
                                <h3
                                    class="text-lg font-bold mb-2 text-gray-900 group-hover:text-scod transition-colors line-clamp-2 leading-tight">
                                    Patient Success Story: Life After Surgery</h3>
                                <p class="text-gray-500 text-sm font-medium flex items-center mt-3"><span
                                        class="text-scod mr-2">●</span>Watch Video Podcast</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- MEMBERSHIPS -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-left mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Professional <span
                        class="text-scod">Affiliations</span></h2>
                <p class="text-lg text-gray-600 max-w-3xl">Dr. Sabharwal holds memberships in the world's most
                    prestigious surgical societies.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm hover:border-scod hover:shadow-md transition-all duration-300 flex flex-col items-center text-center group observe-animate"
                    data-animation="fade-in-up">
                    <div
                        class="w-12 h-12 bg-blue-50 rounded-full flex items-center justify-center shadow-sm mb-4 text-scod group-hover:bg-scod group-hover:text-white transition-colors">
                        <i data-feather="check" class="w-6 h-6"></i>
                    </div>
                    <p class="font-semibold text-gray-800 text-sm leading-relaxed">Obesity Surgery Society of India
                        (OSSI)</p>
                </div>
                <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm hover:border-scod hover:shadow-md transition-all duration-300 flex flex-col items-center text-center group observe-animate delay-100"
                    data-animation="fade-in-up">
                    <div
                        class="w-12 h-12 bg-blue-50 rounded-full flex items-center justify-center shadow-sm mb-4 text-scod group-hover:bg-scod group-hover:text-white transition-colors">
                        <i data-feather="check" class="w-6 h-6"></i>
                    </div>
                    <p class="font-semibold text-gray-800 text-sm leading-relaxed">Intl. Fed. for Surgery of Obesity
                        (IFSO)</p>
                </div>
                <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm hover:border-scod hover:shadow-md transition-all duration-300 flex flex-col items-center text-center group observe-animate delay-200"
                    data-animation="fade-in-up">
                    <div
                        class="w-12 h-12 bg-blue-50 rounded-full flex items-center justify-center shadow-sm mb-4 text-scod group-hover:bg-scod group-hover:text-white transition-colors">
                        <i data-feather="check" class="w-6 h-6"></i>
                    </div>
                    <p class="font-semibold text-gray-800 text-sm leading-relaxed">American Society of Metabolic &
                        Bariatric Surgery (ASMBS)</p>
                </div>
                <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm hover:border-scod hover:shadow-md transition-all duration-300 flex flex-col items-center text-center group observe-animate delay-300"
                    data-animation="fade-in-up">
                    <div
                        class="w-12 h-12 bg-blue-50 rounded-full flex items-center justify-center shadow-sm mb-4 text-scod group-hover:bg-scod group-hover:text-white transition-colors">
                        <i data-feather="check" class="w-6 h-6"></i>
                    </div>
                    <p class="font-semibold text-gray-800 text-sm leading-relaxed">Society of American Gastro. Surgeons
                        (SAGES)</p>
                </div>
                <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm hover:border-scod hover:shadow-md transition-all duration-300 flex flex-col items-center text-center group observe-animate"
                    data-animation="fade-in-up">
                    <div
                        class="w-12 h-12 bg-blue-50 rounded-full flex items-center justify-center shadow-sm mb-4 text-scod group-hover:bg-scod group-hover:text-white transition-colors">
                        <i data-feather="check" class="w-6 h-6"></i>
                    </div>
                    <p class="font-semibold text-gray-800 text-sm leading-relaxed">Indian Assoc. of Gastro-intestinal
                        Surgeons (IAGES)</p>
                </div>
                <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm hover:border-scod hover:shadow-md transition-all duration-300 flex flex-col items-center text-center group observe-animate delay-100"
                    data-animation="fade-in-up">
                    <div
                        class="w-12 h-12 bg-blue-50 rounded-full flex items-center justify-center shadow-sm mb-4 text-scod group-hover:bg-scod group-hover:text-white transition-colors">
                        <i data-feather="check" class="w-6 h-6"></i>
                    </div>
                    <p class="font-semibold text-gray-800 text-sm leading-relaxed">Association of Minimal Access
                        Surgeons of India (AMASI)</p>
                </div>
                <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm hover:border-scod hover:shadow-md transition-all duration-300 flex flex-col items-center text-center group observe-animate delay-200"
                    data-animation="fade-in-up">
                    <div
                        class="w-12 h-12 bg-blue-50 rounded-full flex items-center justify-center shadow-sm mb-4 text-scod group-hover:bg-scod group-hover:text-white transition-colors">
                        <i data-feather="check" class="w-6 h-6"></i>
                    </div>
                    <p class="font-semibold text-gray-800 text-sm leading-relaxed">Indian Hernia Society (IHS)</p>
                </div>
                <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm hover:border-scod hover:shadow-md transition-all duration-300 flex flex-col items-center text-center group observe-animate delay-300"
                    data-animation="fade-in-up">
                    <div
                        class="w-12 h-12 bg-blue-50 rounded-full flex items-center justify-center shadow-sm mb-4 text-scod group-hover:bg-scod group-hover:text-white transition-colors">
                        <i data-feather="check" class="w-6 h-6"></i>
                    </div>
                    <p class="font-semibold text-gray-800 text-sm leading-relaxed">Association of Surgeons of India
                        (ASI)</p>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA SECTION -->
    <section class="py-16 bg-scod text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Start Your Transformation?</h2>
            <p class="text-blue-100 mb-8 max-w-2xl mx-auto">Book a consultation with Dr. Arush Sabharwal to discuss your
                personalized weight loss plan.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="contact.php"
                    class="inline-flex items-center bg-white text-scod px-8 py-4 rounded-full font-bold text-lg hover:bg-gray-100 transition-all shadow-lg"><i
                        data-feather="calendar" class="w-5 h-5 mr-2"></i>Book Consultation</a>
                <a href="tel:+918130130489"
                    class="inline-flex items-center bg-transparent border-2 border-white text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-white hover:text-scod transition-all"><i
                        data-feather="phone" class="w-5 h-5 mr-2"></i>Call Now</a>
            </div>
        </div>
    </section>
    <!-- FOOTER -->
    <?php include 'includes/footer.php'; ?>
    <script>
        feather.replace();
        // Podcast slider functionality
        let podcastIndex = 0;
        const podcastSlider = document.getElementById('podcast-slider');
        const podcastPrev = document.getElementById('podcast-prev');
        const podcastNext = document.getElementById('podcast-next');
        const totalPodcasts = 5;
        const getItemsPerView = () => window.innerWidth >= 1024 ? 3 : window.innerWidth >= 768 ? 2 : 1;
        function updatePodcastSlider() {
            if (!podcastSlider) return;
            const itemsPerView = getItemsPerView();
            const maxIndex = Math.max(0, totalPodcasts - itemsPerView);
            podcastIndex = Math.min(podcastIndex, maxIndex);
            const translateX = -(podcastIndex * (100 / totalPodcasts));
            podcastSlider.style.transform = `translateX(${translateX}%)`;
        }
        if (podcastPrev) podcastPrev.addEventListener('click', () => { podcastIndex = Math.max(0, podcastIndex - 1); updatePodcastSlider(); });
        if (podcastNext) podcastNext.addEventListener('click', () => { const itemsPerView = getItemsPerView(); const maxIndex = Math.max(0, totalPodcasts - itemsPerView); podcastIndex = podcastIndex >= maxIndex ? 0 : podcastIndex + 1; updatePodcastSlider(); });
        window.addEventListener('resize', updatePodcastSlider);
        updatePodcastSlider();
        // Hero video button
        document.getElementById('hero-video-btn')?.addEventListener('click', () => {
            const modal = document.getElementById('video-modal');
            const iframe = document.getElementById('video-iframe');
            iframe.src = 'https://brandingpioneers.co.in/scod/Dr-Arush-Video-2.mp4';
            modal.classList.add('active');
        });
    </script>
</body>
</html>