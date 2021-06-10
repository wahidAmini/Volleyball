<?php

use Controllers\PlayerController;
use Facades\Route;

Route::get('/players', [PlayerController::class, 'index']);
Route::get('/players/{id}', [PlayerController::class, 'show']);
//Route::post('/players/create', [PlayerController::class, 'create']);
// Route::get('/users', [UserController::class, 'index']);
