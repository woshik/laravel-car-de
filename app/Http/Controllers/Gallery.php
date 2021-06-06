<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Gallery extends Controller
{
    public function view()
    {
        return view('gallery', ['page' => 'gallery']);
    }
}
