<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inklusivitas Pendidikan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white text-gray-800 font-sans">
    <header class="bg-blue-700 text-white py-6">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">
            <div class="text-center md:text-left">
                <h1 class="text-3xl font-bold">Sistem Manajemen Inklusivitas Pendidikan</h1>
                <p class="mt-2">Akses Pendidikan untuk Semua, Tanpa Batasan</p>
            </div>
            <nav class="mt-4 md:mt-0 flex space-x-4">
                @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </nav>
        </div>
    </header>

    <main class="py-12 px-4 md:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-2xl font-semibold mb-4">Tentang Aplikasi</h2>
            <p class="text-gray-700 mb-6">
                Aplikasi ini membantu pengelolaan program pendidikan inklusif bagi anak berkebutuhan khusus. 
                Dengan sistem ini, administrator dan koordinator dapat mengelola program, peserta, serta memantau jalannya pendidikan dengan lebih efektif dan efisien.
            </p>
            
            <div class="grid md:grid-cols-3 gap-6 mt-10">
                <div class="bg-blue-50 p-6 rounded shadow">
                    <h3 class="font-semibold text-lg mb-2">Pengelolaan Program</h3>
                    <p class="text-sm text-gray-600">CRUD program pendidikan inklusif sesuai jenis disabilitas dan tingkat pendidikan.</p>
                </div>
                <div class="bg-blue-50 p-6 rounded shadow">
                    <h3 class="font-semibold text-lg mb-2">Pendaftaran Peserta</h3>
                    <p class="text-sm text-gray-600">Mencatat dan mengelola peserta berdasarkan kebutuhan khusus mereka.</p>
                </div>
                <div class="bg-blue-50 p-6 rounded shadow">
                    <h3 class="font-semibold text-lg mb-2">Monitoring & Evaluasi</h3>
                    <p class="text-sm text-gray-600">Lacak status program dan laporan peserta dengan mudah.</p>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-gray-100 text-center text-sm py-4 text-gray-600">
        &copy; {{ date('Y') }} Sistem Inklusivitas Pendidikan. Dibuat oleh Tim Proyek.
    </footer>
</body>
</html>
