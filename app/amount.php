<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class amount extends Model
{
    protected $table = 'amount';

    protected $fillable = [
        'amount_store',
    ];
}
