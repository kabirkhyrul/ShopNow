<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    use Searchable;

    protected $fillable = [
        'category_id',
        'name',
        'price',
        'cost_price',
        'quantity',
        'shipping',
        'weight',
        'special_price',
        'short_description',
        'description',
        'information',
        'total_sale',
        'rating',
        'slug',
        'photo',
        'is_featured',
        'free_shipping',
        'status',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'is_featured' => 'boolean',
        'free_shipping' => 'boolean',
        'status' => 'boolean',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
