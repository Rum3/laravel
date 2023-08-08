<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'gender',
        'is_subscribed',
    ];
}

