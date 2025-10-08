<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TaskController;

Route::get('/', function(){ return redirect()->route('tasks.index'); });
Route::resource('tasks', TaskController::class);
# optional toggle route
Route::patch('tasks/{task}/toggle', [TaskController::class, 'toggle'])->name('tasks.toggle');


// Route::get('/', function () {
//     return view('welcome');
// });
