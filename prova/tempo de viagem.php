<?php

$vel = readline();
$dis = readline();
$con = readline();


$th = $dis/$vel;
$tcom = $dis/$con;

$th = number_format($th, 2, ".","");
$tcom = number_format($tcom, 2, ".","");

echo "Total horas: $th\n";
echo "Total combustivel: $tcom\n";


?>
