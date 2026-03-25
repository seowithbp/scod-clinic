<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You | SCOD Clinic</title>
    <meta name="description" content="Thank you for contacting SCOD Clinic. Our team will get back to you shortly.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>tailwind.config = { theme: { extend: { colors: { scod: '#1876AA' }, fontFamily: { sans: ['"Nunito Sans"', 'sans-serif'] } } } }</script>
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="css/custom.css">
</head>
<body class="min-h-screen bg-white text-gray-900">
    <!-- NAVBAR -->
    <?php include 'includes/header.php'; ?>
    <!-- THANK YOU CONTENT -->
    <section class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 to-white pt-20">
        <div class="max-w-2xl mx-auto px-4 text-center">
            <div class="observe-animate" data-animation="scale-in">
                <div
                    class="w-24 h-24 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-8 shadow-lg">
                    <i data-feather="check-circle" class="w-12 h-12 text-emerald-500"></i>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Thank You!</h1>
                <p class="text-xl text-gray-600 mb-8 leading-relaxed">Your message has been successfully submitted. Our
                    team will review your inquiry and get back to you within 24-48 hours.</p>
                <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100 mb-8">
                    <h3 class="font-bold text-gray-900 mb-4">What happens next?</h3>
                    <ul class="text-left space-y-4">
                        <li class="flex items-start">
                            <div
                                class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center text-scod font-bold text-sm mr-3 shrink-0">
                                1</div>
                            <p class="text-gray-600">Our patient coordinator will review your information.</p>
                        </li>
                        <li class="flex items-start">
                            <div
                                class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center text-scod font-bold text-sm mr-3 shrink-0">
                                2</div>
                            <p class="text-gray-600">You'll receive a call or email with consultation options.</p>
                        </li>
                        <li class="flex items-start">
                            <div
                                class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center text-scod font-bold text-sm mr-3 shrink-0">
                                3</div>
                            <p class="text-gray-600">Schedule your appointment at a convenient time.</p>
                        </li>
                    </ul>
                </div>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="index.php"
                        class="inline-flex items-center bg-scod text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-blue-700 transition-all shadow-lg"><i
                            data-feather="home" class="w-5 h-5 mr-2"></i>Back to Home</a>
                    <a href="tel:+918130130489"
                        class="inline-flex items-center bg-white text-scod border-2 border-scod px-8 py-4 rounded-full font-bold text-lg hover:bg-blue-50 transition-all"><i
                            data-feather="phone" class="w-5 h-5 mr-2"></i>Call Us Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- FOOTER -->
    <?php include 'includes/footer.php'; ?>
</body>
</html>