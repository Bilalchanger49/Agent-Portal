<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class beneficiaries extends Model
{
    protected $table = 'beneficiaries';

    protected $fillable = [
        'befname', 'befcountry', 'befphone', 'befbank', 'befacc', 'befbic', 'befemail','befamount',
    ];
}
