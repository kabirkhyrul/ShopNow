<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;
    use Searchable;

    protected $fillable = [
        'user_id',
        'coupon_id',
        'billing_address',
        'billing_name',
        'billing_mobile',
        'notes',
        'shipping_name',
        'shipping_mobile',
        'shipping_address',
        'sub_total',
        'profit',
        'total',
        'status',
    ];

    protected $searchableFields = ['*'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function coupon()
    {
        return $this->belongsTo(Coupon::class);
    }
}
