<?php

$x = "6.0 4.0 2.0"; //readline();
list($a,$b,$c) = explode(" ", $x);

$s1 = $a+$b;
$s2 = $a+$c;
$s3 = $b+$c;

if ($s1 > $c and $s2>$b and $s3 > $a )
{
    $p = $a + $b + $c;
    $p = number_format($p, 1,".","");
    echo "Perimetro = $p\n";
}
else
{
    $are = (($a + $b)*$c)/2;
    $are = number_format($are, 1,".","");
    echo "Area = $are\n";
}

?>