<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesLog extends Model
{
    //
    protected $table = 'sales_logs';
    
    protected $fillable = [
        'id', 'product_id', 'stock_id', 'user_id', 'count'
    ];
}
