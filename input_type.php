<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Type</title>
</head>
<body>
<form>
	<label>First name:</label><br>
	<input type="text" id="fname" name="fname"><br>
	<label>Last name:</label><br>
	<input type="text" id="lname" name="lname"><br>
	<label>Password:</label><br>
	<input type="Password" id="pwd"name="pwd">
	<input type="submit" value="Submit">
	<input type="reset">
</form>
<br>
<form>
	<input type="radio" id="html" name="fav_language" value="HTML">
	<label for="html">HTML</label><br>
	<input type="radio" id="css" name="fav_language" value="CSS">
	<label for="css">CSS</label><br>
	<input type="radio" id="javascript" name="fav_language" value="JavaScript">
	<label for="javascript">Javascript</label>
	<input type="submit" value="Submit">
</form>
<br>
<form>
	<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
	<label for="vehicle1">I have a bike</label><br>
	<input type="checkbox" id="vehicle2"name="vehicle2" value="Car">
	<label for="vehicle2">I have a car</label><br>
	<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
	<label for="vehicle3">I have a boat</label>
	<input type="Submit" value="Submit">
</form>
<br>
<input type="button" onclick="alert('Hello World!')" value="Click">
<br>
<form>
	<label for="birthday">Birthday:</label>
	<input type="date" id="birthday" name="birthday">
</form>
<br>
<form>
	<label for="email">Enter you email:</label>
	<input type="email" id="email" name="email">
	<input type="submit" name="Submit">
</form>
<br>
<form>
	<label for="myfile">Select a file:</label>
	<input type="file" id="myfile" name="myfile">
	<input type="submit" value="Submit">
</form>
<br>
<form>
	<label for="fname">First name:</label>
	<input type="text" id="fname" name="fname"><br><br>
	<input type="hidden" id="custId" name="custId" value="3487">
	<input type="submit" value="Submit">
</form>
<br>
<form>
	<label for="quantity">Quantity:</label>
	<input type="number" id="quantity" name="quantity" min="0" max="100" value="30">
</form>
<br>
<form>
	<label for=volume>Volume (between 0 and 50):</label>
	<input type="range" id="vol" name="vol" min="0" max="50">
	<input type="submit" value="Submit">
</form>
</body>
</html>