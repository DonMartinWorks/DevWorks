<?php

namespace App\Http\Livewire\Forms\Vacancy;

use Livewire\Component;

class SeeVacancy extends Component
{
    public $vacancy;

    public function render()
    {
        return view('livewire.forms.vacancy.see-vacancy');
    }
}
