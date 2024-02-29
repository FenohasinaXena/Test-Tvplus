<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller_Kopikole;




// ADMINISTRATEUR

Route::get('/', function () {return view('Accueil'); });

Route::get('Reglement_Kopikole/', function () {return view('Reglement_Kopikole'); });

Route::get('Reglement_Decouverte/', function () {return view('Reglement_Decouverte'); });

Route::get('Reglement_Talenta/', function () {return view('Reglement_Talenta'); });

Route::get('Inscription_Decouverte/', function () {return view('Inscription_Decouverte'); });

// Route::get('Inscription_Kopikole/', function () {return view('Inscription_Kopikole'); });

Route::get('Inscription_Talenta/', function () {return view('Inscription_Talenta'); });


Route::get('/Inscription_Kopikole', [Controller_Kopikole::class, 'liste_ville']);

Route::match(['get', 'post'],'/inscri_kopikole', [Controller_Kopikole::class, 'inscri_kopikole']);

Route::get('/Inscription_Decouverte', [Controller_Kopikole::class, 'liste_ville2']);

Route::match(['get', 'post'],'/inscri_decouverte', [Controller_Kopikole::class, 'inscri_decouverte']);

Route::get('/Inscription_Talenta', [Controller_Kopikole::class, 'liste_ville3']);

Route::match(['get', 'post'],'/insri_talenta', [Controller_Kopikole::class, 'insri_talenta']);



























