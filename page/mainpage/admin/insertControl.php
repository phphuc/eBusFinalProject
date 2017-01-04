<?php 
include_once "/home/s3568988/public_html/setting/config.php";
?>

<?php
$iImage=$iImg="";
	if(isset($_POST['submitItem'])){
		//echo $_POST['submitItem'];
		/*$iImage=$_FILES["iImg"]["name"];
		$iImageTmp=$_FILES["iImg"]["tmp_name"];
		move_uploaded_file($iImageTmp,"$phppath_s/page/mainpage/items/img/$iImage");*/
		
		$target_dir = "$url_s"."page/mainpage/items/img/";
$target_file = $target_dir . basename($_FILES["iImg"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
/*if ($_FILES["iImg"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
} */
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    echo "Sorry, only JPG, JPEG, PNG files are allowed.";
    $uploadOk = 0;
}
		
// Check if $uploadOk is set to 0 by an error
/*if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["iImg"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["iImg"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}*/
		/*$insertQuery="insert into item (I_Name,T_ID,I_Img,I_Price,I_Description) values ('".$_POST['iName']."','".$_POST['iType']."',".$target_file.",'".$_POST['iPrice']."','".$_POST['iDes']."')";
		echo $insertQuery; */
		move_uploaded_file($_FILES["iImg"]["tmp_name"], $target_file);
		$insertToDB=mysqli_query($connect5, "insert into item (I_Name,T_ID,I_Img,I_Price,I_Description) values ('".$_POST['iName']."','".$_POST['iType']."','".$target_file."','".$_POST['iPrice']."','".$_POST['iDes']."')");
		
		if($insertToDB) {
			/*if ($uploadOk == 0) {
    			if (move_uploaded_file($_FILES["iImg"]["tmp_name"], $target_file)) {*/
        				echo "New product has been inserted!";
						header('refresh:5; url=https://mekong1.rmit.edu.vn/~s3568988/page/mainpage/admin');
    					/*} else {
        				echo "Sorry, there was an error uploading your file.";
    					};
				};*/
		}
	}
?>