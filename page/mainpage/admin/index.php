<?php
include_once "/home/s3568988/public_html/setting/config.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include_once $phppath_s."page/mainpage/index/meta.php";
include_once $phppath_s."css/css.php";
include_once $phppath_s."js/js_top.php";

?>
<title>Homepage | <?php echo $title_s?></title>
<script>
 function confirm_query(){
	 if(window.confirm('Confirm your action?')){
		 return true;
		 } else{
			 return false;
			 }
	 }
</script>
</head>

<body>
<?php
include_once $phppath_s."page/navigation.php";
if (!isset($_SESSION['admin'])) {
	header("location:https://mekong1.rmit.edu.vn/~s3568988/index.php");
} else {
	if ($_SESSION['admin']==1) {
	include_once $phppath_s."page/mainpage/admin/adminMain.php";
	} else {
		echo '<h1 style="text-align:center">YOU ARE NOT ADMIN</h1>';
	};
};
include_once $phppath_s."page/mainpage/index/footer.php";
include_once $phppath_s."js/js_bottom.php";
?>
</body>
</html>