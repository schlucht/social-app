<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Weather extends Model
{
    protected $fillable = [
        "description",
        "date",
        "type_id",
        "temp",
    ];
}
