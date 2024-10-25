<!-- resources/views/components/form-input.blade.php -->
<input
    type="{{ $type ?? 'text' }}"
    name="{{ $name }}"
    id="{{ $id }}"
    placeholder="{{ $placeholder ?? '' }}"
    {{ $attributes->merge(['class' => 'block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm']) }}
/>
