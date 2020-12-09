<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Banner extends Model
{
    use SoftDeletes;
    use Searchable;

    protected $fillable = [
        'image',
        'top_string',
        'middle_string',
        'bottom_string',
        'url',
        'top_position',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'top_position' => 'boolean',
    ];
}
