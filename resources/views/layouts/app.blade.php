<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Aplikasi Inklusif')</title>
    @vite([ 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>

<body class="bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100">
    @include('layouts.navigation')

    <main class="p-6">
        @yield('header')
        @yield('content')
    </main>
</body>
</html>
