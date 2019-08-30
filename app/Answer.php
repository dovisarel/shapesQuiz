<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $casts = [
        'shape_data' => 'array',
    ];
}
