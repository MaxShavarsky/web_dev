<!DOCTYPE html>
<html>
<head>
	<title>WEB3</title>
</head>
<body>
	 <?php
session_start();
$firstname = $_POST​ [ ​ "fname"​ ];
$lastname = $_POST​ [ ​ "lname"​ ]; 
$email = $_POST​ [ ​ "email"​ ];  
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO $dbname (firstname, lastname, email)
VALUES ('$firstname', '$lastname', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
</body>
</html>