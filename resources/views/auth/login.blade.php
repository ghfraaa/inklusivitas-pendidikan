{{-- resources/views/auth/login.blade.php --}}
<x-guest-layout>
    <style>
        /* ====== SALIN STYLE DARI REGISTER ====== */
        .login-box{
            background:#fff;
            max-width:400px;
            margin:60px auto;
            padding:32px 28px;
            border-radius:18px;
            box-shadow:0 5px 18px rgba(0,0,0,.15);
        }
        .login-box h2{
            text-align:center;
            margin-bottom:22px;
            font-weight:700;
            font-size:20px;
        }
        .tab-buttons{
            display:flex;
            justify-content:center;
            margin-bottom:26px;
            gap:8px;
        }
        .tab-buttons button{
            border:none;
            padding:6px 30px;
            border-radius:9999px;          /* ← bentuk “pil” */
            font-size:14px;
            cursor:pointer;
            font-weight:500;
        }
        .tab-buttons .inactive{
            background:#bdbdbd;            /* abu utk tab non‑aktif */
            color:#fff;
        }
        .tab-buttons .active{
            background:#0d47a1;            /* biru utk tab aktif  */
            color:#fff;
        }
        .btn-login{
            width:100%;
            background:linear-gradient(to right,#0d47a1,#1976d2);
            border:none;
            padding:10px;
            color:#fff;
            font-weight:700;
            border-radius:10px;
            transition:background .2s ease;
        }
        .btn-login:hover{background:#0b3c8c;}

        /* bulatkan input Breeze */
        input[type="email"],input[type="password"]{
            border-radius:10px !important;
        }
    </style>

    <div class="login-box">
        <h2>Form Login</h2>

        <!-- Tab Login / Daftar -->
        <div class="tab-buttons">
            <!-- Login aktif -->
            <button class="active" disabled>Login</button>
            <!-- Navigasi ke Register -->
            <button class="inactive" onclick="window.location='{{ route('register') }}'">Daftar</button>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- === FORM LOGIN === -->
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="mb-4">
                <x-input-label for="email" :value="__('Masukan Email')" />
                <x-text-input id="email" class="block mt-1 w-full"
                              type="email"
                              name="email"
                              :value="old('email')"
                              required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <x-input-label for="password" :value="__('Masukan Password')" />
                <x-text-input id="password" class="block mt-1 w-full"
                              type="password"
                              name="password"
                              required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center mb-4">
                <input id="remember_me" type="checkbox"
                       class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                       name="remember">
                <label for="remember_me" class="ml-2 text-sm text-gray-600">Ingat saya</label>
            </div>

            <!-- Tombol Masuk & Lupa Password -->
            <div class="flex flex-col gap-4">
                <button type="submit" class="btn-login">Masuk</button>

                @if (Route::has('password.request'))
                    <a class="text-sm text-blue-600 hover:underline text-center"
                       href="{{ route('password.request') }}">
                        Lupa kata sandi?
                    </a>
                @endif
            </div>
        </form>
    </div>
</x-guest-layout>
