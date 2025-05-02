<?php

namespace App\Livewire;

use App\Livewire\Forms\ExampleWizardForm;
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
                canNavigate: fn () => $this->validatePropertiesForStep('form.name'),
            ),
            WizardStep::make(
                title: 'Step 3',
                view: view('livewire.example-wizard.step-3'),
                canNavigate: fn () => $this->validatePropertiesForStep(['form.name', 'form.message']),
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
