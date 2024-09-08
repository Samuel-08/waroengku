<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?= base_url('../assets/css/style.css') ?>">
</head>

<body>
    <!-- Navbar -->
    <nav class="bg-gray-800 text-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <div class="text-gray-300 text-2xl font-bold  ">
                    <a href="<?= base_url('#') ?>">MyWebsite</a>
                </div>

                <!-- Menu Items (Hidden on mobile, shown on desktop) -->
                <div class="hidden md:flex space-x-6">
                    <a href="<?= base_url('#') ?>" class="text-gray-300 active:border-slate-800 active:text-white active:bg-slate-600 hover:bg-gray-700 p-2 rounded-md">Home</a>
                    <a href="<?= base_url('#') ?>" class="text-gray-300 active:border-slate-800 active:text-white active:bg-slate-600 hover:bg-gray-700 p-2 rounded-md">About</a>
                    <a href="<?= base_url('#') ?>" class="text-gray-300 active:border-slate-800 active:text-white active:bg-slate-600 hover:bg-gray-700 p-2 rounded-md">Services</a>
                    <a href="<?= base_url('#') ?>" class="text-gray-300 active:border-slate-800 active:text-white active:bg-slate-600 hover:bg-gray-700 p-2 rounded-md">Contact</a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="text-gray-300 active:border-slate-800 active:text-white active:bg-slate-600 hover:text-blue-500 focus:outline-none focus:text-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu (Hidden on desktop) -->
        <div id="mobile-menu" class="md:hidden">
            <a href="<?= base_url('#') ?>" class="block px-4 py-2 text-sm text-gray-300 active:border-slate-800 active:text-white active:bg-slate-600 hover:bg-gray-700">Home</a>
            <a href="<?= base_url('#') ?>" class="block px-4 py-2 text-sm text-gray-300 active:border-slate-800 active:text-white active:bg-slate-600 hover:bg-gray-700">About</a>
            <a href="<?= base_url('#') ?>" class="block px-4 py-2 text-sm text-gray-300 active:border-slate-800 active:text-white active:bg-slate-600 hover:bg-gray-700">Services</a>
            <a href="<?= base_url('#') ?>" class="block px-4 py-2 text-sm text-gray-300 active:border-slate-800 active:text-white active:bg-slate-600 hover:bg-gray-700">Contact</a>
        </div>
    </nav>

    <!-- card Image -->
    <div class="bg-white p-6 rounded-lg ">
        <h2 class="text-2xl font-semibold mb-4">Product</h2>
        <div class="mb-10">
            <input type="text" id="cari" name="cari" placeholder="Masukkan Pencarian Anda"
                class="lg:w-4/5 w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all" />
            <button class=" lg:max-w-60 w-full bg-zinc-300 rounded-md border border-slate-300 py-2 px-4 text-center text-sm transition-all shadow-sm hover:shadow-lg text-slate-600 hover:text-white hover:bg-slate-800 hover:border-slate-800 focus:text-white focus:bg-slate-800 focus:border-slate-800  disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
                Outlined
            </button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 mb-5">
            <div class="bg-zinc-50 rounded-lg shadow-lg  bg-image-product">
                <img src="<?= base_url('../assets/image/p (2).jpg') ?>" alt="Image 1" class="rounded-lg image-product mb-4">
                <p class="text-gray-700">Deskripsi gambar 1.</p>
            </div>
            <div class="bg-zinc-50 rounded-lg shadow-lg bg-image-product">
                <img src="<?= base_url('../assets/image/p (3).jpg') ?>" alt="Image 1" class="rounded-lg image-product mb-4">
                <p class="text-gray-700">Deskripsi gambar 1.</p>
            </div>
            <div class="bg-zinc-50 rounded-lg shadow-lg bg-image-product">
                <img src="<?= base_url('../assets/image/p (5).jpg') ?>" alt="Image 1" class="rounded-lg image-product mb-4">
                <p class="text-gray-700">Deskripsi gambar 1.</p>
            </div>
            <div class="bg-zinc-50 rounded-lg shadow-lg bg-image-product">
                <img src="<?= base_url('../assets/image/p (4).jpg') ?>" alt="Image 1" class="rounded-lg image-product mb-4">
                <p class="text-gray-700">Deskripsi gambar 1.</p>
            </div>
        </div>
    </div>
    <!-- Grid dan Card -->
    <div class="container mx-auto mt-5 my-4 px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="p-6 bg-white flex items-center flex-col shadow-lg rounded-lg transition-all transform hover:scale-105">
                <h1 class=" md:text-2xl lg:text-2xl text-center text-gray-700 text-base mb-4">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.2
                </h1>
                <button class="rounded-md border border-slate-300 py-2 px-4 text-center text-sm transition-all shadow-sm hover:shadow-lg text-slate-600 hover:text-white hover:bg-slate-800 hover:border-slate-800 focus:text-white focus:bg-slate-800 focus:border-slate-800 active:border-slate-800 active:text-white active:bg-slate-800 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
                    Outlined
                </button>
            </div>
            <div class="p-6 bg-white flex items-center flex-col shadow-lg rounded-lg transition-all transform hover:scale-105">
                <h1 class=" md:text-2xl lg:text-2xl text-center text-gray-700 text-base mb-4">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.2
                </h1>
                <button class="rounded-md border border-slate-300 py-2 px-4 text-center text-sm transition-all shadow-sm hover:shadow-lg text-slate-600 hover:text-white hover:bg-slate-800 hover:border-slate-800 focus:text-white focus:bg-slate-800 focus:border-slate-800 active:border-slate-800 active:text-white active:bg-slate-800 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
                    Outlined
                </button>
            </div>
            <div class="p-6 bg-white flex items-center flex-col shadow-lg rounded-lg transition-all transform hover:scale-105">
                <h1 class=" md:text-2xl lg:text-2xl text-center text-gray-700 text-base mb-4">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.2
                </h1>
                <button class="rounded-md border border-slate-300 py-2 px-4 text-center text-sm transition-all shadow-sm hover:shadow-lg text-slate-600 hover:text-white hover:bg-slate-800 hover:border-slate-800 focus:text-white focus:bg-slate-800 focus:border-slate-800 active:border-slate-800 active:text-white active:bg-slate-800 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
                    Outlined
                </button>
            </div>
        </div>
    </div>



    <script>
        // Toggle Mobile Menu
        $(document).ready(function() {
            $("#mobile-menu-button").on("click", function() {
                var expanded = $(this).attr("aria-expanded") === "true" || false;
                $(this).attr("aria-expanded", !expanded);
                $("#mobile-menu").slideToggle(300);
            });
        });

        //  Smooth Scroll for Anchor Links
        $(document).ready(function() {
            $('a[href*="#"]').on('click', function(e) {
                e.preventDefault();

                $('html, body').animate({
                    scrollTop: $($(this).attr('href')).offset().top
                }, 800);
            });
        });
    </script>
</body>

</html>