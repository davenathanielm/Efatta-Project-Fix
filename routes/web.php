<?php

use App\Http\Controllers\Tester;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\About;
use App\Http\Controllers\Portofolio;
use App\Http\Controllers\Contact;
use App\Http\Controllers\Join;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(Tester::class)->group(function () {

    // Kalau hanya / itu default

    // Route::get('/index', 'index')->name('Tester');
    // Route::get('/', 'tampilan')->name('tampilan');

    Route::get('/', function () {
        return view('layout.dashboard',[
            "title" => "Home"
        ]);
    });

    // ini routes untuk about
    Route::get('/About', [About::class, 'index']);
    

    // ini routes contact
    Route::get('/Contact', [Contact::class, 'index']);
    

    // ini routes join
    Route::get('/Join', [Join::class, 'index']);
    

    // ini routes portofolio 
    Route::get('/Portofolio', [Portofolio::class, 'index']);


});
