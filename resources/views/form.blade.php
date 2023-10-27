@extends('layouts.vistapadre')

@section('contenidoPrincipal')
<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Registro</title>
    <style>
        body {
            height: 200vh;
            justify-content: center;
            align-items: center;
            margin: 10px auto;
        }

        form {
            text-align: center;
        }

        label {
            text-align: center;
            display: block;
        }

        input, button {
            display: block;
            margin: 10px auto;
        }
    </style>
</head>
<body>
    <h2 class="1">Registro de Usuario</h2>

    <form action="procesar_registro.php" method="POST">
        <!-- Campo de Nombre -->
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" required>

        <!-- Campo de Correo Electrónico -->
        <label for="email">Correo Electrónico</label>
        <input type="email" name="email" id="email" required>

        <!-- Campo de Contraseña -->
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" required>

        <!-- Botón de Registro -->
        <button type="submit">Registrarse</button>
    </form>
</body>
</html>

@endsection
