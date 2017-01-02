<?php
include_once "/home/s3568988/public_html/setting/config.php";
include_once "/home/s3568988/public_html/page/mainpage/index/controller/getItemController.php";
?>

<?php
	if(isset($_GET['editItem'])){
	$getEditItem=mysqli_query($connect5,"select * from item where I_ID = '".$_GET['editItem']."'");
	};
	while ($resultEditItem=mysqli_fetch_array($getEditItem)){
	echo '
<h1>Edit product(not finsih)</h1>
<form class="col-md-12" id="updateForm" action="<?php echo $url_s."page/mainpage/admin/insertItem.php"?>" method="post">
	<div class="form-group">
      <label for="iName">Name:</label>
      <input type="text" class="form-control" id="iName" name="iName">
    </div>
    <div class="form-group">
      <label for="iType">Type:</label>
      <select class="form-control" id="iType" name="iType">
      		<option>Select a type</option>
      
	  $getType=mysqli_query($connect5,"select * from type");';
	  while ($rowType=mysqli_fetch_array($getType)){
			echo '<option value="'.$rowType['T_ID'].'">'.$rowType['T_Name'].'</option>';  
	  };
	  echo
      	'</select>
    </div>
    <div class="form-group">
      <label for="iImg">Image:</label>
      <input type="file" class="form-control" id="iImg" name="iImg">
    </div>
    <div class="form-group">
      <label for="iPrice">Price:</label>
      <input type="text" class="form-control" id="iPrice" name="iPrice">
    </div>
    <div class="form-group">
      <label for="iDes">Description:</label>
      <textarea class="form-control" rows="5" id="iDes" name="iDes">
    </div>
    <button type="submit" name="updateItem">Submit</button>
    <button type="reset">Reset</button>
</form>';
	};
?>
<script>
$('#updateForm').submit(function(e){
    var text = $('#iDes').val();
	var cleanText = text.replace(/(<([^>]+)>)/ig,"");
    //alert(cleanText);
    $('#iDes').val(cleanText);
    e.preventDefault();
});
</script>
};
?>
<?php
	if(isset($_POST['updateItem'])){
		$iImage=$_FILES['iImg']['name'];
		$iImageTmp=$FILES['iImg']['tmp_name'];
		move_uploaded_file($iImageTmp,"".$url_s."page/mainpage/items/img/$iImage");
	
		$insertToDB=mysqli_query($connect5, "update item set I_Name='".$_POST['iName']."',I_Type='".$_POST['iType']."',I_Img='".$_POST['iImg']."',I_Price='".$_POST['iPrice']."',I_Description='".$_POST['iDes']."' where I_ID=''");
		if($insertToDB) {
			echo "<script>alert('New product has been inserted!')</script>";
			echo "<script>window.open('https://mekong1.rmit.edu.vn/~s3568988/page/mainpage/admin/index.php?insertItem','_self')</script>";
			}
		}
?>