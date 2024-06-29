<?php

namespace App\Http\Controllers;


use Illuminate\View\View;

class About extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function index()
    {
        $data = [
            "title" => "About"
        ];
        return view('about.about', $data);
    }
}

?>
