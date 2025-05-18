<?php
$mostrar = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['numero'];
    $azar = rand(1, 5);

    if ($usuario == $azar) {
        $mostrar = " ¡Wow, adivinaste!";
    } else {
        $mostrar = " ¡Sigue intentando! El numero correcto era $azar.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Adivina mi numero</title>
    <style>
        body {
            background-color: #fff5f0;
            font-family: sans-serif;
            text-align: center;
            padding-top: 40px;
            color: #4a4a4a;
        }
        input, button {
            padding: 10px;
            margin: 10px;
            border-radius: 8px;
            border: 1px solid #f78da7;
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
    <h2> Adivina el numero dentro del 1 al 5</h2>
    <form method="post">
        Ingresa un numero: <input type="number" name="numero" min="1" max="5" required>
        <button type="submit">intentar</button>
    </form>
    <h3><?= $mostrar ?></h3>
    <a href="index.php" style="display:inline-block;margin:20px;padding:10px 20px;background:#f78da7;color:#fff;text-decoration:none;border-radius:8px;">Volver al menu</a>
</body>
</html>
