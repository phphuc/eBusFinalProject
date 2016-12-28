<?php
include_once "/home/s3568988/public_html/setting/config.php";
include_once "/home/s3568988/public_html/setting/mysql_config.php";
?>
<?php
/*
$email1 = $_POST["email1"];
$Cname1 = $_POST["Cname1"];
$dob1 = $_POST["dob1"];
$phone1 = $_POST["phone1"];
$address1 = $_POST["address1"];
*/

	
	if (!$updateProfile = mysqli_query($connect5, "UPDATE `customer` SET C_Email='".$_POST["email1"]."', C_name='".$_POST["Cname1"]."', C_DOB='".$_POST["dob1"]."', C_Phone_no='".$_POST["phone1"]."', C_Address='".$_POST["address1"]."' WHERE C_ID='".$_SESSION['id']."' "))  {
	echo mysqli_error($connect5);	
}  else {
echo "You are successfully updated your profile<br>";
header('Refresh: 3;url=http://mekong1.rmit.edu.vn/~s3568988/page/mainpage/profile');
};
?>