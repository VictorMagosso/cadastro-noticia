<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticias extends Model
{
    protected $fillabe = [
        'id',
        'titulo',
        'tipo',
        'imagem',
        'mensagem',
        'id_user'
    ];

    protected $table = 'noticias';

    public function usuario(){
        return $this->belongsTo(Usuarios::class,'id_user');
    }
}

