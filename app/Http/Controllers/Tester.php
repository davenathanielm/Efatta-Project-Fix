<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tester extends Controller
{
    //kalau pake view di compact
    // cara manggil nya
    // return view('NamaFolder.NamaFile', compact('nama variable tampil data '))

    public function tampilan()
    {
        return view('layout/dashboard');
    }
}
