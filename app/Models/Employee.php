<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'segurity_number',
        'user_id',
        'model_type',
        'model_id'
    ];
}
