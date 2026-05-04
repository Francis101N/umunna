<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | Umunna Foundation</title>

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
            background-color:#15482a;
        }
    </style>
</head>

<body class="text-white overflow-hidden">

    <!-- FULL SCREEN INTRO -->
    <section class="min-h-screen flex items-center justify-center relative">

        <!-- VIDEO -->
        <div class="w-full max-w-4xl overflow-hidden rounded-2xl">

            <video id="introVideo"
                autoplay
                muted
                playsinline
                class="w-full h-[650px] object-contain">

                <source src="assets/images/umunna-animation.mp4" type="video/mp4">
                Your browser does not support the video tag.

            </video>

        </div>

        <!-- SOUND BUTTON -->
        <button id="soundBtn"
            class="absolute bottom-8 right-8 bg-white text-black px-4 py-2 rounded-md text-sm font-semibold shadow-md">
            Tap for sound 🔊
        </button>

    </section>

    <script>
        const video = document.getElementById("introVideo");
        const soundBtn = document.getElementById("soundBtn");

        // 1️⃣ Force autoplay (muted for browser compatibility)
        window.addEventListener("load", async () => {
            try {
                await video.play();
            } catch (err) {
                console.log("Autoplay failed:", err);
            }
        });

        // 2️⃣ Enable sound on button click
        soundBtn.addEventListener("click", () => {
            video.muted = false;
            video.play();
            soundBtn.style.display = "none";
        });

        // 3️⃣ ALSO enable sound on ANY user interaction (pro UX)
        const enableSoundOnce = () => {
            video.muted = false;
            soundBtn.style.display = "none";
            document.removeEventListener("click", enableSoundOnce);
        };

        document.addEventListener("click", enableSoundOnce);

        // 4️⃣ Redirect after 12 seconds
        setTimeout(() => {
            document.body.classList.add("opacity-0", "transition-opacity", "duration-700");

            setTimeout(() => {
                window.location.href = "home";
            }, 700);

        }, 12000);
    </script>

</body>

</html>