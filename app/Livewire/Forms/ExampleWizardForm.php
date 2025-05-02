<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class ExampleWizardForm extends Form
{
    #[Validate('required | min:3')]
    public string $name = '';

    public string $email = '';
}
