@props([
    'name',
    'label' => null,
    'placeholder' => null,
    'type' => 'text',
    'required' => false,
])

<div class="flex flex-col gap-y-2 relative">
    <label for="{{ $name }}" class="text-sm font-semibold">
        {{ $label ?? $placeholder }}
        @if($required)
            <span class="text-red-500">*</span>
        @endif
    </label>
    <div class="relative">
        <input
            type="{{ $type }}"
            name="{{ $name }}"
            id="{{ $name }}"
            placeholder="{{ $placeholder }}"
            {{ $attributes->class('border px-4 py-2 rounded-lg w-full dark:bg-white dark:text-zinc-900 focus:outline-none transition-all focus:ring-2 focus:ring-indigo-500') }}
        >
    </div>
</div>
