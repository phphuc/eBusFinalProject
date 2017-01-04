<?php
include_once "/home/s3568988/public_html/setting/config.php";
include_once "/home/s3568988/public_html/page/mainpage/index/controller/getItemController.php";
?>

<?php
	if(isset($_GET['editItem'])){
	$getEditItem=mysqli_query($connect5,"select I_ID,I_Name,I_Price,I_Description,I_Img, item.T_ID,T_Name from item join type on item.T_ID=type.T_ID where I_ID = '".$_GET['editItem']."'");
	};
	
	while ($resultEditItem=mysqli_fetch_array($getEditItem)){
	echo '
<h1>Edit product</h1>
<form class="col-md-12" id="updateForm" action="'.$url_s.'page/mainpage/admin/index.php?editItem='.$_GET['editItem'].'" method="post" enctype="multipart/form-data">
	<div class="form-group">
      <label for="iName">Name:</label>
      <input type="text" class="form-control" id="iName" name="iName" value="'.$resultEditItem['I_Name'].'">
    </div>
    <div class="form-group">
      <label for="iType">Type:</label>
      <select class="form-control" id="iType" name="iType">
      		<option>'.$resultEditItem['T_Name'].'</option>
      
	  $getType=mysqli_query($connect5,"select * from type");';
	  while ($rowType=mysqli_fetch_array($getType)){
			echo '<option value="'.$rowType['T_ID'].'">'.$rowType['T_Name'].'</option>';  
	  };
	  echo
      	'</select>
    </div>
    <div class="form-group">
      <label for="iImg">Image:</label>
      <input type="file" class="form-control" id="iImg" name="iImg" ><img src="'.$resultEditItem['I_Img'].'" width="60" height="60" >
    </div>
    <div class="form-group">
      <label for="iPrice">Price:</label>
      <input type="text" class="form-control" id="iPrice" name="iPrice" value="'.$resultEditItem['I_Price'].'">
    </div>
    <div class="form-group">
      <label for="iDes">Description:</label>
      <textarea class="form-control" rows="5" id="iDes" name="iDes">'.$resultEditItem['I_Description'].'</textarea>
    </div>
    <button type="submit" name="updateItem" value="asdf">Submit</button>
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

<?php

$target_dir = "$url_s"."page/mainpage/items/img/";
$target_file = $target_dir . basename($_FILES["iImg"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    echo "Sorry, only JPG, JPEG, PNG files are allowed.";
    $uploadOk = 0;
}
move_uploaded_file($_FILES["iImg"]["tmp_name"], $target_file);
	

	if(isset($_POST["updateItem"])){
		$iImage=$_FILES['iImg']['name'];
		$iImageTmp=$FILES['iImg']['tmp_name'];
		move_uploaded_file($iImageTmp,"".$url_s."page/mainpage/items/img/$iImage");
	
		$insertToDB=mysqli_query($connect5, "update item set I_Name='".$_POST['iName']."',T_ID='".$_POST['iType']."',I_Img='".$target_file."',I_Price='".$_POST['iPrice']."',I_Description='".$_POST['iDes']."' where I_ID='".$resultEditItem['I_ID']."'");
		if($insertToDB) {
			echo "Product has been updated!";
			header('refresh:5; url=https://mekong1.rmit.edu.vn/~s3568988/page/mainpage/admin');
			}
		}
?>