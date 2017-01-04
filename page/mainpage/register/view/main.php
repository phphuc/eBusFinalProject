<?php
include_once "/home/s3568988/public_html/setting/config.php";
?>



<div class="container">
  <h1>Register</h1>
  <form class="col-md-6 col-md-offset-3 col-sm-12 col-lg-4 col-lg-offset-4" action="<?php echo $url_s."page/mainpage/register/controller/registercontroller.php"?>" method="post">
  
    <div class="form-group">
      <label for="email">Email address:</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="pwd">
    </div>
    <div class="form-group">
      <label for="repwd">Re-type password:</label>
      <input type="password" class="form-control" id="repwd" name="repwd">
    </div>
    <div class="form-group">
      <label for="Cname">Full Name:</label>
      <input type="text" class="form-control" id="Cname" name="Cname">
    </div>
    <div class="form-group">
      <label for="dob">Date of birth:</label>
      <input type="date" class="form-control" id="dob" name="dob">
    </div>
    <div class="form-group">
      <label for="phone">Phone number:</label>
      <input type="text" class="form-control" id="phone" name="phone">
    </div>
    <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" class="form-control" id="address" name="address">
    </div>
    <!-- check box remember me
    <div class="checkbox">
      <label>
        <input type="checkbox">
        Remember me</label>
    </div>
    -->
    <button type="submit" class="btn btn-success"  >Submit</button>
  </form>
</div>
