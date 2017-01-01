<?php
include_once "/home/s3568988/public_html/setting/config.php";

include_once "/home/s3568988/public_html/page/mainpage/index/controller/getItemController.php";
?>	


<div class="container">
	<div class="row">
    	
        <div class="col-md-3">
        	<p class="lead">Shop Name</p>
           <div class="list-group">
            	<a href="<?php echo $url_s."page/mainpage/admin/index.php?insertItem" ?>" class="list-group-item">INSERT ITEM</a>
              <a href="<?php echo $url_s."page/mainpage/admin/index.php?manageItem" ?>" class="list-group-item">MANAGE ITEM</a>
           </div>
        </div>
        
        <div class="col-md-9">
        	<?php if(isset($_GET['insertItem'])){
				include_once $phppath_s."page/mainpage/admin/insertItem.php";	
			}; 
			if (isset($_GET['manageItem'])) {
				include $phppath_s."page/mainpage/admin/manageItem.php";
			}; 
			?>
           
        </div>
    
    
    </div>
</div>