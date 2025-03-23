<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Weather extends Model
{
    protected $fillable = [
        'type',
        'icon',
        'description'
    ];
    protected $table = 'weathers';

    public function index()
    {
        $data = Weather::all();
    }

}