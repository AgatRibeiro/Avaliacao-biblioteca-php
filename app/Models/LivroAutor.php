<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LivroAutor extends Model
{
    protected $fillable = [
        'livro_id',
        'autor_id'
    ];
    //
}
