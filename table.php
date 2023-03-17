<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Table</title>
</head>
<body>
<table>
	<tr>
		<th>Name</th>
		<th>Gender</th>
		<th>Phone number</th>
	</tr>
	<tr>
		<td>Ali</td>
		<td>Male</td>
		<td>0123456789</td>
	</tr>
</table>
<br>
<table>
	<tr>
		<th rowspan="2">Student Name</th>
		<th colspan="2">Parent Name</th>
	</tr>
	<tr>
		<td>Father</td>
		<td>Mother</td>
	</tr>
	<tr>
		<td>Ali</td>
		<td>Ben</td>
		<td>Lee</td>
	</tr>
</table>
</body>
</html>
<style type="text/css">
	table,th,td{
		border: 1px solid black ;
		border-collapse: collapse;
	}
	table{
		width: 100%;
	}
	th,td{
		text-align: center;
	}
</style>