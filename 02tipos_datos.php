<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de datos</title>
</head>
<body>
    <h1>Tipos de datos: 02tipos_datos.php</h1>
    <p>Tipos de datos escalares (primitivos)</p>
    <ul>
        <li>Booleanos</li>
        <li>Numerico entero</li>
        <li>En coma flotante</li>
        <li>Cadena de caracteres</li>
    </ul>
    <p>Datos compuestos</p>
    <ul>
    <li>Arrays</li>
    <li>Objetos</li>
    <li>Callable</li>
    <li>Iterable</li>
    </ul>
    <p>Tipos especiales</p>
    <ul>
        <li>Resource</li>
        <li>NULL</li>
    </ul>

    <h2>Boolean</h2>
    <p>Inicialmente las constantes True y False. Sin embargo, otros Tipos
        de deatos tienen conversion implicita al tipo booleano
    </p>
    <ul>
        <li>Numerico entero: 0 y el -0 es False, cualquier otra cosa es True</li>
        <li>Numerico en coma flotante: 0.0 y -0.0 es False, otro valor es True</li>
        <li>Un array con 0 elementos es False, con elementos es True</li>
        <li>El tipo especial NULL es False, otro valor distinto de NULL es True</li>
        <li>Una variable de no definida es False</li>
    </ul>

<?php

    $valor_booleano = True;
    $edad = 20;
    $mayor_edad = $edad > 18;

    echo "Mayor de edad es booleano: ". is_bool($mayor_edad);

    $dinero = 10;
    // equivalente a $dinero  != 0
    if( $dinero ) echo "Soy rico <br>";
    else echo "<br> Estoy arruinado <br>";

    $mi_nombre = "Jaime";
    if( $mi_nombre ) echo "Me llamo $mi_nombre <br>";
    else echo "<br> No tengo nombre <br>";

?>

<h2>Enteros</h2>
<p>Numeros enteros en PHP son de 32 bits (Depende de la plataforma). Pueden expresarse 
    en diferentes notaciones</p>

<?php

    $numero_entero = 1234;
    echo "El numero entero es $numero_entero<br>";

    $numero_negativo = -123;
    echo "un numero negativo es $numero_negativo<br>";
    
    // Si quiero expresar mi numero entero en octal
    $numero_octal = 0123;
    echo "El numero 0123 en octal es en decimal: $numero_octal<br>";

    // Puedo mostrar un numero entero en octal
    echo "El numero $numero_octal es en octal " . decoct($numero_octal) . "<br>";

    //Numero entero en hexadecimal
    $numero_hex = 0x8AE;
    echo "El numero 0x8AE en hexadecimal es en decimal: $numero_hex <br>";

    //Mostrar un numero expresado en Hexadesimal
    echo "El numero $numero_hex en hexadecimal es " .dechex($numero_hex). "<br>";

    //Un numero entero en binario
    $numero_binario = 0b110101101;
    echo "El numero 110101101 es en decimal: $numero_binario <br>";

    //Mostrar un numero expresado en binario 
    echo "El numero $numero_binario en binario es " .decbin($numero_binario). "<br>";
?>

<h2>Numeros en punto flotante</h2>
<p>El separador decimal es el punto . y se pueden expresar numeros muy grandes 
    muy pequeños mediante la notacion cientifica con base 10
</p>

<?php

    $pi = 3.14159;
    echo "El numero pi es $pi<br>";
    echo "El pi con 2 decimales es " .round($pi, 2). "<br>";

    $inf_int = 7.9e13;
    echo "informacion que circula en Internet en un dia $inf_int <br>";

    $tamaño_virus = 0.2e-9;
    echo "Un virus tiene un tamaño de $tamaño_virus <br>";

?>

<h2>Cadenas de caracteres</h2>
<p>Un string o cadena es una serie de caracteres donde cada caracter equivale a un byte.
Estos significa que PHP solo admite 256 caractres y por ello no ofrece soporte 
nativo a utf8. Un literal de tipo string se expresa de 4 formas
</p>

<ul>
    <li>Comillas simples</li>
    <li>Comillas dobles</li>
    <li>Heredoc</li>
    <li>Nowdoc</li>
</ul>

<h3>Comillas simples</h3>
<?php
    // Una cadena encerrada entre comillas simples 
    // Solo admite el caracter escape \' \\

    echo 'Esto es una cadena sencilla <br>';
    echo 'Puedo poner una cadena 
    en varias lineas
    por que la sentencia
    no acaba hasta
    el punto y coma <br>';

    //No se recomienda caracteres de ecape excepto ' y el \
    echo 'El mejor pud de la ciudad es O\'Donnel<br>';
    echo 'La raiz del disco duro es C:\ <br>';
    echo 'La raiz del disco duro es C:\\ <br>';

    //El salto de linea no se expande
    echo 'Esta cadena tiene \n más de una linea <br>';

    //No interpola variables
    $mi_nombre = "manuel";
    echo 'Hola , $mi_nombre, ¿como estas? <br>';
?>

<h3>Comillas dobles</h3>
<p>La forma habitual de expresion cadenas de caracteres ya que expande los caracteres
    de escape y las variables
</p>
<?php

    $cadena = "Esto es una cadena con comillas dobles";
    echo "Es una cadena un objeto?" .is_object($cadena). "<br>";
    if(is_object($cadena) ) echo "Las cadenas en PHP son objetos <br>";
    else echo "Las cadenas en php no son objetos <br>";

    $con_secuencias_esc = "\t\tEl simbolo \$ se emplea para las variables\n y 
    si lo quieres en una cadena hay que escaparlo con \\. Es mejor usar \" 
    para delimitar las cadenas en lugar de ' <br>";
    
    echo $con_secuencias_esc;
?>

<h3>Cadenas HEREDOC</h3>
<p>Es una cadena muy larga que comienza con <<< le sigue un identificador y justo 
despues un salto de linea. A continuacion se escribe la cadena con los saltos de lineas 
que necesitemos, podemos interpolasr variables y poner caraceres de escaoe. Para finalizar 
hay que hacer un salto de linea y volver a poner el identificador</p>

<?php

    $cadena_hd = <<<HD
    Esto es una cadena 
    heredoc que respeta los 
    saltos de linea, le puedo
    poner variables como $mi_nombre y
    ademas secuencias de escape. El 
    identificador no necesita \$ y tampoco
    usamos \", simplemente la escribimos y 
    acabamos con un salto de linea
    mas el identificador <br>
    HD;

    echo $cadena_hd;
?>

<h3>Cadena NOWDOC</h3>
<p>La cadena Nowdoc es como Heredoc con comillas simples. No se interpolan variables
    ni se reconocen secuencias de escape mas alla de  \ y '. Si se respetan los 
    saltos de lineas
</p>

<?php

    $cadena_nd = <<<'ND'
    Esto es una cadena Nowdoc
    y el salto de linea Si lo respeta,
    no puedo meter varialess 
    y solo reconoce \\ y \'. <br>
    ND;

    echo $cadena_nd;

?>

<h2>Conversion de tipos de datos</h2>
<p>Hay dos conversiones: implicitas y explicitas. Las primeras ocurren cuando 
    en una expresion hay operandos de diferente tipo. PHP convierte algunos 
    de ellos para evaluar la expresion.
</p>

<?php

    $cadena = "25";
    $numero = 8;
    $booleano = True;
    $resultado = $cadena + $numero + $booleano;
    echo "El resultado es $resultado <br>";
    
?>
    <p>¡¡¡IMPORTANTE!!! Cuando se hace una conversion implicita solo afecta al operando, pero no a la variable. 
        Es decir, la conversion de cadena a entero solamente para evaluar la expreson pero cadena sigue 
        siendo de tipo string</p>

<?php

    $flotante = 3.5;
    $resultado = $cadena + $numero + $booleano + $flotante;
    echo "El resultado ahora es $resultado <br>";

    $cadena = "25 marranos dan mucho provecho, mejor que 7 lechones";
    $resultado = $numero + $cadena;
    echo "El resultado es $resultado <br>";
    echo "Despues de la ultima conversion <br>";

?>

    <p>Conversiones explicitas se conocen como casting o modelo y se hacen 
        precediendo la expresion con el tipo de datos a convertir entre 
        parentesis
    </p>

<?php

    //Si quiero convertir a un entero -> (int)expresion
    //Si quiero convertir a float -> (float)expresion
    //Si quiero convertir a string -> (string)expresion

    echo "conversiones a enteros <br>";
    $valor_booleano = True;
    $valor_convertido = (int)$valor_booleano;
    echo "El valor convertidoo a entero es $valor_convertido <br>";
    $valor_float = 3.14159;
    $valor_convertido = (int)$valor_convertido;
    echo "El valor connvertido a entero es $valor_convertido <br>";
    $valor_redondeado = round($valor_floar,0);

    $valor_cadena = "123";
    $valor_convertido = (int)$valor_cadena;
    echo "El valor convertido a entero es $valor_convertido <br>";

?>

</body>
</html>