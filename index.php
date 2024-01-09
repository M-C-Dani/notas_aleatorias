<?php
/*
// Haz un programa que
      cree 10 notas aleatorias,
      las guardes en una array
      las visualice de una en una con el siguiente formato:
(Los valores, o sea el 8,9,9, son ejemplos, tienen que ser los valores aleatorios que crees)
//Nota 0: 8
//Nota 1: 9
//Nota 2: 9
*/

// Generar 10 notas aleatorias y almacenarlas en el array
for ($i=0; $i<10; ++$i){
    $notas[]=rand(0,10);
}

// Crear una variable para almacenar el resultado del bucle
$resultado = "";

// Mostrar las notas una por una con el formato especificado

for ($i=0; $i<10; ++$i) {
    $posicion = $i+1;
    $resultado .= "Nota $posicion: $notas[$i] <br>";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="./../estilo.css">

</head>
<body>
    <h1>Notas Aleatorias</h1>
    <h2>
        <?= $resultado ?>
    </h2>
</body>
</html>

