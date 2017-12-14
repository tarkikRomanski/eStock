<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';
    
    protected $fillable = [
        'id', 'title', 'stock_id', 'unit_id', 'price'
    ];
}
