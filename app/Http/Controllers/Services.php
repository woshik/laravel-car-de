<?php

namespace App\Http\Controllers;

class Services extends Controller
{
    public function view()
    {
        return view('services', ['page' => 'Services']);
    }
}
