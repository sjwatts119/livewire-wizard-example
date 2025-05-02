@props([
    'current' => false,
    'disabled' => false,
])

@php
    $baseClasses = 'px-4 py-2 rounded-lg transition';

    $stateClasses = match (true) {
        $current => 'bg-indigo-500 hover:bg-indigo-600 text-white cursor-pointer',
        $disabled => 'bg-gray-300 text-gray-400 cursor-default',
        default => 'bg-gray-100 text-gray-600 hover:bg-gray-300 cursor-pointer',
    };
    $classes = $baseClasses . ' ' . $stateClasses;
@endphp

<button {{ $disabled ? $attributes->except('wire:click')->class($classes) : $attributes->class($classes) }} {{ $disabled ? 'disabled' : '' }}>
    {{ $slot }}
</button>
