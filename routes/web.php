<?php

use App\Http\Controllers\MateriaController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MateriaController::class, 'index']) -> name('materias');

Route::post('/addMateria', [MateriaController::class, 'addMateria']) -> name('addMateria');

Route::get('/materia-infos/{id}', [MateriaController::class, 'materiaInfos']) -> name('materia-infos');