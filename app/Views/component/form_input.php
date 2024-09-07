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