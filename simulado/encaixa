<?php
$p = readline();

for ($o = 0; $o < $p; $o++)
{
   $l = readline();
   list($a, $b) = explode(" ", $l);
   $quaA = strlen($a);
   $quaB = strlen($b);
   
   $sub = $quaA - $quaB;
   
   if ($sub >= 0)
   {
       $m = 0;
        $i = 0;
       for (; $sub < $quaA; $sub++)
       {

           if ($a[$sub] == $b[$i])
           {
             $m++;
           }
           else 
           {
               $m = 0;
           }
            $i++;
              

       }
       
       if ($m == $quaB)
       {
         echo "encaixa\n";  
       }
       else
       {
         echo "nao encaixa\n";  
       }
       
       
       
   }
   else {
       echo "nao encaixa\n";
   }
   
}
?>