@props([
    'current' => false,
    'disabled' => false,
])

@php
    $baseClasses = 'px-4 py-2 rounded-lg';

    $stateClasses = match (true) {
        $current => 'bg-blue-500 text-white cursor-pointer',
        $disabled => 'bg-gray-200 text-gray-400 cursor-none',
        default => 'bg-gray-100 text-gray-600 hover:bg-blue-500 hover:text-white cursor-pointer',
    };
    $classes = $baseClasses . ' ' . $stateClasses;
@endphp

<button {{ $attributes->class($classes) }}>
    {{ $slot }}
</button>
