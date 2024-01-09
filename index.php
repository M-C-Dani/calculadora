<?php
require_once 'function.php';

if (isset($_POST['submit'])) {
    $num1 = filter_input(INPUT_POST, 'op1', FILTER_VALIDATE_FLOAT);
    $num2 = filter_input(INPUT_POST, 'op2', FILTER_VALIDATE_FLOAT);
    $operador = $_POST['operador'];

    $resultado = "";
    // Validación adicional para asegurarse de que se ingresen números válidos
    if (!is_numeric($num1) || !is_numeric($num2)) {
        $resultado = "Por favor, ingrese números válidos.";
    } else {
        switch ($operador) {
            case "+":
                $resultado = sumar($num1, $num2);
                break;
            case "-":
                $resultado = restar($num1, $num2);
                break;
            case "*":
                $resultado = multiplicar($num1, $num2);
                break;
            case "/":
                // Validación adicional para evitar división por cero
                if ($num2 != 0) {
                    $resultado = dividir($num1, $num2);
                } else {
                    $resultado = "No se puede dividir por cero.";
                }
                break;
            default:
                $resultado = "Operador no reconocido";
        }
    }
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 5</title>
    <link rel="stylesheet" href="./../estilo.css">
</head>
<body>
<a style="%;color:darkblue;size:2rem" href="./../index.php">Volver</a>

    <fieldset>
        <form action="./index.php" method="post">
        <legend>Calculadora</legend>
        <input type="text" name="op1" id="" placeholder="Operador 1">
        <select name="operador" id="">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="text" name="op2" id="" placeholder="Operador 2">
        <button type="submit" name="submit">Operar</button>
        </form>
    </fieldset>

<h1>
    <!--    Mostrar el resultado -->
    <?php

        echo "Resultado = " . htmlspecialchars($resultado);

    ?>
</h1>
</body>
</html>
