<?php

$x = "5.0 7.0 2.0"; //readline();
list($a,$b,$b) = explode(" ", $x);

if(($a >= $b+$c) or ($b >= $a + $c) or ($c >= $a +$c))
{
    echo "NAO FORMA TRIANGULO\n";
}
else if ((($a*$a) == ($b*$b)+($c*$c)) or (($b*$b) == ($a*$a) + ($c*$c)) or (($c*$c) == ($a*$a) + ($c*$c)))
{
    echo "TRIANGULO RETANGULO\n";
}
else if ((($a*$a) > ($b*$b)+($c*$c)) or (($b*$b) > ($a*$a) + ($c*$c)) or (($c*$c) > ($a*$a) + ($c*$c)))
{
    echo "TRIANGULO OBTUSANGULO\n";
}
else if ((($a*$a) < ($b*$b)+($c*$c)) or (($b*$b) < ($a*$a) + ($c*$c)) or (($c*$c) < ($a*$a) + ($c*$c)))
{
    echo "TRIANGULO ACUTANGULO\n";
}
if ($a == $b and $b == $c and $c == $a)
{
    echo "TRIANGULO EQUILATERO\n";
}
if (($a == $b and $c != $a) or ($b == $c and $a != $c) or ($c == $a and $b != $a))
{
    echo "TRIANGULO ISOSCELES\n";
}


?>