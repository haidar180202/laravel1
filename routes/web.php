<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HitungController;
use App\Http\Controllers\InputanController;


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

Route::get('/', function(){
    return view('home',[
        'titlebar' => 'Begonyel - Home',
        'title' => 'Halaman Home'
    ]);
});

Route::get('/home', function(){
    return view('home',[
        'titlebar' => 'Begonyel - Home',
        'title' => 'Halaman Home'
]);
});

Route::get('about', function(){
    return view('about',['titlebar' => 'Begonyel - About ']);
});

Route::get('contact', function(){
    return view('contactme',['titlebar' => 'Begonyel - Contact Me ']);
});

Route::get('latihan-1', function(){
    return view('latihanview.latihan1',['titlebar' => 'Begonyel - Latihan1 ']);
})->name('latihan-1');

Route::get('latihan2', function(){
    return view('latihanview.latihan1',['titlebar' => 'Begonyel - Latihan2']);
})->name('latihan-2');
// name menggunakan Route

Route::get('latihan2', function(){
    return view('latihanview.latihan2',['titlebar' => 'Begonyel - Home ']);
})->name('latihan-2');

Route::get('inputan', [InputanController::class, 'index'])->name('inputan');

Route::get('segitiga', [HitungController::class, 'index'])->name('rumussegitiga');
