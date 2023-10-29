<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "friends_club";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);


$sql = "INSERT INTO members (first_name, last_name, mobile_number, dob) VALUES ('Raju', 'Ahmed', '1234567872', null)";

mysqli_query($conn, $sql );





?>