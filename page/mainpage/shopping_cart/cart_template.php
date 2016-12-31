<?php
include_once "/home/s3568988/public_html/setting/config.php";
?>

<div class="container" style="width:1000px;">
 <div class="alert alert-success text-center">Product Information</div>
<?php
$getItemFromDb = mysqli_query($connect5, "SELECT * FROM item");
if(mysqli_num_rows($getItemFromDb)>0){
 //$data = array();
 if(!isset($_SESSION['cart']) or empty($_SESSION['cart'])){
	echo "<div class='alert alert-danger'>Nothing in cart</div>"; 
	 }
	 else{
		 $total=0;
		 foreach($_SESSION['cart'] as $value){
			 $total += $value['quantity'];
			 
			 }
		echo "<div class='alert alert-danger'>You have:<a href='list.php' style='text-decoration:underline'> $total</a> item.</div>";	  
		 }
 while($row = mysqli_fetch_assoc($getItemFromDb)){
	echo "<ul>";
	echo "<li><h3>$row[I_Name]</h3></li>";
	echo "<li>$row[I_Img]</li>";
	echo "<li>$row[I_Price]</li>";
	echo "<li><a href='insert.php?id=$row[I_ID]' style='color:red;font-weight:bold'>Add to cart</a></li>";
	echo "</ul>";
	echo "<hr>"; 
	//$data[] = $row;
 }
}
 /*echo "<pre>";
 print_r($data);
 echo "</pre>";*/
 /*$newarr = array();
 foreach($data as $value){
	$newarr[$value['I_ID']] = $value;
 }
 /*echo "<pre>";
 print_r($newarr);
 echo "</pre>";*/
 
?>
</div>
