<?php

namespace App\Http\Controllers;

class Landing extends Controller
{
    public function view($slug)
    {
        $details = json_decode(file_get_contents(base_path('resources/json/landing.json')));

        try {
            return view('landing.common', ['page' => $slug, 'data' => $details->{$slug}]);
        } catch (\Throwable$th) {
            return redirect()->route('home');
        }
    }
}
