<?php
include_once "/home/s3568988/public_html/setting/config.php";
?>

<div class="container" style="width:1000px;">
 <div class="alert alert-success text-center">Product Information</div>
<?php
$getItemFromDb = mysqli_query($connect5, "SELECT * FROM item");
if(mysqli_num_rows($getItemFromDb)>0){
 while($row = mysqli_fetch_assoc($getItemFromDb)){
	echo "<ul>";
	echo "<li><h3>$row[I_Name]</h3></li>";
	echo "<li>$row[I_Img]</li>";
	echo "<li>$row[I_Price]</li>";
	echo "<li><a href='#' style='color:red;font-weight:bold'>Add to cart</a></li>";
	echo "</ul>";
	echo "<hr>"; 
 }
}
?>
</div>
