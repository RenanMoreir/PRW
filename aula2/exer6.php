<?php

$a = 5.0; //fgets(STDIN);
$b = 6.0;  //fgets(STDIN);
$d = 7.0;  //fgets(STDIN);

$c = ( ($a * 2) + ($b * 3) + ($d * 5) ) /10;

$c = number_format($c, 1, ".", "");
echo "MEDIA = $c\n";
?>