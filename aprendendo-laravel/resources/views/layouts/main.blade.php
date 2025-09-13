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
                    <img src="/img/projeto14.jpg" alt="ForgeOne Events">   
                </a>
                <ul class="navbar-nav">
             @auth
             <li class="nav-item">
                <a href="/dashboard" class="nav-link">Meus eventos</a>
             </li> 
             <li class="nav-item">
                <form action="/logout" method="POST">
                  @csrf
                  <a href="/logout" 
                    class="nav-link" 
                    onclick="event.preventDefault();
                    this.closest('form').submit();">
                    Sair
                   </a>
                </form>
             </li> 
             @endauth       
            @guest          
             <li class="nav-item">
                <a href="/login" class="nav-link">Entrar</a>
             </li>           
            <li class="nav-item">
                <a href="/register" class="nav-link">Cadastrar</a>
            </li>
            @endguest
                          <li class="nav-item">
                <a href="/" class="nav-link">Evento</a>
             </li>
                          <li class="nav-item">
                <a href="/events\create" class="nav-link">Criar Evento</a>
             </li> 
            </ul>
        </div>
    </nav>
    <main>
        <div class="contaniner-fluid">
        <div class="row">
            @if(session('msg'))
            <p class="msg">{{ session('msg') }}</p>
            @endif
         @yield('content')
        </div>
        </div>
    </main>
    <footer>
            <p>ForgeOne Events &copy; 2025</p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <body>
</html>