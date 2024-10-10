<?php
define("salto", "<br>");
define("PI", 3.14159);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Array</title>
    </head>
    <body>
        <h1>Array</h1>
        <p>Un array un conjunto de elementos que se referencian con el mismo nombre. A
            cada variable del array se le conoce como componente o elemento del array.
            Cada componente tiene asociado una clave que se emplea para acceder a ese 
            componente
        </p>
        <p>En PHP los arrays son muy flexibles. Hay de dos tipos: escalares y asociativos.
            Para acceder a un elemento se usa su clave con el operador []. Si la clave es 
            un numero entero mayor o igual que 0 es un array escalar. Si la clave es una 
            cadena de caracteres es un arrays asociativo. 
        </p>

        <h2>Array escalar</h2>

    <?php

        // Un array se define de dos formas
        // 1ª con la funcion Array()
        $notas = Array(4, 9, 7.5, 6, 2.5);
        // 2ª con un literal
        $numeros = [ 8, 4, 2, 9, 5.5];

        // Si solo se indican los elementos del array, la clave comienza por 0 desde
        // la izquierda
        // El acceso a los elementos es mediante su clave o indice entre corchetes
        echo "La primera nota es $nota[0]". salto;
        echo "La tercera nota es $nota[2]". salto;

        // Al definir el array podemos indicar los indices
        $notas = Array(2 => 8.5, 4 => 4.75, 8 => 3.5);

        // Puede definir indice para algunos y no para otros
        $notas = Array(3 => 5, 6.5, 8, 7 => 2,  9, 5);
        echo "Indice 0: $notas[0]". salto; 
        echo "Indice 1: $notas[1]". salto; 
        echo "Indice 2: $notas[2]". salto; 
        echo "Indice 3: $notas[3]". salto;
        echo "Indice 4: $notas[4]". salto; 
        echo "Indice 5: $notas[5]". salto; 
        echo "Indice 6: $notas[6]". salto; 
        echo "Indice 7: $notas[7]". salto; 
        echo "Indice 8: $notas[8]". salto; 
        echo "Indice 9: $notas[9]". salto; 

        // Borramos el elemento 4
        unset($notas[4]);
        if(isset($notas[4])){
            echo "El elemento 4 esta definido y es $notas[4]". salto;
        }

        //Modificar un elemento del array
        $notas[5] = rand(1,10);
        echo "indice 5: $notas[5]". salto;

        $notas[] = 7.5;
        echo "He añadido el elemento con indice 10: $notas[10]". salto;


    ?>

        <h2>Arrays asociativos</h2>
        <p>Array que tiene una cadena de caracteres como clave</p>

    <?php

        $coche["1234BBC"] = "Seat Leon";
        $coche["4321CCB"] = "Ford Focus";

        echo "Mi coche es {$coche['1234BBC']}". salto;
        echo "Tu coche es ". $coche["4321CCB"]. salto;

    ?>

        <h2>Array Mixto</h2>
        <p>Cuando las claves son indices numericos o cadenas indistintamente</p>ç

    <?php

        $alumno['nombre'] = "Juan Gómez";
        $alumno[0] = 4;
        $alumno[1] = 6;
        $alumno[2] = 5;
        $alumno['media'] = 5;

        echo "El alumno {$alumno['nombre']} y tiene de notas $alumno[0], $alumno[1] y $alumno[2],". salto;
        echo "Su media es {$alumno['media']}". salto;

        $alumno = ['nombre' => "Manuel Martinez", 0 => 3, 8, 5, 4, 'media' => 5];

    ?>

        <h2>Array bidimensionales</h2>
        <p>Arrays con dos dimensiones y por tanto para acceder a un elemento hacen
            falta dos claves
        </p>

    <?php

        $nota = Array(

            Array(3.5, 6, 8, 9.5, 3),
            Array(2, 5.2, 6, 2, 10),
            Array(4.5, 3, 2.5, 7, 8),
            Array(7, 1, 0, 1.5, 3.5)

        );

        echo "El elemento en la fila 2 columna 3 -> {$nota[1][2]}". salto;

        $nota[][] = 9; //Se le añade al arrays de nota una nueva columna y se le añade el 9 como elemento unico

        echo "El ultimo elemento de la ultima fila: {$nota[4][0]}". salto;

        $nota[3][] = 7.5; // Se le añade un elemento al arrays de 4 posicion  

        echo "El ultimo elemento de la fila 3 (la cuarta): {$nota[3][5]}". salto;

        // Se accede por clave, no por indice.
        $numero = [-1 => 1,2,3,4,5];
        echo "El ultimo elemento del array es {$numero[-1]}". salto;

        $coches = [
            '1234bbc' => ['marca' => 'Seat', 'modelo' => 'Ibiza', 'motor' => 'Diesel', 'pvp' => 10000],
            '4321ccb' => ['marca' => 'Ford', 'modelo' => 'Focus', 'motor' => 'Gasolina', 'pvp' => 21000]
        ];

        echo "El primer coche es {$coches['1234bbc']['marca']}modelo{$coches['1234bbc']['modelo']}". salto;

        // Crear un array de un equipo de futbol donde cada fila son las posiciones 
        // donde juegan los jugadores con el conjunto de jugadores identificados por su 
        // dorsal.
         

    ?>

        <h2>Arrays multidimensionales</h2>
    
    <?php

        $notas = [
            [
                [3, 4, 5, 6],
                [2, 8, 9, 3]
            ],
            [
                [1, 9, 8, 5],
                [2, 8, 4, 5]
            ],
            [
                [2, 8, 4, 6],
                [9, 10, 4, 3]
            ]
        ];

        echo "Accedo al elemento 1, 1, 2: {$notas[1][1][2]}". salto;

        $notas = [
            'juan' => [
                'T1' => ["dwes" => 6, "dwec" => 5, "daw" => 8, "diw" => 7],
                'T2' => ["dwes" => 5.5, "dwec" => 7.5, "daw" => 6, "diw" => 6],
                'T3' => ["dwes" => 5, "dwec" => 7, "daw" => 6.5, "diw" => 4]
            ],
            
            'maria' => [
                'T1' => ["dwes" => 9, "dwec" => 6, "daw" => 7.5, "diw" => 7],
                'T2' => ["dwes" => 8, "dwec" => 7, "daw" => 6.5, "diw" => 5.5],
                'T3' => ["dwes" => 7, "dwec" => 7, "daw" => 4.5, "diw" => 5.5]    
            ]
            ];

        $alumno = "maria";
        $trimestre = "T2";
        $modulo = "dwec";

        echo "La nota de maria en el segundo trimestre en dwes {$notas['maria']['T2']['dwec']}". salto;
        echo "La nota de maria en el segundo trimestre en dwes {$notas[$alumno][$trimestre][$modulo]}". salto;

    ?>

        <h2>Recorrer un array</h2>
        <?php

            $numero = [6, 19, 12, 7, 11, 9, 3];
            for( $i = 0; $i < count($numeros); $i++) {
                echo "elemento $i es  {$numero[$i]}". salto;
            };

            // Para cualquier tipo de array tenemos el bucle foreach
            // foreach ($array as [$clave] => $valor) {
            //
            // }

            echo "Bucle foreach";
            foreach($numeros as $numero){
                echo "El numero es $numero". salto;
            };
            echo salto;
            $alumno = []; //Crea un array vacio. Equivale a $alumno = Arrays();
            $alumno['nombre'] = "Juan Gómez";
            $alumno[0] = 4;
            $alumno[1] = 6;
            $alumno[2] = 5;
            $alumno['media'] = 5;

            foreach($alumno as $clave => $valor){
                echo "Elemento con clave $clave y valor $valor" . salto;
    
            };

            echo "<h3>Recorrido de arrays multidimensionales</h3>";
            for($i = 0; $i < count($notas); $i++){
                echo "Recorrido de la fila $i". salto;
                for($j = 0; $j < count($notas[$i]); $j++){
                    echo "Fla $i Columna $j: {$notas[$i][$j]}". salto;
                }
            }

            foreach( $notas as $alumno => $trimestres ){
                echo "Notas de $alumno". salto;
                foreach( $trimestres as $trimestre => $modulo){
                    echo "Notas del trimestre $trimestre:". salto;
                    foreach( $modulos as $modulo => $nota){
                        echo "Modulo: $modulo Notas: $nota". salto;
                    }
                    echo "----------------------------------------";
                }
                echo "===========================================";
            }

            echo "El array con los coches". salto;
            foreach( $coches as $matricula => $coche) {
                echo "Coche con matriula : $matricula". salto;
                foreach( $coche as $clave => $valor ){
                    echo "$clave: $valor". salto;

                }
                echo "-------------------------------". salto;
            }

        ?>

    </body>
</html>