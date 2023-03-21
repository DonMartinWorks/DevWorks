<?php

namespace App\Http\Livewire\Component;

use Livewire\Component;

class ShowAlert extends Component
{
    public $message;

    public function render()
    {
        return view('livewire.component.show-alert');
    }
}
