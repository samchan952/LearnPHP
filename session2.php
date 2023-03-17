<?php 
session_start();
 ?>
 <!DOCTYPE html>
 <html>
 <body>
 
 <?php 
// Echo session variable that were set on previous page
 echo "Favourite color is " . $_SESSION['favcolor'] . ".<br>";
 echo "Favoutire animal is " . $_SESSION['favanimal'] . ".";
  ?>
  
 </body>
 </html>