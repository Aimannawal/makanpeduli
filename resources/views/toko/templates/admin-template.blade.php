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
    <aside x-show="isSidebarOpen" class="w-64 -ml-64 lg:ml-0 mt-16 fixed top-0 left-0 h-full border-r border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-900 z-10 md:block flex flex-col justify-between">
    <nav class="p-3 h-full">
        <ul class="space-y-2">
                <li>
                    <p href="{{ route('toko.admin') }}" class="flex items-center space-x-3 py-2.5 px-4 rounded-lg border ">
                        @if (Auth::user()->is_admin == 1)
                            <i class="fas fa-user-shield"></i>
                            <span>{{ Auth::user()->name }}</span>
                        @else
                            <i class="fas fa-user"></i>
                            <span>{{ Auth::user()->restaurant_name }}</span>
                        @endif
                    </p>
                </li>
            @if (Auth::user()->is_admin == 1)
                <li>
                    <a href="{{ route('toko.admin') }}" class="flex items-center space-x-3 py-2.5 px-4 rounded-lg bg-black text-white">
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M3 11h18M3 15h18M3 19h18"></path>
                        </svg>
                        <span>View Donations</span>
                    </a>
                </li>
            @else
                <li>
                    <a href="{{  route('toko.index') }}" class="flex items-center space-x-3 py-2.5 px-4 rounded-lg bg-black text-white">
                        <i class="fas fa-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
            @endif
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <div class="log-out-btn hover:text-red-600 flex items-center px-4 py-2.5 space-x-3">
                            <i class="fas fa-sign-out-alt"></i>
                            <button type="submit" class="flex-grow text-left">Logout</button>
                        </div>
                    </form>
                </li>
        </ul>
    </nav>
    </aside>


    <!-- Main Content -->
    <main class="flex-1 p-6 ml-0 lg:ml-64 bg-white dark:bg-black text-gray-900 dark:text-white">
        @yield('content')
    </main>
</div>



@include('toko.templates.footer')
