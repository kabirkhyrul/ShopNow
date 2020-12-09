<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Banner;
use Illuminate\Auth\Access\HandlesAuthorization;

class BannerPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the banner can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list banners');
    }

    /**
     * Determine whether the banner can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Banner  $model
     * @return mixed
     */
    public function view(User $user, Banner $model)
    {
        return $user->hasPermissionTo('view banners');
    }

    /**
     * Determine whether the banner can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create banners');
    }

    /**
     * Determine whether the banner can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Banner  $model
     * @return mixed
     */
    public function update(User $user, Banner $model)
    {
        return $user->hasPermissionTo('update banners');
    }

    /**
     * Determine whether the banner can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Banner  $model
     * @return mixed
     */
    public function delete(User $user, Banner $model)
    {
        return $user->hasPermissionTo('delete banners');
    }

    /**
     * Determine whether the banner can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Banner  $model
     * @return mixed
     */
    public function restore(User $user, Banner $model)
    {
        return false;
    }

    /**
     * Determine whether the banner can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Banner  $model
     * @return mixed
     */
    public function forceDelete(User $user, Banner $model)
    {
        return false;
    }
}
