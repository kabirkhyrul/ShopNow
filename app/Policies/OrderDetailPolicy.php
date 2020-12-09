<?php

namespace App\Policies;

use App\Models\User;
use App\Models\OrderDetail;
use Illuminate\Auth\Access\HandlesAuthorization;

class OrderDetailPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the orderDetail can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list orderdetails');
    }

    /**
     * Determine whether the orderDetail can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\OrderDetail  $model
     * @return mixed
     */
    public function view(User $user, OrderDetail $model)
    {
        return $user->hasPermissionTo('view orderdetails');
    }

    /**
     * Determine whether the orderDetail can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create orderdetails');
    }

    /**
     * Determine whether the orderDetail can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\OrderDetail  $model
     * @return mixed
     */
    public function update(User $user, OrderDetail $model)
    {
        return $user->hasPermissionTo('update orderdetails');
    }

    /**
     * Determine whether the orderDetail can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\OrderDetail  $model
     * @return mixed
     */
    public function delete(User $user, OrderDetail $model)
    {
        return $user->hasPermissionTo('delete orderdetails');
    }

    /**
     * Determine whether the orderDetail can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\OrderDetail  $model
     * @return mixed
     */
    public function restore(User $user, OrderDetail $model)
    {
        return false;
    }

    /**
     * Determine whether the orderDetail can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\OrderDetail  $model
     * @return mixed
     */
    public function forceDelete(User $user, OrderDetail $model)
    {
        return false;
    }
}
