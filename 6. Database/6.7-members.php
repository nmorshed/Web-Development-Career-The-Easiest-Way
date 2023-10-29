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

		<h2>members</h2>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "friends_club";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);


$sql = "SELECT * FROM `members`";
$result = mysqli_query($conn, $sql );?>

<table border="1">
	<thead>
		<td>id</td>
		<td>First Name</td>
		<td>Last Name</td>
		<td>Mobile Number</td>
		<td>Date of birth</td>
	</thead>





<?php
if ( $result->num_rows > 0 ) {
	
	while ( $row = mysqli_fetch_assoc($result) ) {

		echo "<tr>";
			echo "<td>" . $row['id'] . "</td>";
			echo "<td>" . $row['first_name'] . "</td>";
			echo "<td>" . $row['last_name'] . "</td>";
			echo "<td>" . $row['mobile_number'] . "</td>";
			echo "<td>" . $row['dob'] . "</td>";
		echo "</tr>";
	}

}

//var_dump($result);



?>

</table>
	</div>

</body>
</html>