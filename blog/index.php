<?php
$path_prefix = '../';
$is_home = false;
include __DIR__ . '/../includes/header.php';
?>

    <!-- Hero Section -->
    <section class="bg-gradient-to-b from-blue-50 to-white py-16 md:py-24 mt-20">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Health <span class="text-scod">Insights</span></h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">Expert guidance on bariatric surgery, weight management, and surgical treatments from our team of specialists.</p>
        </div>
    </section>

    <!-- Filter Bar -->
    <div class="bg-white py-6 border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 flex flex-wrap justify-center gap-3">
            <button class="filter-tab active bg-scod text-white px-6 py-2.5 rounded-full text-sm font-semibold transition-all hover:bg-blue-700 shadow-md" data-filter="all">All</button>
            <button class="filter-tab bg-gray-100 text-gray-600 px-6 py-2.5 rounded-full text-sm font-semibold transition-all hover:bg-scod hover:text-white" data-filter="bariatric-surgery">Bariatric Surgery</button>
            <button class="filter-tab bg-gray-100 text-gray-600 px-6 py-2.5 rounded-full text-sm font-semibold transition-all hover:bg-scod hover:text-white" data-filter="weight-loss">Weight Loss</button>
            <button class="filter-tab bg-gray-100 text-gray-600 px-6 py-2.5 rounded-full text-sm font-semibold transition-all hover:bg-scod hover:text-white" data-filter="diabetes">Diabetes</button>
            <button class="filter-tab bg-gray-100 text-gray-600 px-6 py-2.5 rounded-full text-sm font-semibold transition-all hover:bg-scod hover:text-white" data-filter="laparoscopic">Laparoscopic</button>
            <button class="filter-tab bg-gray-100 text-gray-600 px-6 py-2.5 rounded-full text-sm font-semibold transition-all hover:bg-scod hover:text-white" data-filter="recovery">Recovery Tips</button>
        </div>
    </div>

    <!-- Blog Grid -->
    <main class="max-w-7xl mx-auto px-4 py-12 md:py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Blog Card 1 -->
            <article class="blog-card bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100 hover:shadow-xl transition-all hover:-translate-y-1" data-category="diabetes">
                <div class="relative aspect-video overflow-hidden bg-blue-50">
                    <div class="absolute top-4 left-4 bg-white px-3 py-1 rounded-full text-xs font-bold text-gray-600 uppercase tracking-wider border shadow-sm z-10">Diabetes</div>
                    <img src="/blog/media/images/Bariatric Surgery.webp" alt="Does Bariatric Surgery Cure Type 2 Diabetes?" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-3 text-xs text-gray-400 font-semibold uppercase tracking-wider mb-4">
                        <i data-feather="calendar" class="w-3 h-3"></i>
                        May 20, 2026
                    </div>
                    <h2 class="text-xl font-bold text-gray-900 mb-3 hover:text-scod transition-colors">
                        <a href="/blog/does-bariatric-surgery-cure-type-2-diabetes">Does Bariatric Surgery Cure Type 2 Diabetes?</a>
                    </h2>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">Yes, bariatric surgery is recommended for people with a BMI of 27.5 or higher who have uncontrolled type 2 diabetes, or for those with a BMI of 32.5 or above...</p>
                    <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                        <span class="text-xs text-gray-400 font-bold uppercase tracking-wider">By SCOD Clinic</span>
                        <a href="/blog/does-bariatric-surgery-cure-type-2-diabetes" class="flex items-center gap-2 text-scod text-sm font-semibold hover:text-blue-700 transition-colors">
                            Read More
                            <i data-feather="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            </article>

            <!-- Blog Card 2 -->
            <article class="blog-card bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100 hover:shadow-xl transition-all hover:-translate-y-1" data-category="bariatric-surgery">
                <div class="relative aspect-video overflow-hidden bg-blue-50">
                    <div class="absolute top-4 left-4 bg-white px-3 py-1 rounded-full text-xs font-bold text-gray-600 uppercase tracking-wider border shadow-sm z-10">Bariatric Surgery</div>
                    <img src="/blog/media/images/Bariatric Surgery.webp" alt="What is the Minimum Weight for Bariatric Surgery?" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-3 text-xs text-gray-400 font-semibold uppercase tracking-wider mb-4">
                        <i data-feather="calendar" class="w-3 h-3"></i>
                        May 12, 2026
                    </div>
                    <h2 class="text-xl font-bold text-gray-900 mb-3 hover:text-scod transition-colors">
                        <a href="/blog/what-is-the-minimum-weight-for-bariatric-surgery">What is the Minimum Weight for Bariatric Surgery?</a>
                    </h2>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">Bariatric surgery is one of the most effective treatments for severe obesity and weight-related health problems. Many people who struggle with excess weight often ask...</p>
                    <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                        <span class="text-xs text-gray-400 font-bold uppercase tracking-wider">By SCOD Clinic</span>
                        <a href="/blog/what-is-the-minimum-weight-for-bariatric-surgery" class="flex items-center gap-2 text-scod text-sm font-semibold hover:text-blue-700 transition-colors">
                            Read More
                            <i data-feather="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            </article>

            <!-- Blog Card 3 -->
            <article class="blog-card bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100 hover:shadow-xl transition-all hover:-translate-y-1" data-category="weight-loss">
                <div class="relative aspect-video overflow-hidden bg-blue-50">
                    <div class="absolute top-4 left-4 bg-white px-3 py-1 rounded-full text-xs font-bold text-gray-600 uppercase tracking-wider border shadow-sm z-10">Weight Loss</div>
                    <img src="/blog/media/images/Are-Weight-Loss-Injections-Safe.jpg" alt="Are Weight Loss Injections Safe?" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-3 text-xs text-gray-400 font-semibold uppercase tracking-wider mb-4">
                        <i data-feather="calendar" class="w-3 h-3"></i>
                        April 28, 2026
                    </div>
                    <h2 class="text-xl font-bold text-gray-900 mb-3 hover:text-scod transition-colors">
                        <a href="/blog/are-weight-loss-injections-safe">Are Weight Loss Injections Safe? {Complete Guide}</a>
                    </h2>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">Weight loss injections have become increasingly popular in recent years, especially among people struggling with obesity or those who have not achieved results with diet...</p>
                    <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                        <span class="text-xs text-gray-400 font-bold uppercase tracking-wider">By SCOD Clinic</span>
                        <a href="/blog/are-weight-loss-injections-safe" class="flex items-center gap-2 text-scod text-sm font-semibold hover:text-blue-700 transition-colors">
                            Read More
                            <i data-feather="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            </article>

            <!-- Blog Card 4 -->
            <article class="blog-card bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100 hover:shadow-xl transition-all hover:-translate-y-1" data-category="bariatric-surgery">
                <div class="relative aspect-video overflow-hidden bg-blue-50">
                    <div class="absolute top-4 left-4 bg-white px-3 py-1 rounded-full text-xs font-bold text-gray-600 uppercase tracking-wider border shadow-sm z-10">Bariatric Surgery</div>
                    <img src="/blog/media/images/Bariatric Surgery.webp" alt="How Do You Lose Weight After Bariatric Surgery?" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-3 text-xs text-gray-400 font-semibold uppercase tracking-wider mb-4">
                        <i data-feather="calendar" class="w-3 h-3"></i>
                        April 24, 2026
                    </div>
                    <h2 class="text-xl font-bold text-gray-900 mb-3 hover:text-scod transition-colors">
                        <a href="/blog/how-do-you-lose-weight-after-bariatric-surgery">How Do You Lose Weight After Bariatric Surgery?</a>
                    </h2>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">Bariatric surgery is not just about reducing the size of your stomach. It is a powerful medical tool designed to help people who struggle with severe obesity regain control...</p>
                    <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                        <span class="text-xs text-gray-400 font-bold uppercase tracking-wider">By SCOD Clinic</span>
                        <a href="/blog/how-do-you-lose-weight-after-bariatric-surgery" class="flex items-center gap-2 text-scod text-sm font-semibold hover:text-blue-700 transition-colors">
                            Read More
                            <i data-feather="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            </article>

            <!-- Blog Card 5 -->
            <article class="blog-card bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100 hover:shadow-xl transition-all hover:-translate-y-1" data-category="weight-loss">
                <div class="relative aspect-video overflow-hidden bg-blue-50">
                    <div class="absolute top-4 left-4 bg-white px-3 py-1 rounded-full text-xs font-bold text-gray-600 uppercase tracking-wider border shadow-sm z-10">Weight Loss</div>
                    <img src="/blog/media/images/Are-Weight-Loss-Injections-Safe.jpg" alt="Is Ozempic Used for Weight Loss?" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-3 text-xs text-gray-400 font-semibold uppercase tracking-wider mb-4">
                        <i data-feather="calendar" class="w-3 h-3"></i>
                        April 20, 2026
                    </div>
                    <h2 class="text-xl font-bold text-gray-900 mb-3 hover:text-scod transition-colors">
                        <a href="/blog/is-ozempic-used-for-weight-loss">Is Ozempic Used for Weight Loss? {Key Insights}</a>
                    </h2>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">Ozempic, a medication originally designed to manage type 2 diabetes, has recently gained attention for its role in weight management. Many people today are searching...</p>
                    <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                        <span class="text-xs text-gray-400 font-bold uppercase tracking-wider">By SCOD Clinic</span>
                        <a href="/blog/is-ozempic-used-for-weight-loss" class="flex items-center gap-2 text-scod text-sm font-semibold hover:text-blue-700 transition-colors">
                            Read More
                            <i data-feather="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            </article>

            <!-- Blog Card 6 -->
            <article class="blog-card bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100 hover:shadow-xl transition-all hover:-translate-y-1" data-category="bariatric-surgery">
                <div class="relative aspect-video overflow-hidden bg-blue-50">
                    <div class="absolute top-4 left-4 bg-white px-3 py-1 rounded-full text-xs font-bold text-gray-600 uppercase tracking-wider border shadow-sm z-10">Bariatric Surgery</div>
                    <img src="/blog/media/images/Bariatric Surgery.webp" alt="Does Bariatric Surgery Lower Blood Pressure?" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-3 text-xs text-gray-400 font-semibold uppercase tracking-wider mb-4">
                        <i data-feather="calendar" class="w-3 h-3"></i>
                        April 15, 2026
                    </div>
                    <h2 class="text-xl font-bold text-gray-900 mb-3 hover:text-scod transition-colors">
                        <a href="/blog/does-bariatric-surgery-lower-blood-pressure">Does Bariatric Surgery Lower Blood Pressure?</a>
                    </h2>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">Bariatric surgery has been shown to have significant effects on blood pressure regulation. Many patients experience improvement or complete resolution of hypertension following...</p>
                    <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                        <span class="text-xs text-gray-400 font-bold uppercase tracking-wider">By SCOD Clinic</span>
                        <a href="/blog/does-bariatric-surgery-lower-blood-pressure" class="flex items-center gap-2 text-scod text-sm font-semibold hover:text-blue-700 transition-colors">
                            Read More
                            <i data-feather="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            </article>

            <!-- Blog Card 7 -->
            <article class="blog-card bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100 hover:shadow-xl transition-all hover:-translate-y-1" data-category="bariatric-surgery">
                <div class="relative aspect-video overflow-hidden bg-blue-50">
                    <div class="absolute top-4 left-4 bg-white px-3 py-1 rounded-full text-xs font-bold text-gray-600 uppercase tracking-wider border shadow-sm z-10">Bariatric Surgery</div>
                    <img src="/blog/media/images/Bariatric Surgery.webp" alt="How Does Gastric Bypass Work?" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-3 text-xs text-gray-400 font-semibold uppercase tracking-wider mb-4">
                        <i data-feather="calendar" class="w-3 h-3"></i>
                        April 10, 2026
                    </div>
                    <h2 class="text-xl font-bold text-gray-900 mb-3 hover:text-scod transition-colors">
                        <a href="/blog/how-does-gastric-bypass-work">How Does Gastric Bypass Work?</a>
                    </h2>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">Gastric bypass is one of the most commonly performed bariatric surgeries worldwide. It helps patients lose weight by changing how the stomach and small intestine handle food...</p>
                    <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                        <span class="text-xs text-gray-400 font-bold uppercase tracking-wider">By SCOD Clinic</span>
                        <a href="/blog/how-does-gastric-bypass-work" class="flex items-center gap-2 text-scod text-sm font-semibold hover:text-blue-700 transition-colors">
                            Read More
                            <i data-feather="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            </article>

            <!-- Blog Card 8 -->
            <article class="blog-card bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100 hover:shadow-xl transition-all hover:-translate-y-1" data-category="bariatric-surgery">
                <div class="relative aspect-video overflow-hidden bg-blue-50">
                    <div class="absolute top-4 left-4 bg-white px-3 py-1 rounded-full text-xs font-bold text-gray-600 uppercase tracking-wider border shadow-sm z-10">Bariatric Surgery</div>
                    <img src="/blog/media/images/Bariatric Surgery.webp" alt="When is Bariatric Surgery Recommended?" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-3 text-xs text-gray-400 font-semibold uppercase tracking-wider mb-4">
                        <i data-feather="calendar" class="w-3 h-3"></i>
                        April 5, 2026
                    </div>
                    <h2 class="text-xl font-bold text-gray-900 mb-3 hover:text-scod transition-colors">
                        <a href="/blog/when-is-bariatric-surgery-recommended">When is Bariatric Surgery Recommended?</a>
                    </h2>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">Bariatric surgery is recommended for individuals who have been unable to achieve significant weight loss through diet, exercise, or medication. Learn about the key criteria...</p>
                    <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                        <span class="text-xs text-gray-400 font-bold uppercase tracking-wider">By SCOD Clinic</span>
                        <a href="/blog/when-is-bariatric-surgery-recommended" class="flex items-center gap-2 text-scod text-sm font-semibold hover:text-blue-700 transition-colors">
                            Read More
                            <i data-feather="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            </article>

            <!-- Blog Card 9 -->
            <article class="blog-card bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100 hover:shadow-xl transition-all hover:-translate-y-1" data-category="diabetes">
                <div class="relative aspect-video overflow-hidden bg-blue-50">
                    <div class="absolute top-4 left-4 bg-white px-3 py-1 rounded-full text-xs font-bold text-gray-600 uppercase tracking-wider border shadow-sm z-10">Diabetes</div>
                    <img src="/blog/media/images/Bariatric Surgery.webp" alt="Can Bariatric Surgery Reverse Diabetes?" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-3 text-xs text-gray-400 font-semibold uppercase tracking-wider mb-4">
                        <i data-feather="calendar" class="w-3 h-3"></i>
                        March 28, 2026
                    </div>
                    <h2 class="text-xl font-bold text-gray-900 mb-3 hover:text-scod transition-colors">
                        <a href="/blog/can-bariatric-surgery-reverse-diabetes">Can Bariatric Surgery Reverse Diabetes?</a>
                    </h2>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">One of the most remarkable benefits of bariatric surgery is its ability to improve or even reverse type 2 diabetes. Many patients see dramatic improvements in blood sugar...</p>
                    <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                        <span class="text-xs text-gray-400 font-bold uppercase tracking-wider">By SCOD Clinic</span>
                        <a href="/blog/can-bariatric-surgery-reverse-diabetes" class="flex items-center gap-2 text-scod text-sm font-semibold hover:text-blue-700 transition-colors">
                            Read More
                            <i data-feather="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            </article>

            <!-- Blog Card 10 -->
            <article class="blog-card bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100 hover:shadow-xl transition-all hover:-translate-y-1" data-category="bariatric-surgery">
                <div class="relative aspect-video overflow-hidden bg-blue-50">
                    <div class="absolute top-4 left-4 bg-white px-3 py-1 rounded-full text-xs font-bold text-gray-600 uppercase tracking-wider border shadow-sm z-10">Bariatric Surgery</div>
                    <img src="/blog/media/images/Bariatric Surgery.webp" alt="Top 10 Bariatric Surgeons in Delhi" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-3 text-xs text-gray-400 font-semibold uppercase tracking-wider mb-4">
                        <i data-feather="calendar" class="w-3 h-3"></i>
                        March 20, 2026
                    </div>
                    <h2 class="text-xl font-bold text-gray-900 mb-3 hover:text-scod transition-colors">
                        <a href="/blog/top-10-bariatric-surgeons-in-delhi">Top 10 Bariatric Surgeons in Delhi</a>
                    </h2>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">Finding the right bariatric surgeon is crucial for a successful weight loss journey. Here is our list of the top 10 bariatric surgeons in Delhi known for their expertise...</p>
                    <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                        <span class="text-xs text-gray-400 font-bold uppercase tracking-wider">By SCOD Clinic</span>
                        <a href="/blog/top-10-bariatric-surgeons-in-delhi" class="flex items-center gap-2 text-scod text-sm font-semibold hover:text-blue-700 transition-colors">
                            Read More
                            <i data-feather="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            </article>

            <!-- Blog Card 11 -->
            <article class="blog-card bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100 hover:shadow-xl transition-all hover:-translate-y-1" data-category="laparoscopic">
                <div class="relative aspect-video overflow-hidden bg-blue-50">
                    <div class="absolute top-4 left-4 bg-white px-3 py-1 rounded-full text-xs font-bold text-gray-600 uppercase tracking-wider border shadow-sm z-10">Laparoscopic</div>
                    <img src="/blog/media/images/Laparoscopic Surgery.webp" alt="How Long Does Laparoscopic Appendectomy Surgery Take?" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-3 text-xs text-gray-400 font-semibold uppercase tracking-wider mb-4">
                        <i data-feather="calendar" class="w-3 h-3"></i>
                        March 15, 2026
                    </div>
                    <h2 class="text-xl font-bold text-gray-900 mb-3 hover:text-scod transition-colors">
                        <a href="/blog/how-long-does-laparoscopic-appendectomy-surgery-take">How Long Does Laparoscopic Appendectomy Surgery Take?</a>
                    </h2>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">Laparoscopic appendectomy is a minimally invasive surgery to remove the appendix. The procedure typically takes 30 to 60 minutes, depending on the complexity of the case...</p>
                    <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                        <span class="text-xs text-gray-400 font-bold uppercase tracking-wider">By SCOD Clinic</span>
                        <a href="/blog/how-long-does-laparoscopic-appendectomy-surgery-take" class="flex items-center gap-2 text-scod text-sm font-semibold hover:text-blue-700 transition-colors">
                            Read More
                            <i data-feather="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            </article>

            <!-- Blog Card 12 -->
            <article class="blog-card bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100 hover:shadow-xl transition-all hover:-translate-y-1" data-category="laparoscopic">
                <div class="relative aspect-video overflow-hidden bg-blue-50">
                    <div class="absolute top-4 left-4 bg-white px-3 py-1 rounded-full text-xs font-bold text-gray-600 uppercase tracking-wider border shadow-sm z-10">Laparoscopic</div>
                    <img src="/blog/media/images/Laparoscopic Surgery.webp" alt="How Long is Robotic Gallbladder Surgery?" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-3 text-xs text-gray-400 font-semibold uppercase tracking-wider mb-4">
                        <i data-feather="calendar" class="w-3 h-3"></i>
                        March 10, 2026
                    </div>
                    <h2 class="text-xl font-bold text-gray-900 mb-3 hover:text-scod transition-colors">
                        <a href="/blog/how-long-is-robotic-gallbladder-surgery">How Long is Robotic Gallbladder Surgery?</a>
                    </h2>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">Robotic gallbladder surgery is an advanced minimally invasive procedure. Learn about the duration, recovery time, and benefits of this cutting-edge surgical technique...</p>
                    <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                        <span class="text-xs text-gray-400 font-bold uppercase tracking-wider">By SCOD Clinic</span>
                        <a href="/blog/how-long-is-robotic-gallbladder-surgery" class="flex items-center gap-2 text-scod text-sm font-semibold hover:text-blue-700 transition-colors">
                            Read More
                            <i data-feather="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            </article>
        </div>
    </main>

    <!-- Pagination -->
    <div class="max-w-7xl mx-auto px-4 py-8 flex justify-center gap-2">
        <span class="w-10 h-10 flex items-center justify-center rounded-lg text-gray-400 border border-gray-200 cursor-not-allowed opacity-50">
            <i data-feather="chevron-left" class="w-4 h-4"></i>
        </span>
        <span class="w-10 h-10 flex items-center justify-center rounded-lg bg-scod text-white font-semibold">1</span>
        <a href="/blog/page-2" class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:bg-scod hover:text-white hover:border-scod transition-colors font-semibold">2</a>
        <a href="/blog/page-3" class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:bg-scod hover:text-white hover:border-scod transition-colors font-semibold">3</a>
        <a href="/blog/page-2" class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:bg-scod hover:text-white hover:border-scod transition-colors">
            <i data-feather="chevron-right" class="w-4 h-4"></i>
        </a>
    </div>

<?php include __DIR__ . '/../includes/footer.php'; ?>

    <!-- Filter Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterTabs = document.querySelectorAll('.filter-tab');
            const blogCards = document.querySelectorAll('.blog-card');

            filterTabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    const filterValue = this.getAttribute('data-filter');

                    // Update active state
                    filterTabs.forEach(t => {
                        t.classList.remove('bg-scod', 'text-white', 'shadow-md');
                        t.classList.add('bg-gray-100', 'text-gray-600');
                    });
                    this.classList.remove('bg-gray-100', 'text-gray-600');
                    this.classList.add('bg-scod', 'text-white', 'shadow-md');

                    // Filter cards
                    blogCards.forEach(card => {
                        const cardCategory = card.getAttribute('data-category');
                        if (filterValue === 'all' || cardCategory === filterValue) {
                            card.style.display = 'block';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>
</body>
</html>