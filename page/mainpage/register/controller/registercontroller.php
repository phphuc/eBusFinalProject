<?php
include_once "/home/s3568988/public_html/setting/config.php";
include_once "/home/s3568988/public_html/setting/mysql_config.php";
?>
<?php
$email = $_POST["email"];
$password = $_POST["pwd"];
$rePassword = $_POST["repwd"];
$Cname = $_POST["Cname"];
$dob = $_POST["dob"];
$phone = $_POST["phone"];
$address = $_POST["address"];

// Do Regex o day
// Mail Check
if ($password != $rePassword){
	echo "The retype password is incorrect! Redirect after 3s!";
	// Neu thich thi sai them countdown redirect jquery
	header('Refresh: 3;url=../index.php');
	exit();
}

if (!regexCheck($regexMail,$email)){
	echo "Please correct the mail field form!  Redirect after 3s!";
	header('Refresh: 3;url=../index.php');
	exit();
}

/*if (!regexCheck($regexPassword,$password)){
	echo "After finish delete this echo: In BUILD <br>";
	echo "Please correct the password field form!";
	header('Refresh: 3;url=../index.php');
	exit();
}*/



// Insert to DB

//bo vao db o day may dua xem cach insert

/*if (!$insertToDB = mysqli_query($connect5, "INSERT INTO `customer`(``,``,``) VALUES ('".$email."', '".md5($password)."')")){
	echo mysqli_error($connect5);	
}*/
if (!$insertToDB = mysqli_query($connect5, "INSERT INTO `customer` (`C_Email`,`C_Password`,`C_name`, `C_DOB`, `C_Phone_no`, `C_Address`) VALUES ('".$email."', '".md5($password)."', '".$Cname."','".$dob."', '".$phone."', '".$address."')")){
	echo mysqli_error($connect5);	
}  else {

echo "You are successfully signed up<br>";
header('Refresh: 3;url=http://mekong1.rmit.edu.vn/~s3568988/');
}
?>