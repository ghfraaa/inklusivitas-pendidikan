<div class="grid grid-cols-1 gap-4">
    <div>
        <label class="block">Nama</label>
        <input type="text" name="name" value="{{ old('name', $user->name) }}" class="w-full border rounded px-3 py-2" required>
    </div>
    <div>
        <label class="block">Email</label>
        <input type="email" name="email" value="{{ old('email', $user->email) }}" class="w-full border rounded px-3 py-2" required>
    </div>

    @if(Route::is('users.create'))
    <div>
        <label class="block">Password</label>
        <input type="password" name="password" class="w-full border rounded px-3 py-2" required>
    </div>
    @endif

    <input type="hidden" name="role" value="coordinator">
</div>
