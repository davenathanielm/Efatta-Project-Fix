<?php

namespace App\Http\Controllers;


use Illuminate\View\View;

class Portofolio extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function index()
    {
        return view('portofolioFix.portofolioFix', ["title" => "Portofolio"]);
    }
}
