<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function index(Request $request, string $id)
    {
        $params = $request;
        dd($id);
        return view("weather", [
            "title" => "Das ist der Wetter",
            "params" => $params
        ]);
    }
}
