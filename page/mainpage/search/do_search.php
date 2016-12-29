<?php
include_once "/home/s3568988/public_html/setting/config.php";
?>

<div class="container">
  <div class="row">

            <div class="col-md-3">
                <p class="lead">Shop Name</p>
                <div class="list-group">
                    <a href="#" class="list-group-item">Keyboard</a>
                    <a href="<?php echo $url_s."page/mainpage/items/cart_template.php"?>" class="list-group-item">Keycap</a>
                    <a href="#" class="list-group-item">Others</a>
                    
                </div>
            </div>
            
            <div class="col-md-9">

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
										<img src="'.$r['I_Img'].'" alt="" class="img-responsive" style="max-height:200px;vertical-align:middle;display:inline-block;height:100%;">
										</div>
										<div class="caption">
										   <h4 data-toggle="modal" data-target="#showItem"><a href="#">'.$r['I_Name'].'</a></h4>
										   <h4 class="pull-right col-md-4 col-sm-4 col-xs-6">'.$r['I_Price'].'</h4>
			</div>
			</div>';
        };
		
	} else {
        echo '<p>No results found</p>';
    }
}
?>
		</div>
	</div>
</div>