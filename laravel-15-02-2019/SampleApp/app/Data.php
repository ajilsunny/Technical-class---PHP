<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    public $fillable=[
        'name',
        'email',
        'password'
    ];
}
