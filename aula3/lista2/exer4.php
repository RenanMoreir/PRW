<?php

/*$x1 = 7; //readline();
$x2 = -5; //readline();
$x3 = 6; //readline();
$x4 = -3.4; //readline();
$x5 = 4.6; //readline();
$x6 = 12; //readline();*/
$i = 0;
$soma = 0;
for ($r = 0; $r <= 5; $r++){
    $n[$r] = readline();
} 
for ($r = 0; $r <= 5; $r++){

if($n[$r] >=0 ){
    $soma = $n[$r]+$soma;
    $i++;
}

}
$soma = $soma / $i;

echo "$i valores positivos\n";

$soma = number_format($soma, 1,".","");
echo "$soma\n";


?>