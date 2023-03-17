<?php 
// Start the session
session_start();
 ?>
 <!DOCTYPE html>
 <html>
 <body>
 
<?php 
// Set the session variable
$_SESSION['favcolor']  = "green";
$_SESSION['favanimal'] = "cat";
echo "Session variable are set.";
 ?>

 </body>
 </html>