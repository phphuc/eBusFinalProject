<?php include_once "/home/s3568988/public_html/setting/config.php"; ?>


<?php
// SQL Select Item
$getItemFromDb = mysqli_query($connect5, "SELECT * FROM keyboard");
$items = array();
if (mysqli_num_rows($getItemFromDb) > 0){
	while($row = mysqli_fetch_assoc($getItemFromDb))
	{
		$items[] = $row;
	}

}
?>