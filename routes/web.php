<?php

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

Route::get('go', function() {
    session(['dev' => true]);

    return redirect(route('principal'));
})->name('dev.go');

Route::get('/', function () {
    $testimonials = (new \App\Testimonials)->all();

    return view('principal.index', compact('testimonials'));
})->name('principal');

Route::get('socios', function () {
    return view('socios.index');
})->name('socios');

Route::prefix('praticas')->name('praticas.')->group(function() {

    Route::get('processos-juridicos', function () {
        return view('praticas.processos.index');
    })->name('processos'); 
    Route::get('assessoria-e-consultoria', function () {
        return view('praticas.assessoria.index');
    })->name('assessoria'); 
    Route::get('planejamento-de-negocios', function () {
        return view('praticas.planejamento.index');
    })->name('planejamento');     
    Route::get('family-business-law', function () {
        return view('praticas.family.index');
    })->name('family'); 
});
