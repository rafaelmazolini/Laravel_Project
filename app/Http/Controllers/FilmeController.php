<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Filmes;
use Illuminate\Http\Request;

class FilmeController extends Controller
{
    public function addFilme(Request $request, $aluno){
        //dd($request);
    
        $newFilme = Filmes::create([
            'titulo' => $request -> titulo
        ]);
        
        $aluno = Aluno::find($aluno);
        
        $newFilme -> update(['aluno_id' => $aluno -> id]);
        
        return redirect() -> route('alunos', [$aluno]);
    }
}
