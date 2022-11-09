<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hellow', function () {
    echo 'HELOOWW HELLOOWWW HELOOOWWWW';
});

Route::get('/name/{name}', function ($name) {
    return "Kamana ". $name . "?";
})->where('name', '[A-Za-z]+');

Route::get('/data/{data?}', function ($data = "kosong") {
    return "Isi Parameter ". $data;
});

Route::get('/nama/{nrp}/{nama}', function ($nrp, $nama) {
    echo "nrp : ". $nrp ;
    echo "<br>";
    echo "nama : ". $nama; 
})->where('nrp', '[0-9]+')->where('nama','[A-Za-z]+');

route::get('/person/show/{param}', 'PersonController@show');
route::resource('student','StudentController');

route::get('/homepage', function() {
    return view('home', ["name" => "Iwan Ramdani"]);
});

route::get('/person/send-data/', 'PersonController@sendData');
route::get('/person/data', 'PersonController@data');
route::get('/person/grade/{task}/{quiz}/{midterm}/{final}/{grade}', 'PersonController@myCourse');

// Sesi 5
route::get('/person', 'PersonController@index')->name('person.index');

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

// Sesi 6
route::get('person/create', 'PersonController@create')->name('person.create');
route::post('person/store', 'PersonController@store')->name('person.store');