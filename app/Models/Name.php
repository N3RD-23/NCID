<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Name extends Model
{
    protected $fillable = [
        'id_number',
        'full_name',
        'common_name',
        'sex',
        'address',
        'date_of_birth',
        'atoll',
        'island',
    ];
}
