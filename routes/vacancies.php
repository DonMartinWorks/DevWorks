<?php

use App\Http\Controllers\Models\VacancyController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [VacancyController::class, 'index'])->middleware(['auth', 'verified'])->name('vacancies.index');
Route::get('/vacancies/create', [VacancyController::class, 'create'])->middleware(['auth', 'verified'])->name('vacancies.create');
Route::get('/vacancies/{vacancy}/edit', [VacancyController::class, 'edit'])->middleware(['auth', 'verified'])->name('vacancies.edit');
