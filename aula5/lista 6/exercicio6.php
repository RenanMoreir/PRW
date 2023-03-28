<?php
    $t = 50; //fgets(STDIN);
    $y = 0;

    for ($i = 0; $i <= 1000; $i++)
    {
 
        $vet[$i] = $y;
       
        echo "N[$i] = ".$vet[$i]."\n";

        $y++;

        if ($y > ($t-1))
        {
            $y = 0;
        }

    }

?>