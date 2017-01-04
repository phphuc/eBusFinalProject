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
<script>
 function confirm_query(){
	 if(window.confirm('Confirm your action?')){
		 return true;
		 } else{
			 return false;
			 }
	 }
</script>

<style>
.heading{color:white;background:green;}
table{border-collapse:collapse;}
td{padding:5px;} 
</style>
</head>

<body>

<?php
include_once $phppath_s."page/navigation.php";
//include_once $phppath_s."page/mainpage/shopping_cart/cart_template.php";
include_once $phppath_s."js/js_bottom.php";
?>

<?php
//echo "<pre>";
//print_r($_SESSION['cart']);
if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])){
 echo "<form action='update.php' method='post'>";
 echo "<center>";
 echo "<table border='1' align='center' width='600px'>";
 echo "<tr class='heading'>";
   echo "<td>Name</td>";
   echo "<td>Description</td>";
   echo "<td>Price</td>";
   echo "<td>Quantity</td>";
   echo "<td>Total Price</td>";
   echo "<td>Detele item</td>";
 echo "</tr>";
 foreach($_SESSION['cart'] as $value){
	 echo "<tr>";
	  echo "<td>$value[I_Name]</td>";
	  echo "<td>$value[I_Description]</td>";
	  echo "<td>".number_format($value['I_Price'])."</td>";
	  echo "<td><input type='text' name = '$value[I_ID]' value='$value[quantity]''></input></td>";
	  echo "<td>".number_format($value['I_Price']*$value['quantity'])."</td>";
	  echo "<td><a href='delete.php?id=$value[I_ID]' onclick='return confirm_query()'>Delete</a></td>";
	 echo "</tr>";
	 }
 
 echo "</table>";
 echo "<div class='col-xs-12' style='height:50px';>";
 echo "<input type='submit' name='ok' value='Update' onClick='return confirm_query()'>";
 echo "<buton type='button' class='btn btn-success'><a href='forceToLogin.php' style='text-decoration:none;color:black'>Place Order</a></buton>";
 echo "</div>";
 echo "</center>";
 echo "</form>";	
}
?>

<?php
include_once $phppath_s."page/mainpage/index/footer.php";
?>

</body>
</html>