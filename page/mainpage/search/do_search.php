<?php
include_once "/home/s3568988/public_html/setting/config.php";
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
						echo '<a href="'.$url_s.'page/mainpage/index/cateItem.php?type='.$rowCate['T_ID'].'" class="list-group-item">'.$CateId.'</a>';
						}
					?>
                </div>
            </div>
            
            <div class="col-md-9">
            <?php if(!isset($_SESSION['cart']) or empty($_SESSION['cart'])){
	echo "<div class='alert alert-danger'>Nothing in cart</div>"; 
	 }
	 else{
		 $total=0;
		 foreach($_SESSION['cart'] as $value){
			 $total += $value['quantity'];
			 
			 }
		echo "<div class='alert alert-danger'>You have: $total item.</div>";	  
		 }
		 ?>

<?php
//if we got something through $_POST
if (isset($_POST["search"])) {
    $word = $_POST["search"];
    //never trust what user wrote! We must ALWAYS sanitize user input
    $word = mysqli_real_escape_string($connect5, $_POST['search']);
    $word = htmlentities($word);
    // build your search query to the database
    $searchItem = mysqli_query($connect5,"SELECT * FROM item WHERE I_Name LIKE '%" . $word . "%' ORDER BY I_Name");
	//$rowSearch=mysqli_num_rows($searchItem);
	$result=array();
	
    // get results
     
    if(mysqli_num_rows($searchItem)>0) {
        
        while ($rows=mysqli_fetch_assoc($searchItem)) {
			
			$result[] = $rows;	    };		
		
		foreach ($result as $r){
			echo 
								'<div class="col-sm-4 col-lg-4 col-md-4">
									<div class="thumbnail" style="width:250px;height:300px">
										<div id="img" data-toggle="modal" data-target="#showItem" style="height:200px;width:auto">
										<img src="'.$r['I_Img'].'" alt="" class="img-responsive" style="max-height:200px;vertical-align:middle;display:inline-block;height:100%;" data-toggle="modal" data-target="#showItem'.$r['I_ID'].'">
										</div>
										<div class="caption">
										   <h4><a data-toggle="modal" href="#showItem'.$r['I_ID'].'">'.$r['I_Name'].'</a></h4>
										   <h4 class="pull-right col-md-4 col-sm-4 col-xs-6">'.$r['I_Price'].'</h4>
										   <h3><a href="'.$url_s.'page/mainpage/shopping_cart/insert.php?id='.$r['I_ID'].'" style="color:red;font-weight:bold">Add to cart</a></h3>
			</div>
			</div>
			</div>';
        };
		foreach ($result as $r) { echo '
					<!-- Modal -->
<div class="modal fade" id="showItem'.$r['I_ID'].'" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        	<div class="modal-header">
          			<button type="button" class="close" data-dismiss="modal">&times;</button>
          			<h4 class="modal-title">'.$r['I_Name'].'</h4>
        	</div>
			
       		<div class="modal-body">
          		<div>
          			<img class="img-responsive" src="'.$r['I_Img'].'"/>
          		</div>
          		<div>
          			<p>'.$r['I_Description'].'</p>
           	</div>
        	</div>
		
        	<div class="modal-footer">
          		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        	</div>
		</div>
    </div>
</div>
	 <!--End modal -->';};
					
		
	} else {
        echo '<p>No results found</p>';
    }
}
?>
		</div>
	</div>
</div>