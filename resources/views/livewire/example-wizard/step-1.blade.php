<div class="space-y-8">
    <x-wizard.nav :steps="$this->steps()" :currentStep="$this->currentStep()" />

    <section class="min-h-40">
        <div class="flex flex-col gap-y-4">
            <x-input.text name="name" placeholder="Name" wire:model.live="form.name" required />

            <x-input.text name="email" type="email" placeholder="Email" wire:model.live="form.email" />
        </div>
    </section>

    <x-wizard.progression :previousStep="$this->previousStep()" :nextStep="$this->nextStep()" />
</div>
