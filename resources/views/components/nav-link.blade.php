@props(['active' => false ])
    <a {{ $attributes->merge(['class' => $active
            ? 'bg-gray-900 text-slate-300'
            : 'text-gray-300 hover:bg-gray-700 hover:text-white']) }}
        aria-current="{{ $active ? 'page' : 'false' }}">
        {{ $slot }}
    </a>
