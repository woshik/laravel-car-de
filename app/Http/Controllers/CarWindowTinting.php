<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarWindowTinting extends Controller
{
    public function view()
    {
        return view('carWindowTinting', ['page' => 'Services']);
    }
}
