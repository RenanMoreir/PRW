<?php

for ($i = 0; $i != 5; $i++)
{
    $n[$i] = readline();
}

for($i = 0; $i != 5; $i++)
{
    if(($n[$i]%2) == 0)
    {
        $c=$c+1;
    }
}
echo "$c valores pares\n";

?>