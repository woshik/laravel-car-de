<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PpfLanding extends Controller
{
    public function view()
    {
        return view('landing.paintProtection', ['page' => 'Paint Protection Landing']);
    }
}