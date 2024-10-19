<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EtudiantController;

Route::post('/etudiants', [EtudiantController::class, 'store']);