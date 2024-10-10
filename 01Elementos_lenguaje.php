<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elementos del lenguaje</title>
</head>
    
<body>
    <h1>Elementos del lenguaje</h1>

<?php
# Script: 01 elementos_lenguaje.php
?>
    <h2>Entrada y salida</h2>
    <p>La etrada de datos en PHP es con un formulario o con un enlace. La salida 
        de datos se produce con la funcion echo y su forma abreciada, y la funcion print.
        Ademas, para salida de datos con formato tenemos printf
    </p>
    <h3>Funcion echo</h3>
<?php
    echo'<p>La funcio eco emiete el resultado de una expresion a la salida. Se puede 
    usar como funcion o como construccion del lenguaje (sin parentesis)</p>';

    echo'<p>Esto es un parrafo HTML enviado por echo</p>';

    $nombre = 'Juan';
    echo 'Hola', $nombre, 'como estass?<br>';
    // echo 'Hola', $nombre, 'como estass?'; No sirve, hay mas de un argumento 
    echo 'Hola, juan, como estass?';

    //Quiero un salto de linea al final de la linea
    echo 'Hola, esta línea acaba en un salto /n';
    echo 'Supuestamente esta linea es la sguiente a la anterior\n y esta va despues';

    $nombre = 'jose';
    $apellido = 'gomez';

    echo "<br>Mi nombre es, $nombre, y mi apellido es $apellido <br>";

    echo "<br>Mi nombre es,". $nombre .", y mi apellido es". $apellido ." <br>";

    echo "<br>Uno mas dos son ", 1+2 ," y tiene que haber salido 3<br>";

    echo "<br>Uno mas dos son ". 1+2 ." y tiene que haber salido 3<br>";

    echo "<h4> Forma abreviada de echo </h4>";
    echo "<p>Cuando hay que enviar a la salida el resultado de una expresion pequeña
            disponemos de la forma abreviada de echo que permite intercalarse en el codigo
            HTML con menos esfuerzo</p>"
?>
    <!-- La forma abreviada de echo va dentro de HTML -->
    <!-- &lt;?= expresion ?&gt; equivale a &lt;?php echo expresion ?&gt; -->

    <p>Mi nombre es <?= $nombre . " " . $apellido ?> y estoy programando en PHP</p>

    <!-- Uso muy habitual. Valores por defecto en controles de formulario -->
    <input type='text' name='nombre' size='15' value='<?= $nombre ?>'><br>
    <input type='checkbox' name='portatil' <?= $tiene_portatil ? 'checked' : ''?>>¿Tienes portatil?<br>

    <!-- Consejo: Las cadenas en PHP con " y en HTML con ' -->
<?php

    echo "<input type='text' name='apellido' size='50'>";

?>

    <h3>Funcion print</h3>
    <p>Funciona igual que echo</p>

<?php

    print "<p>Esto es una cadena \n que tiene mas de una linea \n y se envia a la salida</p>";
    print "<p>Mi nombre es $nombre $apellidos</p><br>";

?>
    <h3>funcion printf</h3>

<?php

    $pi = 3.14159;
    $radio = 3;
    $circunferencia = 2 * $pi * $radio;
    printf("<br>La circunferencia de radio %d es %f", $radio, $circunferencia);

?>

</body>
</html>