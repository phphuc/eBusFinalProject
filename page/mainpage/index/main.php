<?php
include_once "/home/s3568988/public_html/setting/config.php";

include_once "/home/s3568988/public_html/page/mainpage/index/controller/getItemController.php";
?>	

<div class="container">
  <div class="row">

            <div class="col-md-3">
                <p class="lead">Shop Name</p>
                <div class="list-group">
                    <?php
						$getCate=mysqli_query($connect5, "select * from type");
						while ($rowCate=mysqli_fetch_array($getCate)) {
							$CateId=$rowCate['T_Name'];	
						echo '<a href="#" class="list-group-item">'.$CateId.'</a>';
						}
					?>
                    <!--
                    <a href="#" class="list-group-item">Keyboard</a>
                    <a href="<?php echo $url_s."page/mainpage/items/cart_template.php"?>" class="list-group-item">Keycap</a>
                    <a href="#" class="list-group-item">Others</a>
                    -->
                    
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
                                    <img class="slide-image" src="https://mekong1.rmit.edu.vn/~s3568988/page/mainpage/items/img/keyboard/weaven3.jpg" alt="" width="100%" height="100%" style="">
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
                  <p>&nbsp;</p>
                  <p><br />
                  </p>
                  <hr />
                <div id="itemShow">
					<?php
						foreach ($items as $item){
							echo 
								'<div class="col-sm-4 col-lg-4 col-md-4">
									<div class="thumbnail" style="width:250px;height:300px">
										<div id="img" data-toggle="modal" data-target="#showItem" style="height:200px;width:auto">
										<img src="'.$item['I_Img'].'" alt="" class="img-responsive" style="max-height:200px;vertical-align:middle;display:inline-block;height:100%;">
										</div>
										<div class="caption">
										   <h4><a data-toggle="modal" href="#showItem'.$item['I_ID'].'">'.$item['I_Name'].'</a></h4>
										   <h4 class="pull-right col-md-4 col-sm-4 col-xs-6">'.$item['I_Price'].'</h4>
										</div>	
										
									
											
									</div>
								</div>
							<!-- Modal -->
  <div class="modal fade" id="showItem'.$item['I_ID'].'" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        	<div class="modal-header">
          			<button type="button" class="close" data-dismiss="modal">&times;</button>
          			<h4 class="modal-title">'.$item['I_Name'].'</h4>
        	</div>
       <div class="modal-body">
          	<div style="max-width:600px;max-height:400px;margin: 0 auto;">
          		<img class="img-responsive" src="'.$item['I_Img'].'"/>
          	</div>
          	<div>
          		<p>'.$item['I_Description'].'</p>
           </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
	 <!--End modal -->											

										
										
							';
						}
						
					?>
                </div> 

            </div>

        </div>

</div>

	<!-- Modal
  <div class="modal fade" id="showItem" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content
      <div class="modal-content">
        	<div class="modal-header">
          			<button type="button" class="close" data-dismiss="modal">&times;</button>
          			<h4 class="modal-title"><?php echo $item['I_Name'] ?></h4>
        	</div>
       <div class="modal-body">
          	<div style="max-width:600px;max-height:400px;margin: 0 auto;">
          		<img class="img-responsive" src="'.$item["I_Img"].'"/>
          	</div>
          	<div>
          		<p>'.$item['I_Description'].'</p>
           </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
	 End modal -->					

<!-- Just For Send -->

<!--<div class="ratings">
											<p class="pull-right">15 reviews</p>
											<p>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
											</p>
										</div>-->

