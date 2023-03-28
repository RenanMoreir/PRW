<?php

    $alunos = array("Murilo","Cássio","Ricardo","joao");
    print_r($alunos); //imprime todos os elementos do vetor
    echo "<br>";
    echo "Qauntidade de elementos :".count($alunos)."<br>";
    echo "<hr>";
    for ($x = 0; $x < count($alunos); $x++)
    {
        echo "Alunos na posição $x: ".$alunos[$x]."<br>";
        echo "quantidade de caracters: ".strlen($alunos[$x])."<br>";
        echo "<hr>";
    }




?>