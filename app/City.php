<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public $table = 'cities';

    public $fillable = [
        'name',
        'department_id'
    ];
}
