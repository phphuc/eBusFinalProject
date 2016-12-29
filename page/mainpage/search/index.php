<?php
include_once "/home/s3568988/public_html/setting/config.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include_once $phppath_s."page/mainpage/index/meta.php";
include_once $phppath_s."css/css.php";
include_once $phppath_s."js/js_top.php";

?>
<title>Homepage | <?php echo $title_s?></title>
</head>

<body>
<?php
include_once $phppath_s."page/navigation.php";
include_once $phppath_s."page/mainpage/search/do_search.php";
include_once $phppath_s."page/mainpage/index/footer.php";
include_once $phppath_s."js/js_bottom.php";
?>
</body>
</html>

<?php /*
//include_once $phppath_s."page/mainpage/search/do_search.php";
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
//if (isset($_GET["search"])) {
    $word = $_POST["search"];
    /* never trust what user wrote! We must ALWAYS sanitize user input
    $word = mysqli_real_escape_string($_GET['search']);
    $word = htmlentities($word); echo $word;
    // build your search query to the database
    $searchItem = mysqli_query($connect5,"SELECT I_Name FROM item WHERE I_Name LIKE '%" . $word . "%' ORDER BY I_Name");
	$rowSearch=mysqli_num_rows($searchItem);
	$result=array();
	$result[]=mysqli_fetch_assoc($searchItem);
    // get results
     
    if(count($rowSearch)>0) {
        
        foreach($result as $r) {
			
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
			
           /* 
			$result         = $r['title'];
            // we will use this to bold the search word in result
            $bold           = '<span class="found">' . $word . '</span>';    
            $end_result     .= '<li>' . str_ireplace($word, $bold, $result) . '</li>';            
        }
        
	} else {
        echo '<p>No results found</p>';
    }

?>
		</div>
	</div>
</div>*/
?>