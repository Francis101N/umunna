    <!-- NAVBAR -->
    <header class="sticky top-0 z-50 bg-white/90 backdrop-blur-md shadow-sm">

        <div class="flex justify-between items-center px-6 md:px-16 py-4">

            <!-- LOGO -->
            <a href="home" class="flex items-center space-x-3">
                <img src="assets/images/umunna-logo.jpeg"
                    alt="Umunna Logo"
                    class="h-20 md:h-20 w-auto object-contain">
            </a>
            
            <!-- DESKTOP NAV -->
            <nav class="hidden md:flex space-x-8 text-sm font-medium">

                <a href="home" class="hover:text-umunna transition">Home</a>
                <a href="about" class="hover:text-umunna transition">About</a>
                <a href="projects" class="hover:text-umunna transition">Projects</a>
                <a href="news" class="hover:text-umunna transition">News</a>
                <a href="contact" class="hover:text-umunna transition">Contact</a>

            </nav>

            <!-- MOBILE TOGGLE BUTTON -->
            <button id="menuBtn" class="md:hidden text-umunna text-3xl">
                ☰
            </button>

        </div>

        <!-- MOBILE MENU -->
        <div id="mobileMenu"
            class="hidden md:hidden flex flex-col space-y-4 px-6 pb-6 bg-white shadow-md">

            <a href="home" class="hover:text-umunna transition">Home</a>
            <a href="about" class="hover:text-umunna transition">About</a>
            <a href="projects" class="hover:text-umunna transition">Projects</a>
            <a href="news" class="hover:text-umunna transition">News</a>
            <a href="contact" class="hover:text-umunna transition">Contact</a>

        </div>

    </header>

    <!-- TOGGLE SCRIPT -->
    <script>
        const menuBtn = document.getElementById("menuBtn");
        const mobileMenu = document.getElementById("mobileMenu");

        menuBtn.addEventListener("click", () => {
            mobileMenu.classList.toggle("hidden");

            // optional icon switch
            if (menuBtn.innerHTML === "☰") {
                menuBtn.innerHTML = "✕";
            } else {
                menuBtn.innerHTML = "☰";
            }
        });

        // auto close when clicking a link
        document.querySelectorAll("#mobileMenu a").forEach(link => {
            link.addEventListener("click", () => {
                mobileMenu.classList.add("hidden");
                menuBtn.innerHTML = "☰";
            });
        });
    </script>