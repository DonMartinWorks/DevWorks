<?php

namespace App\Http\Livewire\Component;

use App\Models\Vacancy;
use Livewire\Component;

class HomeVacancies extends Component
{
    public $term;
    public $category;
    public $salary;

    protected $listeners = ['searchTerm' => 'search'];

    public function search($term, $category, $salary)
    {
        $this->term = $term;
        $this->category = $category;
        $this->salary = $salary;
    }

    public function render()
    {
        $vacancies =  Vacancy::all();

        return view('livewire.component.home-vacancies', [
            'vacancies' => $vacancies
        ]);
    }
}
