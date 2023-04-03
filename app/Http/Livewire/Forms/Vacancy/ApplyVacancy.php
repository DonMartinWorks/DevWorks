<?php

namespace App\Http\Livewire\Forms\Vacancy;

use Livewire\Component;
use Livewire\WithFileUploads;

class ApplyVacancy extends Component
{
    use WithFileUploads;

    public $cv;

    protected $rules = [
        'cv' => 'required|mimes:pdf|max:1024'
    ];

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

        //  Crear la vacante

        //  Notificacion y email para el postulante

        // Notificacion de OK
    }

    public function render()
    {
        return view('livewire.forms.vacancy.apply-vacancy');
    }
}
