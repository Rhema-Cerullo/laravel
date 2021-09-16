<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\HTTP\Controllers\API\RegisterController;
use App\HTTP\Controllers\API\ScheduleController;
use App\HTTP\Controllers\API\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', [RegisterController::class, 'login'])->name('login');


Route::get('logout', [RegisterController::class, 'logout'])->name('logout');


Route::post('register', [RegisterController::class, 'register']);

Route::post('task', [ScheduleController::class, 'ajaxTask'])->name('taskCrud');
Route::get('fullcalender', [ScheduleController::class, 'index'])->name('fetchUserTasks');




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
