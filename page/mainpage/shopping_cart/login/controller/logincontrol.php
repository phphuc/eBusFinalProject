<?php
include_once "/home/s3568988/public_html/setting/config.php";

?>
<?php
$email = $_POST["email"];
$password = $_POST["pwd"];

// Regex check o day
if (empty($email) || empty($password)){
	echo "Please full fill the form";
	exit();
}

if (!regexCheck($regexMail,$email)){
	echo "Incorrect Email";
	exit();	
}

/*if (!regexCheck($regexPassword,$password)){
	echo "Incorrect Password";
	exit();
}*/

$queryDb = 'SELECT * FROM `customer` WHERE `C_Email` = "'.$email.'"';
$checkDb = mysqli_query($connect5, $queryDb);
$numRowDb = mysqli_num_rows($checkDb);


if ($numRowDb == 1){
	// Get Password o day
	while ($rowDb = mysqli_fetch_array($checkDb)){
		$idValid = $rowDb['C_ID'];
		$passwordValid = $rowDb['C_Password'];
		$isAdmin = $rowDb['C_Admin'];	
	}
	// Check Password o day
	if ($passwordValid == md5($password)){
		echo "Login Successfully";
		$_SESSION['admin']= $isAdmin;
		$_SESSION['id'] = $idValid;
		$_SESSION['email'] = $email;
		$_SESSION['password'] = $password;
		header('Refresh: 3;url=http://mekong1.rmit.edu.vn/~s3568988/page/mainpage/shopping_cart/checkout.php');
		exit();
	}
	echo "Incorrect password";
	exit();
}elseif ($numRowDb > 1){
	echo "Duplicate Account please contact admin";
	exit();
}
echo "Invalid Email / Not Record";
exit();



/*
	if (mysqli_num_rows($checkDB)<1) {
	echo("Invalid Email");	
}  else {
	$checkID = mysqli_fetch_assoc($checkDB);
	/*echo ($password);
	echo ("<br/>");
	echo ($checkID['C_Password']); */
	/*if (md5($password) == $checkID['C_Password']) {
		echo "You have successfully logged in";
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
