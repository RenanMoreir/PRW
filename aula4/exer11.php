<?php

$m =0;
$z = "/";
$x = 1; //readline();

for ($i =0; $i <= $x; $i++)
{
    $y = 1; //readline();

    for ($o=0; $o <= $y; $o++)
    {
        $q = "portugues"; //readline();
        $z = $q + "/" + $z;
    }
    $l = explode("/", $z);

    for ($a = 0; $a <= $y; $a++)
    {
        if ($l[$a] == $l[$a+1])
        {
            $m +=0;
        }
        else $m +=1;
    }

}





?>