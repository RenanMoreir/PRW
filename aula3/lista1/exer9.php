<?php

$x = "6 24"; //readline();
list($a,$b) = explode(" ", $x);

if( $b < $a )
{
    $c = $b;
    $b = $a;
    $a = $b;
}

if(($b % $a) == 0)
{
    echo "Sao Multiplos\n";
}
else
{
    echo "Nao sao Multiplos\n";
}

?>