<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $fillable = [
        'id', 'name', 'email', 'email_verified_at', 'password'
    ];
}
