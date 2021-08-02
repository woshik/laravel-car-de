<?php

namespace App\Http\Controllers;

class Detail extends Controller
{
    public function view($slug)
    {
        $details = json_decode(file_get_contents(base_path('resources/json/details.json')));

        try {
            return view('carDetail', ['page' => $slug, 'data' => $details->{$slug}]);
        } catch (\Throwable$th) {
            return redirect()->route('gallery');
        }
    }
}
