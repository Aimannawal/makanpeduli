<x-app-layout>
    <div class="bg-gradient-to-b from-green-50 to-white min-h-screen text-gray-800">
        <!-- Navigation -->
        <nav class="container px-20 py-6 flex justify-between items-center fixed left-0 right-0 bg-green-50 z-[9999]">
            <div class="flex items-center space-x-2">
                <svg class="w-8 h-8 text-green-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
                </svg>
                <span class="text-2xl font-bold">MakanPeduli</span>
            </div>
            <div class="hidden md:flex space-x-6">
                <a href="#" class="hover:text-green-500 transition-colors">Tentang Kami</a>
                <a href="#" class="hover:text-green-500 transition-colors">Cara Kerja</a>
                <a href="#" class="hover:text-green-500 transition-colors">Bergabung</a>
                <a href="#" class="hover:text-green-500 transition-colors">Kontak</a>
            </div>
            <div class="flex space-x-4">
                <a href="{{ route('toko.index') }}" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-full transition duration-300 transform hover:scale-105">Donasi sekarang</a>
            </div>
        </nav>

        <!-- Hero Section -->
        <section class="relative overflow-hidden">
            <div class="container mx-auto px-24 py-28 flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 text-center md:text-left mb-10 md:mb-0">
                    <div class="inline-block bg-green-100 text-green-800 px-4 py-2 rounded-full text-sm font-semibold mb-6 animate-pulse">
                        BARU <span class="ml-2">Bantu Indonesia dengan mengurangi limbah makanan</span>
                    </div>
                    <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                        Sumbangkan <span class="text-green-500">makanan berlebih</span> untuk membantu sesama
                    </h1>
                    <p class="text-xl text-gray-600 mb-8">
                        Bergabunglah dengan Makan Peduli, platform yang menghubungkan restoran dengan masyarakat yang membutuhkan makanan.
                    </p>
                    <div class="flex flex-col sm:flex-row justify-center md:justify-start space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="{{ route('toko.index') }}" class="bg-green-500 hover:bg-green-600 text-white text-lg px-8 py-4 rounded-full transition duration-300 transform hover:scale-105">Donasi sekarang</a>
                        <button class="border-2 border-green-500 text-green-500 flex items-center justify-center text-lg px-8 py-4 rounded-full hover:bg-green-500 hover:text-white transition-colors">
                            Cara Kerja
                            <svg class="w-5 h-5 ml-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="md:w-1/2 relative">
                    <div class="hero-image w-[600px] h-[400px] rounded-xl">
                        <img src="{{ asset('img/landing/her-img.jpeg') }}" alt="Food Sharing" class="rounded-xl object-cover mb-8 transform -rotate-3  w-full h-full hover:rotate-0 transition-transform duration-300">
                    </div>
                    <div class="absolute -bottom-4 -left-4 bg-white p-4 rounded-lg shadow-md">
                        <div class="flex items-center space-x-2 text-sm text-gray-600">
                            <svg class="w-5 h-5 text-green-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
                            </svg>
                            <span>1000+ Donasi Terkumpul</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="absolute bottom-0 left-0 right-0 h-20 bg-gradient-to-t from-white to-transparent"></div>
        </section>

        <!-- Info Section -->
        <section class="py-20 px-20 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <div class="inline-block bg-yellow-100 text-yellow-800 px-4 py-2 rounded-full text-sm font-semibold mb-6">
                        INFO PENTING <span class="ml-2">Bagaimana MakanPeduli Membantu Masyarakat</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">
                        Kenali <span class="text-green-500">cara kerja dan dampak positif</span> MakanPeduli
                    </h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach([
                        ['title' => 'Menghubungkan Donor dan Penerima', 'icon' => 'M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z'],
                        ['title' => 'Proses yang Cepat dan Mudah', 'icon' => 'M13 10V3L4 14h7v7l9-11h-7z'],
                        ['title' => 'Keamanan dan Kualitas Terjamin', 'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'],
                    ] as $item)
                        <div class="bg-gray-50 p-6 rounded-xl shadow-md transform hover:scale-105 transition-transform duration-300">
                            <div class="w-12 h-12 bg-green-100 text-green-500 rounded-full flex items-center justify-center mb-4">
                                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="{{ $item['icon'] }}" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-2">{{ $item['title'] }}</h3>
                            <p class="text-gray-600">
                                @if ($item['title'] == 'Menghubungkan Donor dan Penerima')
                                    MakanPeduli menghubungkan langsung antara pemberi donasi dan penerima bantuan. Dengan teknologi kami, proses distribusi makanan menjadi lebih efisien dan tepat sasaran.
                                @elseif ($item['title'] == 'Proses yang Cepat dan Mudah')
                                    Kami memastikan bahwa setiap tahap dalam proses donasi dan penerimaan berjalan dengan cepat dan mudah. Pengguna hanya perlu beberapa klik untuk memberikan atau menerima bantuan.
                                @elseif ($item['title'] == 'Keamanan dan Kualitas Terjamin')
                                    Makanan yang didistribusikan selalu dipastikan dalam kondisi baik. Kami bekerja sama dengan berbagai pihak untuk memastikan kualitas dan keamanan makanan yang disalurkan.
                                @endif
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>


        <!-- Keunggulan Section -->
        <section class="py-20 px-20 bg-green-50">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <div class="inline-block bg-indigo-100 text-indigo-800 px-4 py-2 rounded-full text-sm font-semibold mb-6">
                        KEUNGGULAN <span class="ml-2">Kenapa Memilih MakanPeduli?</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">
                        Keunggulan <span class="text-green-500">yang kami tawarkan</span>
                    </h2>
                </div>
                <div class="flex flex-wrap -mx-4">
                    @foreach([
                        ['title' => 'Platform User-Friendly', 'description' => 'Mudah digunakan oleh siapa saja'],
                        ['title' => 'Pengambilan Mudah', 'description' => 'Terjadwal dan efisien'],
                        ['title' => 'Pengukuran Dampak', 'description' => 'Lihat kontribusi Anda secara real-time'],
                    ] as $index => $feature)
                        <div class="w-full md:w-1/3 px-4 mb-8">
                            <div class="bg-white p-6 rounded-xl shadow-lg h-full flex flex-col justify-between transform hover:-translate-y-2 transition-transform duration-300">
                                <div>
                                    <div class="w-12 h-12 bg-green-100 text-green-500 rounded-full flex items-center justify-center mb-4">
                                        <span class="text-2xl font-bold">{{ $index + 1 }}</span>
                                    </div>
                                    <h3 class="text-xl font-semibold mb-2">{{ $feature['title'] }}</h3>
                                    <p class="text-gray-600">{{ $feature['description'] }}</p>
                                </div>
                                <a href="#" class="text-green-500 hover:text-green-600 mt-4 inline-flex items-center">
                                    Pelajari lebih lanjut
                                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14M12 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Testimoni Section -->
        <section class="py-20 px-20 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <div class="inline-block bg-pink-100 text-pink-800 px-4 py-2 rounded-full text-sm font-semibold mb-6">
                        TESTIMONI <span class="ml-2">Apa Kata Mereka Tentang MakanPeduli?</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">
                        Cerita <span class="text-green-500">pengalaman nyata</span> dari pengguna MakanPeduli
                    </h2>
                </div>
                <div class="flex flex-wrap -mx-4">
                    @foreach([
                        ['name' => 'Rahma', 'role' => 'Penerima Manfaat', 'image' => 'data:image/jpeg;base64,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', 'testimonial' => 'MakanPeduli sangat membantu saya dan keluarga dalam mendapatkan makanan yang layak. Saya merasa lebih tenang karena tahu ada bantuan yang dapat diandalkan.'],
                        ['name' => 'Andi', 'role' => 'Pemilik Restoran', 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRK4H4dyEIflRchA1UAIRkp45k3WAQ4qm7k-A&s', 'testimonial' => 'Dengan MakanPeduli, saya bisa mengurangi limbah makanan dari restoran saya dan memastikan bahwa makanan ini bisa bermanfaat untuk yang membutuhkan. Prosesnya cepat dan efisien.'],
                        ['name' => 'Budi', 'role' => 'Relawan', 'image' => 'https://mmc.tirto.id/image/2023/07/17/antarafoto-pelantikan-menkominfo-170723-hma-04_ratio-16x9.jpg', 'testimonial' => 'Menjadi bagian dari MakanPeduli adalah pengalaman yang luar biasa. Saya senang bisa membantu menyalurkan makanan kepada orang-orang yang membutuhkan dan melihat langsung dampaknya.'],
                    ] as $index => $testimonial)
                        <div class="w-full md:w-1/3 px-4 mb-8">
                            <div class="bg-gray-50 p-6 rounded-xl shadow-md relative">
                                <div class="absolute -top-6 left-1/2 transform -translate-x-1/2">
                                    <img src="{{ $testimonial['image'] }}" alt="{{ $testimonial['name'] }}" class="w-12 h-12 rounded-full border-4 border-white">
                                </div>
                                <div class="pt-8">
                                    <p class="text-gray-600 mb-4">
                                        "{{ $testimonial['testimonial'] }}"
                                    </p>
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <p class="font-semibold">{{ $testimonial['name'] }}</p>
                                            <p class="text-sm text-gray-500">{{ $testimonial['role'] }}</p>
                                        </div>
                                        <div class="flex text-yellow-400">
                                            @for ($i = 0; $i < 5; $i++)
                                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                                </svg>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>


        <!-- FAQ Section -->
        <section class="py-20 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <div class="inline-block bg-yellow-100 text-yellow-800 px-4 py-2 rounded-full text-sm font-semibold mb-6">
                        PERTANYAAN UMUM <span class="ml-2">Jawaban untuk semua pertanyaan Anda</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">
                        Pertanyaan yang sering <span class="text-green-500">ditanyakan</span>
                    </h2>
                </div>
                <div class="max-w-3xl mx-auto">
                    @foreach([
                        'Bagaimana cara menjadi donatur di MakanPeduli?',
                        'Apakah ada biaya yang dikenakan untuk menggunakan layanan MakanPeduli?',
                        'Apakah kualitas makanan yang didonasikan terjamin?'
                    ] as $index => $question)
                        <div x-data="{ open: false }" class="mb-4 bg-white rounded-lg shadow-md overflow-hidden">
                            <button @click="open = !open" class="w-full px-6 py-4 text-left font-semibold text-lg flex justify-between items-center focus:outline-none">
                                <span>{{ $question }}</span>
                                <svg :class="{'rotate-180': open}" class="w-5 h-5 transform transition-transform duration-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </button>
                            <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 transform scale-y-90" x-transition:enter-end="opacity-100 transform scale-y-100" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100 transform scale-y-100" x-transition:leave-end="opacity-0 transform scale-y-90" class="px-6 py-4 bg-gray-50">
                                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-20 bg-green-500 text-white">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Siap untuk mulai berbagi?</h2>
                <p class="text-xl mb-8">Bergabunglah dengan MakanPeduli dan mulai membuat perbedaan hari ini.</p>
                <a href="{{ route('toko.index') }}" class="bg-white text-green-500 hover:bg-green-50 px-8 py-4 rounded-full text-lg font-semibold inline-block transition duration-300 transform hover:scale-105">
                    Mulai Donasi Sekarang
                </a>
            </div>
        </section>
    </div>
</x-app-layout>
