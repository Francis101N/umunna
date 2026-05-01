<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Umunna Development</title>

    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="assets/images/favicon.jpeg">
    <link rel="apple-touch-icon" href="assets/images/favicon.jpeg">
    <meta name="theme-color" content="#134026">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom Colors -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        umunna: '#134026',
                    }
                }
            }
        }
    </script>

    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
        body {
            overflow-x: hidden;
        }

        @keyframes zoomInOut {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.08);
            }

            100% {
                transform: scale(1);
            }
        }

        /* Apply animation */
        .hero-zoom {
            animation: zoomInOut 20s ease-in-out infinite;
        }

        @keyframes softBounce {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-12px);
            }
        }

        .hero-bounce {
            animation: softBounce 5s ease-in-out infinite;
        }
    </style>
</head>

<body class="bg-white text-black">
    <!-- HERO SECTION (INCLUDES NAVBAR INSIDE) -->
    <section class="relative min-h-screen flex items-center justify-center text-center px-6 md:px-20">

        <!-- Background Image -->
        <div class="absolute inset-0">
            <!-- Image 1 -->
            <img id="bg1" src="assets/images/community_outreach/dji_fly_20241224_141550_0085_1735067140989_video.mp4.00_00_14_24.Still002.bmp"
                class="w-full h-full object-cover absolute inset-0 transition-opacity duration-1000 opacity-100 hero-zoom">

            <!-- Image 2 -->
            <img id="bg2" src="assets/images/medical_outreach/IMG_20251119_073803_607.jpg"
                class="w-full h-full object-cover absolute inset-0 transition-opacity duration-1000 opacity-0 hero-zoom">

            <!-- Overlay -->
            <div class="absolute inset-0 bg-black/60"></div>
        </div>

        <!-- NAVBAR -->
        <header class="absolute top-0 left-0 w-full flex justify-between items-center px-6 md:px-16 py-6 z-50">

            <!-- LOGO -->
            <div class="flex items-center space-x-3">
                <img src="assets/images/umunna-logo.jpeg"
                    class="h-14 md:h-20 w-auto object-contain">
            </div>

            <!-- DESKTOP MENU -->
            <nav class="hidden md:flex space-x-8 text-white font-medium">
                <a href="home" class="hover:text-umunna transition">Home</a>
                <a href="about" class="hover:text-umunna transition">About</a>
                <a href="projects" class="hover:text-umunna transition">Projects</a>
                <a href="news" class="hover:text-umunna transition">News</a>
                <a href="contact" class="hover:text-umunna transition">Contact</a>
            </nav>

            <!-- MOBILE TOGGLE BUTTON -->
            <button id="menuBtn"
                class="md:hidden text-white text-3xl z-50">
                ☰
            </button>

        </header>

        <!-- MOBILE MENU OVERLAY -->
        <div id="mobileMenu"
            class="fixed inset-0 bg-black/95 flex flex-col items-center justify-center space-y-8 text-white text-xl font-semibold hidden z-40">

            <a href="home" class="hover:text-umunna transition">Home</a>
            <a href="about" class="hover:text-umunna transition">About</a>
            <a href="projects" class="hover:text-umunna transition">Projects</a>
            <a href="news" class="hover:text-umunna transition">News</a>
            <a href="contact" class="hover:text-umunna transition">Contact</a>

        </div>

        <!-- HERO CONTENT -->
        <div class="relative z-10 hero-bounce">

            <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight">
                Umunna Development
            </h1>

            <p class="text-gray-200 max-w-2xl mx-auto text-lg md:text-xl mb-8">
                Care. Empower. Transform. Driving sustainable community impact.
            </p>

            <div class="flex flex-col md:flex-row justify-center gap-4">
                <a href="join"
                    class="bg-umunna text-white px-6 py-3 rounded-md font-semibold hover:scale-105 transition">
                    Join the Community
                </a>

                <a href="projects"
                    class="border-2 border-white text-white px-6 py-3 rounded-md font-semibold hover:bg-white hover:text-black transition">
                    View Projects
                </a>
            </div>

        </div>

    </section>

    <!-- TOGGLE SCRIPT -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const menuBtn = document.getElementById("menuBtn");
            const mobileMenu = document.getElementById("mobileMenu");

            let isOpen = false;

            const openMenu = () => {
                mobileMenu.classList.remove("hidden");
                menuBtn.textContent = "✕";
                isOpen = true;
                document.body.classList.add("overflow-hidden"); // prevent scroll
            };

            const closeMenu = () => {
                mobileMenu.classList.add("hidden");
                menuBtn.textContent = "☰";
                isOpen = false;
                document.body.classList.remove("overflow-hidden");
            };

            menuBtn.addEventListener("click", () => {
                isOpen ? closeMenu() : openMenu();
            });

            // Close menu when clicking a link
            document.querySelectorAll("#mobileMenu a").forEach(link => {
                link.addEventListener("click", closeMenu);
            });

            // Close menu when clicking outside (optional but premium)
            mobileMenu.addEventListener("click", (e) => {
                if (e.target === mobileMenu) {
                    closeMenu();
                }
            });

            // Close menu on window resize (desktop switch fix)
            window.addEventListener("resize", () => {
                if (window.innerWidth >= 768 && isOpen) {
                    closeMenu();
                }
            });
        });

        const bg1 = document.getElementById("bg1");
        const bg2 = document.getElementById("bg2");

        let showFirst = true;

        setInterval(() => {
            if (showFirst) {
                bg1.classList.remove("opacity-100");
                bg1.classList.add("opacity-0");

                bg2.classList.remove("opacity-0");
                bg2.classList.add("opacity-100");
            } else {
                bg1.classList.remove("opacity-0");
                bg1.classList.add("opacity-100");

                bg2.classList.remove("opacity-100");
                bg2.classList.add("opacity-0");
            }

            showFirst = !showFirst;
        }, 5000); // 5 seconds
    </script>

    <!-- ABOUT UMUNNA SECTION -->
    <section class="bg-gray-50 py-24 px-6 md:px-20">

        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

            <!-- LEFT IMAGE -->
            <div data-aos="fade-right">
                <img src="assets/images/community_outreach/WhatsApp Image 2026-01-28 at 2.56.46 PM.jpeg"
                    alt="About Umunna"
                    class="rounded-2xl shadow-lg w-full h-[450px] object-cover">
            </div>

            <!-- RIGHT CONTENT -->
            <div data-aos="fade-left">

                <h2 class="text-3xl md:text-4xl font-bold text-umunna mb-6">
                    About Umunna Development
                </h2>

                <p class="text-gray-700 mb-5 leading-relaxed">
                    Umunna Development is a community-driven initiative focused on fostering unity,
                    promoting sustainable development, and improving the quality of life within our community.
                </p>

                <p class="text-gray-700 mb-8 leading-relaxed">
                    We believe that real progress happens when people come together with a shared vision,
                    shared responsibility, and collective action toward long-term growth.
                </p>

                <!-- MISSION + VISION BOXES -->
                <div class="grid md:grid-cols-2 gap-10">

                    <!-- MISSION CARD -->
                    <div class="relative bg-white rounded-2xl shadow-lg overflow-hidden group transition duration-300 hover:ring-2 hover:ring-umunna hover:-translate-y-2">
                        <!-- Image -->
                        <div class="h-72 overflow-hidden">
                            <img src="assets/images/chairman7.jpeg"
                                class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        </div>

                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-umunna/90 via-umunna/40 to-transparent"></div>

                        <!-- Content -->
                        <div class="absolute bottom-0 p-6 text-white">

                            <p class="text-sm italic mb-3">
                                “To unite the community and drive sustainable development through collaboration,
                                transparency, and impactful projects.”
                            </p>

                            <h3 class="font-semibold text-lg">Managing Director</h3>
                            <h6 class="font-semibold text-red-600">Iyk Edwin Anyadigibe</h6>
                            <span class="text-xs text-gray-300">Mission Statement</span>

                        </div>

                    </div>

                    <!-- VISION CARD -->
                    <div class="relative bg-white rounded-2xl shadow-lg overflow-hidden group transition duration-300 hover:ring-2 hover:ring-umunna hover:-translate-y-2">

                        <!-- Image -->
                        <div class="h-72 overflow-hidden">
                            <img src="assets/images/reverend.jpeg"
                                class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        </div>

                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-umunna/90 via-umunna/40 to-transparent"></div>

                        <!-- Content -->
                        <div class="absolute bottom-0 p-6 text-white">

                            <p class="text-sm italic mb-3">
                                “To build a self-sustaining, progressive, and united community where everyone
                                has access to growth and opportunity.”
                            </p>

                            <h3 class="font-semibold text-lg">Development Lead</h3>
                            <h6 class="font-semibold text-red-600">Daniel Ubeh</h6>
                            <span class="text-xs text-gray-300">Vision Statement</span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- PROJECTS SECTION -->
    <section class="bg-white py-24 px-6 md:px-20">

        <div class="max-w-6xl mx-auto text-center mb-12">

            <h2 class="text-3xl md:text-4xl font-bold text-umunna mb-4" data-aos="fade-up">
                Community Projects
            </h2>

            <p class="text-gray-600 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                A showcase of ongoing and completed initiatives driving real impact in Umunna Development.
            </p>

        </div>

        <!-- PROJECT GRID -->
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">

            <!-- Project 1 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition duration-300"
                data-aos="zoom-in">

                <img src="assets/images/Children_Day/DSC_2438.JPG"
                    class="h-52 w-full object-cover"
                    alt="Project 1">

                <div class="p-6 text-left">

                    <span class="text-xs font-semibold text-white bg-yellow-600 px-3 py-1 rounded-full">
                        Ongoing
                    </span>

                    <h3 class="text-lg font-bold text-black mt-4 mb-2">
                        Community Outreach
                    </h3>

                    <p class="text-sm text-gray-600">
                        Strengthening connections and empowering every voice within our community.
                    </p>

                </div>

            </div>

            <!-- Project 2 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition duration-300"
                data-aos="zoom-in" data-aos-delay="150">

                <img src="assets/images/community_outreach/WhatsApp Image 2026-01-28 at 3.01.14 PM.jpeg"
                    class="h-52 w-full object-cover"
                    alt="Project 2">

                <div class="p-6 text-left">

                    <span class="text-xs font-semibold text-white bg-umunna px-3 py-1 rounded-full">
                        Completed
                    </span>

                    <h3 class="text-lg font-bold text-black mt-4 mb-2">
                        Children Day Outreach
                    </h3>

                    <p class="text-sm text-gray-600">
                        Celebrating, inspiring, and nurturing the future of our community.
                    </p>

                </div>

            </div>

            <!-- Project 3 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition duration-300"
                data-aos="zoom-in" data-aos-delay="300">

                <img src="assets/images/medical_outreach/IMG_20251114_092656_786.jpg"
                    class="h-52 w-full object-cover"
                    alt="Project 3">

                <div class="p-6 text-left">

                    <span class="text-xs font-semibold text-white bg-umunna px-3 py-1 rounded-full">
                        Completed
                    </span>

                    <h3 class="text-lg font-bold text-black mt-4 mb-2">
                        Medical Outreach
                    </h3>

                    <p class="text-sm text-gray-600">
                        Delivering accessible healthcare and promoting well-being for all.
                    </p>

                </div>

            </div>

        </div>

        <!-- VIEW MORE BUTTON -->
        <div class="text-center mt-12" data-aos="fade-up">

            <a href="projects"
                class="inline-block bg-umunna text-white px-8 py-3 rounded-md font-semibold hover:scale-105 transition duration-300">
                View All Projects
            </a>

        </div>

    </section>

    <!-- CALL TO ACTION SECTION -->
    <section class="relative py-24 px-6 md:px-20 bg-umunna">

        <!-- Background subtle pattern -->
        <div class="absolute inset-0 opacity-10 bg-black"></div>

        <div class="relative max-w-5xl mx-auto text-center text-white">

            <!-- Heading -->
            <h2 class="text-3xl md:text-4xl font-bold mb-6" data-aos="fade-up">
                Be Part of the Change
            </h2>

            <p class="text-gray-100 max-w-2xl mx-auto mb-10 text-lg" data-aos="fade-up" data-aos-delay="100">
                Join Umunna Development today and contribute to building a stronger, more united,
                and progressive community for everyone.
            </p>

            <!-- CTA Buttons -->
            <div class="flex flex-col md:flex-row justify-center gap-5" data-aos="zoom-in">

                <a href="join"
                    class="bg-white text-umunna px-8 py-3 rounded-md font-semibold hover:scale-105 transition duration-300">
                    Join the Community
                </a>

                <a href="contact"
                    class="border-2 border-white text-white px-8 py-3 rounded-md font-semibold hover:bg-white hover:text-umunna transition duration-300">
                    Contact Us
                </a>

            </div>

        </div>

    </section>

    <!-- HOW IT WORKS SECTION -->
    <section class="bg-white py-24 px-6 md:px-20">

        <div class="max-w-6xl mx-auto text-center mb-14">

            <h2 class="text-3xl md:text-4xl font-bold text-umunna mb-4" data-aos="fade-up">
                How Umunna Development Works
            </h2>

            <p class="text-gray-600 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                A transparent structure that guides how ideas become real community projects.
            </p>

        </div>

        <!-- STEPS -->
        <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10">

            <!-- Step 1 -->
            <div class="text-center p-6 rounded-xl hover:shadow-lg transition duration-300"
                data-aos="zoom-in">

                <div class="w-14 h-14 mx-auto bg-umunna text-white rounded-full flex items-center justify-center text-lg font-bold mb-4">
                    1
                </div>

                <h3 class="font-semibold text-lg mb-2">Community Proposal</h3>
                <p class="text-gray-600 text-sm">
                    Members submit ideas or needs that can improve the community.
                </p>

            </div>

            <!-- Step 2 -->
            <div class="text-center p-6 rounded-xl hover:shadow-lg transition duration-300"
                data-aos="zoom-in" data-aos-delay="150">

                <div class="w-14 h-14 mx-auto bg-umunna text-white rounded-full flex items-center justify-center text-lg font-bold mb-4">
                    2
                </div>

                <h3 class="font-semibold text-lg mb-2">Review & Approval</h3>
                <p class="text-gray-600 text-sm">
                    Leadership evaluates proposals based on impact and feasibility.
                </p>

            </div>

            <!-- Step 3 -->
            <div class="text-center p-6 rounded-xl hover:shadow-lg transition duration-300"
                data-aos="zoom-in" data-aos-delay="300">

                <div class="w-14 h-14 mx-auto bg-umunna text-white rounded-full flex items-center justify-center text-lg font-bold mb-4">
                    3
                </div>

                <h3 class="font-semibold text-lg mb-2">Execution & Impact</h3>
                <p class="text-gray-600 text-sm">
                    Approved projects are implemented and tracked for community benefit.
                </p>

            </div>

        </div>

    </section>

    <!-- LEADERSHIP SECTION -->
    <section class="bg-white py-24 px-6 md:px-20">

        <div class="max-w-6xl mx-auto text-center mb-12">

            <h2 class="text-3xl md:text-4xl font-bold text-umunna mb-4" data-aos="fade-up">
                Leadership & Executives
            </h2>

            <p class="text-gray-600 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                The dedicated individuals guiding the vision, governance, and development of Umunna Community.
            </p>

        </div>

        <!-- LEADERS GRID -->
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10">

            <!-- Leader 1 -->
            <div class="bg-gray-50 rounded-xl shadow-sm hover:shadow-xl transition duration-300 text-center p-8"
                data-aos="zoom-in">

                <img src="assets/images/chairman16.jpeg"
                    class="w-28 h-28 mx-auto rounded-full object-cover border-4 border-umunna"
                    alt="Leader 1">

                <h3 class="text-lg font-bold text-black mt-5">Chairman</h3>
                <p class="text-umunna font-medium">Iyk-Edwin Anyadigibe</p>
                <p class="text-sm text-gray-600 mt-2">
                    Oversees community development strategy and decision-making.
                </p>

            </div>

            <!-- Leader 2 -->
            <div class="bg-gray-50 rounded-xl shadow-sm hover:shadow-xl transition duration-300 text-center p-8"
                data-aos="zoom-in" data-aos-delay="150">

                <img src="assets/images/boss-woman.jpeg"
                    class="w-28 h-28 mx-auto rounded-full object-cover border-4 border-black"
                    alt="Leader 2">

                <h3 class="text-lg font-bold text-black mt-5">Vice Chairperson</h3>
                <p class="text-umunna font-medium">Iyk- Edwin Ifeoma</p>
                <p class="text-sm text-gray-600 mt-2">
                    Assists in leadership, coordination, communication, and documentation across the organization.
                </p>

            </div>

            <!-- Leader 3 -->
            <div class="bg-gray-50 rounded-xl shadow-sm hover:shadow-xl transition duration-300 text-center p-8"
                data-aos="zoom-in" data-aos-delay="300">

                <img src="assets/images/daniel.jpg"
                    class="w-28 h-28 mx-auto rounded-full object-cover border-4 border-umunna"
                    alt="Leader 3">

                <h3 class="text-lg font-bold text-black mt-5">Development Lead</h3>
                <p class="text-umunna font-medium">Daniel Ubeh</p>
                <p class="text-sm text-gray-600 mt-2">
                    Manages execution and monitoring of community projects.
                </p>

            </div>

        </div>

    </section>

    <!-- TESTIMONIALS SECTION -->
    <section class="bg-gray-50 py-24 px-6 md:px-20 overflow-hidden">

        <div class="max-w-6xl mx-auto text-center mb-12">

            <h2 class="text-3xl md:text-4xl font-bold text-umunna mb-4" data-aos="fade-up">
                What People Are Saying
            </h2>

            <p class="text-gray-600 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Voices from community members reflecting the impact of Umunna Development.
            </p>

        </div>

        <!-- SLIDER WRAPPER -->
        <div class="relative max-w-6xl mx-auto overflow-hidden">

            <!-- TRACK -->
            <div id="track"
                class="flex transition-transform duration-700 ease-in-out">

                <!-- 1 -->
                <div class="min-w-full md:min-w-[50%] lg:min-w-[33.33%] p-4">
                    <div class="bg-white p-8 rounded-xl shadow-sm h-full">
                        <p class="text-gray-600 text-sm mb-6">
                            “Umunna Development has brought unity and real progress to our community.”
                        </p>
                        <h4 class="font-semibold">Community Member</h4>
                    </div>
                </div>

                <!-- 2 -->
                <div class="min-w-full md:min-w-[50%] lg:min-w-[33.33%] p-4">
                    <div class="bg-white p-8 rounded-xl shadow-sm h-full">
                        <p class="text-gray-600 text-sm mb-6">
                            “We are finally seeing structured development that works.”
                        </p>
                        <h4 class="font-semibold">Youth Member</h4>
                    </div>
                </div>

                <!-- 3 -->
                <div class="min-w-full md:min-w-[50%] lg:min-w-[33.33%] p-4">
                    <div class="bg-white p-8 rounded-xl shadow-sm h-full">
                        <p class="text-gray-600 text-sm mb-6">
                            “Transparency and leadership here is impressive.”
                        </p>
                        <h4 class="font-semibold">Stakeholder</h4>
                    </div>
                </div>

                <!-- 4 -->
                <div class="min-w-full md:min-w-[50%] lg:min-w-[33.33%] p-4">
                    <div class="bg-white p-8 rounded-xl shadow-sm h-full">
                        <p class="text-gray-600 text-sm mb-6">
                            “The projects are real and visible in the community.”
                        </p>
                        <h4 class="font-semibold">Resident</h4>
                    </div>
                </div>

                <!-- 5 -->
                <div class="min-w-full md:min-w-[50%] lg:min-w-[33.33%] p-4">
                    <div class="bg-white p-8 rounded-xl shadow-sm h-full">
                        <p class="text-gray-600 text-sm mb-6">
                            “Youth empowerment programs are changing lives.”
                        </p>
                        <h4 class="font-semibold">Youth Leader</h4>
                    </div>
                </div>

                <!-- 6 -->
                <div class="min-w-full md:min-w-[50%] lg:min-w-[33.33%] p-4">
                    <div class="bg-white p-8 rounded-xl shadow-sm h-full">
                        <p class="text-gray-600 text-sm mb-6">
                            “This is the most organized community effort we’ve seen.”
                        </p>
                        <h4 class="font-semibold">Elder</h4>
                    </div>
                </div>

                <!-- 7 -->
                <div class="min-w-full md:min-w-[50%] lg:min-w-[33.33%] p-4">
                    <div class="bg-white p-8 rounded-xl shadow-sm h-full">
                        <p class="text-gray-600 text-sm mb-6">
                            “Communication within the community has improved greatly.”
                        </p>
                        <h4 class="font-semibold">Member</h4>
                    </div>
                </div>

                <!-- 8 -->
                <div class="min-w-full md:min-w-[50%] lg:min-w-[33.33%] p-4">
                    <div class="bg-white p-8 rounded-xl shadow-sm h-full">
                        <p class="text-gray-600 text-sm mb-6">
                            “We now feel included in development decisions.”
                        </p>
                        <h4 class="font-semibold">Contributor</h4>
                    </div>
                </div>

                <!-- 9 -->
                <div class="min-w-full md:min-w-[50%] lg:min-w-[33.33%] p-4">
                    <div class="bg-white p-8 rounded-xl shadow-sm h-full">
                        <p class="text-gray-600 text-sm mb-6">
                            “Umunna Development is truly shaping our future.”
                        </p>
                        <h4 class="font-semibold">Resident</h4>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- INFINITE SLIDER SCRIPT -->
    <script>
        const track = document.getElementById("track");
        const cards = track.children;
        let index = 0;

        function getStep() {
            return cards[0].offsetWidth;
        }

        function moveSlide() {
            index++;

            // smooth reset logic (infinite loop)
            if (index >= cards.length) {
                track.style.transition = "none";
                index = 0;
                track.style.transform = `translateX(0px)`;

                // force reflow to restart animation smoothly
                setTimeout(() => {
                    track.style.transition = "transform 700ms ease-in-out";
                }, 50);

            } else {
                track.style.transform = `translateX(-${index * getStep()}px)`;
            }
        }

        setInterval(moveSlide, 3000);
    </script>

    <!-- LIVE STATS COUNTER -->
    <section class="bg-white py-24 px-6 md:px-20">

        <div class="max-w-6xl mx-auto text-center mb-14">

            <h2 class="text-3xl md:text-4xl font-bold text-umunna mb-4" data-aos="fade-up">
                Our Impact in Numbers
            </h2>

            <p class="text-gray-600 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Real progress measured through consistent community development efforts.
            </p>

        </div>

        <!-- STATS GRID -->
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8 text-center">

            <!-- STAT 1 -->
            <div class="p-8 bg-gray-50 rounded-xl shadow-sm" data-aos="zoom-in">
                <h3 class="text-4xl font-bold text-umunna counter" data-target="500">0</h3>
                <p class="text-gray-600 mt-2">Community Members</p>
            </div>

            <!-- STAT 2 -->
            <div class="p-8 bg-gray-50 rounded-xl shadow-sm" data-aos="zoom-in" data-aos-delay="150">
                <h3 class="text-4xl font-bold text-umunna counter" data-target="20">0</h3>
                <p class="text-gray-600 mt-2">Completed Projects</p>
            </div>

            <!-- STAT 3 -->
            <div class="p-8 bg-gray-50 rounded-xl shadow-sm" data-aos="zoom-in" data-aos-delay="300">
                <h3 class="text-4xl font-bold text-umunna counter" data-target="10">0=</h3>
                <p class="text-gray-600 mt-2">Years Active</p>
            </div>

            <!-- STAT 4 -->
            <div class="p-8 bg-gray-50 rounded-xl shadow-sm" data-aos="zoom-in" data-aos-delay="450">
                <h3 class="text-4xl font-bold text-umunna counter" data-target="100">0</h3>
                <p class="text-gray-600 mt-2">% Community Engagement</p>
            </div>

        </div>

    </section>

    <script>
        const counters = document.querySelectorAll('.counter');

        const animateCounter = (counter) => {
            const target = parseInt(counter.getAttribute('data-target'));
            let current = 0;

            const duration = 10000; // 10 seconds
            const startTime = Date.now();

            const interval = setInterval(() => {

                const elapsed = Date.now() - startTime;

                // safe random step (prevents over-jumping small values)
                let step;

                if (target <= 20) {
                    // small numbers (like years active)
                    step = 1;
                } else if (target <= 100) {
                    step = Math.floor(Math.random() * 3) + 1;
                } else {
                    step = Math.floor(Math.random() * (target / 20)) + 1;
                }

                current += step;

                // prevent overshooting
                if (current >= target) {
                    current = target;
                }

                counter.innerText = current;

                // stop after 10 seconds
                if (elapsed >= duration || current >= target) {
                    clearInterval(interval);
                    counter.innerText = target;
                }

            }, 80);
        };

        // Trigger on scroll into view
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {

                    counters.forEach(counter => {
                        animateCounter(counter);
                    });

                }
            });
        }, {
            threshold: 0.5
        });

        counters.forEach(counter => observer.observe(counter));
    </script>

    <?php include('inc/aside.php'); ?>

    <?php include('inc/footer.php'); ?>

    <!-- AOS Script -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>