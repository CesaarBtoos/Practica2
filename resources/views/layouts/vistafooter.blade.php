<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Elaborado por: César Bustos Martínez
            </div>
            <div class="card-body">
                <h5 class="card-title">Practica de final de mes</h5>
                <p class="card-text">Espacio en donde aprendemos sobre videojuegos de halo</p>
                <a href="/form" class="btn btn-primary">Registrarme</a>
            </div>
        </div>
    </div>
</body>
</html>

  <style>
    /* Establece un alto mínimo para el contenedor y usa flexbox para alinear el contenido en la parte inferior */
.container {
    display: flex;
    min-height: 100vh; /* Esto asegura que el contenedor se extienda al menos hasta el 100% de la altura de la ventana (viewport height) */
    justify-content: center; /* Alinea horizontalmente el contenido en el centro */
    align-items: flex-end; /* Alinea verticalmente el contenido en la parte inferior */
}

/* Estilos para el card (esto es opcional, puedes personalizarlo según tus necesidades) */
.card {
    width: 300px; /* Ancho del card */
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    padding: 10px;
    margin: 10px;
}

/* Estilos para el card-header (esto es opcional, puedes personalizarlo según tus necesidades) */
.card-header {
    background-color: #007bff;
    color: #fff;
    padding: 10px;
    text-align: center;
}
@yield('contenidoFinal')
  </style>