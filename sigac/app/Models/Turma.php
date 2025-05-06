<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    use HasFactory;

    protected $table = 'turmas';
    protected $fillable = ['ano', 'curso_id'];

    public function curso() {
        return $this->belongsTo(Curso::class);
    }

    public function alunos() {
        return $this->hasMany(Aluno::class);
    }
}
