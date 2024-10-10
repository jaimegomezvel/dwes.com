<?php
define("salto", "<br>");
define("PI", 3.14159);
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Estructuras de Control</title>
    </head>
    <body>
        <h1>Estructuras de Control</h1>

        <h2>Sentencias</h2>
        <p>
            Las sentencias simples acaban en ;, pudiendo haber mas de una
            en la misma línea
        </p>
<?php
    $numero = 3; echo "El numero es $numero<br>"; $numero += 3; print "Ahora es $numero<br>";
?>
        <p>Un bloque de sentenciases un conjunto de sentencias encerradas entre llaves. No
            sulen ir solas, sino formar parte de una estructura de control. Además, se pueden
            anidar</p>
<?php
    {
        $numero = 5;
        echo "El numero es $numero<br>";
        $numero -= 2;
        echo "Ahora el numero es $numero<br>";
        {
            $numero = 8;
            $numero *= 2;
            echo "El numero es $numero<br>";
        }
    }
?>

    <h2>Estructuras de Control Simple</h2>
<?php
    // if (expresion) sentencia;
    $numero = 4;
    if ($numero >= 4) echo "El numero es mayor o igual a 4<br>";

    if ($numero === 4 AND $numero % 2 == 0) 
        echo "El numero es igual a 4 y su resto al dividir por 2 es 0<br>";

    $n1 = 9;
    $n2 = 5;
    $n3 = 10;
    if (($n1 == 9 OR $n2 < $n1) AND $n3 > 10) {
        echo "El resultado global es True<br>";
    }
    else {
        echo "El resultado global es False<br>";
    }
?>

<h2>Estructuras de Control Compuesta</h2>
<?php
    $n1 = 9;
    $n2 = 5;
    $n3 = 10;
    if (($n1 == 9 OR $n2 < $n1) AND $n3 > 10) {
        echo "El resultado global es True<br>";
    }
    else {
        echo "El resultado global es False<br>";
    }

    if ($n1 > 20 OR $n3 < 15) echo "La condicion es True<br>";
    else echo "La condicion es False<br>";

    $edad = 21;
    if ($edad > 18)
        echo "Puedes ver la peli<br>";
    else
        echo "No puedes ver la peli para mayores<br>";
    $tipo_carnet = "C1";
    if ($edad > 18 and $tipo_carnet == "C1") {
        echo "Obtencion del carnet de camion<br>";
        echo "Tienes $edad años y al superar los 21 puedes obterner el carnet $tipo_carnet<br>";
    }
    else {
        echo "No cumples con los requisitos para el carnet $tipo_carnet<br>";
        echo "Comprueba que tienes mas de 21 años<br>";
    }

    // uso de código HTML en las estructuras de control
    if ($edad > 18 AND $edad < 65) { ?>

        <h3>Servicios del gimnasio disponibles para la edad <?=$edad?>:</h3>
        <ul>
            <li>Spinning</li>
            <li>Boxeo</li>
            <li>Zumba</li>
        </ul>
<?php
    }
    else { ?>
        <h3>Servicios para jubilados o menores de 18</h3>
        <ul>
            <li>Taichi</li>
            <li>Pilates</li>
            <li>Yoga</li>
        </ul>
<?php
    }

    if ($tipo_carnet = "C1")
        echo <<<CARNET_C1
    <h2>Documentacion para obtener el carnet $tipo_carnet</h2>
    <ul>
        <li>Fotocopia del carnet</li>
        <li>Certificado de penales</li>
        <l1>Carnet B"</l1>
    </ul>
    CARNET_C1;
?>

    <h2>IF ELSE ANIDADO</h2>
<?php
    $nota = 6.5;
    if ($nota >= 0 AND $nota <5)
        echo "Has cateado";
    else
        if ($nota < 6)
            echo "Por los pelos socio";
        else
            if ($nota < 7)
                echo "Bien socio";
            else
                if ($nota < 9)
                    echo "Mu bien cabron";
                else
                    if ($nota <= 10)
                        echo "friki sal de casa";
                    else 
                        echo "La nota no es coherente";
    echo "<br>";

    if ($nota >= 0 and $nota < 5) {
        echo "Suspenso";
    }
    elseif ($nota < 6) {
        echo "Aprobado";
    }
    elseif ($nota < 7) {
        echo "Bien";
    }
    elseif ($nota < 9) {
        echo "Notable";
    }
    elseif ($nota < 10) {
        echo "Sobresaliente";
    }
    else {
        echo "La nots no es correcta";
    }
    echo "<br>";

    // Estructura condicional múltiples switch
    $nota = 7;
    switch ($nota) {
        case 1: 

        case 2:

        case 3:
            
        case 4: {
            echo "Suspenso";
            break;
        }

        case 5:             // Se puede dejar sin llave para sentencias simples
            echo "Aprobado";
            break;

        case 6:
            echo "Bien";
            break;

        case 7:
        case 8:
            echo "Notable";
            break;
        case 9:
        case 10:
            echo "Sobresaliente";
            break;
        
        default:
            echo "La nota no es correcta";
    }
?>

    <h2>Expresion Match</h2>

<?php
    // Expresion match

    /*
    match(expresion) {
        valor_comparacion1 => valor_devuelto1
        valor_comparacion2 => valor_devuelto2
        ....
        default => valor_pordefecto
    }
    */
    $calificacion = match ($nota) {
        0,1,2,3,4                    => "Suspenso",
        "5"                          => "Aprobado con cadena" ,
        5                            => "Aprobado",
        6                            => "Bien" ,
        7,8                          => "Notable" ,
        9,10                         => "Sobresaliente" ,
        default                      => "Nota erronea"
    };

    echo "Con tu nota $nota tienes una calificacion de $calificacion ". salto;
?>

<h2>Operador ternario</h2>

<?php

    //Sintaxis:
    // <condicion> ? <expresion_true> : <expresion_false>;

    $nota = 6;
    $resultado = $nota >= 5 ? "Con un $nota estas Aprobado" : "Con un $nota estas Suspenso";
    echo "$resultado". salto;

    $con_beca = true;
?>

    <form action="" method="POST">
        ...
        <input type="text" name="nombre" size="30" value="<?= isset($nombre) ? $nombre : ""?>"><br>
        <input type="checkbox"<?= $con_beca ? "cheched" : "" ?>>Con beca<br>
        <button>Enviar</button>
    </form>

    <h2>Operador de fusion de NULL</h2>
<?php

    unset($metodo);
    $segundo_metodo = "GET";
    $por_defecto = "main";

    $resultado = $metodo ?? $segundo_metodo;
    
    echo "El resultado es $resultado". salto;

    unset($metodo);
    unset($segundo_metodo);
    $por_defecto = "main";

    $resultado = $metodo ?? $segundo_metodo ?? $por_defecto;
    
    echo "El resultado es $resultado". salto;

?>

    <h2>Bucles</h2>

    <ul>
        <li>For con contador (estilo Java y C++)</li>
        <li>For para colecciones de datos</li>
        <li>While</li>
        <li>Do ... while</li>
        <li>Sentencias break y continue</li>
    </ul>

    <h3>Bucle for con contador</h3>

<?php

    // Tabla de multiplicar del 4
    $numero = 4;
    echo "La tabla de multiplicar del 4". salto;
    for( $i = 1; $i <= 10; ++$i){
        echo "$numero x $i = " . strval($numero * $i) . salto;
    };

    // Diferencias entre
    //$i++, ++$i

    echo "Los 10 primeros numero pares". salto;
    for($i = 2; $i <= 2*10; $i+=2){
        echo "Numero par $i". salto;
    };

    echo "La cuenta atras para el lanzamiento";
    for( $i = 10; $i >= 0; $i--){
        echo "$i segundos". salto;
    };
    echo "Ignicion";

    //Varias expresiones en el inicio del contador
    // y en la parte del incremento
    for( $i = 10, $j = 0; $i >= 5 And $j < 8; $i--, $j+=2){
        echo "Valor de i es $i y valor de j es $j".salto;
    };
?>

    <h3>Bucle while</h3>

<?php

    // Sumar los numeros pares que se generan aleatoriamente 
    // hasta que salga el 0
    // while (condicion) sentencia.

    $numero = rand(0,10);
    $total = 0;
    while ($numero != 0 ){
        echo "El numero generado es $numero".salto;
        if( $numero % 2 == 0 )
            $total += $numero;

        $numero = rand(0,10);
    };

    echo "El total de los pares es $total". salto;
?>
    <h3>Do ... While</h3>

<?php

    // Contar cuantos numeros impares 
    // se generan aleatoriamente
    // hasta que se genera uno negativo
    do{
        
        $numero = rand(-5, 50);
        if($numero % 2 == 1) $total++;
        
    }
    while($numero >= 0);

?>

    <h3>Sentencia break y continue</h3>

<?php

    $total = 0;
    if($numero % 3 == 0){
        $total++;
        echo "<span style='color:red;'>El numero $numero es multiplo de 3</span>".salto;
    };
    echo "El numero generado es $numero". salto;
   // if( !$numero ) break;
    


/* Aqui faltan cosas */

    // Generar numeros aletorios entre 1 y 10, y sumar los pares 
    // hasta que la suma sea superor a 100 o se hayan generado
    // como maximo 20 numeros

    $suma_pares = 0;
    while( True ) {
        $numero = rand(1,10);
        if( $numero % 2 == 0)
            $numero_pares += $numero;

        if( $suma_pares > 100 ) break;

        $contador++;
        if( $contador == 20 ) break;
    }
    echo "Se ha generado $contador numero y la suma de los pares es $suma_pares". salto;


    // Break admite un argumento numerico entero para indicar 
    // de que bucle se sale.
    // Solo sirve si hay bucles anidados.

    // Generar 200 números aleatorios entre 1 y 1000
    // Por cada numero se comprueba cuantos numeros primos 
    // hay desde 1 hasta ese número.
    // Si hay mas de 10 numeros primos que termine.
    // Al final visualizar cada número generado y los primos hasta ese numero 
    /* 
    Ej: Se genera aleatoriamente el 25:
        El numero es 25 y los primos hasta el 25 son: 1, 2, 3, 5, 7, 11, 13, 17, ...
    */
        
    for( $i = 0; $i < 200; $i++ ){
        $numero = rand(1,1000);
        echo "El numero generado es: $numero";
        
        for ( $j = 1; $j < $numero; $j++ ){
            // Averiguar se $j es primo
            $es_primo = true;
            $raiz_cuadrada = $j ** 0.5; // $raiz_cuadrada = sqrt($j);
            $k = 2;
            while( $es_primo && $k < $raiz_cuadrada ){
                if ( $j % $k == 0 ) $es_primo = false;
                $k ++;
            }
            // Como podemos saber si el numero $j es primo
            if ( $es_primo ) {
                echo "$j ";
                $cuanto_primo++;

                if( $cuantos_primos > 10) break;


            }
        }
    }    

//Genera 10 numeros aleatorios
    //Por cada uno genera tantos caracteres en minuscula aleatorios
    //Si alguno de los caracteres generados es z, se acaba y no se generan
    //Si el numero generado es impar que vuelva a generar otro

    for ($i = 0; $i <10; $i++){
        $numero =rand(1,10);
        for($j = 1; $j <= $numero; $j++){
            //Genero un caracter aleatorio
            $caracter = chr(97,122);
            echo "$caracter";
            if ($caracter =="z") break 2;

        }
            echo "<br>";

    }
?>

    <h3>Sintaxis alternativa a la estructura de control</h3>
<?php

    $numero = rand(1,100);
    if( $numero % 2 == 0):
        echo "El numero $numero es par" . salto;
    else:
        echo "El numero $numero es impar". salto;
    endif;

    for($i = 1; $i <= 10; $i++):
        echo "$1 x $numero = " . $i * $numero. salto;
    endfor;

    $i = 10;
    while($i > 0):
        echo "El valor de i es $i" .salto;
        $i--;
    endwhile;

?>

</body>
</html>