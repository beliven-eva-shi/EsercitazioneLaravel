<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\TasksController;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('task/create', [TasksController::class, 'create']);
Route::post('task/add', [TasksController::class, 'store']);
Route::get('task/{task:id}', [TasksController::class, 'show']);
Route::get('client/create', [ClientsController::class, 'create']);
Route::post('client/add', [ClientsController::class, 'store']);
Route::get('project/create', [ProjectsController::class, 'create']);
Route::post('project/add', [ProjectsController::class, 'store']);


Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');
Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('session', [SessionsController::class, 'store'])->middleware('guest');
// Route::group(['middleware' => 'auth'], function () {

//     Route::get('dashboard', [TasksController::class, 'index']);
// });
Route::get('task', [TasksController::class, 'index']);
Route::get('project', [ProjectsController::class, 'index']);
Route::put('/task/{task:id}/stato', [TasksController::class, 'editStato']);
Route::put('/task/{task:id}/user', [TasksController::class, 'editUser']);

Route::get('client', [ClientsController::class, 'index']);
