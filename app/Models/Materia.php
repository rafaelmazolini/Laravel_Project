<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $guarded = [];
    
    use HasFactory;
    
    public function alunos(){
        return $this -> belongsToMany(Aluno::class, 'aluno_materia');
    }
    
    public function professor(){
        return $this -> hasOne(Professor::class);
    }
}
