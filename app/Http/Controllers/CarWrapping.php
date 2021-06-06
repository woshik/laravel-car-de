<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarWrapping extends Controller
{
    public function view()
    {
        return view('carWrapping', ['page' => 'Services']);
    }
}
