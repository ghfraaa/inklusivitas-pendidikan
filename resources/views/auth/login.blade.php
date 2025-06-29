<x-guest-layout>
    <div
        class="min-h-screen bg-gray-50 flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
        <!-- Background decoration -->
        <div class="absolute inset-0 bg-gradient-to-br from-purple-50 via-white to-blue-50"></div>
        <div class="absolute top-0 left-0 w-full h-full">
            <div
                class="absolute top-20 left-20 w-64 h-64 bg-purple-200 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-pulse">
            </div>
            <div class="absolute top-40 right-20 w-64 h-64 bg-pink-200 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-pulse"
                style="animation-delay: 2s;"></div>
            <div class="absolute bottom-20 left-1/2 w-64 h-64 bg-blue-200 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-pulse"
                style="animation-delay: 4s;"></div>
        </div>

        <div class="max-w-md w-full space-y-8 relative z-10">
            <!-- Header Section -->
            <div class="text-center">
                <!-- Logo matching landing page style -->
                <div class="mx-auto h-20 w-20 mb-6 floating-animation">
                    <div
                        class="w-full h-full bg-gradient-to-br from-purple-500 to-pink-500 rounded-full flex items-center justify-center shadow-2xl">
                        <svg class="h-10 w-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                </div>
                <h2 class="text-4xl font-bold text-gray-800 mb-4">
                    Selamat Datang Kembali
                </h2>
                <p class="text-xl text-gray-600 font-light">
                    Masuk ke <span class="text-purple-600 font-semibold">Sistem Inklusivitas Pendidikan</span>
                </p>
            </div>

            <!-- Login Form Card -->
            <div
                class="card-hover bg-white shadow-2xl rounded-2xl p-8 border border-gray-100 backdrop-blur-sm bg-white/95">
                <!-- Session Status -->
                <x-auth-session-status
                    class="mb-6 p-4 bg-green-50 border-l-4 border-green-400 rounded-lg text-green-800"
                    :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf

                    <!-- Email Address -->
                    <div class="form-group">
                        <x-input-label for="email" :value="__('Email Address')"
                            class="block text-sm font-semibold text-gray-700 mb-3" />
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <div
                                    class="w-5 h-5 bg-gradient-to-br from-purple-500 to-pink-500 rounded-full flex items-center justify-center">
                                    <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                    </svg>
                                </div>
                            </div>
                            <x-text-input id="email"
                                class="w-full pl-12 pr-4 py-4 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-300 bg-gray-50 focus:bg-white text-gray-800 placeholder-gray-500"
                                type="email" name="email" :value="old('email')" required autofocus
                                autocomplete="username" placeholder="masukkan@email.com" />
                        </div>
                        <x-input-error :messages="$errors->get('email')"
                            class="mt-3 text-sm text-red-600 bg-red-50 border-l-4 border-red-400 p-3 rounded" />
                    </div>

                    <!-- Password -->
                    <div class="form-group">
                        <x-input-label for="password" :value="__('Password')"
                            class="block text-sm font-semibold text-gray-700 mb-3" />
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <div
                                    class="w-5 h-5 bg-gradient-to-br from-purple-500 to-pink-500 rounded-full flex items-center justify-center">
                                    <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                            <x-text-input id="password"
                                class="w-full pl-12 pr-4 py-4 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-300 bg-gray-50 focus:bg-white text-gray-800 placeholder-gray-500"
                                type="password" name="password" required autocomplete="current-password"
                                placeholder="Masukkan password Anda" />
                        </div>
                        <x-input-error :messages="$errors->get('password')"
                            class="mt-3 text-sm text-red-600 bg-red-50 border-l-4 border-red-400 p-3 rounded" />
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class="flex items-center justify-between pt-2">
                        <label for="remember_me" class="flex items-center group cursor-pointer">
                            <input id="remember_me" type="checkbox"
                                class="h-5 w-5 text-purple-600 focus:ring-purple-500 border-gray-300 rounded-md transition-all duration-200"
                                name="remember">
                            <span
                                class="ml-3 text-sm font-medium text-gray-600 group-hover:text-gray-800 transition-colors">
                                {{ __('Ingat saya') }}
                            </span>
                        </label>

                        @if (Route::has('password.request'))
                            <a class="text-sm font-semibold text-purple-600 hover:text-purple-800 transition-colors duration-200 hover:underline decoration-2 underline-offset-2"
                                href="{{ route('password.request') }}">
                                {{ __('Lupa password?') }}
                            </a>
                        @endif
                    </div>

                    <!-- Login Button -->
                    <div class="pt-6">
                        <x-primary-button
                            class="group relative w-full flex justify-center py-4 px-6 border border-transparent rounded-xl shadow-lg text-base font-semibold text-white bg-gradient-to-r from-purple-600 via-purple-600 to-pink-600 hover:from-purple-700 hover:via-purple-700 hover:to-pink-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl">
                            <span class="absolute left-0 inset-y-0 flex items-center pl-4">
                                <svg class="h-5 w-5 text-white group-hover:text-yellow-300 transition-colors duration-200"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                                </svg>
                            </span>
                            {{ __('Masuk ke Dashboard') }}
                        </x-primary-button>
                    </div>

                    <!-- Divider -->
                    <div class="relative mt-8">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t-2 border-gray-200"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-6 bg-white text-gray-500 font-medium">Atau</span>
                        </div>
                    </div>

                    <!-- Register Link -->
                    <div class="text-center mt-6">
                        <p class="text-base text-gray-600">
                            Belum bergabung dengan kami?
                        </p>
                        <a href="{{ route('register') }}"
                            class="inline-flex items-center mt-2 font-semibold text-purple-600 hover:text-purple-800 transition-colors duration-200 hover:underline decoration-2 underline-offset-4">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                    clip-rule="evenodd" />
                            </svg>
                            Daftar Akun Baru
                        </a>
                    </div>
                </form>
            </div>

            <!-- Back to Home -->
            <div class="text-center">
                <a href="/"
                    class="inline-flex items-center text-sm font-medium text-gray-600 hover:text-purple-600 transition-colors duration-200">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Kembali ke Beranda
                </a>
            </div>

            <!-- Footer Info -->
            <div class="text-center pt-4">
                <p class="text-xs text-gray-500 leading-relaxed">
                    Dengan masuk, Anda menyetujui
                    <a href="#" class="text-purple-600 hover:text-purple-800 transition-colors font-medium">Syarat &
                        Ketentuan</a>
                    dan
                    <a href="#" class="text-purple-600 hover:text-purple-800 transition-colors font-medium">Kebijakan
                        Privasi</a> kami.
                </p>
            </div>
        </div>
    </div>

    <style>
        /* Consistent with landing page animations */
        .floating-animation {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-2px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
        }

        /* Form styling consistent with landing page */
        .form-group input:focus {
            transform: translateY(-1px);
            box-shadow: 0 8px 25px rgba(139, 92, 246, 0.15);
        }

        /* Button animations matching landing page */
        .group:hover {
            box-shadow: 0 10px 40px rgba(139, 92, 246, 0.4);
        }

        /* Background animation */
        @keyframes pulse {

            0%,
            100% {
                opacity: 0.3;
            }

            50% {
                opacity: 0.5;
            }
        }

        /* Entrance animation */
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .card-hover {
            animation: slideUp 0.6s ease-out;
        }

        /* Consistent gradient backgrounds */
        .bg-gradient-to-br {
            background-image:
                radial-gradient(circle at 25% 25%, rgba(139, 92, 246, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 75% 75%, rgba(236, 72, 153, 0.1) 0%, transparent 50%);
        }

        /* Icon gradient consistency */
        .icon-wrapper {
            background: linear-gradient(135deg, #74b9ff, #0984e3);
        }
    </style>
</x-guest-layout>