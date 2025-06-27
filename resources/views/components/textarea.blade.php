@props(['label', 'name', 'required' => false])

<div>
    <label for="{{ $name }}" class="block font-medium text-sm text-gray-700">{{ $label }}</label>
    <textarea name="{{ $name }}" id="{{ $name }}"
              rows="4"
              {{ $required ? 'required' : '' }}
              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring focus:ring-indigo-200 focus:border-indigo-500">{{ old($name, $slot) }}</textarea>
    @error($name)
        <p class="text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

