@props([
    'name',
    'label' => null,
    'placeholder' => null,
    'required' => false,
])

<div class="flex flex-col gap-y-2">
    <label for="{{ $name }}" class="text-sm font-semibold">
        {{ $label ?? $placeholder }}
        @if($required)
            <span class="text-red-500">*</span>
        @endif
    </label>
    <textarea
        rows="4"
        name="{{ $name }}"
        placeholder="{{ $placeholder }}"
        {{ $attributes->class('border px-4 py-2 rounded-lg dark:bg-white dark:text-zinc-900') }}
    >
    </textarea>
</div>

