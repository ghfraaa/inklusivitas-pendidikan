{{-- resources/views/auth/register.blade.php --}}
<x-guest-layout>
    <style>
        body {
            background: linear-gradient(to right, #e6e9ff, #f0f2ff);
            font-family: "Segoe UI", sans-serif;
        }

        .register-box {
            background: white;
            max-width: 400px;
            margin: 60px auto;
            padding: 32px 28px;
            border-radius: 18px;
            box-shadow: 0 5px 18px rgba(0, 0, 0, .15);
        }

        .register-box h2 {
            text-align: center;
            margin-bottom: 22px;
            font-weight: 700;
            font-size: 20px;
        }

        .tab-buttons {
            display: flex;
            justify-content: center;
            margin-bottom: 24px;
            gap: 10px;
        }

        .tab-buttons button {
            border: none;
            padding: 6px 24px;
            border-radius: 20px;
            font-size: 14px;
            cursor: pointer;
            font-weight: 500;
        }

        .tab-buttons .inactive {
            background-color: #bdbdbd;
            color: #fff;
        }

        .tab-buttons .active {
            background: #0d47a1;
            color: white;
        }

        .btn-register {
            width: 100%;
            background: linear-gradient(to right, #0d47a1, #1976d2);
            border: none;
            padding: 10px;
            color: white;
            font-weight: bold;
            border-radius: 10px;
            cursor: pointer;
        }

        .btn-register:hover {
            background: #0b3c8c;
        }

        .login-link {
            text-align: center;
            margin-top: 18px;
            font-size: 14px;
        }

        .login-link a {
            color: #0d47a1;
            text-decoration: none;
            font-weight: 500;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            border-radius: 10px !important;
        }
    </style>

    <div class="register-box">
        <h2>Form Registrasi</h2>

        <div class="tab-buttons">
            <button class="inactive" onclick="window.location='{{ route('login') }}'">Login</button>
            <button class="active" disabled>Daftar</button>
        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Nama lengkap')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Masukan Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Masukan Password')" />
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Ulangi password')" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="mt-6">
                <button type="submit" class="btn-register">Daftar</button>
            </div>
        </form>

        <div class="login-link">
            Sudah punya akun? <a href="{{ route('login') }}">Login sekarang</a>
        </div>
    </div>
</x-guest-layout>
