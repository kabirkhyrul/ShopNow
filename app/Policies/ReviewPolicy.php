<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Review;
use Illuminate\Auth\Access\HandlesAuthorization;

class ReviewPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the review can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list reviews');
    }

    /**
     * Determine whether the review can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Review  $model
     * @return mixed
     */
    public function view(User $user, Review $model)
    {
        return $user->hasPermissionTo('view reviews');
    }

    /**
     * Determine whether the review can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create reviews');
    }

    /**
     * Determine whether the review can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Review  $model
     * @return mixed
     */
    public function update(User $user, Review $model)
    {
        return $user->hasPermissionTo('update reviews');
    }

    /**
     * Determine whether the review can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Review  $model
     * @return mixed
     */
    public function delete(User $user, Review $model)
    {
        return $user->hasPermissionTo('delete reviews');
    }

    /**
     * Determine whether the review can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Review  $model
     * @return mixed
     */
    public function restore(User $user, Review $model)
    {
        return false;
    }

    /**
     * Determine whether the review can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Review  $model
     * @return mixed
     */
    public function forceDelete(User $user, Review $model)
    {
        return false;
    }
}
