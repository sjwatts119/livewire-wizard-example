<?php

namespace App\Livewire;

use App\Livewire\Forms\ExampleWizardForm;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use SamWatts\LivewireWizard\Livewire\Wizard;
use SamWatts\LivewireWizard\Wizard\WizardStep;

class ExampleWizard extends Wizard
{
    public ExampleWizardForm $form;

    public function wizardSteps(): array
    {
        return [
            WizardStep::make(
                title: 'Step 1',
                view: view('livewire.example-wizard.step-1'),
            ),
            WizardStep::make(
                title: 'Step 2',
                view: view('livewire.example-wizard.step-2'),
                canNavigate: function () {
                    try {
                        $this->form->validateOnly('name');

                        return true;
                    } catch (ValidationException) {
                        return false;
                    }
                },
            ),
            WizardStep::make(
                title: 'Step 3',
                view: view('livewire.example-wizard.step-3'),
                canNavigate: function () {
                    try {
                        $this->form->validateOnly('name');

                        return true;
                    } catch (ValidationException) {
                        return false;
                    }
                },
            ),
        ];
    }

    public function render(): View
    {
        return $this
            ->currentStep()
            ->authorise()
            ->view();
    }
}
