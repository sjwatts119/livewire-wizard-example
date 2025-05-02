<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Url;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ExampleWizardForm extends Form
{
    #[Validate('required'), Url(except: '')]
    public string $name = '';

    #[Url]
    public string $email = '';

    #[Validate('required'), Url(except: '')]
    public string $message = '';
}
