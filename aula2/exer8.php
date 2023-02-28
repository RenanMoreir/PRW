<?php

    $num = 1; //fgets(STDIN);
    $hor = 200; //fgets(STDIN);
    $val = 20.50; //fgets(STDIN);

    $sal = $val * $hor;

    echo "NUMBER = $num\n";
    $sal = number_format($sal, 2, ".", "");
    echo "SALARY = U$ $sal\n";


?>