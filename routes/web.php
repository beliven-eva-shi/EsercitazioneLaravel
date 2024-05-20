<?php

use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\TasksController;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard', ['tasks' => Tasks::latest()->get()]);
// });


Route::get('task/create', [TasksController::class, 'create']);
Route::post('task/add', [TasksController::class, 'store']);
Route::get('task/{task:id}', [TasksController::class, 'show']);



Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');
Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('session', [SessionsController::class, 'store'])->middleware('guest');
// Route::group(['middleware' => 'auth'], function () {

//     Route::get('dashboard', [TasksController::class, 'index']);
// });
Route::get('task', [TasksController::class, 'index']);
Route::get('project', [ProjectsController::class, 'index']);
