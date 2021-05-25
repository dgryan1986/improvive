<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Show the application splash screen.
     *
     * @return Response
     */

    public function show()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function features()
    {
        return view('features');
    }

    public function pricing()
    {
        return view('pricing');
    }
}
