@include('toko.templates.header')

<!-- Header -->
<header class="border-b border-gray-200 dark:border-gray-800 p-4 bg-white dark:bg-gray-900 text-gray-900 dark:text-white fixed top-0 left-0 right-0 z-20">
    <div class="flex justify-between items-center">
        <div class="flex items-center">
            <button @click="isSidebarOpen = !isSidebarOpen" class="mr-2 md:hidden focus:outline-none">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                <span class="sr-only">Toggle sidebar</span>
            </button>
            <h1 class="text-2xl font-bold">Food Donation Dashboard</h1>
        </div>
    </div>
</header>

<div class="flex pt-16 min-h-screen">
    <!-- Sidebar -->
    <aside x-show="isSidebarOpen" class="w-64 mt-16 fixed top-0 left-0 h-full border-r border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-900 z-10 md:block">
        <nav class="p-4 h-full">
            <ul class="space-y-2">
                <li>
                    <a href="{{  route('toko.index') }}" class="flex items-center space-x-3 p-2 rounded-lg text-gray-700 dark:text-gray-200 hover:bg-gray-200 dark:hover:bg-gray-800">
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6"></path>
                        </svg>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center space-x-3 p-2 rounded-lg text-gray-700 dark:text-gray-200 hover:bg-gray-200 dark:hover:bg-gray-800">
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M3 11h18M3 15h18M3 19h18"></path>
                        </svg>
                        <span>View Donations</span>
                    </a>
                </li>
            </ul>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6 ml-64 bg-white dark:bg-black text-gray-900 dark:text-white">
        @yield('content')
    </main>
</div>

@include('toko.templates.footer')
