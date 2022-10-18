<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    protected $table = 'professores';
    
    public function materia(){
        return $this -> belongsTo(Materia::class);
    }
}
