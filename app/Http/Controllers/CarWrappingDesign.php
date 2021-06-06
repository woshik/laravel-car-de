<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarWrappingDesign extends Controller
{
    public function view()
    {
        return view('carWrappingDesign', ['page' => 'Services']);
    }
}
