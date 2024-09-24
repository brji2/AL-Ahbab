<?php

use App\Http\Controllers\Admin\InstituteController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\TesterController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::prefix('testers')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [TesterController::class, 'index'])->name('testers.index');
    Route::get('/create', [TesterController::class, 'create'])->name('testers.create');
    Route::post('/', [TesterController::class, 'store'])->name('testers.store');
    Route::get('/{tester}', [TesterController::class, 'show'])->name('testers.show');
    Route::get('/{tester}/edit', [TesterController::class, 'edit'])->name('testers.edit');
    Route::put('/{tester}', [TesterController::class, 'update'])->name('testers.update');
    Route::delete('/{tester}', [TesterController::class, 'destroy'])->name('testers.destroy');
});


Route::prefix('institutes')->group(function () {
    Route::get('/', [InstituteController::class, 'index'])->name('institutes.index');
    Route::get('/create', [InstituteController::class, 'create'])->name('institutes.create');
    Route::post('/', [InstituteController::class, 'store'])->name('institutes.store');
    Route::get('/{institute}', [InstituteController::class, 'show'])->name('institutes.show');
    Route::get('/{institute}/edit', [InstituteController::class, 'edit'])->name('institutes.edit');
    Route::put('/{institute}', [InstituteController::class, 'update'])->name('institutes.update');
    Route::delete('/{institute}', [InstituteController::class, 'destroy'])->name('institutes.destroy');
});


Route::prefix('students')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [StudentController::class, 'index'])->name('students.index');
    Route::get('/create', [StudentController::class, 'create'])->name('students.create');
    Route::post('/', [StudentController::class, 'store'])->name('students.store');
    Route::get('/{student}', [StudentController::class, 'show'])->name('students.show');
    Route::get('/{student}/edit', [StudentController::class, 'edit'])->name('students.edit');
    Route::put('/{student}', [StudentController::class, 'update'])->name('students.update');
    Route::delete('/{student}', [StudentController::class, 'destroy'])->name('students.destroy');
});
require __DIR__ . '/auth.php';
