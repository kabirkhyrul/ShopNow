<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    use Searchable;

    protected $fillable = [
        'name',
        'logo',
        'address',
        'phone',
        'email',
        'facebook',
        'twitter',
        'instagram',
        'pinterest',
        'top_bar_offer',
        'currency',
        'shipping_cost',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'general_settings';
}
