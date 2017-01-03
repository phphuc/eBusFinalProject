<?php
include_once "/home/s3568988/public_html/setting/config.php";
include_once "/home/s3568988/public_html/page/mainpage/index/controller/getItemController.php";
?>

	<div class="col-md-12">
	<table class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Image</th>
		<th>Price</th>
		<th>Edit</th>
		<th>Delete</th>
      </tr>
    </thead>
    <tbody>
<?php	
	$i=0;
	foreach ($items as $item) {
		$i++;
      echo 
	  '<tr>
        <td>'.$i.'</td>
        <td>'.$item['I_Name'].'</td>
        <td><img src="'.$item['I_Img'].'" width="60" height="60"/></td>
		 <td>'.$item['I_Price'].'</td>
		 <td><a href="'.$url_s.'page/mainpage/admin/index.php?editItem='.$item['I_ID'].'">Edit</a></td>
		 <td><a href="'.$url_s.'page/mainpage/admin/index.php?deleteItem">Delete</a></td>
      </tr>';
	}; 
?>    
    </tbody>
  </table>
  </div>
?>