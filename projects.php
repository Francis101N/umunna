<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects | Umunna Foundation</title>

    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="assets/images/favicon.jpeg">
    <link rel="apple-touch-icon" href="assets/images/favicon.jpeg">
    <meta name="theme-color" content="#134026">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <script src="https://cdn.tailwindcss.com"></script>

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
</head>

<body class="bg-white text-black">

    <?php include('inc/header.php'); ?>

    <!-- HERO -->
    <section class="relative h-[55vh] flex items-center justify-center text-center">

        <div class="absolute inset-0">
            <img src="assets/images/medical_outreach/IMG_20251119_073803_607 copy.jpg"
                class="w-full h-full object-cover">

            <div class="absolute inset-0 bg-black/60"></div>
        </div>

        <div class="relative z-10 text-white">
            <h1 class="text-4xl md:text-5xl font-bold">Our Projects</h1>
            <p class="mt-3 text-gray-200 max-w-xl mx-auto">
                Driving real development through structured community initiatives.
            </p>
        </div>

    </section>

    <!-- PROJECT FILTER HEADER -->
    <section class="py-10 px-6 md:px-20">

        <div class="max-w-6xl mx-auto flex flex-wrap gap-3 justify-center">

            <button class="filter-btn px-4 py-2 rounded-full bg-umunna text-white text-sm" data-filter="all">All</button>
            <button class="filter-btn px-4 py-2 rounded-full bg-gray-100 text-gray-700 text-sm" data-filter="Infrastructure">Community Outreach</button>
            <button class="filter-btn px-4 py-2 rounded-full bg-gray-100 text-gray-700 text-sm" data-filter="Education">Medical Outreach</button>
            <button class="filter-btn px-4 py-2 rounded-full bg-gray-100 text-gray-700 text-sm" data-filter="Community">Children Day </button>

        </div>

    </section>

    <!-- PROJECT GRID -->
    <section class="pb-20 px-6 md:px-20">

        <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8">

            <!-- PROJECT 1 -->
            <div class="project-card rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition" data-category="Infrastructure">
                <img src="assets/images/community_outreach/dji_fly_20241224_141550_0085_1735067140989_video.mp4.00_00_14_24.Still002.bmp" class="h-52 w-full object-cover">
                <div class="p-5">
                    <span class="text-xs bg-umunna text-white px-3 py-1 rounded-full">Community Outreach</span>
                    <!-- <h3 class="text-lg font-semibold mt-3">Community Road Rehabilitation</h3>
                    <p class="text-gray-600 text-sm mt-2">Restoration of key access roads.</p> -->
                </div>
            </div>

            <!-- PROJECT 2 -->
            <div class="project-card rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition" data-category="Education">
                <img src="assets/images/medical_outreach/IMG_20251113_090434_860.jpg" class="h-52 w-full object-cover">
                <div class="p-5">
                    <span class="text-xs bg-umunna text-white px-3 py-1 rounded-full">Medical Outreach</span>
                    <!-- <h3 class="text-lg font-semibold mt-3">Youth Skill Development</h3>
                    <p class="text-gray-600 text-sm mt-2">Empowering youth with skills.</p> -->
                </div>
            </div>

            <!-- PROJECT 3 -->
            <div class="project-card rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition" data-category="Community">
                <img src="assets/images/Children_Day/DSC_2477.JPG" class="h-52 w-full object-cover">
                <div class="p-5">
                    <span class="text-xs bg-umunna text-white px-3 py-1 rounded-full">Children Day </span>
                    <!-- <h3 class="text-lg font-semibold mt-3">Clean Water Initiative</h3>
                    <p class="text-gray-600 text-sm mt-2">Access to clean water.</p> -->
                </div>
            </div>

            <!-- PROJECT 4 -->
            <div class="project-card rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition" data-category="Infrastructure">
                <img src="assets/images/community_outreach/WhatsApp Image 2026-01-28 at 2.56.45 PM (1).jpeg" class="h-52 w-full object-cover">
                <div class="p-5">
                    <span class="text-xs bg-umunna text-white px-3 py-1 rounded-full">Community Outreach</span>
                    <!-- <h3 class="text-lg font-semibold mt-3">Street Lighting</h3>
                    <p class="text-gray-600 text-sm mt-2">Improving night safety.</p> -->
                </div>
            </div>

            <!-- PROJECT 5 -->
            <div class="project-card rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition" data-category="Education">
                <img src="assets/images/medical_outreach/IMG_20251114_154119_127.jpg" class="h-52 w-full object-cover">
                <div class="p-5">
                    <span class="text-xs bg-umunna text-white px-3 py-1 rounded-full">Medical Outreach</span>
                    <!-- <h3 class="text-lg font-semibold mt-3">Scholarship Program</h3>
                    <p class="text-gray-600 text-sm mt-2">Supporting students.</p> -->
                </div>
            </div>

            <!-- PROJECT 6 -->
            <div class="project-card rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition" data-category="Community">
                <img src="assets/images/Children_Day/DSC_2536.jpg" class="h-52 w-full object-cover">
                <div class="p-5">
                    <span class="text-xs bg-umunna text-white px-3 py-1 rounded-full">Children Day </span>
                    <!-- <h3 class="text-lg font-semibold mt-3">Town Hall Development</h3>
                    <p class="text-gray-600 text-sm mt-2">Central meeting space.</p> -->
                </div>
            </div>

            <!-- PROJECT 7 -->
            <div class="project-card rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition" data-category="Infrastructure">
                <img src="assets/images/community_outreach/WhatsApp Image 2026-01-28 at 2.56.46 PM.jpeg" class="h-52 w-full object-cover">
                <div class="p-5">
                    <span class="text-xs bg-umunna text-white px-3 py-1 rounded-full">Community Outreach</span>
                    <!-- <h3 class="text-lg font-semibold mt-3">Street Lighting</h3>
                    <p class="text-gray-600 text-sm mt-2">Improving night safety.</p> -->
                </div>
            </div>

            <!-- PROJECT 8 -->
            <div class="project-card rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition" data-category="Education">
                <img src="assets/images/medical_outreach/IMG_20251118_094523_057.jpg" class="h-52 w-full object-cover">
                <div class="p-5">
                    <span class="text-xs bg-umunna text-white px-3 py-1 rounded-full">Medical Outreach</span>
                    <!-- <h3 class="text-lg font-semibold mt-3">Scholarship Program</h3>
                    <p class="text-gray-600 text-sm mt-2">Supporting students.</p> -->
                </div>
            </div>

            <!-- PROJECT 9 -->
            <div class="project-card rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition" data-category="Community">
                <img src="assets/images/Children_Day/DSC_2139.JPG" class="h-52 w-full object-cover">
                <div class="p-5">
                    <span class="text-xs bg-umunna text-white px-3 py-1 rounded-full">Children Day </span>
                    <!-- <h3 class="text-lg font-semibold mt-3">Town Hall Development</h3>
                    <p class="text-gray-600 text-sm mt-2">Central meeting space.</p> -->
                </div>
            </div>

            <!-- PROJECT 10 -->
            <div class="project-card rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition" data-category="Infrastructure">
                <img src="assets/images/community_outreach/DSC_2432.jpg" class="h-52 w-full object-cover">
                <div class="p-5">
                    <span class="text-xs bg-umunna text-white px-3 py-1 rounded-full">Community Outreach</span>
                    <!-- <h3 class="text-lg font-semibold mt-3">Street Lighting</h3>
                    <p class="text-gray-600 text-sm mt-2">Improving night safety.</p> -->
                </div>
            </div>

            <!-- PROJECT 11 -->
            <div class="project-card rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition" data-category="Education">
                <img src="assets/images/medical_outreach/IMG_20251113_091808_438.jpg" class="h-52 w-full object-cover">
                <div class="p-5">
                    <span class="text-xs bg-umunna text-white px-3 py-1 rounded-full">Medical Outreach</span>
                    <!-- <h3 class="text-lg font-semibold mt-3">Scholarship Program</h3>
                    <p class="text-gray-600 text-sm mt-2">Supporting students.</p> -->
                </div>
            </div>

            <!-- PROJECT 12 -->
            <div class="project-card rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition" data-category="Community">
                <img src="assets/images/Children_Day/DSC_2083.JPG" class="h-52 w-full object-cover">
                <div class="p-5">
                    <span class="text-xs bg-umunna text-white px-3 py-1 rounded-full">Children Day </span>
                    <!-- <h3 class="text-lg font-semibold mt-3">Town Hall Development</h3>
                    <p class="text-gray-600 text-sm mt-2">Central meeting space.</p> -->
                </div>
            </div>

            <!-- PROJECT 13 -->
            <div class="project-card rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition" data-category="Infrastructure">
                <img src="assets/images/community_outreach/WhatsApp Image 2026-01-28 at 2.56.50 PM.jpeg" class="h-52 w-full object-cover">
                <div class="p-5">
                    <span class="text-xs bg-umunna text-white px-3 py-1 rounded-full">Community Outreach</span>
                    <!-- <h3 class="text-lg font-semibold mt-3">Street Lighting</h3>
                    <p class="text-gray-600 text-sm mt-2">Improving night safety.</p> -->
                </div>
            </div>

            <!-- PROJECT 14 -->
            <div class="project-card rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition" data-category="Education">
                <img src="assets/images/medical_outreach/IMG_20251114_122444_817.jpg" class="h-52 w-full object-cover">
                <div class="p-5">
                    <span class="text-xs bg-umunna text-white px-3 py-1 rounded-full">Medical Outreach</span>
                    <!-- <h3 class="text-lg font-semibold mt-3">Scholarship Program</h3>
                    <p class="text-gray-600 text-sm mt-2">Supporting students.</p> -->
                </div>
            </div>

            <!-- PROJECT 15 -->
            <div class="project-card rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition" data-category="Community">
                <img src="assets/images/Children_Day/DSC_2438.JPG" class="h-52 w-full object-cover">
                <div class="p-5">
                    <span class="text-xs bg-umunna text-white px-3 py-1 rounded-full">Children Day </span>
                    <!-- <h3 class="text-lg font-semibold mt-3">Town Hall Development</h3>
                    <p class="text-gray-600 text-sm mt-2">Central meeting space.</p> -->
                </div>
            </div>

            <!-- PROJECT 16 -->
            <div class="project-card rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition" data-category="Infrastructure">
                <img src="assets/images/community_outreach/WhatsApp Image 2026-01-28 at 2.56.55 PM (1).jpeg" class="h-52 w-full object-cover">
                <div class="p-5">
                    <span class="text-xs bg-umunna text-white px-3 py-1 rounded-full">Community Outreach</span>
                    <!-- <h3 class="text-lg font-semibold mt-3">Street Lighting</h3>
                    <p class="text-gray-600 text-sm mt-2">Improving night safety.</p> -->
                </div>
            </div>

            <!-- PROJECT 17 -->
            <div class="project-card rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition" data-category="Education">
                <img src="assets/images/medical_outreach/IMG_20251114_122202_290.jpg" class="h-52 w-full object-cover">
                <div class="p-5">
                    <span class="text-xs bg-umunna text-white px-3 py-1 rounded-full">Medical Outreach</span>
                    <!-- <h3 class="text-lg font-semibold mt-3">Scholarship Program</h3>
                    <p class="text-gray-600 text-sm mt-2">Supporting students.</p> -->
                </div>
            </div>

            <!-- PROJECT 18 -->
            <div class="project-card rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition" data-category="Community">
                <img src="assets/images/Children_Day/DSC_2855.jpg" class="h-52 w-full object-cover">
                <div class="p-5">
                    <span class="text-xs bg-umunna text-white px-3 py-1 rounded-full">Children Day </span>
                    <!-- <h3 class="text-lg font-semibold mt-3">Town Hall Development</h3>
                    <p class="text-gray-600 text-sm mt-2">Central meeting space.</p> -->
                </div>
            </div>

            <!-- PROJECT 19 -->
            <div class="project-card rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition" data-category="Infrastructure">
                <img src="assets/images/community_outreach/WhatsApp Image 2026-01-28 at 2.56.47 PM.jpeg" class="h-52 w-full object-cover">
                <div class="p-5">
                    <span class="text-xs bg-umunna text-white px-3 py-1 rounded-full">Community Outreach</span>
                    <!-- <h3 class="text-lg font-semibold mt-3">Street Lighting</h3>
                    <p class="text-gray-600 text-sm mt-2">Improving night safety.</p> -->
                </div>
            </div>

            <!-- PROJECT 20 -->
            <div class="project-card rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition" data-category="Education">
                <img src="assets/images/medical_outreach/IMG_20251114_092236_753.jpg" class="h-52 w-full object-cover">
                <div class="p-5">
                    <span class="text-xs bg-umunna text-white px-3 py-1 rounded-full">Medical Outreach</span>
                    <!-- <h3 class="text-lg font-semibold mt-3">Scholarship Program</h3>
                    <p class="text-gray-600 text-sm mt-2">Supporting students.</p> -->
                </div>
            </div>

            <!-- PROJECT 21 -->
            <div class="project-card rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition" data-category="Community">
                <img src="assets/images/Children_Day/DSC_2426.JPG" class="h-52 w-full object-cover">
                <div class="p-5">
                    <span class="text-xs bg-umunna text-white px-3 py-1 rounded-full">Children Day </span>
                    <!-- <h3 class="text-lg font-semibold mt-3">Town Hall Development</h3>
                    <p class="text-gray-600 text-sm mt-2">Central meeting space.</p> -->
                </div>
            </div>

            <!-- PROJECT 22 -->
            <div class="project-card rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition" data-category="Infrastructure">
                <img src="assets/images/community_outreach/WhatsApp Image 2026-01-28 at 2.56.44 PM.jpeg" class="h-52 w-full object-cover">
                <div class="p-5">
                    <span class="text-xs bg-umunna text-white px-3 py-1 rounded-full">Community Outreach</span>
                    <!-- <h3 class="text-lg font-semibold mt-3">Street Lighting</h3>
                    <p class="text-gray-600 text-sm mt-2">Improving night safety.</p> -->
                </div>
            </div>

            <!-- PROJECT 23 -->
            <div class="project-card rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition" data-category="Education">
                <img src="assets/images/medical_outreach/IMG_20251117_113136_075.jpg" class="h-52 w-full object-cover">
                <div class="p-5">
                    <span class="text-xs bg-umunna text-white px-3 py-1 rounded-full">Medical Outreach</span>
                    <!-- <h3 class="text-lg font-semibold mt-3">Scholarship Program</h3>
                    <p class="text-gray-600 text-sm mt-2">Supporting students.</p> -->
                </div>
            </div>

            <!-- PROJECT 24 -->
            <div class="project-card rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition" data-category="Community">
                <img src="assets/images/Children_Day/DSC_2498.JPG" class="h-52 w-full object-cover">
                <div class="p-5">
                    <span class="text-xs bg-umunna text-white px-3 py-1 rounded-full">Children Day </span>
                    <!-- <h3 class="text-lg font-semibold mt-3">Town Hall Development</h3>
                    <p class="text-gray-600 text-sm mt-2">Central meeting space.</p> -->
                </div>
            </div>

            <!-- PROJECT 25 -->
            <div class="project-card rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition" data-category="Infrastructure">
                <img src="assets/images/community_outreach/WhatsApp Image 2026-01-28 at 2.56.43 PM.jpeg" class="h-52 w-full object-cover">
                <div class="p-5">
                    <span class="text-xs bg-umunna text-white px-3 py-1 rounded-full">Community Outreach</span>
                    <!-- <h3 class="text-lg font-semibold mt-3">Street Lighting</h3>
                    <p class="text-gray-600 text-sm mt-2">Improving night safety.</p> -->
                </div>
            </div>

            <!-- PROJECT 26 -->
            <div class="project-card rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition" data-category="Education">
                <img src="assets/images/medical_outreach/IMG_20251117_115408_131.jpg" class="h-52 w-full object-cover">
                <div class="p-5">
                    <span class="text-xs bg-umunna text-white px-3 py-1 rounded-full">Medical Outreach</span>
                    <!-- <h3 class="text-lg font-semibold mt-3">Scholarship Program</h3>
                    <p class="text-gray-600 text-sm mt-2">Supporting students.</p> -->
                </div>
            </div>

            <!-- PROJECT 27 -->
            <div class="project-card rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition" data-category="Community">
                <img src="assets/images/Children_Day/DSC_2780.jpg
                " class="h-52 w-full object-cover">
                <div class="p-5">
                    <span class="text-xs bg-umunna text-white px-3 py-1 rounded-full">Children Day </span>
                    <!-- <h3 class="text-lg font-semibold mt-3">Town Hall Development</h3>
                    <p class="text-gray-600 text-sm mt-2">Central meeting space.</p> -->
                </div>
            </div>

        </div>

    </section>

    <!-- ANIMATION STYLE -->
    <style>
        .project-card {
            transition: all 0.3s ease;
        }
    </style>

    <!-- FILTER SCRIPT -->
    <script>
        const buttons = document.querySelectorAll(".filter-btn");
        const projects = document.querySelectorAll(".project-card");

        buttons.forEach(button => {
            button.addEventListener("click", () => {

                // Active button style
                buttons.forEach(btn => {
                    btn.classList.remove("bg-umunna", "text-white");
                    btn.classList.add("bg-gray-100", "text-gray-700");
                });

                button.classList.add("bg-umunna", "text-white");
                button.classList.remove("bg-gray-100", "text-gray-700");

                const filter = button.getAttribute("data-filter");

                projects.forEach(project => {
                    const category = project.getAttribute("data-category");

                    if (filter === "all" || category === filter) {
                        project.style.display = "block";
                        project.style.opacity = "0";

                        setTimeout(() => {
                            project.style.opacity = "1";
                        }, 50);

                    } else {
                        project.style.opacity = "0";

                        setTimeout(() => {
                            project.style.display = "none";
                        }, 300);
                    }
                });

            });
        });
    </script>

    <!-- IMPACT SUMMARY -->
    <section class="bg-gray-50 py-20 px-6 md:px-20 text-center">

        <h2 class="text-3xl font-bold text-umunna mb-4">Project Impact</h2>

        <p class="text-gray-600 max-w-2xl mx-auto">
            Every project is designed to improve living standards, promote unity, and ensure sustainable development across the community.
        </p>

    </section>

    <!-- CTA -->
    <section class="bg-umunna text-white py-20 text-center px-6">

        <h2 class="text-3xl font-bold mb-4">Want to Support a Project?</h2>
        <p class="mb-6 text-gray-200">Join us in building a stronger and better community.</p>

        <a href="contact"
            class="bg-white text-umunna px-6 py-3 rounded-md font-semibold hover:scale-105 transition">
            Get Involved
        </a>

    </section>

    <!-- PROJECT TIMELINE -->
    <section class="py-24 px-6 md:px-20 bg-gray-50">

        <div class="max-w-6xl mx-auto text-center mb-14">

            <h2 class="text-3xl font-bold text-umunna mb-3">
                Project Timeline
            </h2>

            <p class="text-gray-600">
                A clear view of our development journey over the years.
            </p>

        </div>

        <div class="max-w-4xl mx-auto space-y-10">

            <!-- ITEM -->
            <div class="flex gap-6 items-start">

                <div class="w-4 h-4 bg-umunna rounded-full mt-2"></div>

                <div>
                    <h3 class="font-semibold text-lg">2022 – Community Road Project</h3>
                    <p class="text-gray-600 text-sm">
                        Started major infrastructure rehabilitation across key routes.
                    </p>
                </div>

            </div>

            <div class="flex gap-6 items-start">

                <div class="w-4 h-4 bg-umunna rounded-full mt-2"></div>

                <div>
                    <h3 class="font-semibold text-lg">2023 – Youth Empowerment Program</h3>
                    <p class="text-gray-600 text-sm">
                        Introduced digital and vocational training initiatives.
                    </p>
                </div>

            </div>

            <div class="flex gap-6 items-start">

                <div class="w-4 h-4 bg-umunna rounded-full mt-2"></div>

                <div>
                    <h3 class="font-semibold text-lg">2024 – Water & Energy Projects</h3>
                    <p class="text-gray-600 text-sm">
                        Installed boreholes and solar lighting across community zones.
                    </p>
                </div>

            </div>

        </div>

    </section>

    <!-- IMPACT HIGHLIGHTS -->
    <section class="py-24 px-6 md:px-20 bg-white">

        <div class="max-w-6xl mx-auto text-center mb-14">

            <h2 class="text-3xl font-bold text-umunna mb-3">
                Our Impact
            </h2>

            <p class="text-gray-600">
                Measurable results from our development initiatives.
            </p>

        </div>

        <div class="grid md:grid-cols-4 gap-8 max-w-6xl mx-auto text-center">

            <div>
                <h3 class="text-3xl font-bold text-umunna">12+</h3>
                <p class="text-gray-600 text-sm">Communities Reached</p>
            </div>

            <div>
                <h3 class="text-3xl font-bold text-umunna">35+</h3>
                <p class="text-gray-600 text-sm">Projects Delivered</p>
            </div>

            <div>
                <h3 class="text-3xl font-bold text-umunna">8K+</h3>
                <p class="text-gray-600 text-sm">Beneficiaries</p>
            </div>

            <div>
                <h3 class="text-3xl font-bold text-umunna">100%</h3>
                <p class="text-gray-600 text-sm">Community Engagement</p>
            </div>

        </div>

    </section>

    <?php include('inc/aside.php'); ?>

    <?php include('inc/footer.php'); ?>

</body>

</html>