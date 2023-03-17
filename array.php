<?php 
$fruit = array("Apple", "Banana", "Orange");
echo $fruit[0],"<br>";
echo $fruit[1],"<br>";
echo $fruit[2],"<br>";

$fruit = array("Apple", "Banana", "Orange");
echo count($fruit);
echo "<br>";

$fruit = array("Apple", "Banana", "Orange");
$arrlength=count($fruit);
for($x=0;$x<$arrlength;$x++)
{
	echo $fruit[$x];
	echo "<br>";
}


$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
echo "Peter is " . $age['Peter'] . "years old.";
echo "<br>";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach($age as $x => $x_value) {
	echo "Key=" . $x . ", Value=" . $x_value;
	echo "<br>";
} 
 ?>
