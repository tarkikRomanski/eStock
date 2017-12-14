<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $table = 'items';
    
    protected $fillable = [
        'id', 'title', 'stock_id', 'unit_id', 'price'
    ];
}
