<?php

namespace App\Http\Livewire\Forms\Vacancy;

use App\Models\Category;
use App\Models\Salary;
use App\Models\Vacancy;
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
        'description' => 'required|max:450',
        'image' => 'required|image|max:1024'
    ];

    # ** Funcion para crear una nueva vacante **
    public function createVacancy()
    {
        $data = $this->validate();

        # Almacenar la imagen de portada
        $image = $this->image->store('public/vacancies');
        // Nombre de la imagen de portada
        $data['image'] = str_replace('public/vacancies', '', $image);

        # Crear la vacante
        Vacancy::create([
            'title' => $data['title'],
            'salary_id' => $data['salary'],
            'category_id' => $data['category'],
            'company' => $data['company'],
            'last_day' => $data['last_day'],
            'description' => $data['description'],
            'image' => $data['image'],
            'user_id' => auth()->user()->id
        ]);

        # Mensaje
        session()->flash('message', __('The vacancy was published successfully!'));

        # Redireccionar al usuario
        return redirect()->route('vacancies.index');
    }

    public function render()
    {
        # Consulta a la DB
        $salaries = Salary::all();
        $categories = Category::all();

        return view('livewire.forms.vacancy.create-vacancy', [
            'salaries' => $salaries,
            'categories' => $categories
        ]);
    }
}
