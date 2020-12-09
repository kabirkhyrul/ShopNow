<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Product;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the product can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list products');
    }

    /**
     * Determine whether the product can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Product  $model
     * @return mixed
     */
    public function view(User $user, Product $model)
    {
        return $user->hasPermissionTo('view products');
    }

    /**
     * Determine whether the product can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create products');
    }

    /**
     * Determine whether the product can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Product  $model
     * @return mixed
     */
    public function update(User $user, Product $model)
    {
        return $user->hasPermissionTo('update products');
    }

    /**
     * Determine whether the product can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Product  $model
     * @return mixed
     */
    public function delete(User $user, Product $model)
    {
        return $user->hasPermissionTo('delete products');
    }

    /**
     * Determine whether the product can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Product  $model
     * @return mixed
     */
    public function restore(User $user, Product $model)
    {
        return false;
    }

    /**
     * Determine whether the product can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Product  $model
     * @return mixed
     */
    public function forceDelete(User $user, Product $model)
    {
        return false;
    }
}
