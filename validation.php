<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Validation</title>
</head>
<body>

<center>
	<h2>PHP from Validation Example</h2>
	<form method="post" action="welcome.php">
	<table>
		<tr>
			<td>Name:</td>
			<td><input type="text" name="name" placeholder="Name" required></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="email" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required></td>
		</tr>
		<tr>
			<td>Phone number:</td>
			<td><input type="tel" name="num" placeholder="Phone number" pattern="(\+?6?01)[0-46-9]-*[0-9]{7,8}" required></td>
		</tr>
		<tr>
			<td>Comment:</td>
			<td><textarea name="comment" rows="5" cols="40"></textarea></td>
		</tr>
		<tr>
			<td>Gender:</td>
			<td><input type="radio" name="gender" value="male">Male <input type="radio" name="gender" value="female">Female</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Submit"></td>
		</tr>
	</table>
<center>
</body>
</html>