<?php
$n = 1; //readline();

for(;$n>0;$n--)
{
	$str = "owe"; //readline();
	
	if(strlen($str)==5)
    {
		echo "3\n";
	}
	else if(($str[0]=='o' and $str[1]=='n') or ($str[1]=='n' and $str[2]=='e') or ($str[0]=='o' and $str[2]=='e'))
    {
		echo "1\n";
	}
	else 
		echo "2\n";
}

?>