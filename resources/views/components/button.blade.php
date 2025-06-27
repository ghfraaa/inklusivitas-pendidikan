@props(['type' => 'submit'])

<button type="{{ $type }}"
        class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition">
    {{ $slot }}
</button>
