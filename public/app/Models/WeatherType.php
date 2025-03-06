<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WeatherType extends Model
{
    protected $fillable = [
        "weather",
        "weather_type",
        "icon",
        "description",
    ];
}
