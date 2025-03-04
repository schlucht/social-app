<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index', [
            'firstname'=> 'Lothar',
            'surname' => 'Schmid',
            'job' => 'my <b>job</b> is: <i>nothings</i>',
            'hobbies' => [
                'ski'=> 'winter',
            ]]);
    }
}