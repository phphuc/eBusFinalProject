<?php
include_once "/home/s3568988/public_html/setting/config.php";

include_once "/home/s3568988/public_html/page/mainpage/index/controller/getItemController.php";
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

                <div id="itemShow">
					<?php
						foreach ($items as $item){
							echo 
								'<div class="col-sm-4 col-lg-4 col-md-4">
									<div class="thumbnail">
										<img src="'.$item['I_Img'].'" alt="">
										<div class="caption">
										   <h4 class="pull-right">'.$value['I_Price'].'</h4>
											<h4><a href="#">'.$value['I_Name'].'</a>
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
						}
						unset(items);
					?>
                </div>

            </div>

        </div>

</div>
<!-- Just For Send -->