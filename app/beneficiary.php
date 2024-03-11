<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class beneficiary extends Model
{
    protected $table = '_beneficiary';

    protected $fillable = [
        'befname', 'befcountry', 'befphone', 'befbank', 'befacc', 'befbic', 'befemail','befamount',
    ];
}
