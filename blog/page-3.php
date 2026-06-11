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

    <!-- Blog Grid - Page 3 -->
    <main class="max-w-7xl mx-auto px-4 py-12 md:py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Empty state or end of blog posts -->
            <div class="col-span-full text-center py-12">
                <div class="bg-blue-50 rounded-2xl p-12 border border-blue-100">
                    <i data-feather="file-text" class="w-16 h-16 text-scod mx-auto mb-4"></i>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">More Content Coming Soon</h2>
                    <p class="text-gray-600 mb-6">We're regularly publishing new articles about bariatric surgery, weight management, and healthy living.</p>
                    <a href="/blog/index.php" class="inline-flex items-center gap-2 bg-scod text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                        <i data-feather="arrow-left" class="w-4 h-4"></i>
                        Back to Blog
                    </a>
                </div>
            </div>
        </div>
    </main>

    <!-- Pagination -->
    <div class="max-w-7xl mx-auto px-4 py-8 flex justify-center gap-2">
        <a href="page-2" class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:bg-scod hover:text-white hover:border-scod transition-colors">
            <i data-feather="chevron-left" class="w-4 h-4"></i>
        </a>
        <a href="/blog/index.php" class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:bg-scod hover:text-white hover:border-scod transition-colors font-semibold">1</a>
        <a href="page-2" class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:bg-scod hover:text-white hover:border-scod transition-colors font-semibold">2</a>
        <span class="w-10 h-10 flex items-center justify-center rounded-lg bg-scod text-white font-semibold">3</span>
    </div>

<?php include __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
