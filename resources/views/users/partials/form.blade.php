<div class="grid grid-cols-1 gap-6">
    <!-- Nama -->
    <div>
        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama</label>
        <input 
            type="text" 
            name="name" 
            id="name"
            value="{{ old('name', $user->name) }}"
            required
            class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white placeholder-gray-400 text-gray-800 transition-all duration-200"
            placeholder="Masukkan nama lengkap">
    </div>

    <!-- Email -->
    <div>
        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
        <input 
            type="email" 
            name="email" 
            id="email"
            value="{{ old('email', $user->email) }}"
            required
            class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white placeholder-gray-400 text-gray-800 transition-all duration-200"
            placeholder="contoh@email.com">
    </div>

    <!-- Password -->
    @if(Route::is('users.create'))
    <div>
        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
        <input 
            type="password" 
            name="password" 
            id="password"
            required
            class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white placeholder-gray-400 text-gray-800 transition-all duration-200"
            placeholder="Minimal 8 karakter">
    </div>
    @endif

    <input type="hidden" name="role" value="coordinator">
</div>
