<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
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



Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [CompaniesController ::class, 'index'])->name('dashboard');
    Route::get('/company/edit/{id}', [CompaniesController ::class, 'show'])->name('company.edit');
    Route::get('/company/delete/{id}', [CompaniesController ::class, 'destroy'])->name('company.delete');

    Route::get('/empolyee/{id}', [EmployeeController ::class, 'index'])->name('empolyee');
    Route::get('/empolyee/edit/{id}', [EmployeeController ::class, 'show'])->name('empolyee.edit');
    Route::get('/empolyee/delete/{id}', [EmployeeController ::class, 'destroy'])->name('empolyee.delete');

});




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
