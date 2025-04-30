<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Routes pour SETELEC SAS
Route::get('/', [HomeController::class, 'index'])->name('home'); // Utilise l'index comme page d'accueil
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/services', [HomeController::class, 'service'])->name('services'); // Mappe /services vers la méthode 'service'
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

// Les routes non nécessaires ont été supprimées.

