<?php

use App\Http\Controllers\API\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ScheduleController;
use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Auth;

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
 })->name('dashboard');

// Route::get('fullcalendar', [ScheduleController::class, 'index']);
Route::get('scheduleTask', [ScheduleController::class, 'index'])->name('schedule');

Route::post('fullcalendarAjax', [ScheduleController::class, 'ajax']);
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/tasks_status', function () {
    return view('task_status');
})->name('task_status');

Route::get('file-upload', [FileController::class, 'fileUpload'])->name('file.upload');

Route::post('file-upload', [FileController::class, 'fileUploadPost'])->name('file.upload.post');
