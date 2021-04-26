<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'factory_id',
        'size',
        'toppings',
    ];

    protected $casts = [
        'toppings' => 'array',
    ];
}
