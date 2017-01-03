<?php
include_once "/home/s3568988/public_html/setting/config.php";
?>

<?php
//echo $_GET['id'];

/*$getItemFromDb = mysqli_query($connect5, "SELECT * FROM item");
if(mysqli_num_rows($getItemFromDb)>0){
 $data = array();
 while($row = mysqli_fetch_assoc($getItemFromDb)){
	$data[$row['I_ID']] = $row;
 }
}*/
 $id = $_GET['id'];
 if(!isset($_SESSION['cart']) or empty($_SESSION['cart'])){
	$data[$id]['quantity']=1;
	$_SESSION['cart'][$id] = $data[$id];
	 
	 } else{
     if(array_key_exists($id,$_SESSION['cart'])){
		 $_SESSION['cart'][$id]['quantity']+=1;
		 
		 } else{
		   $data[$id]['quantity']=1;
	       $_SESSION['cart'][$id] = $data[$id];
		   echo "<pre>";
		   print_r($_SESSION['cart']);
			 }
		 } 
//header("location:index.php");
header("location:https://mekong1.rmit.edu.vn/~s3568988/index.php");
 
 
?>