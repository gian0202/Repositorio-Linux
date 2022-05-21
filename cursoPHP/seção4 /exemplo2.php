<?php
$diaDaSemana = date("w");
$data = date("y");
$data2 = date("m");
$hora = date("h");
switch($diaDaSemana){

    case 0:
        echo "domingo" ; $data;
    break;

    case 1:
        echo "segunda";
    break;
    case 2:
        echo "terça";
    break;
    case 3:
        echo "quarta " . $data2 . " " . $data;
    break;
    case 4:
        echo "quinta";
    break;
    case 5:
        echo "sexta";
    break;
    case 6:
        echo "sabado";
    break;
    
}

?>