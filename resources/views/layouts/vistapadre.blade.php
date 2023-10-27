<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <title>Videojuegos Cesar</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">

    <title>Videojuegos César</title>
  </head>
  <body>
    <h1></h1>

    <div class="container-fluid">
        <nav class="navbar" style="background-color: #e3f2fd;">
            <div class="container-fluid">
                <!-- Navbar Brand (Logo y Texto) -->
                <a class="navbar-brand" href="/"><img src="img/descarga.png" alt="Logo"> Videojuegos Cesar</a>
                <!-- Botón de Menú para dispositivos móviles -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Enlaces de Navegación -->
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto"> 
                        <li class="nav-item">
                            <a class="nav-link" href="/details">Videojuegos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/form">Regístrate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/vistacalc">Operación</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Inicio</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
  </body>
</html>

    @yield('contenidoPrincipal')

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

   
  </body>
</html>