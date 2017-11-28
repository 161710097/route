<?php

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


//BASIC ROUTING
Route::get('/', function () {
    return view('welcome');
});

Route::get('/a', function () {
    return '<h1>Hello world</h1>'
		    .'Selamat Datang di Webapp saya <br>'
		    .'Gilang emang keren.';
});


//ROUTE PARAMETER

Route::get('user/{nama}', function ($a) {
    return 
    'selamat datang <br>'
    .'nama saya adalah <b>' .$a.'<b>'
    		;
});

Route::get('kantin/{nama}/{minum}/{ngemil}', function ($a,$b,$c) {
    return 'Makan nya <b>'.$a.'</b><br>'
    		.'Minum nya <b>'.$b.'</b><br>'
    		.'Ngemil nya <b>' .$c.'</b><br>'
    		;
});

//ROUTE OPSIONAL PARAMETER
Route::get('ada/{nama?}',function ($a = "dadang jebred"){
		return $a;
});