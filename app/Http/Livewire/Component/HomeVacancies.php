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
        //Ejecuta el when si encuntra un filtro a buscar
        $vacancies = Vacancy::when($this->term, function ($query) {
            $query->where('title', 'LIKE', "%" . $this->term . "%");
        })->when($this->term, function ($query) {
            $query->orWhere('company', 'LIKE', "%" . $this->term . "%");
        })->when($this->category, function ($query) {
            $query->where('category_id', $this->category);
        })->when($this->salary, function ($query) {
            $query->where('salary_id', $this->salary);
        })->paginate(15);


        return view('livewire.component.home-vacancies', [
            'vacancies' => $vacancies
        ]);
    }
}
