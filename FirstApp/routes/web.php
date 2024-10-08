<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\ProjectController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {  
    return view('welcome');
});

// For My First fiel.
Route::get('/NoraAlqassim', function () {
    return view('NoraAlqassim');
});


// for controoler
Route::get('/Home',[MyController::class,'MyResume'])->name('MyResume');
Route::get('/ContactMe',[MyController::class,'contact'])->name('contact');


// for Project Section 
Route::get('/', 'ProjectController@index')->name('index');
Route::get('/create', 'ProjectController@create')->name('create');
Route::post('store/', 'ProjectController@store')->name('store');
Route::get('show/{project}', 'ProjectController@show')->name('show');
Route::get('edit/{project}', 'ProjectController@edit')->name('edit');
Route::put('edit/{project}','ProjectController@update')->name('update');
Route::delete('/{project}','ProjectController@destroy')->name('destroy');