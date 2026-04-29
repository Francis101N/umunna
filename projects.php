<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects | Umunna Development</title>

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
    <section class="relative h-[45vh] flex items-center justify-center text-center">

        <div class="absolute inset-0">
            <img src="assets/images/projects-hero.jpg"
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

    <!-- PROJECT FILTER HEADER (UI FEEL ONLY) -->
    <section class="py-10 px-6 md:px-20">

        <div class="max-w-6xl mx-auto flex flex-wrap gap-3 justify-center">

            <button class="px-4 py-2 rounded-full bg-umunna text-white text-sm">All</button>
            <button class="px-4 py-2 rounded-full bg-gray-100 text-gray-700 text-sm">Infrastructure</button>
            <button class="px-4 py-2 rounded-full bg-gray-100 text-gray-700 text-sm">Education</button>
            <button class="px-4 py-2 rounded-full bg-gray-100 text-gray-700 text-sm">Community</button>

        </div>

    </section>

    <!-- PROJECT GRID -->
    <section class="pb-20 px-6 md:px-20">

        <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8">

            <!-- PROJECT 1 -->
            <div class="rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition">

                <img src="assets/images/project1.jpg"
                    class="h-52 w-full object-cover">

                <div class="p-5">

                    <span class="text-xs bg-umunna text-white px-3 py-1 rounded-full">Infrastructure</span>

                    <h3 class="text-lg font-semibold mt-3">Community Road Rehabilitation</h3>

                    <p class="text-gray-600 text-sm mt-2">
                        Restoration of key access roads to improve transportation and mobility within the community.
                    </p>

                </div>

            </div>

            <!-- PROJECT 2 -->
            <div class="rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition">

                <img src="assets/images/project2.jpg"
                    class="h-52 w-full object-cover">

                <div class="p-5">

                    <span class="text-xs bg-umunna text-white px-3 py-1 rounded-full">Education</span>

                    <h3 class="text-lg font-semibold mt-3">Youth Skill Development Program</h3>

                    <p class="text-gray-600 text-sm mt-2">
                        Training initiative aimed at equipping young people with digital and vocational skills.
                    </p>

                </div>

            </div>

            <!-- PROJECT 3 -->
            <div class="rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition">

                <img src="assets/images/project3.jpg"
                    class="h-52 w-full object-cover">

                <div class="p-5">

                    <span class="text-xs bg-umunna text-white px-3 py-1 rounded-full">Community</span>

                    <h3 class="text-lg font-semibold mt-3">Clean Water Initiative</h3>

                    <p class="text-gray-600 text-sm mt-2">
                        Installation of boreholes to provide clean and accessible water for residents.
                    </p>

                </div>

            </div>

            <!-- PROJECT 4 -->
            <div class="rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition">

                <img src="assets/images/project4.jpg"
                    class="h-52 w-full object-cover">

                <div class="p-5">

                    <span class="text-xs bg-umunna text-white px-3 py-1 rounded-full">Community</span>

                    <h3 class="text-lg font-semibold mt-3">Town Hall Development</h3>

                    <p class="text-gray-600 text-sm mt-2">
                        Construction of a central meeting point for community engagement and decision-making.
                    </p>

                </div>

            </div>

            <!-- PROJECT 5 -->
            <div class="rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition">

                <img src="assets/images/project5.jpg"
                    class="h-52 w-full object-cover">

                <div class="p-5">

                    <span class="text-xs bg-umunna text-white px-3 py-1 rounded-full">Education</span>

                    <h3 class="text-lg font-semibold mt-3">Scholarship Support Program</h3>

                    <p class="text-gray-600 text-sm mt-2">
                        Financial support for students to promote access to quality education.
                    </p>

                </div>

            </div>

            <!-- PROJECT 6 -->
            <div class="rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition">

                <img src="assets/images/project6.jpg"
                    class="h-52 w-full object-cover">

                <div class="p-5">

                    <span class="text-xs bg-umunna text-white px-3 py-1 rounded-full">Infrastructure</span>

                    <h3 class="text-lg font-semibold mt-3">Street Lighting Project</h3>

                    <p class="text-gray-600 text-sm mt-2">
                        Installation of solar-powered street lights to improve safety and visibility at night.
                    </p>

                </div>

            </div>

        </div>

    </section>

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

        <a href="contact.php"
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