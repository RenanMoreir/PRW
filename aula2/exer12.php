<?php

$l1 ="3.0 4. 5.2"; //readline();
list($a, $b, $c) = explode(" ", $l1);

$tr = ($a*$c)/2;
$tr=number_format($tr, 3, ".", "");
echo "TRIANGULO: $tr\n";

$cir = 3.14159*($c*$c);
$cir=number_format($cir, 3, ".", "");
echo "CIRCULO: $cir\n";

$tra = ($a + $b)*$c/2;
$tra=number_format($tra, 3, ".", "");
echo "TRAPEZIO: $tra\n";

$qua = $b*$b;
$qua=number_format($qua, 3, ".", "");
echo "QUADRADO: $qua\n";

$ret = $a*$b;
$ret=number_format($ret, 3, ".", "");
echo "RETANGULO: $ret\n";



?>