<?php
include_once "/home/s3568988/public_html/setting/config.php";
?>

<div class="container">
  <h1>Log In</h1>
  <form class="col-md-6 col-md-offset-3 col-sm-12 col-lg-4 col-lg-offset-4" action="<?php echo $url_s."page/mainpage/login/controller/logincontrol.php"?>" method="post">
  <div class="form-group">
      <label for="email">Email address:</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="pwd">
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox">
        Remember me</label>
    </div>
     
    <button type="submit" class="btn btn-success" >Login</button>
    <div class="">
      <label>
        <h4><a href="https://mekong1.rmit.edu.vn/~s3568988/page/mainpage/register/" style="color:black;text-decoration:underline;">Do not have account, register now</a></h4>
    </div>
  </form>
 </div>