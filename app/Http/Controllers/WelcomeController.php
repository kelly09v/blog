<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $slides = [
            [
                'title' => 'Slide 1',
                'content' => 'Contenido del slide 1',
                'image' => (asset('images/png/1l.png')),
            ],
            [
                'title' => 'Slide 2',
                'content' => 'Contenido del slide 2',
                'image' => (asset('images/png/2l.png')),

            ],
            [
                'title' => 'Slide 3',
                'content' => 'Contenido del slide 3',
                'image' => (asset('images/png/3l.png')),

            ],
            // Agrega más elementos de slide según sea necesario
        ];

        return view('welcome', compact('slides'));
    }
}