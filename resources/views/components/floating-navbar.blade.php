<nav id="floatingNav" class="fixed top-3 inset-x-0 mx-auto max-w-fit z-50 px-6 py-4 rounded-xl bg-white shadow-lg backdrop-blur-md dark:bg-zinc-900/80 dark:border-white/[0.2] dark:text-neutral-50 border border-gray-200 transition-all duration-200 transform -translate-y-20 opacity-0">
    <div class="flex items-center justify-center space-x-4">
        <a href="#about" class="hidden sm:flex items-center text-gray-700 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400">
            <svg class="w-5 h-5 sm:hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            <span class="hidden sm:block">Tentang</span>
        </a>
        <a href="#how-it-works" class="hidden sm:flex items-center text-gray-700 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400">
            <svg class="w-5 h-5 sm:hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h1m0 4h1v-4h-1m0 0h-1v-4h1m0 4h1v-4h-1" />
            </svg>
            <span class="hidden sm:block">Cara Kerja</span>
        </a>
        <a href="#contact" class="hidden sm:flex items-center text-gray-700 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400">
            <svg class="w-5 h-5 sm:hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12v2h-1v1m0 4v-4h-1m0 0v-4h-1m0 0V7h-1v4" />
            </svg>
            <span class="hidden sm:block">Kontak</span>
        </a>
        <button id="darkModeToggle" class="p-2 rounded-full bg-gray-200 dark:bg-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-800 dark:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
            </svg>
        </button>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const nav = document.getElementById('floatingNav');
        let lastScrollY = window.scrollY;

        // Menetapkan default untuk navbar terlihat
        nav.style.opacity = '1';
        nav.style.transform = 'translateY(0)';

        window.addEventListener('scroll', () => {
            const currentScrollY = window.scrollY;

            if (currentScrollY > lastScrollY && currentScrollY > 50) {
                // Navbar hilang saat scroll ke bawah
                nav.style.opacity = '0';
                nav.style.transform = 'translateY(-20px)';
            } else if (currentScrollY < lastScrollY) {
                // Navbar muncul kembali saat scroll ke atas
                nav.style.opacity = '1';
                nav.style.transform = 'translateY(0)';
            }

            lastScrollY = currentScrollY;
        });
    });
</script>


