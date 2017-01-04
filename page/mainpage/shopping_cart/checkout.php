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
$getUserFromDb = mysqli_query($connect5, "SELECT * FROM customer where C_ID='".$_SESSION['id']."'");
//$user = array();
$user = mysqli_fetch_assoc($getUserFromDb)
?>

<?php
include_once $phppath_s."page/navigation.php";
//include_once $phppath_s."page/mainpage/shopping_cart/cart_template.php";
include_once $phppath_s."js/js_bottom.php";
?>

<div class="container">
  <h1>Checkout</h1>
  <form class="col-md-6 col-md-offset-3 col-sm-12 col-lg-4 col-lg-offset-4" action="<?php echo $url_s."page/mainpage/shopping_cart/checkoutcontroller.php"?>" method="post">
  
    <div class="form-group">
      <label for="email">Email address:</label>
      <input type="email" class="form-control" id="email" name="email" value="<?php echo $user["C_Email"] ?>" disabled>
    </div>
   <div class="form-group">
      <label for="Cname">Full Name:</label>
      <input type="text" class="form-control" id="Cname" name="Cname" value="<?php echo $user["C_name"] ?>">
    </div>
    
    <div class="form-group">
      <label for="phone">Phone number:</label>
      <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $user["C_Phone_no"] ?>">
    </div>
    <div class="form-group">
      <label for="address">Shipping Address:</label>
      <input type="text" class="form-control" id="address" name="address" value="<?php echo $user["C_Address"] ?>">
    </div>
    
    <!-- check box remember me
    <div class="checkbox">
      <label>
        <input type="checkbox">
        Remember me</label>
    </div>
    -->
    <button type="submit" class="btn btn-default"  >Submit</button>
  </form>
</div>

<?php
include_once $phppath_s."page/mainpage/index/footer.php";
?>

</body>
</html>
