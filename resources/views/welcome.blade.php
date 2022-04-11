<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Personagens marvel</title>

        <!--fonte do google-->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!--bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!--fonte da aplicação-->
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <div id="banner">
        <img src="/img/Marvel_Studios_Logo.jpg" alt="banner" style=" width:100%">
        </div>
        <div id="personagem-container" class="col-md-12">
            <h2>Escolha seu personagem favorito!</h2>
       
            <div id="cards-containers" class="row">
                @foreach($personagem as $indice )
                    <div id="card" class=" col-md-3">

                        <img src="{{$indice->imagem}}" alt="{{$indice->nome}}">

                        <div class="card-body">
                            <h5 class="card-nome">{{$indice->nome}}</h5>  
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
       <footer>
           <p>Marvel Studios &copy;2022</p>
       </footer>
     
    </body>
</html>



