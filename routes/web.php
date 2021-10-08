<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Middleware\DepartmentValid;
use App\Http\Controllers\TestController;
use App\Http\Middleware\CheckStatus;

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

// Route::get('home', function () {
//     // return view('home');
// })->middleware('department');

Route::middleware([CheckStatus::class])->group(function(){
    Route::get('home', [TestController::class,'home']);
});