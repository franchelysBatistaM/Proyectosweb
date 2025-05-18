<?php
$total = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];

    switch ($operacion) {
        case "sumar":
            $total = $num1 + $num2;
            break;
        case "restar":
            $total = $num1 - $num2;
            break;
        case "multiplicar":
            $total = $num1 * $num2;
            break;
        case "dividir":
            if ($num2 == 0) {
                $total = "<span style='color:#c94c73;'>Lo siento, la division entre 0 no es posible.</span>";
            } else {
                $total = $num1 / $num2;
            }
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora </title>
    <style>
        body {
            background-color: #fff5f0;
            font-family: sans-serif;
            text-align: center;
            padding: 40px;
            color: #4a4a4a;
        }
        button, select, input {
            margin: 10px;
            padding: 10px;
            border: 1px solid #f78da7;
            border-radius: 8px;
        }
        button {
            background-color: #f78da7;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background-color: #c94c73;
        }
    </style>
</head>
<body>
    <h2> Calculadora </h2>
    <form method="post">
        Numero 1: <input type="number" name="num1" required><br>
        Numero 2: <input type="number" name="num2" required><br>
        Operacion:
        <select name="operacion">
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select><br>
        <button type="submit">Calcular</button>
    </form>
    <h3>Resultado: <?= $total ?></h3>
    <a href="index.php" style="display:inline-block;margin:20px;padding:10px 20px;background:#f78da7;color:#fff;text-decoration:none;border-radius:8px;">Volver al menu</a>
</body>
</html>
