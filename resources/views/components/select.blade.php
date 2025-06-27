@props(['label', 'name', 'options' => [], 'selected' => old($name), 'required' => false])

<div>
    <label for="{{ $name }}" class="block font-medium text-sm text-gray-700">{{ $label }}</label>
    <select name="{{ $name }}" id="{{ $name }}"
            {{ $required ? 'required' : '' }}
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring focus:ring-indigo-200 focus:border-indigo-500">
        <option value="">-- Pilih --</option>
        @foreach ($options as $key => $val)
            <option value="{{ $key }}" @selected($selected == $key)>{{ $val }}</option>
        @endforeach
    </select>
    @error($name)
        <p class="text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

