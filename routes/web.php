<?php

use App\Http\Controllers\TeamMemberController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\ProfileController;
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
Route::get('/team/index', [TeamMemberController::class, 'index'])->name('team.index');

Route::get('/task/index', [TasksController::class, 'index'])->name('tasks.index');

Route::get('/profile/index', [ProfileController::class, 'index'])->name('profile.index');

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
