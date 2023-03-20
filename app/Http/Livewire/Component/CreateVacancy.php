<?php

namespace App\Http\Livewire\Component;

use App\Models\Salary;
use Livewire\Component;

class CreateVacancy extends Component
{
    public function render()
    {
        # Consulta a la DB
        $salaries = Salary::all();

        return view('livewire.component.create-vacancy', [
            'salaries' => $salaries
        ]);
    }
}
