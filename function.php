<?php 
function writeName()
{
	echo "Shaoxi";
}

echo "My name is ";
writeName();
echo "<br>";

function add_five(&$value) {
	$value +=5;
}

$num = 2;
add_five($num);
echo $num;
echo "<br>";

function add($x,$y)
{
	$total=$x+$y;
	return $total;
}

echo add(7,4);
echo "<br>";

$x = "Hello World!";
echo str_replace("World","Shaoxi",$x)



 ?>