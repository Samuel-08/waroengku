 <!doctype html>
 <html>

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://cdn.tailwindcss.com"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

     <style>
         html,
         body {
             overflow: auto;
             /* Mengizinkan scrolling */
             scrollbar-width: none;
             /* Firefox */
             -ms-overflow-style: none;
             /* IE and Edge */
             scroll-behavior: smooth;
             margin: 0;
         }

         html::-webkit-scrollbar,
         body::-webkit-scrollbar {
             display: none;
             background-color: transparent;
             width: 0;
             height: 0;
             /* Safari and Chrome */
         }
     </style>
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
                     <a href="<?= base_url('#') ?>" class="text-gray-300 hover:bg-gray-700 p-2 rounded-md">Home</a>
                     <a href="<?= base_url('#') ?>" class="text-gray-300 hover:bg-gray-700 p-2 rounded-md">About</a>
                     <a href="<?= base_url('#') ?>" class="text-gray-300 hover:bg-gray-700 p-2 rounded-md">Services</a>
                     <a href="<?= base_url('#') ?>" class="text-gray-300 hover:bg-gray-700 p-2 rounded-md">Contact</a>
                 </div>

                 <!-- Mobile Menu Button -->
                 <div class="md:hidden flex items-center">
                     <button id="mobile-menu-button" class="text-gray-300 hover:text-blue-500 focus:outline-none focus:text-blue-500">
                         <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                         </svg>
                     </button>
                 </div>
             </div>
         </div>

         <!-- Mobile Menu (Hidden on desktop) -->
         <div id="mobile-menu" class="md:hidden">
             <a href="<?= base_url('#') ?>" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">Home</a>
             <a href="<?= base_url('#') ?>" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">About</a>
             <a href="<?= base_url('#') ?>" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">Services</a>
             <a href="<?= base_url('#') ?>" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">Contact</a>
         </div>
     </nav>

     <?= $this->renderSection('section') ?>


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