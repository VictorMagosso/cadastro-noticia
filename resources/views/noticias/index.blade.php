@extends('template.app')

@section('content')
<nav class="navbar navbar-light bg-light border-bottom">
  <a class="navbar-brand pr-2 border-right">Notícias</a>
  <div class="form-inline">
        
        
        <div class="input-group mb-3">
            <input style="border: none;" type="text" class="form-control border-bottom bg-light" placeholder="Buscar" aria-label="Recipient's username" aria-describedby="button-addon2">
            <div class="input-group-append">
                <button style="border: none;" class="btn btn-outline-secondary" type="button"><i class="fas fa-search"></i></button>
            </div>
        </div>

    <button class="btn btn-primary pl-3 pr-3 ml-5" data-toggle="modal" data-target="#modal">NOVO</button>
  </div>
</nav>

<div class="row border-bottom mb-3 mt-3 bg-light">
    <span class="col-4">ID</span>
    <span class="col-4">Título</span>
    <span class="col-4">Imagem</span>
</div>
@foreach($noticias as $noticia)

        <div class="row border-bottom p-3">
            <option class="col-4" value="id">{{$noticia->id}}</option>
            <option class="col-4" value="titulo">{{$noticia->titulo}}</option>
            <option class="col-3" value="imagem">{{$noticia->imagem}}</option>
            <button type="button" class="fas fa-pencil-alt col-1"></button>
        </div>
        @endforeach


        <!-- Add nova notícia -->
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalTitulo" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitulo">Nova notícia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <form class="row border-bottom p-3" action="{{ url('/store') }}" method="POST">
                    @csrf                       
                        <input placeholder="Título" type="text" class="col-4"></input>
                        <input placeholder="Imagem" type="text" class="col-4"></input>
                        <select class="col-4" name="tipo" id="tipo">
                            <option value="default">Tipo</option>
                            <option value="esportes">Esportes</option>
                            <option value="politica">Política</option>
                            <option value="musica">Música</option>
                            <option value="entretenimento">Entretenimento</option>
                        </select>
                    <textarea rows="10" placeholder="Mensagem" class="col-12 mt-4"></textarea>
                       
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">FECHAR</button>
                <button type="submit" class="btn btn-secondary">SALVAR</button>
                </form>
            </div>
            </div>
        </div>
        </div>


        

@endsection