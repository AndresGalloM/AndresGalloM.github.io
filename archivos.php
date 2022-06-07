<?php

$numero = 0;
$contador = 0;

while($numero == 0){
    sleep(600);
    echo "hola\n";

    $contador ++;
    $numero = $contador == 5 ? 1 : 0; 
}


