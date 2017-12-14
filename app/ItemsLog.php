<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemsLog extends Model
{
    //
    protected $table = 'items_logs';
    
    protected $fillable = [
        'id', 'item_id', 'stock_id', 'count', 'user_id', 'type'
    ];
}
