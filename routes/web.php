<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasudController;

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

// Auth::routes();

// Route::get('fontent',function(){
//     return view('layouts.master');
// });

// Route::get('fontent',)
Route::get('fontent',[MasudController::class, 'font']);
Route::get('about',[MasudController::class, 'about']);
Route::get('contact',[MasudController::class, 'contact']);
Route::get('from',[MasudController::class, 'from']);

