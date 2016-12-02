<?php
include_once "/home/s3568988/public_html/setting/config.php";
include_once "/home/s3568988/public_html/setting/mysql_config.php";
?>
<?php
$email = $_POST["email"];
$password = $_POST["pwd"];

$checkDB = mysqli_query($connect5, 'SELECT * FROM `customer` WHERE C_Email = "'.$email.'"');

	if (mysqli_num_rows($checkDB)<1) {
	echo("Invalid Email");	
}  else {
	$checkID = mysqli_fetch_assoc($checkDB);
	/*echo ($password);
	echo ("<br/>");
	echo ($checkID['C_Password']); */
	if (md5($password) == $checkID['C_Password']) {
		echo "You are successfully logged in";
		} else {
			echo "Incorrect password";
			} 
}
/*echo "You are successfully signed up<br>";*/

/*
$newconn = mysqli_connect("mekong1.rmit.edu.vn","s3568988", "qwerty1234", "s3568988") or die("Could not 13213 connect: ".mysqli_error());
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
*/
?>