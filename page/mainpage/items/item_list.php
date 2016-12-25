<?php
include_once "/home/s3568988/public_html/setting/config.php";
?>

<div class="container">
 <div>
 <h1>Keyboard</h1>
 <?php
 $dirname = "/mekong1.rmit.edu.vn/s3568988/public_html/page/mainpage/items/img/keyboard/";
 $image = scandir($dirname);
 $ignore = Array(".","..");
 foreach($image as $curimg){
	 if (!in_array($curimg, $ignore)) {
		 echo "<img src='/home/s3568988/public_html/page/mainpage/items/img/$curimg'/> <br>\n";
		 }
	 }
 ?>
 </div>

</div>