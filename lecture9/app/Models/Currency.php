<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $fillable = ['currency_code', 'exchange_rate'];

    protected $primaryKey = 'currency_code';

    public $incrementing = false;

    public $timestamps = false;
}
