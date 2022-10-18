<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use App\Models\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function index(){
        return view('materiaInfos', ['professores' => Professor::all()]);
    }
    
    public function addProfessor(Request $request, $materia){
        $newProfessor = Professor::create([
            'nome' => $request -> nome,
            'rp' => $request -> rp
        ]);
            
        $materia = Materia::find($materia);
        
        
        
        $materia -> update(['professor_id' => $newProfessor -> id]);
        
        
        return redirect() -> route('materia-infos', [$materia, $materia -> professor_id]);
    }
}
