<?php

namespace App\Policies;

use App\Models\Acadamic_Year;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class AcadamicYearPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Acadamic_Year $acadamicYear): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Acadamic_Year $acadamicYear): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Acadamic_Year $acadamicYear): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Acadamic_Year $acadamicYear): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Acadamic_Year $acadamicYear): bool
    {
        //
    }
}
