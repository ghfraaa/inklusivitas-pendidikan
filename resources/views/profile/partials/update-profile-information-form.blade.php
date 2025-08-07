<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>
        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <!-- Kirim verifikasi ulang -->
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <!-- Form Update Profil -->
    <form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <!-- Upload & Dropdown Foto Profil -->
        <div class="relative w-28 h-28 group">
            <!-- Tombol trigger -->
            <button type="button" id="profileDropdownBtn" class="focus:outline-none relative">
                <img id="profilePreview"
                    src="{{ $user->profile_photo_path ? asset('storage/' . $user->profile_photo_path) : 'https://ui-avatars.com/api/?name=' . urlencode($user->name) }}"
                    alt="Foto Profil"
                    class="w-28 h-28 object-cover rounded-full border shadow-lg" />
                <!-- Hover icon -->
                <span class="absolute inset-0 bg-black/40 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15.232 5.232l3.536 3.536M9 13l6.586-6.586a2 2 0 112.828 2.828L11.828 15.828a2 2 0 01-1.414.586H9v-2.414a2 2 0 01.586-1.414z" />
                    </svg>
                </span>
            </button>

            <!-- Dropdown Menu -->
            <div id="profileDropdownMenu" class="hidden absolute left-1/2 -translate-x-1/2 top-full mt-2 w-40 bg-white rounded shadow-lg z-10">
                <ul class="py-1 text-gray-700 text-sm">
                    <!-- Change image -->
                    <li>
                        <label for="photo" class="block px-4 py-2 hover:bg-gray-100 cursor-pointer">Change Image</label>
                    </li>
                    <!-- View image -->
                    <li>
                        @if ($user->profile_photo_path)
                            <a href="{{ asset('storage/' . $user->profile_photo_path) }}" target="_blank"
                                class="block px-4 py-2 hover:bg-gray-100">View Image</a>
                        @else
                            <span class="block px-4 py-2 text-gray-400 cursor-not-allowed">No Image</span>
                        @endif
                    </li>
                    <!-- Remove photo -->
                    <li>
                        <form id="remove-photo-form" method="post" action="{{ route('profile.remove-photo') }}">
                            @csrf
                            @method('DELETE')
                        </form>
                        <button type="submit" form="remove-photo-form"
                            class="block w-full text-left px-4 py-2 hover:bg-gray-100 text-red-600">Remove Photo</button>
                    </li>
                </ul>
            </div>

            <!-- Input file tersembunyi -->
            <input type="file" name="photo" id="photo" accept="image/*" class="hidden"
                onchange="previewProfile(event)">
        </div>

        <!-- Input Nama -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <!-- Input Email -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full"
                :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}
                        <button form="send-verification"
                            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>
                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <!-- Tombol Simpan -->
        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition
                    x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600">
                    {{ __('Saved.') }}
                </p>
            @endif
        </div>
    </form>
</section>

<!-- SCRIPT DROPDOWN + PREVIEW -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const btn = document.getElementById('profileDropdownBtn');
        const menu = document.getElementById('profileDropdownMenu');

        document.addEventListener('click', function (e) {
            if (btn.contains(e.target)) {
                menu.classList.toggle('hidden');
            } else if (!menu.contains(e.target)) {
                menu.classList.add('hidden');
            }
        });
    });

    function previewProfile(event) {
        const reader = new FileReader();
        reader.onload = function () {
            const output = document.getElementById('profilePreview');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
