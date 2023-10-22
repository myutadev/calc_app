<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalcController;


/*
cdfvghjhhhy````````````````````````````````````9iu                                                    000  hh```  `  Web Routes
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

// Route::get('/calc', function () {
//     return view('main.calc');
// });

Route::get('/calcs/{num1}/{operation}/{num2}', [CalcController::class, 'result']);
