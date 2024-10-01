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
                @if (Auth::user()->is_admin == 1)
                    <li>
                        <a href="{{ route('toko.admin') }}" class="flex items-center space-x-3 p-2 rounded-lg text-gray-700 dark:text-gray-200 hover:bg-gray-200 dark:hover:bg-gray-800">
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M3 11h18M3 15h18M3 19h18"></path>
                            </svg>
                            <span>View Donations</span>
                        </a>
                    </li>
                @else
                    <li>
                        <a href="{{  route('toko.index') }}" class="flex items-center space-x-3 p-2 rounded-lg text-gray-700 dark:text-gray-200 hover:bg-gray-200 dark:hover:bg-gray-800">
                            <i class="fas fa-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                @endif
            </ul>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6 ml-64 bg-white dark:bg-black text-gray-900 dark:text-white">
        @yield('content')
    </main>
</div>

<div id="statusModal" class="fixed inset-0 flex items-center justify-center hidden bg-black bg-opacity-50 z-[999]" >
    <div class="bg-white dark:bg-gray-800 rounded-lg p-6 w-1/3">
        <h2 class="text-lg font-bold mb-4">Update Donation Status</h2>
        <form id="statusForm" method="POST" action="{{ route('admin.update.status') }}">
            @csrf
            <input type="hidden" name="donation_id" id="donation_id">
            <div class="mb-4">
                <label for="status" class="block text-sm font-medium mb-1">Select Status</label>
                <select name="status" id="status" class="block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <option value="" disabled selected>Select Status</option>
                    <option value="rejected">Rejected</option>
                    <option value="collected">Collected</option>
                    <option value="received">Received</option>
                </select>
            </div>
            <div class="flex justify-end">
                <button type="button" class="bg-gray-300 text-gray-800 hover:bg-gray-400 px-4 py-2 rounded mr-2" onclick="closeModal()">Cancel</button>
                <button type="submit" class="bg-blue-500 text-white hover:bg-blue-600 px-4 py-2 rounded">Update</button>
            </div>
        </form>
    </div>
</div>

@include('toko.templates.footer')
