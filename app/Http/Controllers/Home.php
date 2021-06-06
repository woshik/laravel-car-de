<?php

namespace App\Http\Controllers;

class Home extends Controller
{
    public function view()
    {
        return view('home', ['page' => 'Home']);
    }
}
