<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makan Peduli - Solusi Inovatif Mengurangi Pembuangan Makanan di Indonesia</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#4F46E5',
                        secondary: '#10B981',
                        tertiary: '#F59E0B',
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        body {
            font-family: 'Poppins', sans-serif;
        }
        .aurora-bg {
            background:
                radial-gradient(circle at 20% 20%, rgba(79, 70, 229, 0.15) 0%, transparent 30%),
                radial-gradient(circle at 80% 20%, rgba(16, 185, 129, 0.15) 0%, transparent 30%),
                radial-gradient(circle at 50% 50%, rgba(245, 158, 11, 0.15) 0%, transparent 30%),
                radial-gradient(circle at 80% 80%, rgba(79, 70, 229, 0.15) 0%, transparent 30%),
                radial-gradient(circle at 20% 80%, rgba(16, 185, 129, 0.15) 0%, transparent 30%);
        }
        .particle {
            position: absolute;
            border-radius: 50%;
            pointer-events: none;
        }
        .overlay-box {
            backdrop-filter: blur(5px);
            background-color: rgba(255, 255, 255, 0.1);
        }
    </style>
</head>
<body class="font-sans antialiased bg-white dark:bg-gray-900 text-gray-900 dark:text-white overflow-x-hidden">
    <nav class="fixed w-full bg-white bg-opacity-90 dark:bg-gray-900 dark:bg-opacity-90 shadow z-50 backdrop-blur-md">
        <div class="container mx-auto px-6 py-3 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-primary flex items-center">
                <i data-lucide="utensils" class="w-8 h-8 mr-2"></i>
                Makan Peduli
            </a>
            <div class="hidden md:flex space-x-4">
                <a href="#about" class="hover:text-primary transition duration-300">Tentang</a>
                <a href="#how-it-works" class="hover:text-primary transition duration-300">Cara Kerja</a>
                <a href="#impact" class="hover:text-primary transition duration-300">Dampak</a>
                <a href="#economics" class="hover:text-primary transition duration-300">Ekonomi</a>
                <a href="#contact" class="hover:text-primary transition duration-300">Kontak</a>
            </div>
            <button class="bg-primary text-white px-4 py-2 rounded-md hover:bg-opacity-90 transition duration-300 flex items-center">
                <i data-lucide="log-in" class="w-4 h-4 mr-2"></i>
                Mulai Sekarang
            </button>
        </div>
    </nav>

    <header class="relative min-h-screen flex items-center justify-center aurora-bg overflow-hidden">
        <div class="container mx-auto px-6 text-center relative z-10">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">Transformasi Pembuangan Makanan menjadi Harapan</h1>
            <p class="text-xl mb-8 max-w-3xl mx-auto">Makan Peduli menghubungkan restoran dengan panti asuhan untuk mengurangi pembuangan makanan dan membantu yang membutuhkan, menciptakan solusi berkelanjutan untuk Indonesia.</p>
            <div class="flex justify-center space-x-4">
                <a href="#" class="bg-primary text-white px-6 py-3 rounded-md hover:bg-opacity-90 transition duration-300 flex items-center">
                    <i data-lucide="play" class="w-5 h-5 mr-2"></i>
                    Mulai Sekarang
                </a>
                <a href="#how-it-works" class="bg-white text-primary px-6 py-3 rounded-md hover:bg-opacity-90 transition duration-300 flex items-center">
                    <i data-lucide="info" class="w-5 h-5 mr-2"></i>
                    Pelajari Lebih Lanjut
                </a>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 right-0 h-64 bg-gradient-to-b from-transparent to-white dark:to-gray-900"></div>
    </header>

    <section id="about" class="py-20 relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <h2 class="text-4xl font-bold mb-8 text-center">Tentang Makan Peduli</h2>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <p class="text-lg mb-6">Makan Peduli adalah platform inovatif yang mengatasi dua masalah kritis di Indonesia: pembuangan makanan dan kerawanan pangan. Dengan menghubungkan restoran yang memiliki kelebihan makanan dengan organisasi amal, kami menciptakan solusi yang menguntungkan semua pihak.</p>
                    <p class="text-lg">Platform kami menggunakan teknologi canggih untuk mengoptimalkan distribusi makanan, memastikan bahwa makanan berkualitas baik mencapai mereka yang paling membutuhkan secara efisien dan tepat waktu.</p>
                </div>
                <div class="relative">
                    <img src="https://i.ytimg.com/an_webp/0rwwXecwuj8/mqdefault_6s.webp?du=3000&sqp=CM-tzrcG&rs=AOn4CLCQdg-O5Ai9WsiHPwkk-K8WYHv5_g" alt="Food Donation" class="rounded-lg shadow-lg w-full h-full">
                    <div class="absolute -bottom-6 -right-6 bg-secondary text-white p-4 rounded-lg flex items-center">
                        <i data-lucide="utensils" class="w-8 h-8 mr-2"></i>
                        <div>
                            <p class="text-2xl font-bold">1000+</p>
                            <p>Makanan Diselamatkan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute top-1/2 left-0 transform -translate-y-1/2 w-64 h-64 bg-primary opacity-10 rounded-full filter blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-secondary opacity-10 rounded-full filter blur-3xl"></div>
    </section>

    <section id="how-it-works" class="py-20 bg-gray-100 dark:bg-gray-800 relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <h2 class="text-4xl font-bold mb-12 text-center">Cara Kerja</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-lg relative overflow-hidden">
                    <div class="text-4xl font-bold text-primary mb-4 flex items-center">
                        <span class="mr-2">1</span>
                        <i data-lucide="clipboard-list" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-4">Restoran Mendaftar</h3>
                    <p>Restoran mendaftar di platform kami dan menginformasikan makanan yang tersedia untuk disumbangkan.</p>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-primary opacity-10 rounded-full transform translate-x-1/2 translate-y-1/2"></div>
                </div>
                <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-lg relative overflow-hidden">
                    <div class="text-4xl font-bold text-primary mb-4 flex items-center">
                        <span class="mr-2">2</span>
                        <i data-lucide="git-branch" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-4">Kami Menghubungkan</h3>
                    <p>Algoritma kami menghubungkan restoran dengan organisasi amal terdekat yang membutuhkan makanan.</p>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-secondary opacity-10 rounded-full transform translate-x-1/2 translate-y-1/2"></div>
                </div>
                <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-lg relative overflow-hidden">
                    <div class="text-4xl font-bold text-primary mb-4 flex items-center">
                        <span class="mr-2">3</span>
                        <i data-lucide="truck" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-4">Makanan Disalurkan</h3>
                    <p>Makanan diambil dan disalurkan ke panti asuhan atau komunitas yang membutuhkan dengan cepat dan efisien.</p>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-tertiary opacity-10 rounded-full transform translate-x-1/2 translate-y-1/2"></div>
                </div>
            </div>
        </div>
        <div class="absolute top-0 left-0 w-full h-20 bg-gradient-to-b from-white dark:from-gray-900 to-transparent"></div>
        <div class="absolute bottom-0 left-0 w-full h-20 bg-gradient-to-t from-white dark:from-gray-900 to-transparent"></div>
    </section>

    <section id="impact" class="py-20 relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <h2 class="text-4xl font-bold mb-12 text-center">Dampak Kami</h2>
            <div class="grid md:grid-cols-3 gap-8 text-center">
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg relative overflow-hidden">
                    <i data-lucide="utensils" class="w-16 h-16 mx-auto mb-4 text-primary"></i>
                    <div class="text-5xl font-bold text-primary mb-4">5000+</div>
                    <p class="text-xl">Porsi Makanan Diselamatkan</p>
                    <div class="absolute top-0 right-0 w-20 h-20 bg-primary opacity-10 rounded-full transform -translate-x-1/2 -translate-y-1/2"></div>
                </div>
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg relative overflow-hidden">
                    <i data-lucide="home" class="w-16 h-16 mx-auto mb-4 text-secondary"></i>
                    <div class="text-5xl font-bold text-secondary mb-4">100+</div>
                    <p class="text-xl">Restoran Bergabung</p>
                    <div class="absolute top-0 right-0 w-20 h-20 bg-secondary opacity-10 rounded-full transform -translate-x-1/2 -translate-y-1/2"></div>
                </div>
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg relative overflow-hidden">
                    <i data-lucide="heart" class="w-16 h-16 mx-auto mb-4 text-tertiary"></i>
                    <div class="text-5xl font-bold text-tertiary mb-4">50+</div>
                    <p class="text-xl">Organisasi Amal Terhubung</p>
                    <div class="absolute top-0 right-0 w-20 h-20 bg-tertiary opacity-10 rounded-full transform -translate-x-1/2 -translate-y-1/2"></div>
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 w-full h-40 bg-gradient-to-t from-gray-100 dark:from-gray-800 to-transparent"></div>
    </section>

    <section id="economics" class="py-20 bg-gray-100 dark:bg-gray-800 relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <h2 class="text-4xl font-bold mb-12 text-center">Dampak Ekonomi</h2>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h3 class="text-2xl font-semibold mb-4">Mengurangi Pemborosan, Meningkatkan Efisiensi</h3>
                    <p class="text-lg mb-6">Makan Peduli tidak hanya mengatasi masalah sosial, tetapi juga memberikan dampak positif pada ekonomi Indonesia. Dengan mengurangi pembuangan makanan, kami membantu meningkatkan efisiensi rantai pasokan makanan dan mengurangi biaya pengelolaan limbah.</p>
                    <ul class="space-y-2">
                        <li class="flex items-center">
                            <i data-lucide="check-circle" class="w-5 h-5 mr-2 text-green-500"></i>
                            Pengurangan biaya pengelolaan limbah
                        </li>
                        <li class="flex items-center">
                            <i data-lucide="check-circle" class="w-5 h-5 mr-2 text-green-500"></i>
                            Peningkatan efisiensi operasional restoran
                        </li>
                        <li class="flex items-center">
                            <i data-lucide="check-circle" class="w-5 h-5 mr-2 text-green-500"></i>
                            Kontribusi pada ekonomi sirkular
                        </li>
                    </ul>
                </div>
                <div class="relative">
                    <img src="https://i.ytimg.com/an_webp/0rwwXecwuj8/mqdefault_6s.webp?du=3000&sqp=CM-tzrcG&rs=AOn4CLCQdg-O5Ai9WsiHPwkk-K8WYHv5_g" alt="Economic Impact" class="rounded-lg shadow-lg w-full h-full">
                    <div class="absolute -top-6 -left-6 bg-white dark:bg-gray-700 p-4 rounded-lg shadow-lg overlay-box">
                        <h4 class="text-lg font-semibold mb-2">Penghematan Tahunan</h4>
                        <p class="text-3xl font-bold text-green-500">Rp 500 Juta+</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute top-1/2 right-0 transform -translate-y-1/2 w-64 h-64 bg-primary opacity-10 rounded-full filter blur-3xl"></div>
    </section>

    <section id="testimonials" class="py-20 relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <h2 class="text-4xl font-bold mb-12 text-center">Apa Kata Mereka</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-lg relative">
                    <i data-lucide="quote" class="w-12 h-12 absolute top-4 left-4 text-gray-200 dark:text-gray-600"></i>
                    <p class="mb-4 relative z-10">"Makan Peduli membantu kami mengurangi pembuangan makanan dan berkontribusi pada masyarakat. Ini adalah solusi yang luar biasa dan membantu kami meningkatkan citra restoran kami!"</p>
                    <div class="flex items-center">
                        <img src="/placeholder.svg?height=50&width=50" alt="Budi" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <p class="font-semibold">Budi Santoso</p>
                            <p class="text-sm text-gray-600 dark:text-gray-300">Pemilik Restoran Cita Rasa</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-lg relative">
                    <i data-lucide="quote" class="w-12 h-12 absolute top-4 left-4 text-gray-200 dark:text-gray-600"></i>
                    <p class="mb-4 relative z-10">"Berkat Makan Peduli, kami dapat menyediakan makanan berkualitas untuk anak-anak di panti asuhan kami secara teratur. Ini sangat membantu dalam mengelola sumber daya kami."</p>
                    <div class="flex items-center">
                        <img src="/placeholder.svg?height=50&width=50" alt="Siti" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <p class="font-semibold">Siti Rahayu</p>
                            <p class="text-sm text-gray-600 dark:text-gray-300">Pengurus Panti Asuhan Kasih Ibu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 w-full h-40 bg-gradient-to-t from-white dark:from-gray-900 to-transparent"></div>
    </section>

    <section id="contact" class="py-20 bg-gray-100 dark:bg-gray-800 relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <h2 class="text-4xl font-bold mb-12 text-center">Hubungi Kami</h2>
            <div class="max-w-lg mx-auto bg-white dark:bg-gray-700 p-8 rounded-lg shadow-lg">
                <form>
                    <div class="mb-4">
                        <label for="name" class="block mb-2 font-semibold">Nama</label>
                        <input type="text" id="name" class="w-full px-3 py-2 border rounded-md dark:bg-gray-800 dark:border-gray-600" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block mb-2 font-semibold">Email</label>
                        <input type="email" id="email" class="w-full px-3 py-2 border rounded-md dark:bg-gray-800 dark:border-gray-600" required>
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block mb-2 font-semibold">Pesan</label>
                        <textarea id="message" rows="4" class="w-full px-3 py-2 border rounded-md dark:bg-gray-800 dark:border-gray-600" required></textarea>
                    </div>
                    <button type="submit" class="w-full bg-primary text-white px-4 py-2 rounded-md hover:bg-opacity-90 transition duration-300 flex items-center justify-center">
                        <i data-lucide="send" class="w-5 h-5 mr-2"></i>
                        Kirim Pesan
                    </button>
                </form>
            </div>
        </div>
        <div class="absolute top-0 right-0 w-64 h-64 bg-primary opacity-10 rounded-full filter blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-secondary opacity-10 rounded-full filter blur-3xl"></div>
    </section>

    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4">Makan Peduli</h3>
                    <p class="text-sm">Menghubungkan makanan berlebih dengan mereka yang membutuhkan.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Tautan Cepat</h3>
                    <ul class="space-y-2">
                        <li><a href="#about" class="text-sm hover:text-primary transition duration-300">Tentang Kami</a></li>
                        <li><a href="#how-it-works" class="text-sm hover:text-primary transition duration-300">Cara Kerja</a></li>
                        <li><a href="#impact" class="text-sm hover:text-primary transition duration-300">Dampak</a></li>
                        <li><a href="#contact" class="text-sm hover:text-primary transition duration-300">Kontak</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Hubungi Kami</h3>
                    <p class="text-sm mb-2">Email: info@makanpeduli.id</p>
                    <p class="text-sm mb-2">Telepon: +62 21 1234 5678</p>
                    <p class="text-sm">Alamat: Jl. Sudirman No. 123, Jakarta</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Ikuti Kami</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-white hover:text-primary transition duration-300">
                            <i data-lucide="facebook" class="w-6 h-6"></i>
                        </a>
                        <a href="#" class="text-white hover:text-primary transition duration-300">
                            <i data-lucide="twitter" class="w-6 h-6"></i>
                        </a>
                        <a href="#" class="text-white hover:text-primary transition duration-300">
                            <i data-lucide="instagram" class="w-6 h-6"></i>
                        </a>
                        <a href="#" class="text-white hover:text-primary transition duration-300">
                            <i data-lucide="linkedin" class="w-6 h-6"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-800 text-center">
                <p>&copy; 2024 Makan Peduli. Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>

    <script>
        // Add particle effect
        function createParticle() {
            const particle = document.createElement('div');
            particle.classList.add('particle');
            particle.style.width = Math.random() * 5 + 'px';
            particle.style.height = particle.style.width;
            particle.style.background = `rgba(${Math.random() * 255}, ${Math.random() * 255}, ${Math.random() * 255}, 0.5)`;
            particle.style.left = Math.random() * 100 + 'vw';
            particle.style.top = Math.random() * 100 + 'vh';
            document.body.appendChild(particle);

            setTimeout(() => {
                particle.remove();
            }, 5000);
        }

        setInterval(createParticle, 200);

        // Initialize Lucide icons
        lucide.createIcons();
    </script>
</body>
</html>
