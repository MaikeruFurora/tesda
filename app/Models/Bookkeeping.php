<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookkeeping extends Model
{
    use HasFactory;

    protected $guarded=[];

    protected $casts = [
        'b1' => 'boolean',
        'b2' => 'boolean',
        'b3' => 'boolean',
        'b4' => 'boolean',
        'b5' => 'boolean',
        'b6' => 'boolean',
        'b7' => 'boolean',
        'b8' => 'boolean',
        'b9' => 'boolean',
        'b10' => 'boolean',
        'b11' => 'boolean',
    ];
}
