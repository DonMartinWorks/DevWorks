<?php

namespace App\Http\Livewire\Component;

use App\Models\Salary;
use Livewire\Component;
use App\Models\Category;

class VacanciesFilter extends Component
{
    public $term;
    public $category;
    public $salary;

    public function readData()
    {
        dd('asdf');
    }

    public function render()
    {
        $salaries = Salary::all();
        $categories = Category::all();

        return view('livewire.component.vacancies-filter', [
            'salaries' => $salaries,
            'categories' => $categories
        ]);
    }
}
