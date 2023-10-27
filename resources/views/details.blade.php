@extends('layouts.vistapadre')

@section('contenidoPrincipal')
<!DOCTYPE html>
<html>
<head>
    <title>Galería de Fotos con Descripciones</title>
    <style>
        .gallery {
            text-align: center;
        }

        .gallery-item {
            text-align: center;
            margin: 10px;
        }

        .photo {
            max-width: 100%; /* Ajusta el ancho de todas las fotos al 100% */
            height: auto;
        }

        .description {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="gallery">
        <ul>
            <li class="gallery-item">
                <img src="img/combat2.jpg" class="photo" alt="Foto 1">
                <div class="description">
                    <h2>Halo Combat Evolved</h2>
                    <p>Lanzado el 15 de enero del 2002, fue la primer entrega de esta famosa franquisia..</p>
                </div>
            </li>
            <li class="gallery-item">
                <img src="img/halo2.jpg" class="photo" alt="Foto 2">
                <div class="description">
                    <h2>Halo 2</h2>
                    <p>Lanzado en el año de 2004 es la secuela del primer juego en el cual nos vienen nuevas aventuras.</p>
                </div>
            </li>
            <li class="gallery-item">
                <img src="img/1.jpg" class="photo" alt="Foto 2">
                <div class="description">
                    <h2>Halo 3</h2>
                    <p>Lanzado en el año de 2007 es la tercera entrega de la saga, en donde se agregan nuevas mecanicas de juego..</p>
                </div>
            </li>
        </ul>
    </div>
</body>
</html>

@endsection
