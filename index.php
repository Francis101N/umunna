<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | Umunna Development</title>

    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="assets/images/favicon.jpeg">
    <link rel="apple-touch-icon" href="assets/images/favicon.jpeg">
    <meta name="theme-color" content="#134026">


    <!-- Tailwind -->
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

    <style>
        body {
            overflow: hidden;
            background-color: #134026 ;
        }
    </style>
</head>

<body class="text-white">

    <!-- FULL HEIGHT SECTION -->
    <section class="min-h-screen flex flex-col items-center justify-center px-6 text-center">

        <!-- VIDEO CARD -->
        <div class="w-full max-w-4xl rounded-2xl overflow-hidden">

            <video autoplay playsinline class="w-full h-[650px] md:h-[650px] object-contain">
                <source src="assets/images/umunna-animation.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>

        </div>

    </section>

    <!-- Redirect Script -->
    <script>
        setTimeout(function() {
            window.location.href = "home.php";
        }, 12000);
    </script>

</body>

</html>