<?php

$v = "800.01"; //readline();

$v = number_format($v, 2,".","");

if($v >= 0 and $v <= 400.00  ){
    $x = ($v*15)/100;
    $y = $x + $v;

    $y = number_format($y, 2,".","");
    $x = number_format($x, 2,".","");
    echo "Novo salario: ",$y,"\nReajuste ganho: $x\nEm percentual: 15 %\n";
}
else if($v >= 400.01 and $v <= 800.00  ){
    $x = ($v*12)/100;
    $y = $x + $v;

    $y = number_format($y, 2,".","");
    $x = number_format($x, 2,".","");
    echo "Novo salario: ",$y,"\nReajuste ganho: $x\nEm percentual: 12 %\n";
}
else if($v >= 800.01 and $v <= 1200.00  ){
    $x = ($v*10)/100;
    $y = $x + $v;

    $y = number_format($y, 2,".","");
    $x = number_format($x, 2,".","");
    echo "Novo salario: ",$y,"\nReajuste ganho: $x\nEm percentual: 10 %\n";
}
else if($v >= 1200.01 and $v <= 2000.00  ){
    $x = ($v*7)/100;
    $y = $x + $v;

    $y = number_format($y, 2,".","");
    $x = number_format($x, 2,".","");
    echo "Novo salario: ",$y,"\nReajuste ganho: $x\nEm percentual: 7 %\n";
}
else if($v > 2000.00){
    $x = ($v*4)/100;
    $y = $x + $v;

    $y = number_format($y, 2,".","");
    $x = number_format($x, 2,".","");
    echo "Novo salario: ",$y,"\nReajuste ganho: $x\nEm percentual: 4 %\n";
}

?>