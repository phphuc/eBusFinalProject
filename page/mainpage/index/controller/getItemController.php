<?php include_once "/home/s3568988/public_html/setting/config.php"; ?>
<?php
// SQL Select Item
$getItemFromDb = mysqli_query($connect5, "SELECT * FROM item");
$items = array();
if (mysqli_num_rows($getItemFromDb) > 0){
	while($row = mysqli_fetch_assoc($items))
	{
		$items[] = $row;
	}
}
/*
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

// For send
?>