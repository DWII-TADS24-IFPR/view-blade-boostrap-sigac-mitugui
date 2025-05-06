<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;

    protected $table = 'documentos';
    protected $fillable = ['url', 'descricao', 'horas_in', 'status', 'comentario', 'horas_out', 'categora_id'];

    public function categoria() {
        return $this->belongsTo(Categoria::class);
    }
}
