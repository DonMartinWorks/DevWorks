<?php

use App\Http\Controllers\Models\CandidateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\Models\VacancyController;

Route::get('/dashboard', [VacancyController::class, 'index'])->middleware(['auth', 'verified', 'role.recluiter'])->name('vacancies.index');
Route::get('/vacancies/create', [VacancyController::class, 'create'])->middleware(['auth', 'verified'])->name('vacancies.create');
Route::get('/vacancies/{vacancy}/edit', [VacancyController::class, 'edit'])->middleware(['auth', 'verified'])->name('vacancies.edit');
Route::get('/vacancies/{vacancy}', [VacancyController::class, 'show'])->name('vacancies.show');
Route::get('/candidates/{vacancy}', [CandidateController::class, 'index'])->name('candidates.index');


# Notificaciones
Route::get('/notifications', NotificationController::class)->middleware(['auth', 'verified', 'role.recluiter'])->name('notifications');
