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
        return view('services.document', ['title' => __('pages.header.document')]);
    }

    public function construction()
    {
        return view('services.construction', ['title' => __('pages.header.construction')]);
    }

    public function management()
    {
        return view('services.management', ['title' => __('pages.header.management')]);
    }

    public function organization()
    {
        return view('services.organization', ['title' => __('pages.header.organization')]);
    }
}
