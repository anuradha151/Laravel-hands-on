<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function indexAboutUs()
    {
        return view('aboutUs');
    }

    public function indexContactUs()
    {
        return view('contactUs');
    }
}
