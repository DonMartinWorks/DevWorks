<?php

namespace App\Http\Livewire\Forms;

use App\Models\Category;
use App\Models\Salary;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateVacancy extends Component
{
    public $title, $salary, $category, $company, $last_day, $description, $image;

    use WithFileUploads;

    protected $rules = [
        'title' => 'required|string|max:60',
        'salary' => 'required',
        'category' => 'required',
        'company' => 'required|string|max:60',
        'last_day' => 'required',
        'description' => 'required|string|max:450',
        'image' => 'required|image|max:1024'
    ];

    # ** Funcion para crear una nueva vacante **
    public function createVacancy()
    {
        $data = $this->validate();
    }

    public function render()
    {
        # Consulta a la DB
        $salaries = Salary::all();
        $categories = Category::all();

        return view('livewire.forms.create-vacancy', [
            'salaries' => $salaries,
            'categories' => $categories
        ]);
    }
}
