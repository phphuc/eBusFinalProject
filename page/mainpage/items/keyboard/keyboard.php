<?php
include_once "/home/s3568988/public_html/setting/config.php";
?>

<div id="itemShow">
					<?php
						foreach ($items as $item){
							echo 
								'<div class="col-sm-4 col-lg-4 col-md-4">
									<div class="thumbnail" style="width:250px;height:300px">
										<div id="img" data-toggle="modal" data-target="#showItem" style="height:200px;width:auto">
										<img src="'.$item['kb_Img'].'" alt="" class="img-responsive" style="max-height:200px;vertical-align:middle;display:inline-block;height:100%;">
										</div>
										<div class="caption">
										   <h4 data-toggle="modal" data-target="#showItem"><a href="#">'.$item['kb_Name'].'</a></h4>
										   <h4 class="pull-right col-md-4 col-sm-4 col-xs-6">'.$item['kb_Price'].'</h4>
											
											

										</div>
</div>
								</div>
							';
						}
		
					?>