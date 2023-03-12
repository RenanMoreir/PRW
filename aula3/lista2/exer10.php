<?php

for($i=1;$i<=100;$i++)
{
    $n = readline();
    
    if($maior<$n)
    {
        $maior=$n;
        $p=$i;
    }
}

echo "$maior\n";
echo "$p\n";



?>