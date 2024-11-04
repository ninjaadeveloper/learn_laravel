<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class CustomUser extends Authenticatable
{
    protected $table = 'myusers'; // Specify your custom table name

    protected $fillable = [
        'name',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}
