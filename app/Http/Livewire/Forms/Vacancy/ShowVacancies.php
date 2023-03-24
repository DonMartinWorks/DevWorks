<?php

namespace App\Http\Livewire\Forms\Vacancy;

use App\Models\Vacancy;
use Livewire\Component;

class ShowVacancies extends Component
{
    public function render()
    {
        # Trae todas las vacantes que correspondan al usuario logeado.
        $vacancies = Vacancy::where('user_id', auth()->user()->id)->paginate(10);

        return view('livewire.forms.vacancy.show-vacancies', [
            'vacancies' => $vacancies
        ]);
    }
}
