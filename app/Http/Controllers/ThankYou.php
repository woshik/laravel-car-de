<?php

namespace App\Http\Controllers;

class ThankYou extends Controller
{
    public function view()
    {
        return view('thank-you', ['page' => 'thank you']);
    }
}
