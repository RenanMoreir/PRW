<?php

$a = 5.0; //fgets(STDIN);
$b = 7.1;  //fgets(STDIN);

$c = ( ($a * 3.5) + ($b * 7.5) ) /11;

$c = number_format($c, 5, ".", "");
echo "MEDIA = $c\n";
?>