<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeslaModelY extends Controller
{
    public function view()
    {
        $data = json_encode(array(
            'title' => 'Tesla Model Y',
            'images' => array(
                [
                    'src' => 'https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/details/tesla-model-y/Autofolierung%20Z%C3%BCrich%20-%20Model%20Y.png',
                    'alt' => 'Autofolierung Zürich - Tesla Model Y'
                ],
                [
                    'src' => 'https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/details/tesla-model-y/Autofolierung%20Z%C3%BCrich%20-%20Tesla%20Model%20Y.jpg',
                    'alt' => 'Autofolierung Zürich - Tesla Model Y'
                ],
                [
                    'src' => 'https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/details/tesla-model-y/Model%20Y%20Folie%20Tesla.jpg',
                    'alt' => 'Autofolierung Zürich - Tesla Model Y'
                ],
                [
                    'src' => 'https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/details/tesla-model-y/Model%20Y%20Lackschutz.jpg',
                    'alt' => 'Autofolierung Zürich - Tesla Model Y'
                ],
                [
                    'src' => 'https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/details/tesla-model-y/Telsa%20Steinschlagschutz%20Schweiz.jpg',
                    'alt' => 'Autofolierung Zürich - Tesla Model Y'
                ],
                [
                    'src' => 'https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/details/tesla-model-y/Tesla%20Folierung%20I%20Titelbild.png',
                    'alt' => 'Autofolierung Zürich - Tesla Model Y'
                ],
            )
        ));

        return view('landing.teslaModelY', ['data' => json_decode($data) ]);
    }
}
