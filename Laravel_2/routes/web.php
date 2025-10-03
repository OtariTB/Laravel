<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestControl;
use App\Http\Controllers\MisalmebaController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test1', function () {
    return '<h1>Hellow Mr Laraver</h1>';
});

Route::get('/main', function () {
    return view('home');
});

Route::view('/main', 'home', ['name'=> 'Otari', 'lastname'=> 'Tabatadze']);

Route::get('/test2', [TestControl::class, 'method1']);

Route::get('/misalmeba', [MisalmebaController::class, 'showForm'])->name('greeting.form');
Route::post('/greeting-result', [MisalmebaController::class, 'generateGreeting'])->name('greeting.result');