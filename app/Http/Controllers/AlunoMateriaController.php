<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Materia;
use Illuminate\Http\Request;

class AlunoMateriaController extends Controller
{
    public function store(Request $request){
        $aluno = $request -> aluno;
        $materia = $request -> materia;
        
        $aluno = Aluno::find($aluno);
        $materia = Materia::find($materia);
    
        $aluno->materias()->attach($materia);
        
        return redirect() -> back();
    }
    
}
