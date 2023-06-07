<?php

namespace App\Http\Livewire\Component;

use App\Models\Vacancy;
use Livewire\Component;

class HomeVacancies extends Component
{
    public function render()
    {
        $vacancies =  Vacancy::all();

        return view('livewire.component.home-vacancies', [
            'vacancies' => $vacancies
        ]);
    }
}
