<?php 
$x=1;
while($x<=5)
{
	echo "The number is " . $x . "<br>";
	$x+=2;
}

echo "1 x 9 =";
echo 1*9;
echo"<br>";
echo "2 x 9 =";
echo 2*9;
echo"<br>";
echo "3 x 9 =";
echo 3*9;
echo"<br>";
echo "4 x 9 =";
echo 4*9;
echo"<br>";
echo "5 x 9 =";
echo 5*9;
echo"<br>";
echo "6 x 9 =";
echo 6*9;
echo"<br>";

$j = 1;
while($j<=12){
$i = 9;
echo "{$j}x{$i}=".($j*$i)." ";
echo "<br />";
$j++;	
}

$p=1;
do
{
	echo "The number is " . $p . "<br>";
	$p++;
}
while ($p<=5);

$i=6;
do
{
	$i++;
	echo "The number is " . $i . "<br>";
}
while ($i<=5);