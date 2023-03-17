<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Attribute</title>
</head>
<body>
<form>
	<label for="fname">First name:</label><br>
	<input type="text" id="fname" name="fname"><br>
	<label for="lname">Last name:</label><br>
	<input type="text" id="lname" name="lname"><br>
	<input type="submit" name="Submit">
</form>
<br>
<form>
	<label for="fname">First name:</label><br>
	<input type="text" id=fname name="fname" value="John" readonly><br>
	<label for="lname">Last name:</label><br>
	<input type="text" id=lname name="lname" value="Doe" readonly>
</form>
<br>
<form>
	<label for="fname">First name:</label><br>
	<input type="text" id="fname" name="fname" value="John" disabled><br>
	<label for="lname">Last name:</label><br>
	<input type="text" id="lname" name="lname" value="Doe" disabled>
</form>
<br>
<form>
	<label for="fname">First name:</label><br>
	<input type="text" id="fname" name="fname" size="50"><br>
	<label for="pin">PIN:</label><br>
	<input type="text" id="pin" name="pin" size="4">
</form>
<br>
<form>
	<label for="fname">First name:</label><br>
	<input type="text" id="fname" name="fname" size="50"><br>
	<label for="pin">PIN:</label><br>
	<input type="pin" id="pin" name="pin" maxlength="4" size="4">
</form>
<br>
<form>
	<label for="datemax">Enter a date before 2021-07-21:</label>
	<input type="date" id="datemax" name="datemax" max="2021-07-21"><br><br>

	<label for="datemin">Enter a dat after 2019-12-31:</label>
	<input type="date" id="datemin" name="datemin" min="2019-12-31"><br><br>

	<label for="quantity">Quantity (between 1 and 5):</label>
	<input type="number" id="quantity" name="quantity" min="1" max="5">
	<input type="submit" name="Submit">
</form>
<br>
<form>
	<label for="files">Select files:</label>
	<input type="file" id="files" name="files" multiple>
</form>
<br>
<form>
	<label for="country_code">Country code:</label>
	<input type="text" id="country_code" name="country_code" pattern="[A-Za-z]{3}" title="Three letter country code"><br>
	<input type="submit" name="Submit">
</form>
<br>
<form>
	<label for="phone">Enter a phone number:</label>
	<input type="tel" id="phone" name="phone" name="phone" placeholder="012-345-6789" pattern="[0]{1}[1-9]{2}-[0-9]{3}-[0-9]{4}">
	<input type="submit" name="Submit">
</form>
<br>
<form>
	<label for="username">Username:</label>
	<input type="text" id="username" name="username" required>
	<input type="submit" name="Submit">
	<br>
	<br>
	<br>
</form>
<br>
<form>
	<label for="fname">First name:</label><br>
	<input type="text" id="fname" name="fname" autofocus><br>
	<label for="lname">Last name:</label><br>
	<input type="text" id="lname" name="lname"><br>
</form>
<br>
<form>
	<input list="browsers">
	<datalist id="browsers">
		<option value="Internet Explorer">
		<option value="Firefox">
		<option value="Chrome">
		<option value="Opera">
		<option value="Safari">
	</datalist>
</form>
</body>
</html>