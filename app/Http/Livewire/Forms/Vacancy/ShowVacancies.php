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
        if ($vacancy->image) {
            Storage::delete('public/vacancies/' . $vacancy->image);
        }

        /*
        if ($vacancy->candidates->count()) {
            foreach ($vacancy->candidates as $candidate) {
                if ($candidate->cv) {
                    Storage::delete('public/cv/' . $candidate->cv);
                }
            }
        }
        */

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
