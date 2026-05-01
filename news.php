<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News | Umunna Development</title>

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
            <img src="assets/images/news-hero.jpg" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/60"></div>
        </div>

        <div class="relative z-10 text-white">
            <h1 class="text-4xl md:text-5xl font-bold">News & Updates</h1>
            <p class="mt-3 text-gray-200 max-w-xl mx-auto">
                Stay updated with the latest developments in our community.
            </p>
        </div>

    </section>

    <!-- BREAKING NEWS -->
    <section class="py-10 px-6 md:px-20">

        <div class="max-w-6xl mx-auto bg-umunna text-white p-6 rounded-xl shadow-lg">

            <div class="flex items-center gap-3">

                <span class="bg-white text-umunna px-3 py-1 text-xs font-bold rounded-full">
                    BREAKING
                </span>

                <p class="text-sm md:text-base">
                    New Community Development Initiative Launched to Improve Infrastructure and Youth Empowerment
                </p>

            </div>

        </div>

    </section>

    <!-- FILTER -->
    <section class="px-6 md:px-20 pb-8">

        <div class="flex flex-wrap justify-center gap-3">

            <button class="px-4 py-2 bg-umunna text-white rounded-full text-sm">All</button>
            <button class="px-4 py-2 bg-gray-100 rounded-full text-sm">Announcements</button>
            <button class="px-4 py-2 bg-gray-100 rounded-full text-sm">Projects</button>
            <button class="px-4 py-2 bg-gray-100 rounded-full text-sm">Events</button>

        </div>

    </section>

    <!-- MAIN CONTENT -->
    <section class="px-6 md:px-20 pb-20">

        <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8">

            <!-- NEWS GRID -->
            <div class="md:col-span-2 grid gap-8">

                <!-- NEWS CARD -->
                <div class="bg-white shadow-sm rounded-xl overflow-hidden hover:shadow-lg transition">

                    <img src="assets/images/Gemini_Generated_Image_si21h9si21h9si21.png" class="h-100 w-full object-cover">

                    <div class="p-6">

                        <span class="text-xs bg-umunna text-white px-3 py-1 rounded-full">
                            Announcement
                        </span>

                        <h3 class="text-xl font-semibold mt-3">
                            Community Road Project Reaches Final Stage
                        </h3>

                        <p class="text-gray-600 text-sm mt-2">
                            Major progress recorded as road rehabilitation enters completion phase across key routes.
                        </p>

                        <a href="#" class="text-umunna font-semibold text-sm mt-4 inline-block">
                            Read More →
                        </a>

                    </div>

                </div>

                <!-- NEWS CARD -->
                <div class="bg-white shadow-sm rounded-xl overflow-hidden hover:shadow-lg transition">

                    <img src="assets/images/Gemini_Generated_Image_qohph0qohph0qohp.png" class="h-100 w-full object-cover">

                    <div class="p-6">

                        <span class="text-xs bg-umunna text-white px-3 py-1 rounded-full">
                            Events
                        </span>

                        <h3 class="text-xl font-semibold mt-3">
                            Youth Empowerment Workshop Held Successfully
                        </h3>

                        <p class="text-gray-600 text-sm mt-2">
                            Hundreds of youths trained in digital skills and entrepreneurship development.
                        </p>

                        <a href="#" class="text-umunna font-semibold text-sm mt-4 inline-block">
                            Read More →
                        </a>

                    </div>

                </div>

                <!-- NEWS CARD -->
                <div class="bg-white shadow-sm rounded-xl overflow-hidden hover:shadow-lg transition">

                    <img src="assets/images/Gemini_Generated_Image_92xwfu92xwfu92xw.png" class="h-100 w-full object-cover">

                    <div class="p-6">

                        <span class="text-xs bg-umunna text-white px-3 py-1 rounded-full">
                            Projects
                        </span>

                        <h3 class="text-xl font-semibold mt-3">
                            Clean Water Initiative Expands to New Communities
                        </h3>

                        <p class="text-gray-600 text-sm mt-2">
                            Additional boreholes installed to improve access to clean water.
                        </p>

                        <a href="#" class="text-umunna font-semibold text-sm mt-4 inline-block">
                            Read More →
                        </a>

                    </div>

                </div>

            </div>

            <!-- SIDEBAR -->
            <div class="space-y-8">

                <!-- LATEST -->
                <div class="bg-gray-50 p-6 rounded-xl">

                    <h3 class="font-semibold text-lg mb-4 text-umunna">Latest Updates</h3>

                    <ul class="space-y-4 text-sm text-gray-600">

                        <li>✔ Town Hall Renovation Completed</li>
                        <li>✔ Scholarship Program Expanded</li>
                        <li>✔ Solar Light Installation Ongoing</li>
                        <li>✔ New Leadership Committee Announced</li>

                    </ul>

                </div>

                <!-- NEWSLETTER -->
                <div class="bg-umunna text-white p-6 rounded-xl">

                    <h3 class="font-semibold text-lg mb-3">Newsletter</h3>

                    <p class="text-sm text-gray-200 mb-4">
                        Get weekly updates on community development.
                    </p>

                    <input type="email" placeholder="Enter email"
                        class="w-full p-2 rounded-md text-black mb-3">

                    <button class="w-full bg-white text-umunna py-2 rounded-md font-semibold">
                        Subscribe
                    </button>

                </div>

            </div>

        </div>

    </section>

    <?php include('inc/aside.php'); ?>

    <?php include('inc/footer.php'); ?>

</body>

</html>