<?php
require_once 'classes.php';

define("NUMERO_DAUS", 5);   //Canviar valor per redefinir el numero de daus
define("NUMERO_TIRADES", 10);    //Canviar per redefinir el numero de tirades

$dausTirats = array();

//Instanciem el numero de daus
for($i = 0; $i < NUMERO_DAUS; $i++){
    $dausTirats[$i] = new PokerDice();
}

for($i = 0; $i < NUMERO_TIRADES; $i++){
    echo "<h3>Tirada " . ($i + 1) . ":</h3>";
    //Mostrem tirades
    for($j = 0; $j < NUMERO_DAUS; $j++){
        echo "Dau " . ($j + 1) . ": ";
        $dausTirats[$j]->shapeName();
        echo "<br>";
    }
    echo "<br><br>";
}

//Fem servir el metode

echo "En total hem tirat " . getTotalThrows(NUMERO_DAUS, NUMERO_TIRADES) . " daus.";

//Metode demanat
function getTotalThrows($numeroDaus, $numeroTirades){
    return $numeroDaus * $numeroTirades;
}
?>