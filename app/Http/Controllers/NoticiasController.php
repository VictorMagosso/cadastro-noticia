<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticias;

class NoticiasController extends Controller
{
    public function index(){
        $list_noticias = Noticias::all();
        return view('noticias.index', [
            'noticias' => $list_noticias
        ]);
    }

    public function store(Request $request){
        Noticias::create($request->all());
        return redirect('/noticias')->with('message', 'Notícia salva!');
    }
}
