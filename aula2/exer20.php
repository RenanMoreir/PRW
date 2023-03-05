<?php

$x =800; //readline();

$z= $x%365;
$y = ($x-$z)/365;
echo "$y ano(s)\n";

$x = $z%30;
$y = ($z-$x)/30;
echo "$y mes(es)\n";

echo "$x dia(s)\n";


?>