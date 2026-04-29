<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Us | Umunna Development</title>

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
            <img src="assets/images/join-hero.jpg" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/60"></div>
        </div>

        <div class="relative z-10 text-white">
            <h1 class="text-4xl md:text-5xl font-bold">Join Umunna Development</h1>
            <p class="mt-3 text-gray-200 max-w-xl mx-auto">
                Become part of a structured community driving real development and unity.
            </p>
        </div>

    </section>

    <!-- BENEFITS -->
    <section class="py-16 px-6 md:px-20 bg-white">

        <div class="max-w-6xl mx-auto text-center mb-10">

            <h2 class="text-3xl font-bold text-umunna mb-3">Why Join Us?</h2>

            <p class="text-gray-600">
                Membership gives you access to participation, impact, and community growth opportunities.
            </p>

        </div>

        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">

            <div class="p-6 bg-gray-50 rounded-xl text-center">
                <h3 class="font-semibold mb-2">Community Voice</h3>
                <p class="text-gray-600 text-sm">Be part of decisions that shape development projects.</p>
            </div>

            <div class="p-6 bg-gray-50 rounded-xl text-center">
                <h3 class="font-semibold mb-2">Project Participation</h3>
                <p class="text-gray-600 text-sm">Join real development initiatives and programs.</p>
            </div>

            <div class="p-6 bg-gray-50 rounded-xl text-center">
                <h3 class="font-semibold mb-2">Networking</h3>
                <p class="text-gray-600 text-sm">Connect with leaders and active community members.</p>
            </div>

        </div>

    </section>

    <!-- FORM -->
    <section class="py-20 px-6 md:px-20 bg-gray-50">

        <div class="max-w-4xl mx-auto">

            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold text-umunna">Membership Form</h2>
                <p class="text-gray-600">Fill the form below to join the community.</p>
            </div>

            <form class="bg-white p-8 rounded-xl shadow-sm space-y-6">

                <div class="grid md:grid-cols-2 gap-6">

                    <input type="text" placeholder="Full Name"
                        class="border p-3 rounded-md w-full focus:ring-2 focus:ring-umunna outline-none">

                    <input type="text" placeholder="Phone Number"
                        class="border p-3 rounded-md w-full focus:ring-2 focus:ring-umunna outline-none">

                </div>

                <input type="email" placeholder="Email Address"
                    class="border p-3 rounded-md w-full focus:ring-2 focus:ring-umunna outline-none">

                <input type="text" placeholder="Location / Community"
                    class="border p-3 rounded-md w-full focus:ring-2 focus:ring-umunna outline-none">

                <select class="border p-3 rounded-md w-full focus:ring-2 focus:ring-umunna outline-none">

                    <option>Select Membership Type</option>
                    <option>General Member</option>
                    <option>Volunteer</option>
                    <option>Project Contributor</option>

                </select>

                <textarea rows="5" placeholder="Why do you want to join?"
                    class="border p-3 rounded-md w-full focus:ring-2 focus:ring-umunna outline-none"></textarea>

                <button type="submit"
                    class="bg-umunna text-white w-full py-3 rounded-md font-semibold hover:scale-105 transition">
                    Submit Application
                </button>

            </form>

        </div>

    </section>

    <!-- FINAL CTA -->
    <section class="bg-umunna text-white py-20 text-center px-6">

        <h2 class="text-3xl font-bold mb-3">Welcome to the Movement</h2>
        <p class="text-gray-200 mb-6">Together, we build a stronger community.</p>

    </section>

    <?php include('inc/aside.php'); ?>
    <?php include('inc/footer.php'); ?>


</body>

</html>