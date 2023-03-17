 <?php
$t = date("H");

if ($t < "20") {
  echo "Have a good day!<br>";
}

$t = date("21");

if ($t < "20") {
  echo "Have a good day!<br>";
} else {
  echo "Have a good night!<br>";
}

$t = date("11");

if ($t < "10") {
  echo "Have a good morning!<br>";
} elseif ($t < "20") {
  echo "Have a good day!<br>";
} else {
  echo "Have a good night!<br>";
}

$x=1 ;
$y=5 ;
if ($x > $y)
{
  echo "x is bigger than y";
}
elseif ($x == $y)
{
  echo "x is equal to y";
}
else
{
  echo "x is smaller than y<br>";
}


$favcolor = "pink";
switch ($favcolor) {
  case 'red':
    echo "Your favourite color is red!";
    break;
  case 'blue':
    echo "Your favourite color is blue!";
    break;
  case 'green':
    echo "Your favourite color is green!";
    break;
  case 'pink':
    echo "Your favourite color is pink!";
    break;
  default:
    echo "Your favourite color is neither red, blue, or green!";  
}