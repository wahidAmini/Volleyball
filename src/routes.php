<?php

use Controllers\PlayerController;
use Controllers\TeamController;
use Controllers\HomeController;
use Facades\Route;

Route::get('/', [HomeController::class, 'home']);

// routes for teams
Route::get('/teams', [TeamController::class, 'index']);

Route::get('/teams/create', [TeamController::class, 'create']);
Route::post('/teams/create', [TeamController::class, 'insert']);

Route::get('/teams/{id}/edit', [TeamController::class, 'edit']);
Route::post('/teams/{id}/edit', [TeamController::class, 'update']);

Route::post('/teams/{id}/delete', [TeamController::class, 'delete']);

// routes for palyers 
Route::get('/players', [PlayerController::class, 'index']);
Route::get('/players/{id}', [PlayerController::class, 'show']);

Route::get('/players/create', [PlayerController::class, 'create']);
Route::post('/players/create', [PlayerController::class, 'insert']);

Route::get('/players/{id}/edit', [PlayerController::class, 'edit']);
Route::post('/players/{id}/edit', [PlayerController::class, 'update']);

Route::post('/players/{id}/delete', [PlayerController::class, 'delete']);


