<?php
    $x = 200.000; //fgets(STDIN);
    $vet[0] = $x;

    for ($i = 1; $i < 100; $i++)
    {
        $vet[$i] = $vet[$i-1] / 2;
       
    }
    for ($i = 0; $i < 100; $i++)
    {    
        $vet[$i] = number_format($vet[$i], 4, ".", "");
        echo "N[$i] = ".$vet[$i]."\n";
    }
?>