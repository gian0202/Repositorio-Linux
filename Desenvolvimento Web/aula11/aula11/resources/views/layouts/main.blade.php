<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('titulo')</title>
        <link rel="stylesheet" href="/css/style.css">
        <!-- fonte do google -->
        <link href="https://fonts.googleapis.com/css2?family=Macondo&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
        <!-- css bostrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <!--Css da aplicação -->
        <script src="/js/scripts.js"></script>
        
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-ligth">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                    <img src="/img/logo.png" alt="">
                    </a>
                <ul class="nav bar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a href="/events/create" class="nav-link">Criar Eventos </a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">Entrar</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">Cadastrar</a>
                    </li>
                </ul>
                </div>
            </nav>
        </header>
        @yield('content')
     <footer>
        <p>Gian Eventos &copy; 2022 </p>

     </footer>
     <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>