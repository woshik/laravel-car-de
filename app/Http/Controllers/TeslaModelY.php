<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeslaModelY extends Controller
{
    public function view()
    {
        return view('landing.teslaModelY', ['title' => 'Tesla Model Y']);
    }
}
