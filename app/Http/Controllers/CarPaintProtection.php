<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarPaintProtection extends Controller
{
    public function view()
    {
        return view('carPaintProtection', ['page' => 'Services']);
    }

    public function view2()
    {
        return view('carPaintProtectionNew', ['page' => 'Services']);
    }
}
