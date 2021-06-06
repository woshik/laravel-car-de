<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarDetailing extends Controller
{
    public function view()
    {
        return view('carDetailing', ['page' => 'Services']);
    }
}
