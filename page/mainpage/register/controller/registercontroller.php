<?php
include_once "/home/s3568988/public_html/setting/config.php";
?>
<?php
$email = $_POST["email"];
$password = $_POST["pwd"];
$rePassword = $_POST["repwd"];

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

if (!regexCheck($regexPassword,$password)){
	echo "After finish delete this echo: In BUILD <br>";
	echo "Please correct the password field form!";
	header('Refresh: 3;url=../index.php');
	exit();
}

echo "Pass";

// Insert to DB

/*if (!$insertToDB = mysqli_query($connect5, "INSERT INTO ``(``,``,``) VALUES ('".$email."', '".md5($password)."')")){
	echo mysqli_error($connect5);	
}*/

?>