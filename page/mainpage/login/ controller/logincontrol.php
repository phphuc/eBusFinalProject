<?php
include_once "/home/s3568988/public_html/setting/config.php";
?>

<?php
$email = $_POST["email"];
$password = $_POST["pwd"];

$newconn = mysqli_query("mekong1.rmit.edu.vn","s3568988","qwerty1234") or die("Could not connect: ".mysqli_error());
 mysqli_error_db("s3568988");
 
$result = mysqli_query('SELECT * FROM `customer` WHERE C_Email = "'.$email.'" ');
if (mysqli_num_rows($result)<1) {
	echo("Invalid Email");
	}
else {
	$check = mysqli_fetch_array($result, MYSQL_NUM);
	
	if ($password == $check[1] ) {
		echo("Succeddfully logged in");
		}
	else {
		echo("Wrong password");
		}
	}

?>