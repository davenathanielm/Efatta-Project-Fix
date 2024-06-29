<?php

namespace App\Http\Controllers;

use App\Models\TesterModel;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // Public function untuk fungsi
    public function index()
    {
        // Ini untuk manggil database buku
        // Kalau mau spesifik pake :: where("Nama atribut",variabel data yang divari pake $)->get(); , kalau get semua kalau first paling baru
        $buku = TesterModel::all();
        // dd($buku);
    }

   

}
