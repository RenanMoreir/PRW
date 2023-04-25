<?php

$quant = $_GET['quantidade'];
$pasta = $_GET['pasta'];

echo "<table border='1'>";
for($i=1;$i<=$quant;$i++)
{
    echo "<tr>
            <td>$i</td>
            <td><img src='$pasta/$i.jpg' style='width: 150px; height: 100px;'></td>
        </tr>";
}




?>
<a href="forms.html"><button>Voltal</button></a>