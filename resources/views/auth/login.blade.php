<x-guest-layout>
    <div class="max-w-md p-6 bg-white dark:bg-black border border-gray-300 dark:border-gray-700 rounded-md">
        <!-- Status Sesi -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Alamat Email -->
            <div>
                <x-input-label for="email" :value="__('Email')" class="text-gray-800 dark:text-gray-300" />
                <x-text-input id="email" class="block mt-1 w-full border-gray-400 dark:border-gray-600 text-gray-900 dark:text-white bg-white dark:bg-gray-800 focus:ring-gray-500" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-gray-600 dark:text-gray-400" />
            </div>

            <!-- Kata Sandi -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Kata Sandi')" class="text-gray-800 dark:text-gray-300" />
                <x-text-input id="password" class="block mt-1 w-full border-gray-400 dark:border-gray-600 text-gray-900 dark:text-white bg-white dark:bg-gray-800 focus:ring-gray-500" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-gray-600 dark:text-gray-400" />
            </div>

            <!-- Ingat Saya -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-400 dark:border-gray-600 text-gray-600 dark:text-gray-400 focus:ring-gray-500" name="remember">
                    <span class="ml-2 text-sm text-gray-800 dark:text-gray-300">{{ __('Ingat Saya') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-between mt-6">
                @if (Route::has('password.request'))
                    <a class="text-sm text-gray-800 dark:text-gray-400 hover:underline focus:outline-none" href="{{ route('password.request') }}">
                        {{ __('Lupa kata sandi Anda?') }}
                    </a>
                @endif

                <x-primary-button class="ml-3 bg-gray-900 dark:bg-gray-100 text-white dark:text-black hover:bg-gray-800 dark:hover:bg-gray-200 border-none">
                    {{ __('Masuk') }}
                </x-primary-button>
            </div>
        </form>

        <!-- Tombol Registrasi -->
        <div class="mt-6 text-center">
            <a href="{{ route('register') }}" class="text-sm text-gray-800 dark:text-gray-400 hover:underline">
                {{ __('Belum punya akun? Daftar') }}
            </a>
        </div>
    </div>
</x-guest-layout>
