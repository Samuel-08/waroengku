<?= $this->extend('template/Template'); ?>
<?= $this->section('section'); ?>
<!-- Jumbortron -->
<div class="bg-blue-300 text-white py-8">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold text-center">Selamat Datang di Situs Kami!</h1>
        <p class="mt-2 text-lg text-center">Temukan berbagai fitur menarik dan informasi terbaru di sini.</p>
    </div>
</div>

<!-- Grid dan Card -->
<div class="container mx-auto mt-5 px-4">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="p-6 bg-white shadow-lg rounded-lg transition-all transform hover:scale-105">
            <p class="text-gray-700 text-base">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </p>
        </div>
        <div class="p-6 bg-white shadow-lg rounded-lg transition-all transform hover:scale-105">
            <p class="text-gray-700 text-base">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </p>
        </div>
    </div>
</div>
<!-- Form Input -->
<div class="mt-8 bg-white p-6 rounded-lg shadow-lg transition-all transform  ">
    <h2 class="text-2xl font-semibold mb-4">Form Input</h2>
    <form>
        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-medium mb-2">Nama:</label>
            <input type="text" id="name" name="name" placeholder="Masukkan nama Anda"
                class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all" />
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email:</label>
            <input type="email" id="email" name="email" placeholder="Masukkan email Anda"
                class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all" />
        </div>

        <div class="mb-4">
            <label for="message" class="block text-gray-700 text-sm font-medium mb-2">Pesan:</label>
            <textarea id="message" name="message" placeholder="Masukkan pesan Anda"
                class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all" rows="4"></textarea>
        </div>

        <button type="submit"
            class="w-full bg-blue-500 text-white p-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all">
            Kirim
        </button>
    </form>
</div>

<!-- Accordion -->
<div class="bg-white p-6 rounded-lg shadow-lg transition-all transform   mb-6">
    <h2 class="text-2xl font-semibold mb-4">Accordion</h2>
    <div class="accordion">
        <button class="w-full text-left bg-gray-200 p-4 rounded-lg focus:outline-none">
            <h3 class="font-semibold">Bagian 1</h3>
        </button>
        <div class="accordion-content hidden p-4 bg-gray-100">
            <p>Konten untuk Bagian 1.</p>
        </div>
        <button class="w-full text-left bg-gray-200 p-4 rounded-lg mt-2 focus:outline-none">
            <h3 class="font-semibold">Bagian 2</h3>
        </button>
        <div class="accordion-content hidden p-4 bg-gray-100">
            <p>Konten untuk Bagian 2.</p>
        </div>
    </div>
</div>

<!-- Offcanvas -->
<!-- <div id="offcanvas" class="fixed inset-0 w-64 bg-gray-800 text-white p-4 shadow-lg transform translate-x-full transition-transform duration-300">
    <button id="offcanvasClose" class="text-white bg-red-500 p-2 rounded-full absolute top-4 right-4">×</button>
    <h2 class="text-2xl font-semibold mb-4">Offcanvas Menu</h2>
    <ul>
        <li><a href="#" class="block py-2 hover:bg-gray-700 rounded">Home</a></li>
        <li><a href="#" class="block py-2 hover:bg-gray-700 rounded">About</a></li>
        <li><a href="#" class="block py-2 hover:bg-gray-700 rounded">Services</a></li>
        <li><a href="#" class="block py-2 hover:bg-gray-700 rounded">Contact</a></li>
    </ul>
</div> -->

<!-- Modal -->
<div class="modal fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
        <h2 class="text-2xl font-semibold mb-4">Modal</h2>
        <p>Ini adalah konten modal. Anda dapat menambahkan informasi atau elemen lain di sini.</p>
        <button class="mt-4 bg-red-500 text-white p-2 rounded-lg close-modal">Tutup</button>
    </div>
</div>

<!-- card Image -->
<div class="bg-white p-6 rounded-lg shadow-lg">
    <h2 class="text-2xl font-semibold mb-4">Card Image</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-gray-100 p-4 rounded-lg shadow-lg">
            <img src="<?= base_url('./image/th-53735346.jpg') ?>" alt="Image 1" class="w-full h-auto rounded-lg mb-4">
            <p class="text-gray-700">Deskripsi gambar 1.</p>
        </div>
        <div class="bg-gray-100 p-4 rounded-lg shadow-lg">
            <img src="<?= base_url('./image/th-80222752.jpg') ?>" alt="Image 2" class="w-full h-auto rounded-lg mb-4">
            <p class="text-gray-700">Deskripsi gambar 2.</p>
        </div>
    </div>
</div>

<script>
    // Toggle Mobile Menu
    $(document).ready(function() {
        $('#mobile-menu-button').on('click', function() {
            $('#mobile-menu').toggleClass('hidden');
        });
    });
    // Accordion
    $(document).ready(function() {
        $('.accordion button').on('click', function() {
            // Tutup accordion yang lain
            $('.accordion-content').not($(this).next()).slideUp().addClass('hidden');

            // Toggle accordion yang diklik
            $(this).next().slideToggle().toggleClass('hidden');
        });
    });
    //  Smooth Scroll for Anchor Links
    $(document).ready(function() {
        $('a[href*="#"]').on('click', function(e) {
            e.preventDefault();

            $('html, body').animate({
                scrollTop: $($(this).attr('href')).offset().top
            }, 500);
        });
    });
    // Form Validation
    $(document).ready(function() {
        $('form').on('submit', function(e) {
            var isValid = true;

            $('input, textarea').each(function() {
                if ($(this).val() === '') {
                    isValid = false;
                    $(this).addClass('border-red-500');
                } else {
                    $(this).removeClass('border-red-500');
                }
            });

            if (!isValid) {
                e.preventDefault();
                alert('Semua field harus diisi!');
            }
        });
    });
</script>
<?= $this->endSection(); ?>