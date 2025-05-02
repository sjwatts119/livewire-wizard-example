<div class="space-y-8">
    <x-wizard.nav :steps="$this->steps()" :currentStep="$this->currentStep()" />

    <section>
        <div class="flex flex-col gap-y-4">
            <h2 class="text-xl font-semibold">Confirm your message:</h2>
            <ul class="list-none space-y-4">
                <li>
                    <strong class="font-display font-bold">Name:</strong> {{ $this->form->name }}
                </li>
                <li>
                    <strong class="font-display font-bold">Email:</strong> {{ $this->form->email ?: 'Not provided' }}
                </li>
                <li>
                    <strong class="font-display font-bold">Message:</strong> {{ $this->form->message }}
                </li>
            </ul>
        </div>
    </section>
</div>
