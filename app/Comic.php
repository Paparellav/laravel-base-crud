<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comic extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'thumb',
        'series',
        'price',
        'sale_date',
        'type'
    ];
    
    protected $table = 'comics';
}
