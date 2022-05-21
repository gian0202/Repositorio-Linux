<?php

$qualIdade = 60;
$idadeCrianca =12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualIdade < $idadeCrianca){
    echo "Criança";
}else if ($qualIdade < $idadeMaior){
    echo "Adolecente";
}
elseif ($qualIdade < $idadeMelhor){
    echo "Adulto";
}else{
    echo "idoso";
}

?>