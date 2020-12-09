<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Coupon;
use Illuminate\Auth\Access\HandlesAuthorization;

class CouponPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the coupon can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list coupons');
    }

    /**
     * Determine whether the coupon can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Coupon  $model
     * @return mixed
     */
    public function view(User $user, Coupon $model)
    {
        return $user->hasPermissionTo('view coupons');
    }

    /**
     * Determine whether the coupon can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create coupons');
    }

    /**
     * Determine whether the coupon can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Coupon  $model
     * @return mixed
     */
    public function update(User $user, Coupon $model)
    {
        return $user->hasPermissionTo('update coupons');
    }

    /**
     * Determine whether the coupon can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Coupon  $model
     * @return mixed
     */
    public function delete(User $user, Coupon $model)
    {
        return $user->hasPermissionTo('delete coupons');
    }

    /**
     * Determine whether the coupon can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Coupon  $model
     * @return mixed
     */
    public function restore(User $user, Coupon $model)
    {
        return false;
    }

    /**
     * Determine whether the coupon can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Coupon  $model
     * @return mixed
     */
    public function forceDelete(User $user, Coupon $model)
    {
        return false;
    }
}
