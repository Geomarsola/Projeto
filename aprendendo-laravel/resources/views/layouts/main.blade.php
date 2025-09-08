<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonte fo google -->
         <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- CSS Boootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

        <!-- CSS da aplicação -->
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse" id="navbar">
            <a href="/" class="navbar-brend">
             <img src="/img/projeto1.jpg" alt="ForgeOne Events">   
            </a>
            <ul class="navbar-nav">
             <li class="nav-item">
                <a href="/" class="nav-link">Cadastar</a>
             </li> 
                          <li class="nav-item">
                <a href="/" class="nav-link">Entar</a>
             </li>
                          <li class="nav-item">
                <a href="/" class="nav-link">Evento</a>
             </li>
                          <li class="nav-item">
                <a href="/events\create" class="nav-link">Criar Evento</a>
             </li> 
                        <li class="nav-item">
                <a href="/" class="nav-link">Produtos</a>
             </li>  
            </ul>
        </div>
    </nav>
    @yield('content')
    <footer>
        <p>ForgeOne Events &copy; 2025</p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <body>
</html>