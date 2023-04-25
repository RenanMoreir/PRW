<?php

$x = $_GET['num'];

for ($i=0;$i <= 10; $i++)
{
    $y = $i*$x;
    echo "$i X $x = $y<br>";
}

?>
<a href="forms.html"><button>Voltar</button></a>