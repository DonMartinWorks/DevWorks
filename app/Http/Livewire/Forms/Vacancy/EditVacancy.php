<?php

namespace App\Http\Livewire\Forms\Vacancy;

use App\Models\Salary;
use App\Models\Vacancy;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Carbon;

class EditVacancy extends Component
{
    public $vacancy_id, $title, $salary, $category, $company, $last_day, $description, $image;

    protected $rules = [
        'title' => 'required|string|max:60',
        'salary' => 'required',
        'category' => 'required',
        'company' => 'required|string|max:60',
        'last_day' => 'required',
        'description' => 'required|max:450'
    ];

    public function mount(Vacancy $vacancy)
    {
        $this->vacancy_id = $vacancy->id;
        $this->title = $vacancy->title;
        $this->salary = $vacancy->salary_id;
        $this->category = $vacancy->category_id;
        $this->company = $vacancy->company;
        # Para darle el formato para mostrarlo en la vista.
        $this->last_day = Carbon::parse($vacancy->last_day)->format('Y-m-d');
        $this->description = $vacancy->description;
        $this->image = $vacancy->image;
    }

    # Para editar
    public function editVacancy()
    {
        $data = $this->validate();

        # Si hay una nueva imagen de portada

        # Encontrar la vacante a editar
        $vacancy = Vacancy::find($this->vacancy_id);

        # Asignar los valores
        $vacancy->title = $data['title'];
        $vacancy->salary_id = $data['salary'];
        $vacancy->category_id = $data['category'];
        $vacancy->company = $data['company'];
        $vacancy->last_day = $data['last_day'];
        $vacancy->description = $data['description'];

        # Guardar la vacante
        $vacancy->save();

        # Mensaje
        session()->flash('message', __('The vacancy was updated successfully!'));

        # Redireccionar al usuario
        return redirect()->route('vacancies.index');

    }

    public function render()
    {
        # Consulta a la DB
        $salaries = Salary::all();
        $categories = Category::all();

        return view('livewire.forms.vacancy.edit-vacancy', [
            'salaries' => $salaries,
            'categories' => $categories
        ]);
    }
}
