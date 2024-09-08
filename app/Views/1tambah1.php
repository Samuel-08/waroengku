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
            <a href="<?=base_url('#')?>">MyWebsite</a>
          </div>
          <!-- Menu Items (Hidden on mobile, shown on desktop) -->
          <div class="hidden md:flex space-x-6">
            <a href="<?=base_url('#')?>" class="text-gray-300 hover:bg-gray-700 p-2 rounded-md">Home</a>
            <a href="<?=base_url('#')?>" class="text-gray-300 hover:bg-gray-700 p-2 rounded-md">About</a>
            <a href="<?=base_url('#')?>" class="text-gray-300 hover:bg-gray-700 p-2 rounded-md">Services</a>
            <a href="<?=base_url('#')?>" class="text-gray-300 hover:bg-gray-700 p-2 rounded-md">Contact</a>
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
        <a href="<?=base_url('#')?>" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">Home</a>
        <a href="<?=base_url('#')?>" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">About</a>
        <a href="<?=base_url('#')?>" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">Services</a>
        <a href="<?=base_url('#')?>" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">Contact</a>
      </div>
    </nav>
    <!-- Form Input -->
<section class="bg-white dark:bg-gray-900">
  <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
      <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add a new product</h2>
      <form action="#">
          <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
              <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Name</label>
                  <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
              </div>
              <div class="w-full">
                  <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brand</label>
                  <input type="text" name="brand" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Product brand" required="">
              </div>
              <div class="w-full">
                  <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                  <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required="">
              </div>
              <div>
                  <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                  <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      <option selected="">Select category</option>
                      <option value="TV">TV/Monitors</option>
                      <option value="PC">PC</option>
                      <option value="GA">Gaming/Console</option>
                      <option value="PH">Phones</option>
                  </select>
              </div>
              <div>
                  <label for="item-weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Item Weight (kg)</label>
                  <input type="number" name="item-weight" id="item-weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="12" required="">
              </div>
              <div class="sm:col-span-2">
                  <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                  <textarea id="description" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Your description here"></textarea>
              </div>
          </div>
          <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
              Add product
          </button>
      </form>
  </div>
</section>
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