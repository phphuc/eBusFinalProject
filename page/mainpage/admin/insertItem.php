<?php 
include_once "/home/s3568988/public_html/setting/config.php";
?>



<h1>Insert new product</h1>
<form class="col-md-12" id="insertForm" action="<?php echo $url_s."page/mainpage/admin/insertControl.php" ?>" method="post" enctype="multipart/form-data">
	<div class="form-group">
      <label for="iName">Name:</label>
      <input type="text" class="form-control" id="iName" name="iName" required>
    </div>
    <div class="form-group">
      <label for="iType">Type:</label>
      <select class="form-control" id="iType" name="iType" required>
      		<option>Select a type</option>
      <?php
	  $getType=mysqli_query($connect5,"select * from type");
	  while ($rowType=mysqli_fetch_array($getType)){
			echo '<option value="'.$rowType['T_ID'].'">'.$rowType['T_Name'].'</option>';  
	  };
	  ?>
      	</select>
    </div>
    
    <div class="form-group">
      <label for="iImg">Image:</label>
      <input type="file" class="form-control" id="iImg" name="iImg" required>
    </div>
    
    <div class="form-group">
      <label for="iPrice">Price:</label>
      <input type="text" class="form-control" id="iPrice" name="iPrice" required>
    </div>
    <div class="form-group">
      <label for="iDes">Description:</label>
      <textarea class="form-control" rows="5" id="iDes" name="iDes"></textarea>
    </div>
    
    <button type="submit" name="submitItem" class="btn btn-default" value="inothinghere">Submit</button>
    <button type="reset">Reset</button>
</form>
<script>
$('#insertForm').submit(function(e){
    var text = $('#iDes').val();
	var cleanText = text.replace(/(<([^>]+)>)/ig,"");
    //alert(cleanText);
    $('#iDes').val(cleanText);
    e.preventDefault();
});
</script>
<?php /*
	if(isset($_POST['submitItem'])){
		//echo $_POST['submitItem'];
		$iImage=$_FILES['iImg']['name'];
		$iImageTmp=$FILES['iImg']['tmp_name'];
		move_uploaded_file($iImageTmp,"$phppath_s/page/mainpage/items/img/$iImage");
	
		$insertToDB=mysqli_query($connect5, "insert into item ('I_Name','I_Type','I_Img','I_Price','I_Description') values ('".$_POST['iName']."','".$_POST['iType']."',".$iImage.",'".$_POST['iPrice']."','".$_POST['iDes']."')");
		if($insertToDB) {
			echo "<script>alert('New product has been inserted!')</script>";
			echo "<script>window.open('https://mekong1.rmit.edu.vn/~s3568988/page/mainpage/admin/index.php?insertItem','_self')</script>";
			} 
		} */
?>


<?php /*
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
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>

<body>
<?php
include_once $phppath_s."page/navigation.php";
?>
<h1>Insert new product</h1>
<form class="col-md-12" id="insertForm" action="<?php echo $url_s."page/mainpage/admin/index.php?insertItem" ?>" method="post" enctype="multipart/form-data">
	<div class="form-group">
      <label for="iName">Name:</label>
      <input type="text" class="form-control" id="iName" name="iName" required>
    </div>
    <div class="form-group">
      <label for="iType">Type:</label>
      <select class="form-control" id="iType" name="iType" required>
      		<option>Select a type</option>
      <?php
	  $getType=mysqli_query($connect5,"select * from type");
	  while ($rowType=mysqli_fetch_array($getType)){
			echo '<option value="'.$rowType['T_ID'].'">'.$rowType['T_Name'].'</option>';  
	  };
	  ?>
      	</select>
    </div>
    <div class="form-group">
      <label for="iImg">Image:</label>
      <input type="file" class="form-control" id="iImg" name="iImg" required>
    </div>
    <div class="form-group">
      <label for="iPrice">Price:</label>
      <input type="text" class="form-control" id="iPrice" name="iPrice" required>
    </div>
    <div class="form-group">
      <label for="iDes">Description:</label>
      <textarea class="form-control" rows="5" id="iDes" name="iDes"></textarea>
    </div>
    
    <button type="submit" name="submitItem" class="btn btn-success" value="insert_now">Submit</button>
    <button type="reset" class="btn btn-danger">Reset</button>
</form>
<script>
$('#insertForm').submit(function(e){
    var text = $('#iDes').val();
	var cleanText = text.replace(/(<([^>]+)>)/ig,"");
    //alert(cleanText);
    $('#iDes').val(cleanText);
    e.preventDefault();
});
</script>
<?php
	if(isset($_POST["submitItem"])){
		//echo $_POST["submitItem"];
		$iImage=$_FILES["iImg"]["name"];
		$iImageTmp=$_FILES["iImg"]["tmp_name"];
		move_uploaded_file($iImageTmp,"$phppath_s/page/mainpage/items/img/$iImage");
		echo $_POST["submitItem"];
		$insertToDB=mysqli_query($connect5, "insert into item ('I_Name','I_Type','I_Img','I_Price','I_Description') values ('".$_POST['iName']."','".$_POST['iType']."','$iImage','".$_POST['iPrice']."','".$_POST['iDes']."')");
		if($insertToDB) {
			echo $_POST['submitItem'];
			echo "<script>alert('New product has been inserted!')</script>";
			echo "<script>window.open('mekong1.rmit.edu.vn/~s3568988/page/mainpage/admin/insertItem.php','_self')</script>";
			} 
		} 
?>
<?php
include_once $phppath_s."page/mainpage/index/footer.php";
include_once $phppath_s."js/js_bottom.php";
?>
</body>
</html>
*/ ?>