<?php
include_once "/home/s3568988/public_html/setting/config.php";
?>

<?php
$email = $_SESSION['email'];
//echo "$_POST[email]";
$name = $_POST["Cname"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$date = date('Y-m-d H:i:s');

if (!$updateProfile = mysqli_query($connect5, "INSERT INTO `order` (`email`, `name`, `phone`, `shippingAddress`, `date`) VALUES ('".$email."', '".$name."', '".$phone."', '".$address."','".$date."')")){
	echo mysqli_error($connect5);	
}  else {
echo "You are successfully placed your order<br>";
header('Refresh: 3;url=http://mekong1.rmit.edu.vn/~s3568988/index.php');
};


?>

