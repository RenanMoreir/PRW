<?php

$m =0;
$z = null;
$x = readline();

for ($i =0; $i <= $x; $i++)
{
    $y = readline();

    for ($o=0; $o <= $y; $o++)
    {
        $z += readline() + "/";
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