<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>waiting...</title>
</head>

<body>
	<?php 
include 'connect.php';

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$kelas = $_POST['kelas'];

mysql_query("INSERT  INTO member VALUES('','$username','$password','$email','$kelas')");
header("location:index.php.php?pesan=input");
	
?>
</body>
</html>