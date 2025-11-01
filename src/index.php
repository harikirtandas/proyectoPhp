<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>php</title>
</head>
    <body>
        <h3>CURSO PHP</h3>
            <?php 

        // // comentario 
        // /**
        //  * comentario de varias
        //  * lineas∫
        //  */

        // // Variables
        // $nombre = addslashes('Jorge');
        // // $nombre = chop('Jorge');
        // // $nombre = bin2hex('Jorge');
        // $edad = 15;

        // // cual es la diferencia entre print y echo?? 
        // // print --> muestra en pantalla - es una función
        // // echo --> muestra en pantalla, permite separar por comas las variables - es una expresión
        // print $nombre;
        // echo $nombre, $edad;

        // // reasigno el valor de la variable
        // // $nombre = 15;

        // // concatenar con . 
        // print '<br>' . $nombre . $edad;

        // // Interpolación de cadenas: se pueden ingresar las variables dentro del str con " "
        // print "<br>Nombre: $nombre, Edad: $edad <br>";

        // $b = 10;
        // $a = 10;
        // $c = 50;

        // // importar modulos, funciones o componentes. Si no existe sigue adelante
        // include("suma.php");

        // // si no existe se termina el programa
        // // require("suma.php");
        
        // echo suma(100, 200); 
        // // phpinfo();

        // // constantes
        // define("PI", 3.1416);
        // echo "<br>La constante PI es: " . PI . '<br>';

        // echo __LINE__, '<br>';   // cantidad de líneas
        // echo __FILE__, '<br>';   // ruta y nombre del file
        // echo __FUNCTION__, '<br>';
        // echo __CLASS__, '<br>';
        // echo __METHOD__, '<br>';
        // echo PHP_VERSION, '<br>'; // muestra la versión de PHP
        // echo PHP_OS, '<br>';              // muestra el sistema operativo
        // echo DEFAULT_INCLUDE_PATH, '<br>';

        // // convertir tipos 
        // $a = (string) $a;
        
        // echo is_string($a);

        // echo chop($nombre);

        include './funciones/funciones.php';

        $nombre = 'Jor';

        echo $nombre, '<br>';
        dameNombre()


        ?>
    </body>
</html>