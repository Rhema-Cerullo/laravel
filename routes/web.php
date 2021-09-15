<?php

use App\Http\Controllers\API\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ScheduleController;

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

Route::get('/', [RegisterController::class, 'watcher'] );

Route::post('/authentication', function () {
    //authenticationController
});

Route::get('/dashboards', function () {
    return view('dashboard');
})->name('dashboards');

Route::get('fullcalendar', [ScheduleController::class, 'index']);

Route::post('fullcalendarAjax', [ScheduleController::class, 'ajax']);
// Route::get('/', function () {
//     return view('welcome');
// });
