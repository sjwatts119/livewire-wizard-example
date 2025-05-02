<div class="space-y-16">
    <x-wizard.nav>
        @foreach($this->steps() as $step)
            <x-wizard.nav.item
                :current="$this->currentStep()->is($step)"
                :disabled="!$step->canNavigate()"
                wire:click="navigateToStep('{{ $step->getTitle() }}')"
            >
                {{ $step->getTitle() }}
            </x-wizard.nav.item>
        @endforeach
    </x-wizard.nav>
</div>
