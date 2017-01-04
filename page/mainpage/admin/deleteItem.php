<?php 
include_once "/home/s3568988/public_html/setting/config.php";
?>

<?php
if(isset($_GET['deleteItem'])) {
	$deleteID=$_GET['deleteItem'];
	$deleteProduct=mysqli_query($connect5, "delete from item where I_ID='".$deleteID."'");
	if ($deleteProduct) {
		echo "Product has been deleted";
		header('refresh:5; url=https://mekong1.rmit.edu.vn/~s3568988/page/mainpage/admin');
		}
	}
?>