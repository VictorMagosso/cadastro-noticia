<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $fillabe = [
        'id',
        'usuario'
    ];

    protected $table = 'usuarios';

    public function noticia(){
        return $this->hasMany(Noticias::class,'id_user');
    }
}
