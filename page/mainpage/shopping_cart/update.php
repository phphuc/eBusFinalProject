<?php
include_once "/home/s3568988/public_html/setting/config.php";
?>

<?php
if(isset($_POST['ok'])){
	unset($_POST['ok']);
	
	foreach($_POST['ok'] as $k=>$v){
		$_SESSION['cart'][$k]['quantity'] = $v;
		}
	}
	header("location:list.php");
?>