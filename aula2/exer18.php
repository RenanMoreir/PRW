<?php

$x =576; //readline();

echo "$x\n";
$z= $x%100;
$y = ($x-$z)/100;
echo "$y nota(s) de R$ 100,00\n";

$x = $z%50;
$y = ($z-$x)/50;
echo "$y nota(s) de R$ 50,00\n";

$z = $x%20;
$y = ($x-$z)/20;
echo "$y nota(s) de R$ 20,00\n";

$x = $z%10;
$y = ($z-$x)/10;
echo "$y nota(s) de R$ 10,00\n";

$z = $x%5;
$y = ($x-$z)/5;
echo "$y nota(s) de R$ 5,00\n";

$x = $z%2;
$y = ($z-$x)/2;
echo "$y nota(s) de R$ 2,00\n";

$z = $x%1;
$y = ($x-$z)/1;
echo "$y nota(s) de R$ 1,00\n";



?>