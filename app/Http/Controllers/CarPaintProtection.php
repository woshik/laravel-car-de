<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarPaintProtection extends Controller
{
    public function view()
    {
        return view('carPaintProtection', ['page' => 'Services']);
    }
}
