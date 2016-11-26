<?php
// Setting
$hostname_sql = "mekong1.rmit.edu.vn";
$username_sql = "s3568988";
$password_sql = "qwerty1234";
$database_sql = "s3568988";

// Don't change this unless you know what you are doing !
$connect5 = mysqli_connect($hostname_sql, $username_sql, $password_sql, $database_sql);
if (!$connect5){
	echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
?>