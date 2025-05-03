@props([
    'previousStep' => null,
    'nextStep' => null,
])

<div class="flex gap-4">
    @isset($left)
        {{ $left }}
    @endisset

    @isset($previousStep)
        <x-wizard.progression.button
            :disabled="!$previousStep->canNavigate()"
            wire:click="navigateToStep('{{ $previousStep->title() }}')"
        >
            Back
        </x-wizard.progression.button>
    @endisset

    <div class="flex-grow"></div>

    @isset($nextStep)
        <x-wizard.progression.button
            :disabled="!$nextStep->canNavigate()"
            wire:click="navigateToStep('{{ $nextStep->title() }}')"
        >
            Next
        </x-wizard.progression.button>
    @endisset

    @isset($right)
        {{ $right }}
    @endisset
</div>
