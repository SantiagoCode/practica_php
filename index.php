<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica PHP - Hola Andrés</title>

    <style>
        .titulo {
            color: purple;
        }
    </style>
</head>
<body>

    <div class="centrado">
        <h1 class="titulo">Esta es una practica de PHP</h1>
    </div>

    <?php
        // uso basico de echo
        echo "Este es un texto introducido por Eco";

        echo "</br>";

        // variables
        $x = 2001;          /*numerica */
        $y = "Santiago";    /* string o cadena de texto */
        $a = 174.8;          /* float o decimal */
        $b = true;          /* booleano */

        // introduciendo codigo HTML
        echo "<h2>Este es un subtitulo creado con HTML por PHP, con Eco</h2>";

        echo $y . " nacio en el año " . $x . " y mide " . $a;
        
        echo "</br>";   

        // concatenacion
        $z = $y . " nacio en el año " . $x . " y mide " . $a;

        echo $z;
        
        echo "</br>";
    ?>

</body>
</html>