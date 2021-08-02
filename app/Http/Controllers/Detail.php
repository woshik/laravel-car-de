<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Detail extends Controller
{
    

    public function view($slug)
    {
        return view('carDetail', ['page' => $slug, 'name' => str_replace('-', ' ', $slug)]);
    }
}
