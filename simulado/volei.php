<?php
$ts = 0;
$tb = 0;
$ta = 0;

$ts1 = 0;
$tb1 = 0;
$ta1 = 0;

$x = readline();

for ($i = 0; $i < $x; $i++)
{
    $nome = readline();
    $l1 = readline();
    $l2 = readline();
    
    list($s,$b,$a) = explode(" ", $l1);
    list($s1,$b1,$a1) = explode(" ", $l2);
    
    $ts = $ts + $s;
    $tb = $tb + $b;
    $ta = $ta + $a;
    
    $ts1 = $ts1 + $s1;
    $tb1 = $tb1 + $b1;
    $ta1 = $ta1 + $a1;
    
}

$m = 100*$ts1/$ts;
$m = number_format($m, 2, ".","");
echo "Pontos de Saque: $m %.\n";

$l =100*$tb1/$tb;
$l = number_format($l, 2, ".","");
echo "Pontos de Bloqueio: $l %.\n";

$k =100*$ta1/$ta;
$k = number_format($k, 2, ".","");
echo "Pontos de Bloqueio: $k %.\n";


?>