<?php

namespace App\Http\Livewire\Forms\Vacancy;

use Livewire\Component;

class ApplyVacancy extends Component
{
    public $cv;

    protected $rules = [
        'cv' => 'required|mimes:pdf|max:1024'
    ];

    /**
     * Este metodo esta hehco para guardar a los postulantes
     */
    public function apply()
    {
        $this->validate();

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
