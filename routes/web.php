<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});


/* Route::get(
    'students',
    [StudentController::class, 'index']
)->name('students.index');

Route::get(
    'students/{id}',
    [StudentController::class, 'show']
)->name('students.show'); */


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get(
    'students/trash/{id}',
    [StudentController::class, 'trash']
)->name('students.trash')->middleware(['auth', 'verified']);

Route::get(
    'students/trashed/',
    [StudentController::class, 'trashed']
)->name('students.trashed')->middleware(['auth', 'verified']);

Route::get(
    'students/restore/{id}',
    [StudentController::class, 'trash']
)->name('students.restore')->middleware(['auth', 'verified']);

Route::resource('students', StudentController::class)->middleware(['auth', 'verified']);






Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
