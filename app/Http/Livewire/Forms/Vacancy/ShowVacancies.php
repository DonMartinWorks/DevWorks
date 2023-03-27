<?php

namespace App\Http\Livewire\Forms\Vacancy;

use App\Models\Vacancy;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class ShowVacancies extends Component
{
    protected $listeners = ['deleteVacancy'];

    public function deleteVacancy(Vacancy $vacancy)
    {
        Storage::delete('public/vacancies/' . $vacancy->image);

        $vacancy->delete();
    }

    public function render()
    {
        # Trae todas las vacantes que correspondan al usuario logeado.
        $vacancies = Vacancy::where('user_id', auth()->user()->id)->paginate(10);

        return view('livewire.forms.vacancy.show-vacancies', [
            'vacancies' => $vacancies
        ]);
    }
}
