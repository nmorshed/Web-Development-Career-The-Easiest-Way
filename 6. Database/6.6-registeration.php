<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "friends_club";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {	

	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$mobile_number = $_POST['mobile_number'];
	$dob = $_POST['dob'];


	$sql = "INSERT INTO members (first_name, last_name, mobile_number, dob) VALUES ('$first_name', '$last_name', '$mobile_number', '$dob')";

	mysqli_query($conn, $sql );

	//redirect to members
	$url = "http://localhost/Web-Development-Career-The-Easiest-Way/6.%20Database/6.7-members.php";
	header("Location: $url");

}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
</head>
<body>

	<div class="container">

		<div>
			<a href="6.6-registeration.php">Register</a> | 
			<a href="6.7-members.php">Members</a>
		</div>

		<h2>Regster as a member</h2>

		<form method="post" action="">
			<table>

				<tr>
					<td>First Name</td>
					<td><input type="text" name="first_name" required></td>
				</tr>

				<tr>
					<td>Last Name</td>
					<td><input type="text" name="last_name"></td>
				</tr>

				<tr>
					<td>Mobile Number</td>
					<td><input type="text" name="mobile_number" required></td>
				</tr>

				<tr>
					<td>Date of birth</td>
					<td><input type="Date" name="dob"></td>
				</tr>

				<tr>
					<td></td>
					<td><input type="submit" value="Become a member"></td>
				</tr>

			</table>
		</form>
	</div>

</body>
</html>