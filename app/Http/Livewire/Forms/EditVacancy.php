<?php

namespace App\Http\Livewire\Forms;

use App\Models\Salary;
use App\Models\Vacancy;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Carbon;

class EditVacancy extends Component
{
    public $title, $salary, $category, $company, $last_day, $description, $image;

    public function mount(Vacancy $vacancy)
    {
        $this->title = $vacancy->title;
        $this->salary = $vacancy->salary_id;
        $this->category = $vacancy->category_id;
        $this->company = $vacancy->company;
        //Para darle el formato para mostrarlo en la vista.
        $this->last_day = Carbon::parse($vacancy->last_day)->format('Y-m-d');
        $this->description = $vacancy->description;
        $this->image = $vacancy->image;
    }

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
