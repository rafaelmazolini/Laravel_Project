<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\AlunoMateriaController;
use App\Http\Controllers\FilmeController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\ProfessorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Home
Route::get('/', [MateriaController::class, 'index']) -> name('materias');

//Materia
Route::get('/materia-infos/{id}/{professor}', [MateriaController::class, 'materiaInfos']) -> name('materia-infos');

//Adicionar
Route::post('/addMateria', [MateriaController::class, 'addMateria']) -> name('addMateria');
Route::post('/addAluno{materia}', [AlunoController::class, "addAluno"]) -> name('addAluno');
Route::post('/addProfessor{materia}', [ProfessorController::class, 'addProfessor']) -> name('addProfessor');
Route::post('/addFilme/{aluno}', [FilmeController::class, 'addFilme']) -> name('addFilme');

//Aluno
Route::get('/linkAluno/{aluno}/{materia}', [AlunoMateriaController::class, "store"]) -> name('linkAluno');
Route::get('/alunos/{aluno}', [AlunoController::class, 'alunoInfos']) -> name('alunos');



//Comandos
Route::post('/voltar-materias', function (){
    return redirect() -> route('materias');
}) -> name('voltar-materias');
