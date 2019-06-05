<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * @property bool state
 */
class Product extends Model
{


    protected $fillable = [
        'id',
        'name',
        'reference',
        'price',
        'cost',
        'stock',
        'state',
    ];
}
