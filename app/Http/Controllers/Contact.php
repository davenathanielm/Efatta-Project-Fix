<?php

namespace App\Http\Controllers;


use Illuminate\View\View;

class Contact extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function index()
    {
        return view('contact.contact', ["title" => "Contact"]);
    }
}
