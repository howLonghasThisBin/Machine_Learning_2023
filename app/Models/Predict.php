<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Predict extends Model
{
    use HasFactory;

    protected $fillable = [
        'cycle',
        'x1',
        'x2',
        'x3',
        'x4',
        'x5',
        'x6',
        'y',
    ];
}
