<?php
$nombre = "Franchelys";
$apellido = "Batista Meran";
$edad = 18;
$carrera = "Desarrollo de software";
$universidad = "ITLA";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Tarjeta</title>
    <style>
        body {
            background-color: #fff5f0;
            font-family: sans-serif;
            text-align: center;
            color: #4a4a4a;
            padding-top: 40px;
        }
        .tarjeta {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            display: inline-block;
            box-shadow: 0 0 10px rgba(200, 100, 120, 0.2);
        }
        h2 {
            color: #f78da7;
        }
        .volver-btn {
            display: inline-block;
            margin-top: 40px;
            padding: 10px 20px;
            background: #f78da7;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }
        .volver-btn:hover {
            background-color: #c94c73;
        }
    </style>
</head>
<body>
    <div class="tarjeta">
        <h2> Mi Tarjeta Personal</h2>
        <p><strong>Nombre:</strong> <?= $nombre ?></p>
        <p><strong>Apellido:</strong> <?= $apellido ?></p>
        <p><strong>Edad:</strong> <?= $edad ?></p>
        <p><strong>Carrera:</strong> <?= $carrera ?></p>
        <p><strong>Universidad:</strong> <?= $universidad ?></p>
        <p>
            <?php
                if ($edad >= 18) {
                    echo "Eres mayor de edad";
                } else {
                    echo "Eres menor de edad";
                }
            ?>
        </p>
    </div>

    <div>
        <a href="index.php" class="volver-btn">Volver al menu</a>
    </div>
</body>
</html>
