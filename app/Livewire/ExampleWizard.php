<?php

namespace App\Livewire;

use Illuminate\View\View;
use SamWatts\LivewireWizard\Livewire\Wizard;
use SamWatts\LivewireWizard\Wizard\WizardStep;

class ExampleWizard extends Wizard
{
    public function wizardSteps(): array
    {
        return [
            WizardStep::make(
                title: 'Step 1',
                view: view('livewire.example-wizard.step-1'),
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
