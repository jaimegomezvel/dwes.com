<?php
define("salto", "<br>");
define("PI", 3.14159);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    
<h2>Expresiones, operadores y operandos</h2>
    <p>Una expresion es una combinacion de operandos y operadores que arroja un 
        resultado. Tiene tipo de datos, que depende del tipo de datos de sus 
        operandos y de la operacion realizada. <br>
        Un operador es un simbolo formado por uno, dos o tres caracteres que denota
        una operacion<br>
        Los operandos pueden ser:<br>
        -Unarios. Solo necesitan un operador<br>
        -Binario. Utilizan dos operador<br>
        -Ternarios. Utilizan tres operador<br>
        Un operando es una expresion en si misma, siendo la mas simple un literal o 
        una variable, pero tambien puede ser un valor devuelto por una funcion o 
        el resultado de otra expresion <br>
        Las operaciones de una expresion no se ejecutan a la vez, sino en orden segun
        la precedencia y asociatividad de los operadores. Esta puede alterar a conveniencia.
    </p>
    <h2>Operadores</h2>
    <h3>Asignacion</h3>

<?php

    // El operador de asignacion es =
    $numero = 45;
    $resultado = $numero +5 -29;
    $sin_valor = NULL;

?>

    <h3>Operaciones aritmeticos</h3>

<?php

    /* + Suma
       - Resta
       * Multiplicacion
       / Division
       % Modulo
       **Exponenciacion
       
       Unarios
       + conversion a entero
       - el opuesto
       */

    $numero1 = 15;
    $numero2 = 18;
    $suma = $numero1 + 10;
    $resta = 25 - $numero2;
    $opuesto = -$numero1;
    $multiplicacion = $numero1 *3;
    $division = $numero1 / 3;
    $modulo = $numero1 % 4;
    $potencia = $numero1 ** 2;
    echo "$numero1 y $numero2". salto;
    echo "$suma $resta $opuesto $multiplicacion $division $modulo $potencia". salto;

    $numero3 = "35";
    $numero4 = +$numero3;
    echo "El \$numero4 es $numero4 y su tipo es ".gettype($numero4) .salto;

    $numero5 = PI;
    $numero6 = +$numero5;
    echo "El \$numero6 es $numero6 y su tipo es ".gettype($numero6) .salto;

    $numero1 = 35;
    $numero2 = 15;
    $resultado_entero = (int)($numero1 / $numero2);
    echo "El resultado entero es $resultado_entero" . salto;
?>

    <h2>Asignacion aumentada</h2>

<?php

    /* Operadores de asignacion aumentada
    ++ Incremento
    -- Decremento
    +=
    -=
    *=
    /=
    %=
    */

    $numero = 4;
    $numero++;      //Equivale a $numero = $numero + 1

    echo "Antes numero era 4 ahora es $numero" .salto;

    ++$numero;
    echo "Antes numero era 5 ahora es $numero" .salto;


    $numero = 10;
    $resultado = $numero++ * 2; // Equivale a $resultado = $numero * 2; $numero = $numero + 1;
    echo "El resultado es $resultado y el numero es $numero" .salto;

    $numero = 10;
    $resultado = ++$numero * 2; // Equivale a  $numero = $numero + 1; $resultado = $numero * 2;
    echo "El resultado es $resultado y el numero es $numero" .salto;

    $numero += 5; // Equivale a $numero = $numero + 5;
    echo "El numero es $numero" .salto;

    $numero -= 3; // Equivale a $numero = $numero - 3;
    echo "El numero es $numero" .salto;

    $numero *= 3; // Equivale a $numero = $numero * 3;
    echo "El numero es $numero" .salto;
    
    $numero %= 7; // Equivale a $numero = $numero % 7;
    echo "El numero es $numero" .salto;
    
?>

    <h2>Operadores relacionales</h2>

<?php

    /* 
        ==  Igual a
        === Identico a
        !=  Distinto 
        !== Distinto valor o distinto tipo
        >   Mayor que
        <   Menor que
        >=  Mayor o igual
        <=  Menor o igual
        <=> Nave espacial
    */

    $n1 = 5;
    $cadena = "5";
    $n2 = 8;

    $resultado = $n1 == $n2;
    echo "Es n1 igual que n2: ". (int)$resultado . salto;

    $resultado = $n1 == $cadena;
    echo "Es n1 igual que cadena:". (int)$resultado . salto;
    // Operador ===. Es True si los valores de los operandos son iguales y del mismo tipo.
    $resultado = $n1 === $cadena;
    echo "Es n1 identico a cadena: " .(int)$resultado. salto;

    $resultado = $n1 != $n2;
    echo "Es n1 distinto a n2: " .(int)$resultado. salto;

    // Operador !== . Es true si son distintos o de diferente tipo, false en caso contrario.
    $resultado = $n1 != $cadena;
    echo "Es n1 distinto a cadena: " .(int)$resultado. salto;
    $resultado = $n1 !== $cadena;
    echo "Es n1 distinto a cadena: " .(int)$resultado. salto;

    // Nave espacial
    // si n1 es mayor que n2 ->1
    // si n1 es igual que n2 ->0
    // si n1 es menor que n2 ->-1
    // Se emplea para evitar esto:
    // if($n1 < $n2) {
    //  
    //elsif ($n1 == $n2)
    //
    //else
    //}

    $resultado = $n1 <=> $n2;
    echo "Es n1 menor, igual o mayor que n2: " .(int)$resultado. salto;

    $nombre1 = "Zacarias";
    $nombre2 = "adela";
    $resultado = $nombre1 > $nombre2;
    echo "El resultado es: " .(int)$resultado. salto;

    $nombre1 = "MariO";
    $nombre2 = "Maria";
    $resultado = $nombre1 < $nombre2;
    echo "El resultado es: " .(int)$resultado. salto;

    $nombre1 = "maria";
    $nombre2 = "Maria";
    $resultado = $nombre1 === strtolower($nombre2);
    echo "El resultado es: " .(int)$resultado. salto;

?>

    <h2>Operadores lógicos</h2>

<?php

    /* 
        AND             And logico o conjuncion logica
        OR              Or logico o disyuncion logica
        XOR             Or exclusivo
        !               Not
        &&              And logico
        ||              Or logico
    */

    $n1 = 9;
    $n2 = 5;
    $n3 = 10;
    $resultado = $n1 == $n2 OR $n2 > $n3;
    $resultado = $n1 == $n2 AND $n2 < $n3;
    echo "El resultado es: ". (int)$resultado. salto;

    $resultado = $n1 == 9 OR $n2 < $n1 AND $n3 > 10; // El AND tiene mayor preferencia que el OR 
    echo "El resultado es: ". (int)$resultado. salto;

    $resultado = ($n1 == 9 OR $n2 < $n1) AND $n3 > 10; 
    echo "El resultado es: ". (int)$resultado. salto;

    $resultado = ($n1 == 9 OR $n2 < $n1) && $n3 > 10; 
    echo "El resultado es: ". (int)$resultado. salto;

    $resultado = $n1 == 9 || $n2 < $n1 AND $n3 > 10; // El || y && tienen mayor preferencia que el AND
    echo "El resultado es: ". (int)$resultado. salto;

    $resultado = $n1 + 5 / $n3 < $n1 ** 3 AND $nn3 / 5 + $n2 * 2 >= $n1 * $n2 / $n3 OR $n1 - 3 % 2 == $n3 - 7;
    echo "El resultado es: ". (int)$resultado. salto;

/* 
    | E1 | E2 | AND | OR | XOR |
    | F  | F  |  F  | F  |  F  |
    | T  | F  |  F  | T  |  T  |
    | F  | T  |  F  | T  |  T  |
    | T  | T  |  T  | T  |  F  |
*/


?>

</body>
</html>