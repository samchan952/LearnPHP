<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Request_POST_GET</title>
</head>
<body>
<form method="get" action="post_get.php">
	Name: <input type="text" name="fname">
	<input type="submit">
</form>
</body>
</html>
<?php 	
$name = $_GET['fname'];
echo "Name: $name";
 ?>