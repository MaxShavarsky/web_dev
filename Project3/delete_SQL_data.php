<!DOCTYPE html>
<html>
<head>
	<title>WEB3</title>
</head>
<body>
 <?php
session_start();
$deleteid = $_POST["id"]
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM $dbname WHERE id='$deleteid'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?> 
</body>
</html>