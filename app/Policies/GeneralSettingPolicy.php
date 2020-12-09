<?php

namespace App\Policies;

use App\Models\User;
use App\Models\GeneralSetting;
use Illuminate\Auth\Access\HandlesAuthorization;

class GeneralSettingPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the generalSetting can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list generalsettings');
    }

    /**
     * Determine whether the generalSetting can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\GeneralSetting  $model
     * @return mixed
     */
    public function view(User $user, GeneralSetting $model)
    {
        return $user->hasPermissionTo('view generalsettings');
    }

    /**
     * Determine whether the generalSetting can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create generalsettings');
    }

    /**
     * Determine whether the generalSetting can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\GeneralSetting  $model
     * @return mixed
     */
    public function update(User $user, GeneralSetting $model)
    {
        return $user->hasPermissionTo('update generalsettings');
    }

    /**
     * Determine whether the generalSetting can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\GeneralSetting  $model
     * @return mixed
     */
    public function delete(User $user, GeneralSetting $model)
    {
        return $user->hasPermissionTo('delete generalsettings');
    }

    /**
     * Determine whether the generalSetting can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\GeneralSetting  $model
     * @return mixed
     */
    public function restore(User $user, GeneralSetting $model)
    {
        return false;
    }

    /**
     * Determine whether the generalSetting can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\GeneralSetting  $model
     * @return mixed
     */
    public function forceDelete(User $user, GeneralSetting $model)
    {
        return false;
    }
}
