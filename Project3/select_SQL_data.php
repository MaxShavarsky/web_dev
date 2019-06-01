<!DOCTYPE html>
<html>
<head>
	<title>WEB3</title>
</head>
<body>
	 <?php
session_start();
$fname = $_POST​ [ ​ "firstname"​ ]; 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM $dbname WHERE firstname = '$fname' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 
</body>
</html>