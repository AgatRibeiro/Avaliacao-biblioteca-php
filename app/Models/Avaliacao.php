<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    protected $fillable = [
        'usuario_id',
        'livro_id',
        'nota',
        'descricao',
    ];
    //
}
