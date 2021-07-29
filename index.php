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



        // ESTRUCTURAS DE CONTROL DE FLUJO
        echo '<h1 class="titulo">Aqui empiezan las estructuras de control de flujo</h1>';
        
        // if
        echo '<h2>If</h2>';
        /**¿Por que en el comparativo Igual no funciona y en el Identico si? */
        if ($a == $b){
            echo "La variable A es igual a la variable B";
        } else {
            echo "La variable A es distinta a la variable B";
        }

    echo "</br>";

        if ($a === $b){
            echo "La variable A es igual a la variable B";
        } else {
            echo "La variable A es distinta a la variable B";
        }

        // for
        echo '<h2>For</h2>';
        for ($x = 0; $x <= 10; $x++) {
            echo $x;
            echo "</br>";

            if ($x < 10) {
                echo "necesitas subir un piso mas";
            } else {
                echo "Excelente, has llegado al decimo piso";

            }

            echo "</br>";
        }
        
        echo '</br>';

        // foreach
        echo '<h2>foreach</h2>';

        $myArray = ['Santiago','Sam','Andres'];

        echo 'En mi familia somos 3 hermanos:';
        echo '</br>';

        foreach ($myArray as $bro) {
            echo $bro;
            echo '</br>';
        }

        
        // while
        echo '<h2>while</h2>';

        $x = 10;
        while ($x < 20) {
            echo $x;
            echo '</br>';
            echo "Sube otro piso, falta poco";
            echo '</br>';
            $x++;

            if ($x == 20) {
                echo $x;
                echo '</br>';
                echo "felicidades, ya has llegado al piso 20, ahora solo faltan 80 pisos mas";
            }
        }
        
        echo '</br>';

        
    ?>

</body>
</html>