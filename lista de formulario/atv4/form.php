<?php

$ano = $_GET['ano'];

if ( ($ano%400 == 0) or ($ano%4 == 0 and $ano%100 != 0)   )
{
    echo "<h3>Esse ano é bissexto</h3>";
}
else
{
    echo "<h3>Esse ano não é bissexto</h3>";
}

?>
<a href="form.html"><button>Voltar</button></a>