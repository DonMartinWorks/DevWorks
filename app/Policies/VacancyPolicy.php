<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Vacancy;
use Illuminate\Auth\Access\Response;

class VacancyPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        // Prohibe el aceso de las vacantes para los devs
        return $user->role == "2";
    }

    // /**
    //  * Determine whether the user can view the model.
    //  */
    // public function view(User $user, Vacancy $vacancy): bool
    // {
    //     //
    // }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        // Prohibe el aceso de crear vacantes para los devs
        return $user->role == "2";
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Vacancy $vacancy): bool
    {
        return $user->id == $vacancy->user_id;
    }

    // /**
    //  * Determine whether the user can delete the model.
    //  */
    // public function delete(User $user, Vacancy $vacancy): bool
    // {
    //     //
    // }

    // /**
    //  * Determine whether the user can restore the model.
    //  */
    // public function restore(User $user, Vacancy $vacancy): bool
    // {
    //     //
    // }

    // /**
    //  * Determine whether the user can permanently delete the model.
    //  */
    // public function forceDelete(User $user, Vacancy $vacancy): bool
    // {
    //     //
    // }
}
