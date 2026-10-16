<?php

// Generar un valor aleatorio entre 20 y 25. Luego imprimir en español el número
//(Ejemplo. Si se genera el 21 luego mostrar en la página el string “Veintiuno”)

$valor = rand(20,25);
echo ($valor), "<br>";
if($valor==20){
    echo "veinte";
} elseif ($valor==21){
    echo "veintiuno";
}elseif ($valor==22){
echo "veintidos";
}elseif ($valor==23){
    echo "veintitres";
}elseif ($valor==24){
    echo "veinticuatro";
}elseif ($valor==25){
    echo "veinticinco";
}
