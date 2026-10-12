<?php
$path_prefix = '../';
$is_home = false;
$page_title = 'Are Weight Loss Injections Safe? {Complete Guide}';
$canonical_url = 'https://scodclinic.com/blog/are-weight-loss-injections-safe';
include __DIR__ . '/../includes/header.php';
?>

    <!-- Blog Post Content -->
    <main class="max-w-4xl mx-auto px-4 py-12 md:py-16 mt-20">
        <!-- Breadcrumb -->
        <nav class="flex items-center gap-2 text-sm text-gray-500 mb-8">
            <a href="/index.php" class="hover:text-scod">Home</a>
            <i data-feather="chevron-right" class="w-4 h-4"></i>
            <a href="/blog/index.php" class="hover:text-scod">Blog</a>
            <i data-feather="chevron-right" class="w-4 h-4"></i>
            <span class="text-scod font-medium"><?php echo $page_title; ?></span>
        </nav>

        <!-- Article -->
        <article>
            <header class="mb-10">
                <span class="inline-block bg-scod text-white text-xs font-bold px-3 py-1 rounded-full mb-4">Weight Loss</span>
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4"><?php echo $page_title; ?></h1>
                <div class="flex items-center gap-6 text-gray-500 text-sm">
                    <span class="flex items-center gap-2">
                        <i data-feather="calendar" class="w-4 h-4"></i>
                        April 28, 2026
                    </span>
                    <span class="flex items-center gap-2">
                        <i data-feather="user" class="w-4 h-4"></i>
                        SCOD Clinic
                    </span>
                </div>
            </header>

            <!-- Medical Disclaimer -->
            <?php include __DIR__ . '/../includes/medical-disclaimer.php'; ?>

            <!-- Featured Image -->
            <figure class="mb-10">
                <img src="/blog/media/images/Are-Weight-Loss-Injections-Safe.jpg" alt="Are Weight Loss Injections Safe?" class="w-full rounded-2xl shadow-lg">
            </figure>

            <!-- Article Content -->
            <div class="blog-content">
                <p class="text-gray-600 mb-6">Weight loss injections have become increasingly popular in recent years, especially among people struggling with obesity or those who have not achieved results with diet and exercise alone. These medications are typically administered via weekly or monthly injections and work by suppressing appetite, reducing cravings, or affecting how the body processes food.</p>

                                <!-- Frequently Asked Questions Section -->
                <div class="my-12">
                    <div class="text-center mb-8">
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-900">Frequently <span class="text-scod">Asked Questions</span></h2>
                    </div>
                    <div class="space-y-4">
                    <div class="border border-gray-200 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 bg-white faq-item">
                        <button type="button" class="faq-btn w-full flex items-center justify-between p-6 text-left bg-white focus:outline-none cursor-pointer">
                            <span class="text-lg font-bold text-gray-900 pr-8">How long does it take to see results?</span>
                            <div class="faq-icon flex-shrink-0 w-8 h-8 rounded-full flex items-center justify-center transition-colors duration-300 bg-gray-100 text-gray-500">
                                <i data-feather="plus" class="w-4 h-4 faq-plus"></i>
                                <i data-feather="minus" class="w-4 h-4 faq-minus hidden"></i>
                            </div>
                        </button>
                        <div class="faq-content hidden overflow-hidden bg-gray-50">
                            <div class="p-6 pt-0 text-gray-600 leading-relaxed border-t border-gray-100 mt-2 pt-4">
                                <p class="text-gray-600">Results vary, but most people start seeing weight loss within 4-12 weeks of starting treatment.</p>
                            </div>
                        </div>
                    </div>
                    <div class="border border-gray-200 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 bg-white faq-item">
                        <button type="button" class="faq-btn w-full flex items-center justify-between p-6 text-left bg-white focus:outline-none cursor-pointer">
                            <span class="text-lg font-bold text-gray-900 pr-8">Do I need to follow a diet while using weight loss injections?</span>
                            <div class="faq-icon flex-shrink-0 w-8 h-8 rounded-full flex items-center justify-center transition-colors duration-300 bg-gray-100 text-gray-500">
                                <i data-feather="plus" class="w-4 h-4 faq-plus"></i>
                                <i data-feather="minus" class="w-4 h-4 faq-minus hidden"></i>
                            </div>
                        </button>
                        <div class="faq-content hidden overflow-hidden bg-gray-50">
                            <div class="p-6 pt-0 text-gray-600 leading-relaxed border-t border-gray-100 mt-2 pt-4">
                                <p class="text-gray-600">Yes, these medications work best when combined with a healthy diet and regular exercise.</p>
                            </div>
                        </div>
                    </div>
                    <div class="border border-gray-200 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 bg-white faq-item">
                        <button type="button" class="faq-btn w-full flex items-center justify-between p-6 text-left bg-white focus:outline-none cursor-pointer">
                            <span class="text-lg font-bold text-gray-900 pr-8">Are weight loss injections permanent?</span>
                            <div class="faq-icon flex-shrink-0 w-8 h-8 rounded-full flex items-center justify-center transition-colors duration-300 bg-gray-100 text-gray-500">
                                <i data-feather="plus" class="w-4 h-4 faq-plus"></i>
                                <i data-feather="minus" class="w-4 h-4 faq-minus hidden"></i>
                            </div>
                        </button>
                        <div class="faq-content hidden overflow-hidden bg-gray-50">
                            <div class="p-6 pt-0 text-gray-600 leading-relaxed border-t border-gray-100 mt-2 pt-4">
                                <p class="text-gray-600">No, these are typically long-term treatments. Stopping the medication may result in regaining weight.</p>
                            </div>
                        </div>
                    </div>
                    <div class="border border-gray-200 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 bg-white faq-item">
                        <button type="button" class="faq-btn w-full flex items-center justify-between p-6 text-left bg-white focus:outline-none cursor-pointer">
                            <span class="text-lg font-bold text-gray-900 pr-8">Can anyone use weight loss injections?</span>
                            <div class="faq-icon flex-shrink-0 w-8 h-8 rounded-full flex items-center justify-center transition-colors duration-300 bg-gray-100 text-gray-500">
                                <i data-feather="plus" class="w-4 h-4 faq-plus"></i>
                                <i data-feather="minus" class="w-4 h-4 faq-minus hidden"></i>
                            </div>
                        </button>
                        <div class="faq-content hidden overflow-hidden bg-gray-50">
                            <div class="p-6 pt-0 text-gray-600 leading-relaxed border-t border-gray-100 mt-2 pt-4">
                                <p class="text-gray-600">No, they are prescription-only and not suitable for everyone. A healthcare provider must evaluate if they're right for you.</p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>


                <nav class="flex justify-between items-center mt-12 pt-8 border-t border-gray-200">
                    <a href="what-is-the-minimum-weight-for-bariatric-surgery" class="flex items-center gap-2 text-gray-700 hover:text-scod font-semibold">
                        <i data-feather="arrow-left" class="w-4 h-4"></i>
                        Previous: What is the Minimum Weight for Bariatric Surgery?
                    </a>
                    <a href="is-ozempic-used-for-weight-loss" class="flex items-center gap-2 text-gray-700 hover:text-scod font-semibold">
                        Next: Is Ozempic Used for Weight Loss?
                        <i data-feather="arrow-right" class="w-4 h-4"></i>
                    </a>
                </nav>
            </div>
        </article>
    </main>

<?php include __DIR__ . '/../includes/footer.php'; ?>

    <!-- Initialize Feather Icons -->
    <script>feather.replace();</script>
</body>
</html>
