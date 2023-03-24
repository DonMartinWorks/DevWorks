<?php

namespace App\Http\Livewire\Forms;

use App\Models\Salary;
use Livewire\Component;
use App\Models\Category;

class EditVacancy extends Component
{
    public function render()
    {
        # Consulta a la DB
        $salaries = Salary::all();
        $categories = Category::all();

        return view('livewire.forms.edit-vacancy', [
            'salaries' => $salaries,
            'categories' => $categories
        ]);
    }
}
