<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;
use App\Http\Controllers\AlunoMateriaController;
use App\Models\Filmes;
use App\Models\Materia;

class AlunoController extends Controller
{
    public function index(){
        return view('materiaInfos', ['alunos' => Aluno::all()]);
    }
    
    public function addAluno(Request $request, $materia){
        if(Aluno::where('ra', $request -> ra) -> exists()){
            
            $aluno = Aluno::where('ra', $request -> ra) -> get();
            $aluno = $aluno[0];
            
            if($aluno -> materias -> contains($materia)){
                return redirect() -> back();
            }
            
            return redirect() -> route('linkAluno', [$aluno, $materia]);
            
        }
        
        else{
            $aluno = Aluno::create([
                'nome'=> $request -> nome,
                'sobrenome'=> $request -> sobrenome,
                'ra'=> $request -> ra
            ]); 
    
            return redirect() -> route('linkAluno', [$aluno, $materia]);
        }
        
    }
    
    public function alunoInfos($aluno){
        $modelAluno = Aluno::find($aluno);
        
        if($modelAluno != null){
            $materias = $modelAluno -> materias;
            return view('aluno', ['aluno' => Aluno::find($aluno), 'filmes' => Filmes::all(), 'materias' => $materias]);
        }
        
        return redirect() -> route('materias');
        
    }
}
