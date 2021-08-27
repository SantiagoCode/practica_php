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
        // porque el valor de B es True y omite la diferencia, en cambio en el comparativo estricto si la nota y refleja
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

        // Switch
        echo '<h2>Switch</h2>';

        $cake = "chocolate";

        Switch ($cake) {
            case "chocolate":
                echo "CHOCOLATE!!! IGUAL EL MIO";
                break;
            case "fresa":
                echo "Ulala franses";
                break;
            case "vainilla":
                echo "Es rico, pero no mi favorito";
                break;
            case "piña":
                echo "Antes no me gustaba, ahora si";
                break;
            default:
                echo "Podrias probar el helado de chocolate, es muy rico";
                break;
        }

        // for
        echo '<h2>For</h2>';
        for ($x = 0; $x <= 10; $x++) {
            echo $x;
            echo "</br>";

            if ($x < 10) {
                echo "necesitas subir un piso mas.";
            } else {
                echo "Excelente, has llegado al decimo piso!!";

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
        echo '<h2>While</h2>';

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

        // continue
        echo '<h2>While, break & continue</h2>';
        
        $i = 1;
        while ($i <= 10){
            if ($i == 5){
                echo "LLEGASTE AL 5TO PISO, TOMA UN RESPIRO Y SIGUE SUBIENDO CAMPEON";
                echo '</br>';
                $i++;
                continue;
            }
            if ($i == 10){
                echo "FELICIDADES CAMPEON, DISFRUTA DE LA VISTA DESDE EL PISO $i";
                break;
            }

            echo "Vas bien, vas por el $i piso";
            echo '</br>';
            $i++;

        }
        
        echo '</br>';
        echo '</br>';
        echo '</br>';

        echo $x; //imprime 20 porque su valor si fue alterado por el while

        echo '</br>';

        echo '<h1 class="titulo">Estructuras matematicas</h1>';
        $A = 20;
        $B = 30;
        $C = 50;
        $D = 100;

        $Z = $B * $D + $A;
        echo $Z;
        
        echo '</br>';

        $Z = $B * ($D + $A);
        echo $Z;
        
        echo '</br>';

        $Y = $B % $A;
        echo $Y;
        
        echo '</br>';

        $X = $A - $B;
        echo $X;


        // FUNCIONES

        echo '<h1 class"titulo">FUNCIONES</h1>';

        function myFunc(){
            echo "MI PRIMERA FUNCION EN PHP";
        }
        myFunc();

        echo "</br>";

        // Funciones y argumentos
        function callMe($nombre, $dato){
            echo "Hey, $nombre ¿Como estas?. Me dijeron que te gusta el $dato. ";
            echo "</br>";
        }
        callMe("Santiago","cafe");
        callMe("Sam","vino");
        callMe("Andres","té");

        // Funciones y Return
        function miCalculo($a, $b){
            $c = $a + $b;
            return $c;
        }
        echo miCalculo(10, 20);
        echo "</br>";
        echo miCalculo(100, 20);
        echo "</br>";
        echo miCalculo(12, 18);
        echo "</br>";


        // ARRAYS
        
        echo '<h1 class"titulo">ARRAYS</h1>';

        // indexados, asociativos, multidimensionales.

        // indexado
        $team = array("Pepe","Pepa","Papu");
        echo "Hola, $team[0]";
        echo "</br>";

        // referencias en bucles
        $totalArrays = count($team);
        for ($i = 0; $i < $totalArrays; $i++){
            echo "Hola, mucho gusto, $team[$i]";
            echo "</br>";
        }
        
        echo "</br>";

        // asociativo
        $fruta = array("manzanas"=>20,"peras"=>10,"piñas"=>80,"cambures"=>30);
        echo 'Tenemos ' . $fruta["manzanas"] . ' manzanas';
        echo "</br>";
        echo "</br>";
        
        // referencias en bucles
        echo "Hola, esta es la fruteria de Migues, tenemos... ";
        echo "</br>";
        foreach($fruta as $cual => $cuantas){
            echo $cuantas . " " . $cual. ".</br>";
        }

        // multidimencional
        $datosPersonales = array(
            array("Santiago", 20),
            array("Sergio", 25),
            array("Andres", 32)
        );
        echo $datosPersonales[0][0];
        echo "</br>";

        // referencia en bucles
        $filas = count($datosPersonales);

        for($fila = 0; $fila < 3; $fila++){
            for($columna = 0; $columna < 2; $columna++){
                echo $datosPersonales[$fila][$columna];
                echo "</br>";
            }
        }
   
    ?>

</body>
</html>