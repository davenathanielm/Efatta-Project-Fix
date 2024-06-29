<?php

namespace App\Http\Controllers;


use Illuminate\View\View;

class Join extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function index()
    {
        return view('join.join', ["title" => "Join"]);
    }
}
