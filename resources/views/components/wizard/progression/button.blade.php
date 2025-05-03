@props([
    'disabled' => false,
])

@php
    $baseClasses = 'px-4 py-2 rounded-lg transition max-sm:text-sm';

    $stateClasses = match (true) {
        $disabled => 'bg-gray-300 text-gray-400 cursor-default',
        default => 'bg-white text-gray-600 hover:bg-gray-300 cursor-pointer',
    };
    $classes = $baseClasses . ' ' . $stateClasses;
@endphp

<button {{ $disabled ? $attributes->except('wire:click')->class($classes) : $attributes->class($classes) }} {{ $disabled ? 'disabled' : '' }}>
    {{ $slot }}
</button>
