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
</head>

<body>
<?php
include_once $phppath_s."page/navigation.php";
//include_once $phppath_s."page/mainpage/shopping_cart/cart_template.php";
include_once $phppath_s."js/js_bottom.php";
?>

<div class="container">
  <?php
  if(!isset($_SESSION['email'])){ 
  include ("login/view/main.php"); 
  //header('Refresh: 3;url=http://mekong1.rmit.edu.vn/~s3568988/page/mainpage/shopping_cart');
  }
  else {
	  include("checkout.php");
	  }  
  ?>
</div>

</body>
</html>
