<?php

use Controllers\PlayerController;
use Facades\Route;

Route::get('/players', [AnimalController::class, 'index']);
//Route::get('/animals/{id}', [AnimalController::class, 'show']);
// Route::get('/users', [UserController::class, 'index']);
