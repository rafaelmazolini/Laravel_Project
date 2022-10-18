<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use App\Models\Professor;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public function index(){
        return view('materias', ['materias' => Materia::all()]);
    }
    
    public function addMateria(Request $request){
        $materia = Materia::create([
            'nome' => $request -> materia,
            'professor_id' => 0
        ]);
        
        return redirect() -> back();
    }
    
    public function materiaInfos($id, $professor){
        return view('materiaInfos', ['materia'  => Materia::find($id), 'professor' => Professor::find($professor)]);
    }
    
}
