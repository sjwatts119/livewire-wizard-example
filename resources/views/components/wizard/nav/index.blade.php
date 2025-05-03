@props([
    'steps' => [],
    'currentStep' => null,
])

<div {{ $attributes->class('flex gap-4 items-center') }}>
    @foreach($steps as $step)
        <x-wizard.nav.item
            :name="$step->title()"
            :current="$currentStep->is($step)"
            :disabled="!$step->canNavigate()"
            wire:click="navigateToStep('{{ $step->title() }}')"
        >
            {{ $step->title() }}
        </x-wizard.nav.item>
    @endforeach
</div>
