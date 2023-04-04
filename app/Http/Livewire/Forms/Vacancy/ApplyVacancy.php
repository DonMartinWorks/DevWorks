<?php

namespace App\Http\Livewire\Forms\Vacancy;

use App\Models\Vacancy;
use Livewire\Component;
use Livewire\WithFileUploads;

class ApplyVacancy extends Component
{
    use WithFileUploads;

    public $cv;
    public $vacancy;

    protected $rules = [
        'cv' => 'required|mimes:pdf|max:1024'
    ];

    public function mount(Vacancy $vacancy)
    {
        $this->vacancy = $vacancy;
    }

    /**
     * Este metodo esta hehco para guardar a los postulantes
     */
    public function apply()
    {
        $data = $this->validate();

        # Almacenar el cv
        $cv = $this->cv->store('public/cv');
        // Nombre del cv
        $data['cv'] = str_replace('public/cv', '', $cv);

        //  Almacenar el CV en el disco duro
        $this->vacancy->candidates()->create([
            'user_id' => auth()->user()->id,
            'cv' => $data['cv']
        ]);

        //  Notificacion y email para el postulante

        // Notificacion de OK
        session()->flash('message', __('Your request was sent, good luck'));
        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.forms.vacancy.apply-vacancy');
    }
}
