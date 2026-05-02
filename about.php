<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Umunna Foundation</title>

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
            <img src="assets/images/medical_outreach/IMG_20251119_073803_607 copy.jpg" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/60"></div>
        </div>

        <div class="relative z-10 text-white">
            <h1 class="text-4xl md:text-5xl font-bold">About Umunna Foundation</h1>
            <p class="mt-4 text-gray-200 max-w-xl mx-auto">
                Building unity, structure, and sustainable growth for our community.
            </p>
        </div>

    </section>

    <!-- 🟢 COMMUNITY HIGHLIGHT BANNER -->
    <section class="py-16 px-6 md:px-20">

        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-10 items-center">

            <div class="rounded-xl overflow-hidden shadow-sm">
                <img src="assets/images/medical_outreach/IMG_20251115_101408_391.jpg"
                    class="w-full h-[450px] object-cover hover:scale-105 transition duration-500">
            </div>

            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-umunna mb-4">
                    A Community Built on Unity
                </h2>

                <p class="text-gray-600 leading-relaxed">
                    Umunna Foundation brings together people with a shared vision of progress,
                    collaboration, and sustainable community growth through structured initiatives.
                </p>
            </div>

        </div>

    </section>

    <!-- WHO WE ARE -->
    <section class="py-20 px-6 md:px-20">

        <div class="max-w-5xl mx-auto text-center">

            <h2 class="text-3xl font-bold text-umunna mb-6">Who We Are</h2>

            <p class="text-gray-600 leading-relaxed">
                Umunna Foundation is a community-focused organization committed to fostering unity,
                driving development initiatives, and ensuring sustainable growth across all sectors of the community.
                We operate with transparency, accountability, and collective participation.
            </p>

        </div>

    </section>

    <!-- MISSION / VISION -->
    <section class="bg-gray-50 py-20 px-6 md:px-20">

        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-10">

            <!-- MISSION CARD -->
            <div class="relative bg-white rounded-2xl shadow-lg overflow-hidden group transition duration-300 hover:ring-2 hover:ring-umunna hover:-translate-y-2">

                <!-- Image -->
                <div class="h-80 overflow-hidden">
                    <img src="assets/images/chairman7.jpeg"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>

                <!-- GREEN OVERLAY -->
                <div class="absolute inset-0 bg-gradient-to-t from-umunna/90 via-umunna/40 to-transparent"></div>

                <!-- CONTENT -->
                <div class="absolute bottom-0 p-6 text-white">

                    <p class="text-sm italic mb-3 leading-relaxed">
                        “To unite community members and implement impactful development projects
                        that improve quality of life and promote sustainable progress.”
                    </p>

                    <h3 class="font-semibold text-lg">Managing Director</h3>
                    <h6 class="font-semibold text-red-600">Iyk Edwin Anyadigibe</h6>
                    <span class="text-xs text-gray-200">Mission Statement</span>

                </div>

            </div>

            <!-- VISION CARD -->
            <div class="relative bg-white rounded-2xl shadow-lg overflow-hidden group transition duration-300 hover:ring-2 hover:ring-umunna hover:-translate-y-2">

                <!-- Image -->
                <div class="h-80 overflow-hidden">
                    <img src="assets/images/reverend.jpeg"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>

                <!-- GREEN OVERLAY -->
                <div class="absolute inset-0 bg-gradient-to-t from-umunna/90 via-umunna/40 to-transparent"></div>

                <!-- CONTENT -->
                <div class="absolute bottom-0 p-6 text-white">

                    <p class="text-sm italic mb-3 leading-relaxed">
                        “To build a self-sustaining, well-organized, and progressive community
                        where every member has access to opportunity and growth.”
                    </p>

                    <h3 class="font-semibold text-lg">Development Coordinator</h3>
                    <h6 class="font-semibold text-red-600">Daniel Ubeh</h6>
                    <span class="text-xs text-gray-300">Vision Statement</span>

                </div>

            </div>

        </div>

    </section>

    <!-- HISTORY -->
    <section class="py-20 px-6 md:px-20">

        <div class="max-w-5xl mx-auto text-center">

            <h2 class="text-3xl font-bold text-umunna mb-6">Our History</h2>

            <p class="text-gray-600 leading-relaxed">
                Umunna Foundation was established with the goal of creating structured community progress.
                Over the years, it has evolved into a platform that connects members, drives projects,
                and ensures that development is carried out in a transparent and impactful way.
            </p>

        </div>

    </section>

    <!-- 🟢 STORY IMAGE SECTION -->
    <section class="py-16 px-6 md:px-20">

        <div class="max-w-6xl mx-auto rounded-2xl overflow-hidden shadow-lg">

            <img src="assets/images/community2.jpg"
                class="w-full h-[500px] object-cover hover:scale-105 transition duration-500">

        </div>

    </section>

    <!-- VALUES -->
    <section class="bg-gray-50 py-20 px-6 md:px-20">

        <div class="max-w-6xl mx-auto text-center mb-10">
            <h2 class="text-3xl font-bold text-umunna">Core Values</h2>
        </div>

        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">

            <div class="bg-white p-6 rounded-xl shadow-sm text-center">
                <h3 class="font-semibold text-lg mb-2">Unity</h3>
                <p class="text-gray-600 text-sm">We believe progress starts with togetherness.</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-sm text-center">
                <h3 class="font-semibold text-lg mb-2">Transparency</h3>
                <p class="text-gray-600 text-sm">Open communication and accountability in all actions.</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-sm text-center">
                <h3 class="font-semibold text-lg mb-2">Progress</h3>
                <p class="text-gray-600 text-sm">Focused on long-term sustainable development.</p>
            </div>

        </div>

    </section>

    <!-- 🟢 MINI GALLERY -->
    <section class="py-16 px-6 md:px-20">

        <div class="max-w-6xl mx-auto text-center mb-10">

            <h2 class="text-2xl font-bold text-umunna">
                Moments from Our Community
            </h2>

        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-6xl mx-auto">

            <img src="assets/images/medical_outreach/IMG_20251117_094634_629.jpg" class="h-40 w-full object-cover rounded-lg hover:scale-105 transition">
            <img src="assets/images/community_outreach/DSC_2432.jpg" class="h-40 w-full object-cover rounded-lg hover:scale-105 transition">
            <img src="assets/images/community_outreach/WhatsApp Image 2026-01-28 at 2.56.55 PM (1).jpeg" class="h-40 w-full object-cover rounded-lg hover:scale-105 transition">
            <img src="assets/images/community_outreach/WhatsApp Image 2026-01-28 at 2.56.43 PM.jpeg" class="h-40 w-full object-cover rounded-lg hover:scale-105 transition">

        </div>

    </section>

    <!-- CTA -->
    <section class="bg-umunna text-white py-20 text-center px-6">

        <h2 class="text-3xl font-bold mb-4">Join Our Movement</h2>
        <p class="mb-6 text-gray-200">Be part of the change shaping our community’s future.</p>

        <a href="join"
            class="bg-white text-umunna px-6 py-3 rounded-md font-semibold hover:scale-105 transition">
            Become a Member
        </a>

    </section>

    <!-- ORGANIZATIONAL STRUCTURE -->
    <section class="py-24 px-6 md:px-20 bg-white">

        <div class="max-w-6xl mx-auto text-center mb-14">

            <h2 class="text-3xl font-bold text-umunna mb-4">
                Our Structure
            </h2>

            <p class="text-gray-600 max-w-2xl mx-auto">
                Umunna Foundation operates through a structured leadership system that ensures transparency, accountability, and effective coordination.
            </p>

        </div>

        <!-- STRUCTURE GRID -->
        <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8">

            <!-- Executive -->
            <div class="bg-gray-50 p-8 rounded-xl text-center shadow-sm hover:shadow-md transition">

                <div class="w-16 h-16 mx-auto bg-umunna text-white rounded-full flex items-center justify-center text-xl font-bold mb-4">
                    01
                </div>

                <h3 class="text-lg font-semibold mb-2">Executive Council</h3>
                <p class="text-gray-600 text-sm">
                    Oversees overall planning, decision-making, and strategic direction of the community development initiatives.
                </p>

            </div>

            <!-- Committee -->
            <div class="bg-gray-50 p-8 rounded-xl text-center shadow-sm hover:shadow-md transition">

                <div class="w-16 h-16 mx-auto bg-umunna text-white rounded-full flex items-center justify-center text-xl font-bold mb-4">
                    02
                </div>

                <h3 class="text-lg font-semibold mb-2">Project Committees</h3>
                <p class="text-gray-600 text-sm">
                    Responsible for planning, executing, and monitoring specific community projects and initiatives.
                </p>

            </div>

            <!-- Members -->
            <div class="bg-gray-50 p-8 rounded-xl text-center shadow-sm hover:shadow-md transition">

                <div class="w-16 h-16 mx-auto bg-umunna text-white rounded-full flex items-center justify-center text-xl font-bold mb-4">
                    03
                </div>

                <h3 class="text-lg font-semibold mb-2">Community Members</h3>
                <p class="text-gray-600 text-sm">
                    The foundation of the organization, actively participating in proposals, discussions, and development activities.
                </p>

            </div>

        </div>

    </section>

    <?php include('inc/aside.php'); ?>

    <?php include('inc/footer.php'); ?>


</body>

</html>