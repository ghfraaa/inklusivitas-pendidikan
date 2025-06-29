<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inklusivitas Pendidikan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700&display=swap');

        * {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
        }

        @keyframes gradientShift {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .hero-pattern {
            background-image:
                radial-gradient(circle at 25% 25%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 75% 75%, rgba(255, 255, 255, 0.1) 0%, transparent 50%);
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .card-hover {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .card-hover::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transition: left 0.5s;
        }

        .card-hover:hover::before {
            left: 100%;
        }

        .card-hover:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        .floating-elements {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }

        .floating-elements div {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 20s infinite linear;
        }

        .floating-elements div:nth-child(1) {
            width: 80px;
            height: 80px;
            left: 10%;
            animation-delay: 0s;
        }

        .floating-elements div:nth-child(2) {
            width: 120px;
            height: 120px;
            left: 80%;
            animation-delay: 5s;
        }

        .floating-elements div:nth-child(3) {
            width: 60px;
            height: 60px;
            left: 50%;
            animation-delay: 10s;
        }

        @keyframes float {
            0% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }

            10% {
                opacity: 1;
            }

            90% {
                opacity: 1;
            }

            100% {
                transform: translateY(-100px) rotate(360deg);
                opacity: 0;
            }
        }

        .wave {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
        }

        .wave svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 80px;
            transform: rotateY(180deg);
        }

        .wave .shape-fill {
            fill: #f9fafb;
        }

        .pulse-glow {
            animation: pulseGlow 3s ease-in-out infinite;
        }

        @keyframes pulseGlow {

            0%,
            100% {
                box-shadow: 0 0 20px rgba(167, 139, 250, 0.3);
            }

            50% {
                box-shadow: 0 0 40px rgba(167, 139, 250, 0.6);
            }
        }

        .nav-link {
            position: relative;
            padding: 12px 24px;
            border-radius: 12px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .nav-link::before {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(255, 255, 255, 0.1);
            border-radius: inherit;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .nav-link:hover::before {
            opacity: 1;
        }

        .icon-wrapper {
            background: linear-gradient(135deg, #74b9ff, #0984e3);
            padding: 1.5rem;
            border-radius: 20px;
            display: inline-flex;
            margin-bottom: 1.5rem;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .icon-wrapper::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(45deg, transparent 30%, rgba(255, 255, 255, 0.3) 50%, transparent 70%);
            transform: translateX(-100%);
            transition: transform 0.6s;
        }

        .card-hover:hover .icon-wrapper::before {
            transform: translateX(100%);
        }

        .stats-counter {
            font-family: 'Poppins', sans-serif;
            font-weight: 800;
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .cta-button {
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #667eea, #764ba2);
            transition: all 0.3s ease;
        }

        .cta-button::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, #764ba2, #f093fb);
            opacity: 0;
            transition: opacity 0.3s;
        }

        .cta-button:hover::before {
            opacity: 1;
        }

        .cta-button span {
            position: relative;
            z-index: 1;
        }

        .cta-button2 {
            position: relative;
            overflow: hidden;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border: 4px solid rgb(118, 75, 162);
            transition: all 0.3s ease;
            transform: scale(1);
        }

        .cta-button2::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, #667eea, #764ba2);
            opacity: 0;
            transition: opacity 0.3s;
            z-index: 0;
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(118, 75, 162, 0.5);
        }

        .cta-button2:hover::before {
            opacity: 1;
        }

        .cta-button2 span,
        .cta-button2 i {
            position: relative;
            z-index: 1;
        }

        .parallax-bg {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            padding: 2rem 0;
        }

        .testimonial-card {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.9) 0%, rgba(255, 255, 255, 0.7) 100%);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 20px;
            padding: 2rem;
            transition: all 0.3s ease;
        }

        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .section-reveal {
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .section-reveal.revealed {
            opacity: 1;
            transform: translateY(0);
        }

        .logo-text {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            background: linear-gradient(135deg, #fbbf24, #f59e0b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800">
    <!-- Header with animated gradient background -->
    <header class="gradient-bg hero-pattern text-white py-12 relative overflow-hidden min-h-screen flex items-center">
        <!-- Floating background elements -->
        <div class="floating-elements">
            <div></div>
            <div></div>
            <div></div>
        </div>

        <div class="absolute inset-0 " style="background-image: url('/asset/img/Inclusive_Classroom.png');"></div>
        <div class="absolute inset-0 bg-black bg-opacity-60"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="flex flex-col lg:flex-row items-center justify-between mb-12">
                <!-- Logo and Navigation -->
                <div class="flex items-center space-x-8 mb-8 lg:mb-0">
                    <div class="flex items-center space-x-3">
                        <div
                            class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center glass-effect">
                            <i class="fas fa-graduation-cap text-2xl text-yellow-300"></i>
                        </div>
                        <span class="logo-text text-xl font-bold">EduInclusive</span>
                    </div>
                </div>

                <!-- Navigation -->
                <nav class="flex space-x-2">
                    <a href="#" class="nav-link font-semibold relative z-10">
                        <i class="fas fa-home mr-2"></i>Beranda
                    </a>
                    <a href="#" class="nav-link font-semibold relative z-10">
                        <i class="fas fa-info-circle mr-2"></i>Tentang
                    </a>
                    <a href="#" class="nav-link font-semibold relative z-10">
                        <i class="fas fa-phone mr-2"></i>Kontak
                    </a>
                    <nav class="flex flex-col sm:flex-row gap-6 justify-center items-center ">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}"
                                    class="cta-button px-8 py-4 font-bold rounded-xl text-md transform hover:scale-105 transition-all pulse-glow flex items-center gap-2">
                                    <span>>Dashboard</span></a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="cta-button2 text-white font-semibold px-6 py-3 rounded-xl transform hover:scale-105 hover:shadow-xl hover:border-white transition-all flex items-center gap-2">
                                    <span><i class="fas fa-sign-in-alt"></i> Login</span>
                                </a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="cta-button px-8 py-4 font-bold rounded-xl text-md transform hover:scale-105 transition-all pulse-glow flex items-center gap-2">
                                        <span><i class="fas fa-user-plus"></i> Register</span>
                                    </a>
                                @endif
                            @endauth
                        @endif
                    </nav>
                </nav>
            </div>

            <!-- Hero Content -->
            <div class="text-center max-w-5xl mx-auto">
                <div class="mb-8">
                    <h1 class="text-5xl lg:text-7xl font-bold mb-6 leading-tight">
                        Sistem Manajemen
                        <span class="block logo-text text-6xl lg:text-8xl mt-2">Inklusivitas Pendidikan</span>
                    </h1>
                    <p class="text-2xl lg:text-3xl opacity-90 font-light mb-8 max-w-4xl mx-auto leading-relaxed">
                        Membangun jembatan menuju pendidikan berkualitas untuk <span
                            class="logo-text font-semibold">semua anak</span>,
                        tanpa memandang keterbatasan fisik atau mental
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                    <button
                        onclick="document.getElementById('about').scrollIntoView({ behavior: 'smooth', block: 'start' });"
                        class="cta-button px-8 py-4 font-bold rounded-xl text-lg transform hover:scale-105 transition-all pulse-glow">
                        <span><i class="fas fa-rocket mr-3"></i>Mulai Sekarang</span>
                    </button>
                    <button
                        onclick="document.getElementById('program').scrollIntoView({ behavior: 'smooth', block: 'start' });"
                        class="glass-effect px-8 py-4 font-semibold rounded-xl text-lg hover:bg-white hover:bg-opacity-20 transition-all">
                        <i class="fas fa-list-alt mr-3"></i>Lihat Program
                    </button>
                </div>

                <!-- Stats Preview -->
                <div class="grid grid-cols-3 gap-8 mt-16 max-w-2xl mx-auto">
                    <div class="glass-effect rounded-2xl p-6 text-center">
                        <div class="stats-counter text-4xl font-bold mb-2">1000+</div>
                        <p class="text-sm opacity-90">Siswa Aktif</p>
                    </div>
                    <div class="glass-effect rounded-2xl p-6 text-center">
                        <div class="stats-counter text-4xl font-bold mb-2">50+</div>
                        <p class="text-sm opacity-90">Program</p>
                    </div>
                    <div class="glass-effect rounded-2xl p-6 text-center">
                        <div class="stats-counter text-4xl font-bold mb-2">95%</div>
                        <p class="text-sm opacity-90">Kepuasan</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Enhanced Wave separator -->
        <div class="wave">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="shape-fill"></path>
            </svg>
        </div>
    </header>

    <!-- Main Content -->
    <main class="relative">
        <!-- About Section -->
        <section id="about" class="py-20 px-4 md:px-8"></section>
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-20 section-reveal">
                <div
                    class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-purple-500 to-pink-500 rounded-3xl mb-8 pulse-glow">
                    <i class="fas fa-heart text-3xl text-white"></i>
                </div>
                <h2 class="text-5xl lg:text-6xl font-bold mb-8 text-gray-800">
                    Tentang <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-600">Aplikasi</span>
                </h2>
                <p class="text-xl lg:text-2xl text-gray-600 max-w-5xl mx-auto leading-relaxed">
                    Platform revolusioner yang menggabungkan teknologi modern dengan pendekatan humanis untuk
                    menciptakan
                    ekosistem pendidikan inklusif yang <span class="text-purple-600 font-semibold">mengubah
                        hidup</span>.
                </p>
            </div>

            <!-- Enhanced Feature Cards -->
            <div class="feature-grid">
                <!-- Card 1 -->
                <div class="card-hover bg-white rounded-3xl shadow-xl border border-gray-100 p-8 relative">
                    <div class="icon-wrapper w-20 h-20 mx-auto"
                        style="background: linear-gradient(135deg, #74b9ff, #0984e3);">
                        <i class="fas fa-cogs text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">Pengelolaan Program</h3>
                    <p class="text-gray-600 leading-relaxed mb-6 text-center">
                        Sistem manajemen komprehensif untuk mengelola program pendidikan inklusif dengan interface
                        yang intuitif dan fitur-fitur canggih.
                    </p>
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            CRUD Program Otomatis
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            Klasifikasi Berdasarkan Disabilitas
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            Dashboard Analitik Real-time
                        </div>
                    </div>
                    <button
                        class="w-full bg-gradient-to-r from-blue-500 to-blue-600 text-white py-3 rounded-xl font-semibold hover:from-blue-600 hover:to-blue-700 transition-all">
                        <i class="fas fa-arrow-right mr-2"></i>Explore Feature
                    </button>
                </div>

                <!-- Card 2 -->
                <div class="card-hover bg-white rounded-3xl shadow-xl border border-gray-100 p-8 relative">
                    <div class="icon-wrapper w-20 h-20 mx-auto"
                        style="background: linear-gradient(135deg, #fd79a8, #e84393);">
                        <i class="fas fa-users text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">Pendaftaran Peserta</h3>
                    <p class="text-gray-600 leading-relaxed mb-6 text-center">
                        Platform pendaftaran yang memahami kebutuhan unik setiap siswa dengan sistem tracking
                        komprehensif dan dukungan personal.
                    </p>
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            Profil Kebutuhan Individual
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            Sistem Tracking Komprehensif
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            Dukungan Multi-bahasa
                        </div>
                    </div>
                    <button
                        class="w-full bg-gradient-to-r from-pink-500 to-pink-600 text-white py-3 rounded-xl font-semibold hover:from-pink-600 hover:to-pink-700 transition-all">
                        <i class="fas fa-arrow-right mr-2"></i>Explore Feature
                    </button>
                </div>

                <!-- Card 3 -->
                <div class="card-hover bg-white rounded-3xl shadow-xl border border-gray-100 p-8 relative">
                    <div class="icon-wrapper w-20 h-20 mx-auto"
                        style="background: linear-gradient(135deg, #00cec9, #00b894);">
                        <i class="fas fa-chart-line text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">Monitoring & Evaluasi</h3>
                    <p class="text-gray-600 leading-relaxed mb-6 text-center">
                        Dashboard analitik canggih dengan AI-powered insights untuk memantau progress dan
                        mengoptimalkan outcome pendidikan.
                    </p>
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            AI-Powered Analytics
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            Laporan Otomatis
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            Prediksi Outcome
                        </div>
                    </div>
                    <button
                        class="w-full bg-gradient-to-r from-teal-500 to-teal-600 text-white py-3 rounded-xl font-semibold hover:from-teal-600 hover:to-teal-700 transition-all">
                        <i class="fas fa-arrow-right mr-2"></i>Explore Feature
                    </button>
                </div>
            </div>
        </div>
        </section>

        <!-- Programs Section -->
        <section id="program" class="py-20 px-4 md:px-8 bg-gradient-to-br from-gray-50 to-white relative overflow-hidden">
            <div class="max-w-7xl mx-auto">
                <!-- Heading -->
                <div class="text-center mb-16 section-reveal">
                    <div
                        class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-indigo-500 to-purple-500 rounded-3xl mb-6 pulse-glow">
                        <i class="fas fa-lightbulb text-white text-3xl"></i>
                    </div>
                    <h2 class="text-4xl lg:text-5xl font-bold text-gray-800 mb-6">
                        Program <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600">Kami</span>
                    </h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                        Berbagai program inovatif yang dirancang untuk memenuhi kebutuhan pendidikan inklusif di seluruh
                        Indonesia.
                    </p>
                </div>

                <!-- Cards -->
                <div class="grid md:grid-cols-3 gap-8 section-reveal">
                    @foreach($programs as $program)
                        <div
                            class="bg-white rounded-3xl shadow-xl border border-gray-100 p-8 hover:shadow-2xl transition-all duration-300 card-hover group">
                            <h3 class="text-2xl font-bold text-gray-800 mb-4 group-hover:text-indigo-600 transition-colors">
                                {{ $program->nama_program }}
                            </h3>
                            <p class="text-gray-600 leading-relaxed mb-4">
                                {{ Str::limit($program->deskripsi, 100) }}
                            </p>
                            <div class="flex items-center justify-between">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold
                                    @if($program->status === 'aktif')
                                        bg-green-100 text-green-700 border border-green-300
                                    @elseif($program->status === 'pending')
                                        bg-yellow-100 text-yellow-700 border border-yellow-300
                                    @else
                                        bg-gray-100 text-gray-700 border border-gray-300
                                    @endif
                                    shadow-sm mr-2">
                                    <i class="fas fa-circle mr-1 text-[0.6em]
                                        @if($program->status === 'aktif') text-green-500
                                        @elseif($program->status === 'pending') text-yellow-500
                                        @else text-gray-400
                                        @endif"></i>
                                    {{ ucfirst($program->status) }}
                                </span>
                                <a href="{{ route('programs.show', $program->id) }}"
                                    class="text-indigo-500 hover:text-indigo-700 font-semibold transition-all">
                                    Selengkapnya →
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- CTA -->
                <div class="text-center mt-16">
                    <a href="{{ route('programs.index') }}"
                        class="inline-block px-8 py-4 font-bold text-white text-lg rounded-xl bg-gradient-to-r from-indigo-500 to-purple-600 hover:from-purple-600 hover:to-indigo-700 transition-all pulse-glow">
                        <i class="fas fa-list mr-2"></i>Lihat Semua Program
                    </a>
                </div>
            </div>
        </section>



        <!-- Enhanced Stats Section -->
        <section class="py-20 parallax-bg"
            style="background-image: linear-gradient(rgba(102, 126, 234, 0.9), rgba(118, 75, 162, 0.9)), url('data:image/svg+xml,<svg xmlns=\"
            http://www.w3.org/2000/svg\" viewBox=\"0 0 100 100\">
            <defs>
                <pattern id=\"grain\" width=\"100\" height=\"100\" patternUnits=\"userSpaceOnUse\">
                    <circle cx=\"50\" cy=\"50\" r=\"1\" fill=\"white\" opacity=\"0.1\" />
                </pattern>
            </defs>
            <rect width=\"100\" height=\"100\" fill=\"url(%23grain)\" /></svg>');">
            <div class="max-w-6xl mx-auto px-6">
                <div class="text-center mb-16 section-reveal">
                    <h3 class="text-4xl lg:text-5xl font-bold text-white mb-6">Dampak yang Telah Kami
                        Ciptakan</h3>
                    <p class="text-xl text-white opacity-90 max-w-3xl mx-auto">
                        Angka-angka berikut merepresentasikan komitmen kami dalam menciptakan perubahan
                        nyata dalam
                        dunia pendidikan inklusif
                    </p>
                </div>

                <div class="grid md:grid-cols-4 gap-8 section-reveal">
                    <div class="text-center glass-effect rounded-3xl p-8 hover:scale-105 transition-all">
                        <i class="fas fa-users text-4xl text-yellow-300 mb-4"></i>
                        <div class="stats-counter text-5xl font-bold text-white mb-2">1,247</div>
                        <p class="text-white opacity-90 font-medium">Siswa Terdaftar</p>
                        <p class="text-sm text-white opacity-70 mt-2">Aktif di seluruh Indonesia</p>
                    </div>
                    <div class="text-center glass-effect rounded-3xl p-8 hover:scale-105 transition-all">
                        <i class="fas fa-graduation-cap text-4xl text-yellow-300 mb-4"></i>
                        <div class="stats-counter text-5xl font-bold text-white mb-2">67</div>
                        <p class="text-white opacity-90 font-medium">Program Aktif</p>
                        <p class="text-sm text-white opacity-70 mt-2">Berbagai jenis disabilitas</p>
                    </div>
                    <div class="text-center glass-effect rounded-3xl p-8 hover:scale-105 transition-all">
                        <i class="fas fa-heart text-4xl text-yellow-300 mb-4"></i>
                        <div class="stats-counter text-5xl font-bold text-white mb-2">98.5%</div>
                        <p class="text-white opacity-90 font-medium">Tingkat Kepuasan</p>
                        <p class="text-sm text-white opacity-70 mt-2">Dari orang tua dan siswa</p>
                    </div>
                    <div class="text-center glass-effect rounded-3xl p-8 hover:scale-105 transition-all">
                        <i class="fas fa-award text-4xl text-yellow-300 mb-4"></i>
                        <div class="stats-counter text-5xl font-bold text-white mb-2">156</div>
                        <p class="text-white opacity-90 font-medium">Penghargaan</p>
                        <p class="text-sm text-white opacity-70 mt-2">Nasional & Internasional</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="py-20 px-4 md:px-8 bg-gradient-to-br from-gray-50 to-gray-100">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16 section-reveal">
                    <h3 class="text-4xl lg:text-5xl font-bold text-gray-800 mb-6">
                        Apa Kata <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-600">Mereka</span>
                    </h3>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        Testimoni nyata dari keluarga dan institusi yang telah merasakan dampak positif
                        platform kami
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-8 section-reveal">
                    <div class="testimonial-card">
                        <div class="flex items-center mb-4">
                            <div
                                class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-500 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-user text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">Sari Dewi</h4>
                                <p class="text-sm text-gray-600">Orang Tua Siswa</p>
                            </div>
                        </div>
                        <p class="text-gray-700 italic mb-4">
                            "Platform ini benar-benar mengubah hidup anak saya. Dukungan yang diberikan
                            sangat personal
                            dan komprehensif."
                        </p>
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="flex items-center mb-4">
                            <div
                                class="w-12 h-12 bg-gradient-to-br from-blue-500 to-teal-500 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-user-tie text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">Dr. Ahmad Rizki</h4>
                                <p class="text-sm text-gray-600">Kepala Sekolah</p>
                            </div>
                        </div>
                        <p class="text-gray-700 italic mb-4">
                            "Sistem ini memudahkan kami dalam mengelola program inklusif. Dashboard
                            analitiknya sangat
                            membantu dalam pengambilan keputusan."
                        </p>
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="flex items-center mb-4">
                            <div
                                class="w-12 h-12 bg-gradient-to-br from-green-500 to-teal-500 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-user-graduate text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">Maya Sinta</h4>
                                <p class="text-sm text-gray-600">Terapis Pendidikan</p>
                            </div>
                        </div>
                        <p class="text-gray-700 italic mb-4">
                            "Fitur monitoring yang ada sangat detail dan membantu saya dalam melacak
                            perkembangan setiap
                            siswa secara individual."
                        </p>
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Enhanced CTA Section -->
        <section class="py-24 px-4 md:px-8 relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-purple-600 via-blue-600 to-teal-500"></div>
            <div class="absolute inset-0 bg-black opacity-20"></div>

            <!-- Animated background elements -->
            <div class="absolute inset-0">
                <div class="absolute top-10 left-10 w-32 h-32 bg-white opacity-10 rounded-full animate-pulse">
                </div>
                <div class="absolute top-1/2 right-20 w-24 h-24 bg-yellow-300 opacity-20 rounded-full animate-bounce">
                </div>
                <div class="absolute bottom-20 left-1/4 w-16 h-16 bg-pink-300 opacity-30 rounded-full animate-ping">
                </div>
            </div>

            <div class="max-w-5xl mx-auto text-center relative z-10">
                <div class="mb-12">
                    <div
                        class="inline-flex items-center justify-center w-24 h-24 bg-white bg-opacity-20 rounded-3xl mb-8 pulse-glow">
                        <i class="fas fa-rocket text-4xl text-white"></i>
                    </div>
                    <h3 class="text-5xl lg:text-6xl font-bold text-white mb-8 leading-tight">
                        Bergabunglah dengan
                        <span class="logo-text block text-6xl lg:text-7xl mt-2">Revolusi Pendidikan</span>
                    </h3>
                    <p class="text-2xl text-white opacity-90 mb-12 max-w-3xl mx-auto leading-relaxed">
                        Jadilah bagian dari komunitas yang mengubah cara dunia memandang pendidikan
                        inklusif.
                        <span class="font-semibold">Masa depan dimulai dari sekarang.</span>
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center mb-12">
                    <button
                        class="cta-button px-12 py-5 font-bold text-xl rounded-2xl text-white transform hover:scale-105 transition-all pulse-glow group">
                        <span class="flex items-center">
                            <i class="fas fa-user-plus mr-3 group-hover:rotate-12 transition-transform"></i>
                            Daftar Gratis Sekarang
                        </span>
                    </button>
                    <button
                        class="glass-effect px-12 py-5 font-semibold text-xl rounded-2xl text-white hover:bg-white hover:bg-opacity-20 transition-all group">
                        <i class="fas fa-video mr-3 group-hover:scale-110 transition-transform"></i>
                        Tonton Demo Live
                    </button>
                </div>

                <!-- Trust indicators -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 max-w-3xl mx-auto">
                    <div class="glass-effect rounded-2xl p-4 text-center">
                        <i class="fas fa-shield-alt text-2xl text-green-300 mb-2"></i>
                        <p class="text-white text-sm font-semibold">100% Secure</p>
                    </div>
                    <div class="glass-effect rounded-2xl p-4 text-center">
                        <i class="fas fa-clock text-2xl text-blue-300 mb-2"></i>
                        <p class="text-white text-sm font-semibold">24/7 Support</p>
                    </div>
                    <div class="glass-effect rounded-2xl p-4 text-center">
                        <i class="fas fa-mobile-alt text-2xl text-pink-300 mb-2"></i>
                        <p class="text-white text-sm font-semibold">Mobile Ready</p>
                    </div>
                    <div class="glass-effect rounded-2xl p-4 text-center">
                        <i class="fas fa-cloud text-2xl text-purple-300 mb-2"></i>
                        <p class="text-white text-sm font-semibold">Cloud Based</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Enhanced Footer -->
    <footer class="bg-gray-900 text-white py-16 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-purple-900 to-gray-900 opacity-50"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="grid md:grid-cols-5 gap-12 mb-12">
                <!-- Logo and Description -->
                <div class="md:col-span-2">
                    <div class="flex items-center space-x-3 mb-6">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-500 rounded-xl flex items-center justify-center">
                            <i class="fas fa-graduation-cap text-2xl text-white"></i>
                        </div>
                        <span class="logo-text text-2xl font-bold">EduInclusive</span>
                    </div>
                    <p class="text-gray-300 mb-6 leading-relaxed text-lg">
                        Membangun masa depan pendidikan yang inklusif, berkelanjutan, dan berdampak positif untuk semua
                        anak Indonesia.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#"
                            class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center hover:scale-110 transition-all">
                            <i class="fab fa-facebook-f text-white"></i>
                        </a>
                        <a href="#"
                            class="w-12 h-12 bg-gradient-to-br from-blue-400 to-blue-500 rounded-xl flex items-center justify-center hover:scale-110 transition-all">
                            <i class="fab fa-twitter text-white"></i>
                        </a>
                        <a href="#"
                            class="w-12 h-12 bg-gradient-to-br from-pink-500 to-pink-600 rounded-xl flex items-center justify-center hover:scale-110 transition-all">
                            <i class="fab fa-instagram text-white"></i>
                        </a>
                        <a href="#"
                            class="w-12 h-12 bg-gradient-to-br from-blue-600 to-blue-700 rounded-xl flex items-center justify-center hover:scale-110 transition-all">
                            <i class="fab fa-linkedin-in text-white"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h5 class="font-bold text-xl mb-6 text-white">Platform</h5>
                    <ul class="space-y-3">
                        <li><a href="#"
                                class="text-gray-300 hover:text-white transition-colors flex items-center group">
                                <i
                                    class="fas fa-chevron-right mr-2 text-purple-400 group-hover:translate-x-1 transition-transform"></i>
                                Dashboard
                            </a></li>
                        <li><a href="#"
                                class="text-gray-300 hover:text-white transition-colors flex items-center group">
                                <i
                                    class="fas fa-chevron-right mr-2 text-purple-400 group-hover:translate-x-1 transition-transform"></i>
                                Program Management
                            </a></li>
                        <li><a href="#"
                                class="text-gray-300 hover:text-white transition-colors flex items-center group">
                                <i
                                    class="fas fa-chevron-right mr-2 text-purple-400 group-hover:translate-x-1 transition-transform"></i>
                                Student Registration
                            </a></li>
                        <li><a href="#"
                                class="text-gray-300 hover:text-white transition-colors flex items-center group">
                                <i
                                    class="fas fa-chevron-right mr-2 text-purple-400 group-hover:translate-x-1 transition-transform"></i>
                                Analytics
                            </a></li>
                    </ul>
                </div>

                <!-- Support -->
                <div>
                    <h5 class="font-bold text-xl mb-6 text-white">Dukungan</h5>
                    <ul class="space-y-3">
                        <li><a href="#"
                                class="text-gray-300 hover:text-white transition-colors flex items-center group">
                                <i
                                    class="fas fa-chevron-right mr-2 text-purple-400 group-hover:translate-x-1 transition-transform"></i>
                                Help Center
                            </a></li>
                        <li><a href="#"
                                class="text-gray-300 hover:text-white transition-colors flex items-center group">
                                <i
                                    class="fas fa-chevron-right mr-2 text-purple-400 group-hover:translate-x-1 transition-transform"></i>
                                Documentation
                            </a></li>
                        <li><a href="#"
                                class="text-gray-300 hover:text-white transition-colors flex items-center group">
                                <i
                                    class="fas fa-chevron-right mr-2 text-purple-400 group-hover:translate-x-1 transition-transform"></i>
                                Training
                            </a></li>
                        <li><a href="#"
                                class="text-gray-300 hover:text-white transition-colors flex items-center group">
                                <i
                                    class="fas fa-chevron-right mr-2 text-purple-400 group-hover:translate-x-1 transition-transform"></i>
                                Community
                            </a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h5 class="font-bold text-xl mb-6 text-white">Kontak Kami</h5>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <i class="fas fa-envelope text-purple-400 mr-3"></i>
                            <span class="text-gray-300">hello@eduinclusive.id</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-phone text-purple-400 mr-3"></i>
                            <span class="text-gray-300">+62 21 1234 5678</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-map-marker-alt text-purple-400 mr-3 mt-1"></i>
                            <span class="text-gray-300">Jakarta, Indonesia<br>Jl. Pendidikan No. 123</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom section -->
            <div class="border-t border-gray-700 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 mb-4 md:mb-0">
                    &copy; 2025 EduInclusive. Dibuat dengan <i class="fas fa-heart text-red-500 mx-1"></i> untuk masa
                    depan pendidikan Indonesia.
                </p>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">Privacy Policy</a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">Terms of Service</a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">Cookies</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript for scroll animations -->
    <script>
        // Reveal sections on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.section-reveal').forEach(el => {
            observer.observe(el);
        });

        // Smooth scroll for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Counter animation for stats
        function animateCounters() {
            const counters = document.querySelectorAll('.stats-counter');
            counters.forEach(counter => {
                const originalText = counter.textContent;
                const target = parseFloat(counter.textContent.replace(/[^\d.]/g, ''));
                const isPercent = counter.textContent.includes('%');
                const isPlus = counter.textContent.includes('+');
                let current = 0;
                const increment = target / 100;

                const updateCounter = () => {
                    if (current < target) {
                        current += increment;
                        let display = Math.ceil(current).toLocaleString();
                        if (isPercent) display += '%';
                        if (isPlus) display += '+';
                        counter.textContent = display;
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = originalText;
                    }
                };

                // Start animation when element is visible
                const obs = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            updateCounter();
                            obs.unobserve(entry.target);
                        }
                    });
                });

                obs.observe(counter);
            });
        }

        // Initialize counter animation
        animateCounters();

        // Add floating animation to background elements
        function createFloatingElements() {
            const header = document.querySelector('header');
            const floatingContainer = header.querySelector('.floating-elements');

            setInterval(() => {
                if (floatingContainer.children.length < 6) {
                    const element = document.createElement('div');
                    element.style.left = Math.random() * 100 + '%';
                    element.style.animationDuration = (Math.random() * 10 + 15) + 's';
                    const size = Math.random() * 60 + 40;
                    element.style.width = element.style.height = size + 'px';
                    floatingContainer.appendChild(element);

                    // Remove element after animation
                    setTimeout(() => {
                        if (element.parentNode) {
                            element.parentNode.removeChild(element);
                        }
                    }, 25000);
                }
            }, 3000);
        }

        // Initialize floating elements
        createFloatingElements();
    </script>