@props([
    'name',
    'placeholder' => null,
    'type' => 'text',

])

<div class="flex flex-col gap-y-2">
    <label for="{{ $name }}" class="text-sm font-semibold">Name</label>
    <input
        type="{{ $type }}"
        name="{{ $name }}"
        placeholder="{{ $placeholder }}"
        {{ $attributes->class('border px-4 py-2 rounded-lg dark:bg-white dark:text-zinc-900') }}
    >
</div>

