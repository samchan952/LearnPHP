<?php 
for ($x = 0; $x <= 10; $x++){
	echo "The number is: $x <br>";
}

for ($x = 0; $x <=100; $x+=10) {
	echo "The number is: $x <br>";
}

$x=array("Google","Yahoo","Bing","Baidu");
foreach ($x as $value){
	echo "$value <br>";
}

$x=array(1=>"Google", 2=>"Yahoo", 3=>"Bing");
foreach ($x as $key => $value)
{
	echo "$key = $value<br>" ;
}
 ?>
