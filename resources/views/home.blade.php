<x-app-layout>
    <div class="bg-gradient-to-br from-green-400 to-blue-500 min-h-screen">
        <!-- Navbar -->
        <nav class="bg-white bg-opacity-90 fixed w-full z-10">
            <div class="container mx-auto px-6 py-3">
                <div class="flex justify-between items-center">
                    <a href="#" class="text-2xl font-bold text-green-600">Makan Peduli</a>
                    <div class="hidden md:flex space-x-6">
                        <a href="#tentang" class="text-gray-700 hover:text-green-600 transition duration-300">Tentang</a>
                        <a href="#cara-kerja" class="text-gray-700 hover:text-green-600 transition duration-300">Cara Kerja</a>
                        <a href="#dampak" class="text-gray-700 hover:text-green-600 transition duration-300">Dampak</a>
                        <a href="#kontak" class="text-gray-700 hover:text-green-600 transition duration-300">Kontak</a>
                    </div>
                    <button class="md:hidden focus:outline-none">
                        <svg class="h-6 w-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <header class="pt-24 pb-40 px-6 text-center">
            <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">Bersama Kurangi Limbah Makanan</h1>
            <p class="text-xl text-white mb-12 max-w-2xl mx-auto">Makan Peduli menghubungkan kelebihan makanan dari restoran dengan mereka yang membutuhkan. Mari bergabung dalam misi kami!</p>
            <a href="#" class="bg-white text-green-600 px-8 py-3 rounded-full text-lg font-semibold hover:bg-green-100 transition duration-300 inline-block">Mulai Sekarang</a>
        </header>

        <!-- About Section -->
        <section id="tentang" class="py-20 bg-white">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-12">Tentang Makan Peduli</h2>
                <div class="flex flex-wrap -mx-4">
                    <div class="w-full md:w-1/3 px-4 mb-8">
                        <div class="bg-green-100 rounded-lg p-6 h-full">
                            <svg class="w-12 h-12 text-green-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            <h3 class="text-xl font-semibold mb-2">Misi Kami</h3>
                            <p>Mengurangi limbah makanan di Indonesia dengan menghubungkan kelebihan makanan dari restoran kepada yang membutuhkan.</p>
                        </div>
                    </div>
                    <div class="w-full md:w-1/3 px-4 mb-8">
                        <div class="bg-blue-100 rounded-lg p-6 h-full">
                            <svg class="w-12 h-12 text-blue-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                            <h3 class="text-xl font-semibold mb-2">Visi Kami</h3>
                            <p>Indonesia tanpa limbah makanan dan kelaparan, di mana setiap orang memiliki akses ke makanan yang layak.</p>
                        </div>
                    </div>
                    <div class="w-full md:w-1/3 px-4 mb-8">
                        <div class="bg-yellow-100 rounded-lg p-6 h-full">
                            <svg class="w-12 h-12 text-yellow-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <h3 class="text-xl font-semibold mb-2">Dampak Kami</h3>
                            <p>Ribuan makanan diselamatkan dan didistribusikan setiap hari, mengurangi dampak lingkungan dan membantu komunitas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- How It Works Section -->
        <section id="cara-kerja" class="py-20 bg-gray-100">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-12">Cara Kerja Makan Peduli</h2>
                <div class="flex flex-wrap -mx-4">
                    <div class="w-full md:w-1/3 px-4 mb-8">
                        <div class="bg-white rounded-lg p-6 shadow-lg h-full">
                            <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center text-white text-2xl font-bold mb-4">1</div>
                            <h3 class="text-xl font-semibold mb-2">Restoran Menyumbang</h3>
                            <p>Restoran mitra mendaftarkan kelebihan makanan mereka melalui aplikasi kami yang mudah digunakan.</p>
                        </div>
                    </div>
                    <div class="w-full md:w-1/3 px-4 mb-8">
                        <div class="bg-white rounded-lg p-6 shadow-lg h-full">
                            <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center text-white text-2xl font-bold mb-4">2</div>
                            <h3 class="text-xl font-semibold mb-2">Relawan Mengambil</h3>
                            <p>Relawan kami yang berdedikasi mengambil makanan dari restoran dan mengantarkannya ke pusat distribusi.</p>
                        </div>
                    </div>
                    <div class="w-full md:w-1/3 px-4 mb-8">
                        <div class="bg-white rounded-lg p-6 shadow-lg h-full">
                            <div class="w-16 h-16 bg-yellow-500 rounded-full flex items-center justify-center text-white text-2xl font-bold mb-4">3</div>
                            <h3 class="text-xl font-semibold mb-2">Makanan Disalurkan</h3>
                            <p>Makanan didistribusikan ke panti asuhan, panti jompo, dan komunitas yang membutuhkan di sekitar kota.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Impact Section -->
        <section id="dampak" class="py-20 bg-green-600 text-white">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-12">Dampak Kami</h2>
                <div class="flex flex-wrap -mx-4 text-center">
                    <div class="w-full sm:w-1/2 md:w-1/4 px-4 mb-8">
                        <div class="text-4xl font-bold mb-2">5.000+</div>
                        <div>Porsi Makanan/Hari</div>
                    </div>
                    <div class="w-full sm:w-1/2 md:w-1/4 px-4 mb-8">
                        <div class="text-4xl font-bold mb-2">200+</div>
                        <div>Restoran Mitra</div>
                    </div>
                    <div class="w-full sm:w-1/2 md:w-1/4 px-4 mb-8">
                        <div class="text-4xl font-bold mb-2">1.000+</div>
                        <div>Relawan Aktif</div>
                    </div>
                    <div class="w-full sm:w-1/2 md:w-1/4 px-4 mb-8">
                        <div class="text-4xl font-bold mb-2">50.000+</div>
                        <div>Penerima Manfaat</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-6 text-center">
                <h2 class="text-3xl font-bold mb-4">Bergabunglah dengan Gerakan Makan Peduli</h2>
                <p class="text-xl mb-8 max-w-2xl mx-auto">Apakah Anda pemilik restoran, calon relawan, atau ingin mendukung misi kami? Kami membutuhkan Anda!</p>
                <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="#" class="bg-green-600 text-white px-8 py-3 rounded-full text-lg font-semibold hover:bg-green-700 transition duration-300">Sumbangkan Makanan</a>
                    <a href="#" class="bg-blue-600 text-white px-8 py-3 rounded-full text-lg font-semibold hover:bg-blue-700 transition duration-300">Jadi Relawan</a>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="kontak" class="py-20 bg-gray-100">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-12">Hubungi Kami</h2>
                <div class="max-w-lg mx-auto bg-white rounded-lg shadow-lg p-8">
                    <form>
                        <div class="mb-6">
                            <label for="nama" class="block text-gray-700 font-semibold mb-2">Nama</label>
                            <input type="text" id="nama" name="nama" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" required>
                        </div>
                        <div class="mb-6">
                            <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                            <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" required>
                        </div>
                        <div class="mb-6">
                            <label for="pesan" class="block text-gray-700 font-semibold mb-2">Pesan</label>
                            <textarea id="pesan" name="pesan" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" required></textarea>
                        </div>
                        <button type="submit" class="w-full bg-green-600 text-white px-4 py-3 rounded-md hover:bg-green-700 transition duration-300">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-gray-800 text-white py-8">
            <div class="container mx-auto px-6 text-center">
                <p>&copy; 2023 Makan Peduli. Hak Cipta Dilindungi.</p>
                <div class="mt-4">
                    <a href="#" class="text-gray-400 hover:text-white mx-2">Kebijakan Privasi</a>
                    <a href="#" class="text-gray-400 hover:text-white mx-2">Syarat dan Ketentuan</a>
                </div>
            </div>
        </footer>
    </div>
</x-app-layout>
