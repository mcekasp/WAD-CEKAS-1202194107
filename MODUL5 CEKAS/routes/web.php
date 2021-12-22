<?php

use App\Http\Controllers\VaccineController;
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

function routes()
{

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/home', function () {
        return view('home', [
            "title" => "Home"
        ]);
    });

    Route::get('/vaccine', [VaccineController::class, 'read'])->name('vaccine');

    Route::get('/input_vaccine', function () {
        return view('input_vaccine', [
            "title" => "Vaccine"
        ]);
    });

    Route::post('/input_vaccine', [VaccineController::class, "addVaccine"])->name('addVaccine');

    Route::get('/update_vaccine', function () {
        return view('update_vaccine', [
            "title" => "Vaccine"
        ]);
    });

    Route::get('/patient', function () {
        return view('patient', [
            "title" => "Patient"
        ]);
    });

    Route::get('/input_patient', function () {
        return view('input_patient', [
            "title" => "Patient"
        ]);
    });

    Route::get('/update_patient', function () {
        return view('update_patient', [
            "title" => "Patient"
        ]);
    });
}
