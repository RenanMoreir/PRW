<?php

    
    $x = 1; //readline();
    //getchar();
    
    for($i=0;$i<$x;$i++){
        $t = "LEVELKAYAK"; //readline();
        
    $n=strlen($t);
    
            $o=($n/2)-1;
            $a=$o+1;
        
            while($o>=0){
                echo $t[$o];
                $o--;
            }
            $n--;
            while($n>=$a){
                echo $t[$n];
                $n--;
            }
    echo "\n";
        
    }



?>