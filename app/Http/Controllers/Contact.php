<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contact extends Controller
{
    public function view()
    {
        return view('contact', ['page' => 'contact']);
    }
}
