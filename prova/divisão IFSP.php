<?php

while(true)
{
    $k = readline();
    if ($k == 0)
    {
        break;
    }
    list($n,$m) = explode(" ", readline());
    
    for ($i=0; $i < $k; $i++)
    {
         list($x,$y) = explode(" ", readline());
         
         if((abs($x)) == (abs($n)) or (abs($y)) == (abs($m)))
         {
             echo "divisa\n";
         }
         else if  ($x > $n and $y > $n)
         {
            echo "NE\n";
         }
         else if  ($x < $n and $y > $n)
         {
            echo "NO\n";
         }
         else if  ($x > $n and $y < $n)
         {
            echo "SE\n";
         }
         else if  ($x < $n and $y < $n)
         {
            echo "SO\n";
         }
    }
    
    
    
    
    
}


?>