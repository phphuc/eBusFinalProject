<?php
include_once "/home/s3568988/public_html/setting/config.php";
include_once "/home/s3568988/public_html/setting/mysql_config.php";
?>	

<div class="container">
  <div class="row">

            <div class="col-md-3">
                <p class="lead">Shop Name</p>
                <div class="list-group">
                    <a href="#" class="list-group-item">Keyboard</a>
                    <a href="<?php echo $url_s."page/mainpage/item/cart_template.php"?>" class="list-group-item">Keycap</a>
                    <a href="#" class="list-group-item">Others</a>
                    
                </div>
            </div>

                        <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active" style="width:800px;height:300px">
                                    <img class="slide-image" src="https://mekong1.rmit.edu.vn/~s3568988/page/mainpage/items/img/keyboard/weaven3.jpg" alt="" width="800" height="300">
                                </div>
                                <div class="item" style="width:800px;height:300px">
                                    <img class="slide-image" src="https://mekong1.rmit.edu.vn/~s3568988/page/mainpage/items/img/keyboard/gon2.jpg" alt="" width="800" height="300">
                                </div>
                                <div class="item" style="width:800px;height:300px">
                            		<img class="slide-image" src="https://mekong1.rmit.edu.vn/~s3568988/page/mainpage/items/img/keycap/1976.jpg" alt="" width="800" height="300">
                                 </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">
<br />                
<?php
// SQL Select Item
// From This 
$connectDB = mysqli_query($connect5, "SELECT * FROM item");
$itemrow = mysqli_num_rows($connectDB);
if ($itemrow > 0){
	while ($detail = mysqli_fetch_array($connectDB)){
		$value[0] = $detail['I_Name'];
		$value[1] = $detail['I_Price'];
		$value[2] = $detail['I_Img'];
		$value[3] = $detail['Column GI do'];
		
		$thisdisplay = '<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="'.$value[2].'" alt="">
                            <div class="caption">
               	                <h4 class="pull-right">'.$value[1].'</h4>
                                <h4><a href="#">'.$value[0].'</a>
                                </h4>
                                
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>
';
	
		$finaldisplay += $thisdisplay;
	}
}else{
	$finaldisplay = "There is no item to get";	
}

echo $finaldisplay;	

/*To This
$numberOfItem = 1;

$display = '
<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$24.99</h4>
                                <h4><a href="#">First Product</a>
                                </h4>
                                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>


';

for($x = 0; $x < $numberOfItem; $x++){
echo $display; 	
}*/


?>
 <br />                   

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <h4><a href="#">Like this template?</a>
                        </h4>
                        <p>If you like this template, then check out <a target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this tutorial</a> on how to build a working review system for your online store!</p>
                        <a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">View Tutorial</a>
                    </div>

                </div>

            </div>

        </div>

</div>