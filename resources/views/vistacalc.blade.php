@extends('layouts.vistapadre')

@section('contenidoPrincipal')
<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Multiplicación</title>
</head>
<body>
    <div class="calculator">
        <h2>Calculadora de Multiplicación</h2>
        <input type="number" id="num1" placeholder="Número 1">
        <input type="number" id="num2" placeholder="Número 2">
        <button onclick="calcularMultiplicacion()">Multiplicar</button>
        <p>Resultado: <span id="resultado"></span></p>
    </div>

    <script>
        function calcularMultiplicacion() {
            var num1 = parseFloat(document.getElementById("num1").value);
            var num2 = parseFloat(document.getElementById("num2").value);
            var resultado = num1 * num2;
            document.getElementById("resultado").textContent = resultado;
        }
    </script>
</body>
<style>
     .calculator {
            text-align: center;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
        }

        input, button {
            margin: 5px;
            padding: 5px 10px;
        }
    </style>
</html>
@endsection