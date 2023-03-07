<?php

$x = "0.0 20.0 5.0"; //readline();
list($a,$b,$c) = explode(" ",$x);

$delta = ($b*$b)-(4*$a*$c);

if (($a != 0) and ($delta > 0))
{
$r1 = ((-1*$b) + sqrt($delta))/(2*$a);
$r1 = number_format($r1,5,".","");

$r2= ((-1*$b) - sqrt($delta))/(2*$a);
$r2 = number_format($r2,5,".","");


echo "R1 = $r1\n";
echo "R2 = $r2\n";
}
else 
{
    echo "Impossivel calcular\n";
}

?>