<?php

$nome = "JOAO"; //readline();
$salf = 1700.00; //readline();
$ven = 1230.50; //readline();

$sal = ($ven*0.15) + $salf;
$sal = (double) $sal; 
$sal = number_format($sal, 2, ".", "");
echo "TOTAL = R$ $sal";

?>