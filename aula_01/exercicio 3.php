<?php

$Numero = $_REQUEST['Numero'];
    echo "Tabuada do $Numero </br></br>";
        for ($i=0; $i < 11; $i++) {
        $Conta = $Numero * $i;
        echo $Numero . " x " . $i . " = " . $Conta;
        echo '</br>';
}