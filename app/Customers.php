<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    //
    public $table = 'customers';

    public $fillable = [
        'firstname',
        'lastname',
        'id_number',
        'city',
        'mobile_number',
        'email',
        'winner'
    ];
}
