<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coupon extends Model
{
    use SoftDeletes;
    use Searchable;

    protected $fillable = [
        'code',
        'start_date',
        'expired_date',
        'discount_type',
        'amount',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'start_date' => 'date',
        'expired_date' => 'date',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
