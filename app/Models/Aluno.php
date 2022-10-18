<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $guarded = [];

    use HasFactory;
    
    public function materias(){
        return $this -> belongsToMany(Materia::class, 'aluno_materia');
    }
    
    public function filmes(){
        return $this -> hasMany(Filmes::class);
    }
}
