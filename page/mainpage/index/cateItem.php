<?php include_once "/home/s3568988/public_html/setting/config.php"; ?>
<?php
// SQL Select Item
if(isset($_GET['type'])){

$getCateItemFromDb = mysqli_query($connect5, "SELECT * FROM item where T_ID='".$_GET['type']."'");
$items1 = array();
if (mysqli_num_rows($getCateItemFromDb) > 0){
	while($row1 = mysqli_fetch_assoc($getItemFromDb)){
			$items1[] = $row1;
			};
	foreach ($items1 as $item1){
			echo 
								'<div class="col-sm-4 col-lg-4 col-md-4">
									<div class="thumbnail" style="width:250px;height:300px">
										<div id="img" data-toggle="modal" data-target="#showItem" style="height:200px;width:auto">
										<img src="'.$item1['I_Img'].'" alt="" class="img-responsive" style="max-height:200px;vertical-align:middle;display:inline-block;height:100%;" data-toggle="modal" data-target="#showItem'.$item1['I_ID'].'">
										</div>
										<div class="caption">
										   <h4><a data-toggle="modal" href="#showItem'.$item1['I_ID'].'">'.$item1['I_Name'].'</a></h4>
										   <h4 class="pull-right col-md-4 col-sm-4 col-xs-6">'.$item1['I_Price'].'</h4>
			</div>
			</div>
			</div>';
        };
		foreach ($items1 as $item1) { echo '
					<!-- Modal -->
<div class="modal fade" id="showItem'.$item1['I_ID'].'" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        	<div class="modal-header">
          			<button type="button" class="close" data-dismiss="modal">&times;</button>
          			<h4 class="modal-title">'.$item1['I_Name'].'</h4>
        	</div>
			
       		<div class="modal-body">
          		<div>
          			<img class="img-responsive" src="'.$item1['I_Img'].'"/>
          		</div>
          		<div>
          			<p>'.$item1['I_Description'].'</p>
           	</div>
        	</div>
		
        	<div class="modal-footer">
          		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        	</div>
		</div>
    </div>
</div>
	 <!--End modal -->';};
			
} else {echo '<h3>There is no item of this type';};
}
?>