<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
     * @var bool
     */
    public $timestamps = false;
    const CREATED_AT = 'criado_em';
    const UPDATED_AT = 'atualizado_em';
    protected $fillable = [
        'editora_id',
        'titulo',
        'data_publicacao',
        'sinopse',
    ];
    
}
