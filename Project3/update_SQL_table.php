<!DOCTYPE html>
<html>
<head>
	<title>WEB3</title>
</head>
<body>
	 <?php
session_start();
// Create connection
$sname = $_POST​ [ ​ "search_name"​ ];
$nname = $_POST​ [ ​ "new_name"​ ]; 
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE $dbname SET firstname='$nname' WHERE firstname = 'sname'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?> 
</body>
</html>