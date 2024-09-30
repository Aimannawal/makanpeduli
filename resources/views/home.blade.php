<x-app-layout>
    <div class="relative">
        <!-- Navbar -->
        <nav class="fixed top-0 left-0 right-0 z-50 bg-white bg-opacity-90 backdrop-blur-md">
            <div class="container mx-auto px-6 py-3">
                <div class="flex justify-between items-center">
                    <a href="#" class="text-2xl font-bold text-green-600">Makan Peduli</a>
                    <div class="hidden md:flex space-x-6">
                        <a href="#tentang" class="text-gray-700 hover:text-green-600 transition duration-300">Tentang</a>
                        <a href="#cara-kerja" class="text-gray-700 hover:text-green-600 transition duration-300">Cara Kerja</a>
                        <a href="#dampak" class="text-gray-700 hover:text-green-600 transition duration-300">Dampak</a>
                        <a href="#bergabung" class="text-gray-700 hover:text-green-600 transition duration-300">Bergabung</a>
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
        <header class="relative h-screen flex items-center justify-center overflow-hidden">
            <div class="absolute inset-0 z-0">
                <video autoplay loop muted class="object-cover w-full h-full">
                    <source src="{{ asset('videos/food-background.mp4') }}" type="video/mp4">
                </video>
                <div class="absolute inset-0 bg-black opacity-50"></div>
            </div>
            <div class="relative z-10 text-center text-white">
                <h1 class="text-5xl md:text-7xl font-bold mb-6 animate-fade-in-down">Makan Peduli</h1>
                <p class="text-xl md:text-2xl mb-12 animate-fade-in-up">Bersama Kurangi Limbah Makanan, Bantu Sesama</p>
                <a href="#tentang" class="bg-green-500 text-white px-8 py-3 rounded-full text-lg font-semibold hover:bg-green-600 transition duration-300 animate-pulse">Pelajari Lebih Lanjut</a>
            </div>
        </header>

        <!-- About Section -->
        <section id="tentang" class="min-h-screen bg-white py-20">
            <div class="container mx-auto px-6">
                <h2 class="text-4xl font-bold text-center mb-16">Tentang Makan Peduli</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                    <div class="bg-green-100 rounded-lg p-8 transform hover:scale-105 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-green-600 mb-6 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h3 class="text-2xl font-semibold mb-4 text-center">Misi Kami</h3>
                        <p class="text-center">Mengurangi limbah makanan di Indonesia dengan menghubungkan kelebihan makanan dari restoran kepada yang membutuhkan.</p>
                    </div>
                    <div class="bg-blue-100 rounded-lg p-8 transform hover:scale-105 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-blue-600 mb-6 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                        <h3 class="text-2xl font-semibold mb-4 text-center">Visi Kami</h3>
                        <p class="text-center">Indonesia tanpa limbah makanan dan kelaparan, di mana setiap orang memiliki akses ke makanan yang layak.</p>
                    </div>
                    <div class="bg-yellow-100 rounded-lg p-8 transform hover:scale-105 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-yellow-600 mb-6 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                        </svg>
                        <h3 class="text-2xl font-semibold mb-4 text-center">Dampak Kami</h3>
                        <p class="text-center">Ribuan makanan diselamatkan dan didistribusikan setiap hari, mengurangi dampak lingkungan dan membantu komunitas.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- How It Works Section -->
        <section id="cara-kerja" class="min-h-screen bg-gray-100 py-20">
            <div class="container mx-auto px-6">
                <h2 class="text-4xl font-bold text-center mb-16">Cara Kerja Makan Peduli</h2>
                <div class="relative">
                    <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-green-500"></div>
                    <div class="space-y-24">
                        <div class="relative">
                            <div class="absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-12 h-12 rounded-full bg-green-500 flex items-center justify-center text-white font-bold text-xl">1</div>
                            <div class="ml-16 bg-white p-6 rounded-lg shadow-lg">
                                <h3 class="text-2xl font-semibold mb-4">Restoran Menyumbang</h3>
                                <p>Restoran mitra mendaftarkan kelebihan makanan mereka melalui aplikasi kami yang mudah digunakan. Mereka dapat mengunggah foto dan deskripsi makanan yang tersedia.</p>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-12 h-12 rounded-full bg-green-500 flex items-center justify-center text-white font-bold text-xl">2</div>
                            <div class="mr-16 bg-white p-6 rounded-lg shadow-lg text-right">
                                <h3 class="text-2xl font-semibold mb-4">Relawan Mengambil</h3>
                                <p>Relawan kami yang berdedikasi menerima notifikasi dan mengambil makanan dari restoran. Mereka menggunakan rute yang dioptimalkan untuk efisiensi.</p>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-12 h-12 rounded-full bg-green-500 flex items-center justify-center text-white font-bold text-xl">3</div>
                            <div class="ml-16 bg-white p-6 rounded-lg shadow-lg">
                                <h3 class="text-2xl font-semibold mb-4">Makanan Disalurkan</h3>
                                <p>Makanan didistribusikan ke panti asuhan, panti jompo, dan komunitas yang membutuhkan di sekitar kota. Kami memastikan makanan sampai dalam kondisi baik dan aman dikonsumsi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Impact Section -->
        <section id="dampak" class="min-h-screen bg-green-600 text-white py-20">
            <div class="container mx-auto px-6">
                <h2 class="text-4xl font-bold text-center mb-16">Dampak Kami</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                    <div class="bg-white bg-opacity-20 backdrop-filter backdrop-blur-lg rounded-lg p-8 text-center transform hover:scale-105 transition duration-300">
                        <div class="text-6xl font-bold mb-4">5.000+</div>
                        <div class="text-xl">Porsi Makanan/Hari</div>
                    </div>
                    <div class="bg-white bg-opacity-20 backdrop-filter backdrop-blur-lg rounded-lg p-8 text-center transform hover:scale-105 transition duration-300">
                        <div class="text-6xl font-bold mb-4">200+</div>
                        <div class="text-xl">Restoran Mitra</div>
                    </div>
                    <div class="bg-white bg-opacity-20 backdrop-filter backdrop-blur-lg rounded-lg p-8 text-center transform hover:scale-105 transition duration-300">
                        <div class="text-6xl font-bold mb-4">1.000+</div>
                        <div class="text-xl">Relawan Aktif</div>
                    </div>
                    <div class="bg-white bg-opacity-20 backdrop-filter backdrop-blur-lg rounded-lg p-8 text-center transform hover:scale-105 transition duration-300">
                        <div class="text-6xl font-bold mb-4">50.000+</div>
                        <div class="text-xl">Penerima Manfaat</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Join Us Section -->
        <section id="bergabung" class="min-h-screen bg-white py-20">
            <div class="container mx-auto px-6">
                <h2 class="text-4xl font-bold text-center mb-16">Bergabung dengan Makan Peduli</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                    <div class="bg-green-100 rounded-lg p-8 text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-green-600 mb-6 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z" />
                        </svg>
                        <h3 class="text-2xl font-semibold mb-4">Restoran</h3>
                        <p class="mb-6">Jadilah mitra restoran kami dan bantu mengurangi limbah makanan.</p>
                        <a href="#" class="bg-green-500 text-white px-6 py-2 rounded-full hover:bg-green-600 transition duration-300">Daftar Sebagai Restoran</a>
                    </div>
                    <div class="bg-blue-100 rounded-lg p-8 text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-blue-600 mb-6 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <h3 class="text-2xl font-semibold mb-4">Relawan</h3>
                        <p class="mb-6">Bergabunglah sebagai relawan dan bantu kami mendistribusikan makanan.</p>
                        <a href="#" class="bg-blue-500 text-white px-6 py-2 rounded-full hover:bg-blue-600 transition duration-300">Daftar Sebagai Relawan</a>
                    </div>
                    <div class="bg-yellow-100 rounded-lg p-8 text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-yellow-600 mb-6 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h3 class="text-2xl font-semibold mb-4">Donatur</h3>
                        <p class="mb-6">Dukung misi kami dengan donasi untuk operasional dan pengembangan.</p>
                        <a href="#" class="bg-yellow-500 text-white px-6 py-2 rounded-full hover:bg-yellow-600 transition duration-300">Donasi Sekarang</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="kontak" class="min-h-screen bg-gray-100 py-20">
            <div class="container mx-auto px-6">
                <h2 class="text-4xl font-bold text-center mb-16">Hubungi Kami</h2>
                <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="flex flex-col md:flex-row">
                        <div class="md:w-1/2 p-8">
                            <h3 class="text-2xl font-semibold mb-6">Kirim Pesan</h3>
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
                                <button type="submit" class="w-full bg-green-500 text-white px-4 py-3 rounded-md hover:bg-green-600 transition duration-300">Kirim Pesan</button>
                            </form>
                        </div>
                        <div class="md:w-1/2 bg-green-500 p-8 text-white">
                            <h3 class="text-2xl font-semibold mb-6">Informasi Kontak</h3>
                            <div class="space-y-4">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <span>Jl. Makan Peduli No. 123, Jakarta</span>
                                </div>
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    <span>+62 123 4567 8900</span>
                                </div>
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    <span>info@makanpeduli.org</span>
                                </div>
                            </div>
                            <div class="mt-8">
                                <h4 class="text-xl font-semibold mb-4">Ikuti Kami</h4>
                                <div class="flex space-x-4">
                                    <a href="#" class="hover:text-gray-200 transition duration-300">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                                    </a>
                                    <a href="#" class="hover:text-gray-200 transition duration-300">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                                    </a>
                                    <a href="#" class="hover:text-gray-200 transition duration-300">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-gray-800 text-white py-8">
            <div class="container mx-auto px-6">
                <div class="flex flex-wrap justify-between items-center">
                    <div class="w-full md:w-1/3 text-center md:text-left mb-6 md:mb-0">
                        <h3 class="text-2xl font-bold mb-2">Makan Peduli</h3>
                        <p class="text-sm">Bersama kurangi limbah makanan, bantu sesama.</p>
                    </div>
                    <div class="w-full md:w-1/3 text-center mb-6 md:mb-0">
                        <h4 class="text-lg font-semibold mb-2">Tautan Cepat</h4>
                        <ul class="space-y-2">
                            <li><a href="#tentang" class="hover:text-green-400 transition duration-300">Tentang Kami</a></li>
                            <li><a href="#cara-kerja" class="hover:text-green-400 transition duration-300">Cara Kerja</a></li>
                            <li><a href="#bergabung" class="hover:text-green-400 transition duration-300">Bergabung</a></li>
                            <li><a href="#kontak" class="hover:text-green-400 transition duration-300">Kontak</a></li>
                        </ul>
                    </div>
                    <div class="w-full md:w-1/3 text-center md:text-right">
                        <h4 class="text-lg font-semibold mb-2">Berlangganan Newsletter</h4>
                        <form class="flex flex-col md:flex-row justify-center md:justify-end">
                            <input type="email" placeholder="Email Anda" class="bg-gray-700 text-white px-4 py-2 rounded-l-md focus:outline-none mb-2 md:mb-0">
                            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-r-md hover:bg-green-600 transition duration-300">Langganan</button>
                        </form>
                    </div>
                </div>
                <div class="border-t border-gray-700 mt-8 pt-8 text-sm text-center">
                    <p>&copy; 2023 Makan Peduli. Hak Cipta Dilindungi.</p>
                </div>
            </div>
        </footer>
    </div>
</x-app-layout>
