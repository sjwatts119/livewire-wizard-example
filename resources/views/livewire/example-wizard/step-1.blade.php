<div class="space-y-8">
    <x-wizard.nav>
        @foreach($this->steps() as $step)
            <x-wizard.nav.item
                :name="$step->getTitle()"
                :current="$this->currentStep()->is($step)"
                :disabled="!$step->canNavigate()"
                wire:click="navigateToStep('{{ $step->getTitle() }}')"
            >
                {{ $step->getTitle() }}
            </x-wizard.nav.item>
        @endforeach
    </x-wizard.nav>

    <section>
        <div class="flex flex-col gap-y-4">
            <x-input.text name="name" placeholder="Name" wire:model.live="form.name" />

            <x-input.text name="username" placeholder="Username" wire:model.live="form.username" />
        </div>
    </section>
</div>
