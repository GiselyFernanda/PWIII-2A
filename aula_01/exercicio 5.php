<?php
$Numero = $_REQUEST ['Numero'];
$UltimoN=1;
$PenultimoN=0;

echo "0 <br/> 1 <br/>";
for($Conta=1; $Conta <= $Numero-2; $Conta++ ){
$Result = $UltimoN + $PenultimoN;
echo $Result."<br/>";

$PenultimoN = $UltimoN;
$UltimoN = $Result;
}