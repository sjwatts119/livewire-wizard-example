<div class="space-y-8">
    <x-wizard.nav :steps="$this->steps()" :currentStep="$this->currentStep()" />

    <section>
        <div class="flex flex-col gap-y-4">
            <x-input.textarea name="message" placeholder="Your Message" wire:model.live="form.message" required />
        </div>
    </section>

    <x-wizard.progression :previousStep="$this->previousStep()" :nextStep="$this->nextStep()" />
</div>
