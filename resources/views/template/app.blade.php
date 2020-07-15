<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">

    <title>Document</title>

    <style>
        li{
            padding-left: 15px;

        }
        li a{
            color: #424242;
            font-size: 12px;
        }
        #menu{
            border: 0.5px solid #c0c0c0;
            width: 100%;
            height: 800px;
        }
        #modal input, select{
            border: none;
            border-bottom: 1px solid #C0C0C0;
        }
        #editor {
            overflow:scroll;
            max-height:300px
        }
        
        </style>
</head>
<body>
<nav class="navbar navbar-dark" style="background: #A662BA;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <div class="pos-f-t">
    <div class="row">
    
        <div id="menu" class="bg-light pl-4 col-2 collapse">
        <ul class="navbar-nav pl-4 ml-2 d-flex">
        <i style="position: absolute; left: 15px; font-size: 30px; padding-top: 10px;" class="fas fa-calendar-alt text-primary"></i>
            <li class="text-dark nav-item"><a class="nav-link" href="">Cadastros<i style="font-size: 18px;" class="fas fa-angle-up float-right"></i></a></li>
            <li class="text-dark nav-item"><a class="nav-link" href="">Usuários<i style="font-size: 18px;" class="fas fa-user float-right"></i></a></li>
            <li class="text-dark nav-item"><a class="nav-link" href="">Denúncias<i style="font-size: 18px;" class="fas fa-bullhorn float-right"></i></a></li>
            <li class="text-dark nav-item"><a class="nav-link text-primary" href="/noticias">Notícias<i style="font-size: 18px;" class="far fa-images float-right"></i></a></li>
            <li class="text-dark nav-item"><a class="nav-link" href="">Páginas<i style="font-size: 18px;" class="far fa-file-code float-right"></i></a></li>
            <li class="text-dark nav-item mt-1 border-top"><a class="nav-link" href="">Sair<i class="fas fa-door-open float-right"></i></a></li>
            
        </ul>
        </div>
        <div class="col-10">
            @yield('content')
        </div>
    </div>
    
    </div>

    <script>
        $('#modal').modal('show')
        $('#editor').wysiwyg();
        </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
<script src="../js/app.js"></script>
</body>
</html>