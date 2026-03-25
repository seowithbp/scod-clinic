<?php
if (!isset($path_prefix)) {
    $path_prefix = '';
}
?>
<footer class="bg-slate-900 text-slate-300 pt-20 pb-10 border-t-4 border-scod font-sans">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-12 mb-16">
            <!-- Brand -->
            <div class="lg:col-span-5 space-y-6">
                <a href="<?php echo $path_prefix; ?>index.php"
                    class="inline-block bg-white/5 p-3 rounded-xl backdrop-blur-sm">
                    <img src="https://brandingpioneers.co.in/scod/Scod-Logo-Big-Size-180x74.webp" alt="SCOD Logo"
                        class="h-10 w-auto object-contain brightness-0 invert">
                </a>
                <p class="text-slate-400 leading-relaxed pr-4">Transforming lives through advanced bariatric and
                    metabolic
                    surgery. We provide compassionate, expert care to help you achieve lasting health and wellness.</p>
                <div class="flex space-x-4 pt-2">
                    <a href="https://www.facebook.com/scodllp/" aria-label="Facebook"
                        class="w-10 h-10 bg-slate-800 rounded-full flex items-center justify-center text-slate-400 hover:bg-scod hover:text-white transition-all duration-300 transform hover:-translate-y-1"><i
                            data-feather="facebook" class="w-5 h-5"></i></a>
                    <a href="https://www.instagram.com/scodclinic/" aria-label="Instagram"
                        class="w-10 h-10 bg-slate-800 rounded-full flex items-center justify-center text-slate-400 hover:bg-scod hover:text-white transition-all duration-300 transform hover:-translate-y-1"><i
                            data-feather="instagram" class="w-5 h-5"></i></a>
                    <a href="https://in.linkedin.com/company/scodclinic" aria-label="LinkedIn"
                        class="w-10 h-10 bg-slate-800 rounded-full flex items-center justify-center text-slate-400 hover:bg-scod hover:text-white transition-all duration-300 transform hover:-translate-y-1"><i
                            data-feather="linkedin" class="w-5 h-5"></i></a>
                </div>
            </div>
            <!-- Quick Links -->
            <div class="lg:col-span-3">
                <h3 class="text-white font-bold text-lg mb-6 relative inline-block">Quick Links<span
                        class="absolute -bottom-2 left-0 w-8 h-1 bg-scod rounded-full"></span></h3>
                <ul class="space-y-3">
                    <li><a href="<?php echo $path_prefix; ?>index.php"
                            class="text-slate-400 hover:text-scod transition-colors flex items-center group text-sm"><i
                                data-feather="arrow-right"
                                class="w-3 h-3 mr-2 opacity-0 -ml-5 group-hover:opacity-100 group-hover:ml-0 transition-all duration-300"></i>Home</a>
                    </li>
                    <li><a href="<?php echo $path_prefix; ?>about-clinic.php"
                            class="text-slate-400 hover:text-scod transition-colors flex items-center group text-sm"><i
                                data-feather="arrow-right"
                                class="w-3 h-3 mr-2 opacity-0 -ml-5 group-hover:opacity-100 group-hover:ml-0 transition-all duration-300"></i>About
                            SCOD Clinic</a></li>
                    <li><a href="<?php echo $path_prefix; ?>services/index.php"
                            class="text-slate-400 hover:text-scod transition-colors flex items-center group text-sm"><i
                                data-feather="arrow-right"
                                class="w-3 h-3 mr-2 opacity-0 -ml-5 group-hover:opacity-100 group-hover:ml-0 transition-all duration-300"></i>Treatments</a>
                    </li>
                    <li><a href="<?php echo $path_prefix; ?>feel-great-system.php"
                            class="text-slate-400 hover:text-scod transition-colors flex items-center group text-sm"><i
                                data-feather="arrow-right"
                                class="w-3 h-3 mr-2 opacity-0 -ml-5 group-hover:opacity-100 group-hover:ml-0 transition-all duration-300"></i>Plant-Based
                            Nutrition (FGS)</a></li>
                    <li><a href="<?php echo $path_prefix; ?>patient-journey.php"
                            class="text-slate-400 hover:text-scod transition-colors flex items-center group text-sm"><i
                                data-feather="arrow-right"
                                class="w-3 h-3 mr-2 opacity-0 -ml-5 group-hover:opacity-100 group-hover:ml-0 transition-all duration-300"></i>Patient
                            Journey</a></li>
                    <li><a href="<?php echo $path_prefix; ?>resources.php"
                            class="text-slate-400 hover:text-scod transition-colors flex items-center group text-sm"><i
                                data-feather="arrow-right"
                                class="w-3 h-3 mr-2 opacity-0 -ml-5 group-hover:opacity-100 group-hover:ml-0 transition-all duration-300"></i>Resources
                            & FAQ</a></li>
                    <li><a href="<?php echo $path_prefix; ?>testimonials.php"
                            class="text-slate-400 hover:text-scod transition-colors flex items-center group text-sm"><i
                                data-feather="arrow-right"
                                class="w-3 h-3 mr-2 opacity-0 -ml-5 group-hover:opacity-100 group-hover:ml-0 transition-all duration-300"></i>Success
                            Stories</a></li>
                    <li><a href="<?php echo $path_prefix; ?>contact.php"
                            class="text-slate-400 hover:text-scod transition-colors flex items-center group text-sm"><i
                                data-feather="arrow-right"
                                class="w-3 h-3 mr-2 opacity-0 -ml-5 group-hover:opacity-100 group-hover:ml-0 transition-all duration-300"></i>Contact
                            Us</a></li>
                </ul>
            </div>
            <!-- Locations -->
            <div class="lg:col-span-4">
                <h3 class="text-white font-bold text-lg mb-6 relative inline-block">Our Locations<span
                        class="absolute -bottom-2 left-0 w-8 h-1 bg-scod rounded-full"></span></h3>
                <div class="space-y-6">
                    <!-- Vasant Vihar Location -->
                    <div class="group">
                        <div class="flex items-start space-x-3 mb-3"><i data-feather="map-pin"
                                class="w-5 h-5 text-scod mt-1 shrink-0"></i>
                            <div class="text-sm">
                                <p class="text-white font-bold mb-1">Vasant Vihar</p>
                                <p class="text-slate-400">87, Paschimi Marg, Block D, Vasant Vihar, New Delhi, 110057
                                </p>
                            </div>
                        </div>
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.3344885842643!2d77.15318687549895!3d28.58871418606939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1dbe87c8c90b%3A0x7b6c7c7c7c7c7c7c!2s87%2C%20Paschimi%20Marg%2C%20Block%20D%2C%20Vasant%20Vihar%2C%20New%20Delhi%2C%20Delhi%20110057!5e0!3m2!1sen!2sin!4v1234567890123!5m2!1sen!2sin"
                            target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center space-x-2 text-sm font-semibold text-scod hover:text-blue-400 transition-colors ml-8">
                            <i data-feather="map-pin" class="w-4 h-4"></i>
                            <span>Get Directions</span>
                            <i data-feather="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>

                    <!-- Karol Bagh Location -->
                    <div class="group">
                        <div class="flex items-start space-x-3 mb-3"><i data-feather="map-pin"
                                class="w-5 h-5 text-scod mt-1 shrink-0"></i>
                            <div class="text-sm">
                                <p class="text-white font-bold mb-1">Karol Bagh</p>
                                <p class="text-slate-400">JMH Prime Hospital, New Delhi</p>
                            </div>
                        </div>
                        <a href="https://maps.app.goo.gl/3NFgtZRi4VpqgMns9" target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center space-x-2 text-sm font-semibold text-scod hover:text-blue-400 transition-colors ml-8">
                            <i data-feather="map-pin" class="w-4 h-4"></i>
                            <span>Get Directions</span>
                            <i data-feather="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>

                    <div class="flex flex-col space-y-2 border-t border-slate-800 pt-4">
                        <div class="flex items-center space-x-3 group"><i data-feather="phone"
                                class="w-5 h-5 text-scod shrink-0"></i><a href="tel:+918130130489"
                                class="text-slate-400 hover:text-white transition-colors">+91 8130130489</a></div>
                        <div class="flex items-center space-x-3 group"><i data-feather="mail"
                                class="w-5 h-5 text-scod shrink-0"></i><a href="mailto:info@scodclinic.com"
                                class="text-slate-400 hover:text-white transition-colors">info@scodclinic.com</a></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Map Section - Two Locations -->
        <div class="mb-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Vasant Vihar Map -->
                <div class="rounded-2xl overflow-hidden shadow-2xl border border-slate-800">
                    <div class="bg-slate-800 px-4 py-3 border-b border-slate-700">
                        <h4 class="text-white font-bold text-sm flex items-center">
                            <i data-feather="map-pin" class="w-4 h-4 mr-2 text-scod"></i>
                            Vasant Vihar Clinic
                        </h4>
                    </div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.3344885842643!2d77.15318687549895!3d28.58871418606939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1dbe87c8c90b%3A0x7b6c7c7c7c7c7c7c!2s87%2C%20Paschimi%20Marg%2C%20Block%20D%2C%20Vasant%20Vihar%2C%20New%20Delhi%2C%20Delhi%20110057!5e0!3m2!1sen!2sin!4v1234567890123!5m2!1sen!2sin"
                        width="100%"
                        height="300"
                        style="border: 0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        title="SCOD Vasant Vihar Location"
                        class="w-full">
                    </iframe>
                </div>

                <!-- Karol Bagh Map -->
                <div class="rounded-2xl overflow-hidden shadow-2xl border border-slate-800">
                    <div class="bg-slate-800 px-4 py-3 border-b border-slate-700">
                        <h4 class="text-white font-bold text-sm flex items-center">
                            <i data-feather="map-pin" class="w-4 h-4 mr-2 text-scod"></i>
                            Karol Bagh Clinic
                        </h4>
                    </div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.0449344564686!2d77.1935835!3d28.6583732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d03b0ae47efd7%3A0xab60af21234f2b78!2sDr%20Arush%20Sabharwal%20-%20Best%20Bariatric%20Surgeon%20in%20Karol%20Bagh%20Delhi!5e0!3m2!1sen!2sin!4v1767703358049!5m2!1sen!2sin"
                        width="100%"
                        height="300"
                        style="border: 0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        title="SCOD Karol Bagh Location"
                        class="w-full">
                    </iframe>
                </div>
            </div>
        </div>

        <!-- Disclaimer -->
        <div class="py-6 border-t border-slate-800 text-[11px] text-slate-500 leading-relaxed italic">
            <p><strong>FGS Disclaimer:</strong> The Feel Great System is a nutrition-based metabolic support program. It
                is
                not intended to diagnose, treat, cure, or prevent any disease. Results may vary between individuals. All
                medication changes must be made under the supervision of a qualified professional.</p>
        </div>
        <!-- Bottom -->
        <div class="pt-8 border-t border-slate-800 flex flex-col md:flex-row justify-between items-center gap-4">
            <div class="text-slate-500 text-sm text-center md:text-left">© 2025 SCOD Medical Center. All rights
                reserved.
            </div>
            <div class="text-slate-500 text-sm md:text-center">Made and Design by <a
                    href="https://brandingpioneers.com" target="_blank" rel="noopener noreferrer"
                    class="hover:text-white transition-colors">Branding Pioneers</a>
            </div>
            <div class="flex flex-wrap justify-center gap-6 text-sm"><a
                    href="<?php echo $path_prefix; ?>privacy-policy.php"
                    class="text-slate-500 hover:text-white transition-colors cursor-pointer">Privacy Policy</a></div>
        </div>
    </div>
</footer>

<!-- Modals -->
<!-- Video Modal -->
<div id="video-modal" class="video-modal">
    <div
        class="relative w-full max-w-5xl aspect-video bg-black rounded-2xl overflow-hidden shadow-2xl border border-gray-800">
        <button id="video-modal-close"
            class="absolute top-4 right-4 z-10 text-white/70 hover:text-white bg-black/50 rounded-full p-2 hover:bg-black/80 transition-all"><i
                data-feather="x" class="w-6 h-6"></i></button>
        <iframe id="video-iframe" width="100%" height="100%" src="" title="Video" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen class="w-full h-full"></iframe>
    </div>
</div>

<!-- Image Modal -->
<div id="image-modal" class="image-modal">
    <div class="relative max-w-6xl w-full h-full flex items-center justify-center">
        <button id="image-modal-close"
            class="absolute top-4 right-4 z-10 bg-black/50 text-white p-2 rounded-full hover:bg-white hover:text-black transition-all duration-300"><i
                data-feather="x" class="w-6 h-6"></i></button>
        <img id="image-modal-img" src="" alt="Award"
            class="max-w-full max-h-[90vh] object-contain rounded-lg shadow-2xl">
    </div>
</div>

<!-- Scripts -->
<script src="<?php echo $path_prefix; ?>js/main.js"></script>
<script>
feather.replace();
</script>
