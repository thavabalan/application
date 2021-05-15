<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/admindashboard',[DashboardController::class, 'show'])->middleware('admin')->name('dashboard1');
Route::post('/approve/{id}', [DashboardController::class, 'approve'])->name('admin.approve');
Route::post('/decline/{id}', [DashboardController::class, 'decline'])->name('admin.decline');
Route::post('/onhold/{id}', [DashboardController::class, 'onhold'])->name('admin.onhold');
Route::get('export', [DashboardController::class, 'export'])->name('export');
require __DIR__.'/auth.php';
