<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Umunna Foundation</title>

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
            <h1 class="text-4xl md:text-5xl font-bold">Contact Us</h1>
            <p class="mt-3 text-gray-200 max-w-xl mx-auto">
                We are always open to communication, feedback, and community engagement.
            </p>
        </div>

    </section>

    <!-- CONTACT INFO -->
    <section class="py-16 px-6 md:px-20 bg-white">

        <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8 text-center">

            <div class="p-6 bg-gray-50 rounded-xl shadow-sm">
                <h3 class="font-semibold text-lg mb-2 text-umunna">Email</h3>
                <p class="text-gray-600">info@umunnafoundation.org</p>
            </div>

            <div class="p-6 bg-gray-50 rounded-xl shadow-sm">
                <h3 class="font-semibold text-lg mb-2 text-umunna">Phone</h3>
                <p class="text-gray-600">+234 XXX XXX XXXX</p>
            </div>

            <div class="p-6 bg-gray-50 rounded-xl shadow-sm">
                <h3 class="font-semibold text-lg mb-2 text-umunna">Location</h3>
                <p class="text-gray-600">Community Headquarters</p>
            </div>

        </div>

    </section>

    <!-- CONTACT FORM -->
    <section class="py-20 px-6 md:px-20 bg-gray-50">

        <div class="max-w-4xl mx-auto">

            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold text-umunna mb-2">Send Us a Message</h2>
                <p class="text-gray-600">We respond as quickly as possible.</p>
            </div>

            <form action="proc_contact.php" method="POST" class="grid gap-6 bg-white p-8 rounded-xl shadow-sm">

                <div class="grid md:grid-cols-2 gap-6">

                    <input type="text" name="fullname" placeholder="Full Name"
                        class="border p-3 rounded-md focus:outline-none focus:ring-2 focus:ring-umunna">

                    <input type="email" name="email" placeholder="Email Address"
                        class="border p-3 rounded-md focus:outline-none focus:ring-2 focus:ring-umunna">

                </div>

                <input type="text" name="subject" placeholder="Subject"
                    class="border p-3 rounded-md focus:outline-none focus:ring-2 focus:ring-umunna">

                <textarea name="message" rows="6" placeholder="Your Message"
                    class="border p-3 rounded-md focus:outline-none focus:ring-2 focus:ring-umunna"></textarea>

                <button type="submit"
                    class="bg-umunna text-white py-3 rounded-md font-semibold hover:scale-105 transition">
                    Send Message
                </button>

            </form>

        </div>

    </section>

    <!-- LIVE MAP SECTION -->
    <section class="py-20 px-6 md:px-20 bg-white">

        <div class="max-w-6xl mx-auto text-center mb-10">

            <h2 class="text-3xl font-bold text-umunna mb-3">
                Our Location
            </h2>

            <p class="text-gray-600">
                Visit our community headquarters or locate us on the map below.
            </p>

        </div>

        <!-- MAP CONTAINER -->
        <div class="max-w-6xl mx-auto rounded-2xl overflow-hidden shadow-lg border">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1016804.9999177883!2d6.905095087115364!3d5.432987493956043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x105d65d8c46cd77d%3A0x82e926243fc44fbe!2sAbia!5e0!3m2!1sen!2sng!4v1777459356238!5m2!1sen!2sng" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>

    </section>

    <?php include('inc/aside.php'); ?>

    <?php include('inc/footer.php'); ?>

</body>

</html>