<?php

$x = "3 2"; //readline();
list($n,$q) = explode(" ", $x);

if ($n == 1){
    $t = $q * 4;
}
if ($n == 2){
    $t = $q * 4.50;
}
if ($n == 3){
    $t = $q * 5;
}
if ($n == 4){
    $t = $q * 2;
}
if ($n == 5){
    $t = $q * 1.50;
}

$t = number_format($t, 2, ".", "");
echo "Total: R$ $t\n";

?>