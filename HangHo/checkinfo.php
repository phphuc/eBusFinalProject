<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
 echo "Login test page";
$username = "";
$password = "";

?>
<br />
<?php
echo $_POST["username"];
?>

<br />
<?php
$servername="mekong1.rmit.edu.vn";
$username="s3568988";
$password="qwerty1234";
$db_name="s3568988";

$conn = mysqli_connect($servername,$username,$password,$db_name);

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}


echo "Connected successfully";
?>
<br />

<?php

?>



</body>
</html>