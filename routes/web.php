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

Route::get('/', function () {
    $data = [
        'page_title' => 'About Classe 92',
        'description' => 'segui il link sotto per visualizzare delle info riguardo Classe 92',
    ];
    return view('home', $data);
});

Route::get('/prova', function () {
    $title = 'Panoramica';
    $subtitle = 'studenti';
    $subtitle1 = 'insegnanti';
    $data = [
        'students' => [
            'Mario Rossi',
            'Luigi Verdi',
            'Silvia Neri',
            'Antonio Bianchi',
          ],
          'teachers' => [
              'pippo',
              'pluto'
          ]
          ];
    return view('prova', compact('title', 'subtitle', 'subtitle1'), $data);
})->name('prova');
