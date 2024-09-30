<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-white dark:bg-gray-900 text-gray-900 dark:text-white">
        <header class="bg-white shadow-md">
            <nav class="px-6 py-3 flex justify-between items-center fixed z-50 left-0 top-0 right-0 bg-white">
                <div class="text-2xl font-bold text-primary">Makan Peduli</div>
                <div class="hidden md:flex space-x-4">
                    <a href="#home" class="text-gray-600 hover:text-primary">Home</a>
                    <a href="#about" class="text-gray-600 hover:text-primary">About</a>
                    <a href="#features" class="text-gray-600 hover:text-primary">Features</a>
                    <a href="#impact" class="text-gray-600 hover:text-primary">Impact</a>
                    <a href="#contact" class="text-gray-600 hover:text-primary">Contact</a>
                </div>
                <a href="{{ route('toko.create') }}" class="bg-primary text-white px-4 py-2 rounded-full hover:bg-green-600 transition duration-300">Join Now</a>
            </nav>
        </header>

        <main>
            {{ $slot }}
        </main>

        <footer class="bg-gray-800 text-white py-8">
            <div class="container mx-auto px-6">
                <div class="flex flex-wrap justify-between">
                    <div class="w-full md:w-1/4 mb-6 md:mb-0">
                        <h3 class="text-xl font-semibold mb-2">Makan Peduli</h3>
                        <p>Reducing food waste, feeding Indonesia, one meal at a time.</p>
                    </div>
                    <div class="w-full md:w-1/4 mb-6 md:mb-0">
                        <h3 class="text-xl font-semibold mb-2">Quick Links</h3>
                        <ul>
                            <li><a href="#home" class="hover:text-primary">Home</a></li>
                            <li><a href="#about" class="hover:text-primary">About</a></li>
                            <li><a href="#features" class="hover:text-primary">How It Works</a></li>
                            <li><a href="#impact" class="hover:text-primary">Impact</a></li>
                        </ul>
                    </div>
                    <div class="w-full md:w-1/4 mb-6 md:mb-0">
                        <h3 class="text-xl font-semibold mb-2">Contact</h3>
                        <p>Email: info@makanpeduli.com</p>
                        <p>Phone: +62 123 456 7890</p>
                    </div>
                    <div class="w-full md:w-1/4">
                        <h3 class="text-xl font-semibold mb-2">Follow Us</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="hover:text-primary"><img src="/placeholder.svg?height=24&width=24" alt="Facebook"></a>
                            <a href="#" class="hover:text-primary"><img src="/placeholder.svg?height=24&width=24" alt="Twitter"></a>
                            <a href="#" class="hover:text-primary"><img src="/placeholder.svg?height=24&width=24" alt="Instagram"></a>
                            <a href="#" class="hover:text-primary"><img src="/placeholder.svg?height=24&width=24" alt="LinkedIn"></a>
                        </div>
                    </div>
                </div>
                <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                    <p>&copy; 2023 Makan Peduli. All rights reserved.</p>
                </div>
            </div>
    </footer>
    </body>
</html>
