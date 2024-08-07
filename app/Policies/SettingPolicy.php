<?php

namespace App\Policies;

use App\Models\User;
use App\Models\setting;
use Illuminate\Auth\Access\Response;

class SettingPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return   $user->status == 'admin' ;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, setting $setting): bool
    {
        return   $user->status == 'admin' ;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return   $user->status == 'admin' ;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, setting $setting): bool
    {
        return   $user->status == 'admin' ;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, setting $setting): bool
    {
        return   $user->status == 'admin' ;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, setting $setting): bool
    {
        return   $user->status == 'admin' ;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, setting $setting): bool
    {
        return   $user->status == 'admin' ;
    }
}
