<?php

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/prueba', [App\Http\Controllers\HomeController::class, 'prueba'])->name('prueba');
    Route::get('/sector', [App\Http\Controllers\HomeController::class, 'sector'])->name('sector');
    Route::get('/producto', [App\Http\Controllers\HomeController::class, 'producto'])->name('producto');

    //Rutas de la Calculadora
    Route::get('/calculator', [App\Http\Controllers\CalculatorController::class, 'index'])->name('calculator');
    Route::post('/resultado', [App\Http\Controllers\CalculatorController::class, 'resultado'])->name('resultado');

    //Rutas del crud aprendiz
    /*Route::get('/apprentices', [App\Http\Controllers\HomeController::class, 'apprentices'])->name('apprentices');
    Route::get('/apprentices', [App\Http\Controllers\ApprenticeControler::class, 'index'])->name('apprentices');
    Route::get('/apprentices/add', [App\Http\Controllers\ApprenticeControler::class, 'getapprenticeadd'])->name('apprentice.add');
    Route::post('/apprentices/add', [App\Http\Controllers\ApprenticeControler::class, 'postapprenticeadd'])->name('apprentice.add');
    Route::get('/apprentices/edit/{id}', [App\Http\Controllers\ApprenticeControler::class, 'getapprenticedit'])->name('apprentice.edit');
    Route::post('/apprentices/edit/{id}', [App\Http\Controllers\ApprenticeControler::class, 'postapprenticeedit'])->name('apprentice.edit');
    Route::get('/apprentices/delete/{id}', [App\Http\Controllers\ApprenticeControler::class, 'getapprenticedelete'])->name('apprentice.delete'); */

    // Grupo de rutas para el módulo de aprendices
    Route::get('/apprentices', [App\Http\Controllers\ApprenticeController::class, 'index'])->name('apprentice.index');
    Route::get('/apprentices/create', [App\Http\Controllers\ApprenticeController::class, 'create'])->name('apprentice.create');
    Route::post('/apprentices/store', [App\Http\Controllers\ApprenticeController::class, 'store'])->name('apprentice.store');
    Route::get('/apprentices/edit/{id}', [App\Http\Controllers\ApprenticeController::class, 'getapprenticedit'])->name('apprentice.edit');
    Route::post('/apprentices/edit/{id}', [App\Http\Controllers\ApprenticeController::class, 'postapprenticeedit'])->name('apprentice.edit');
    Route::get('/apprentices/delete/{id}', [App\Http\Controllers\ApprenticeController::class, 'getapprenticedelete'])->name('apprentice.delete'); 


    //Rutas de Instructor
    Route::get('/instructor.index', [App\Http\Controllers\InstructorController::class, 'index'])->name('instructor.index');
    Route::get('/instructor/create', [App\Http\Controllers\InstructorController::Class, 'create'])->name('instructor.create');
});
