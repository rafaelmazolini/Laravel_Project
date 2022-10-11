<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public function index(){
        return view('materias', ['materias' => Materia::all()]);
    }
    
    public function addMateria(Request $request){
        $newMateria = new Materia;
        $newMateria -> nome = $request -> materia;
        $newMateria -> save();
        
        return redirect('/');
    }
    
    public function materiaInfos($id){
        return view('materiaInfos', ['materias'  => Materia::where('id', $id) -> get()]);
    }
    
}
