<?php

$l1 = "1.0 7.0"; //readline();
list($x1, $y1) = explode(" ", $l1);

$l2= "5.0 9.0"; //readline();
list($x2, $y2) = explode(" ", $l2);

$resu=sqrt(($x2 - $x1)**2+($y2 - $y1)**2);
$resu = number_format($resu, 4, ".", "");

echo "$resu\n";



?>