<?php
include_once "/home/s3568988/public_html/setting/config.php";
?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="<?php echo $url_s."index.php"?>"><?php echo $sitename_s ?></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo $url_s."index.php"?>">Home</a></li>
        
        <li><a href="<?php echo $url_s."page/mainpage/about/" ?>">About Us</a></li> 
        <!--<li><a href="#">Page 3</a></li>--> 
      </ul>
      
      <!-- search bar -->
      <form class="navbar-form " style="position:absolute; left:40%;" method="post" action="<?php echo $url_s."page/mainpage/search/"?>">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search" id="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
    
   
    <!-- login, sign up -->
    <?php 
	if (!empty($_SESSION['id'])){
		echo '<ul class="nav navbar-nav navbar-right">
        <li><a href="'.$url_s.'page/mainpage/profile/"><span class="glyphicon glyphicon-user"></span> Welcome '.$_SESSION['email'].'!</a></li>
		<li><a href="'.$url_s.'page/mainpage/login/controller/logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
		<li><a href="'.$url_s.'page/mainpage/shopping_cart/list.php"><span class="glyphicon glyphicon-shopping-cart"></span>Your Cart</a></li>
      </ul>';
	}else{
		echo '<ul class="nav navbar-nav navbar-right">
        <li><a href="'.$url_s.'page/mainpage/register/"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
        <li><a href="'.$url_s.'page/mainpage/login/"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
		<li><a href="'.$url_s.'page/mainpage/shopping_cart/list.php"><span class="glyphicon glyphicon-shopping-cart"></span>Your Cart</a></li>
		<li></li>
      </ul>';	
	}
	?>
    
      
    </div>
  </div>
</nav>
