<!DOCTYPE html>
<html>
<head>
	<title>WEB3</title>
</head>
<body>
Demo connection to DataBase using MySQLi in procedural style:​<br>
<?php
$servername = ​$_POST​["DB"​]; 
$username = ​$_POST​["DBuser"​];
$password = ​$_POST​["DBpass"​];
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {​ 
die(​ "Connection failed: "​ . mysqli_connect_error());
}
echo ​ "Connected successfully"​ ;
?>
</body>
</html>

