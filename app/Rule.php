<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    //
    protected $table = 'rules';
    
    protected $fillable = [
        'id', 'stock_id', 'subject_id', 'subject_type', 'access_id'
    ];
}
