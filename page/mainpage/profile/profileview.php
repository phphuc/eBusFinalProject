<?php
include_once "/home/s3568988/public_html/setting/config.php";
?>


<?php
$getUserFromDb = mysqli_query($connect5, "SELECT * FROM customer where I_ID='".$_SESSION['id']."'");
$user = array();
if (mysqli_num_rows($getUserFromDb) > 0){
	while($row = mysqli_fetch_assoc($getUserFromDb))
	{
		$user[] = $row;
	}
}

?>


<div class="container">
  <h1>User profile</h1>
  <form class="col-md-6 col-md-offset-3 col-sm-12 col-lg-4 col-lg-offset-4" action="<?php echo $url_s."page/mainpage/profile/profilecontroller.php"?>" method="post">
  
    <div class="form-group">
      <label for="email">Email address:</label>
      <input type="email" class="form-control" id="email1" name="email1" value="<?php echo $user['C_Email'] ?>">
    </div>
    <div class="form-group">
      <label for="Cname">Full Name:</label>
      <input type="text" class="form-control" id="Cname1" name="Cname1" value="<?php echo $user['C_name'] ?>">
    </div>
    <div class="form-group">
      <label for="dob">Date of birth:</label>
      <input type="date" class="form-control" id="dob1" name="dob1" value="<?php echo $user['C_DOB'] ?>">
    </div>
    <div class="form-group">
      <label for="phone">Phone number:</label>
      <input type="text" class="form-control" id="phone1" name="phone1" value="<?php echo $user['C_Phone_no'] ?>">
    </div>
    <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" class="form-control" id="address1" name="address1" value="<?php echo $user['C_Address'] ?>">
    </div>
    <button type="submit" class="btn btn-success"  >Save change</button>
    <button type="reset" class="btn btn-danger"  >Cancel</button>
    
   
  </form>
</div>
