<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class weather_table extends Model
{
    protected $fillable = [
        'type',
        'icon',
        'description'
    ];

    public function index()
    {
        $data = weather_table::all();
    }

    public function create()
    {
        return weather_table::create([]);
    }
}
