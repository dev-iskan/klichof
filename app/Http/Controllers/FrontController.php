<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function main()
    {
        return view('main');
    }

    public function aboutUs()
    {
        return view('about_us');
    }

    public function document()
    {
        return view('services.document', ['title' => 'СОПРОВОЖДЕНИЕ СТРОИТЕЛЬНОЙ ДОКУМЕНТАЦИИ']);
    }

    public function construction()
    {
        return view('services.construction', ['title' => 'СОПРОВОЖДЕНИЕ СТРОИТЕЛЬСТВА']);
    }

    public function management()
    {
        return view('services.management', ['title' => 'УПРАВЛЕНИЕ СТРОИТЕЛЬСТВОМ']);
    }

    public function organization()
    {
        return view('services.organization', ['title' => 'ОРГАНИЗАЦИИ СТРОИТЕЛЬСТВА ЖИЛЬЯ']);
    }
}
