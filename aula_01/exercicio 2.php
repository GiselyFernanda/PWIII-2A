<?php

$Numero = $_REQUEST ['Numero'];

if ($Numero % 2 == 0){
    echo " Este numero é par: $Numero";
}else{
        echo " Este numero é impar : $Numero";
}