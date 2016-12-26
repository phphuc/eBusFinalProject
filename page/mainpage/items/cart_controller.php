
<?php
session_start();
include('config.php');

if(isset($_GET['do'])){ // check request from page forms
	$action = $_GET['do'];
	//Array ( [quantity] => 1 [item_number] => 2 [item_name] => pant [item_price] => 38 ) Array ( [do] => add ) 
	switch($action){
	case"add":
	// code of adding new items to the order
	// first get item details in variables
		$I_ID = mysql_real_escape_string($_POST['I_ID']);
		$I_Name = mysql_real_escape_string($_POST['I_Name']);
		$I_Price = mysql_real_escape_string($_POST['I_Price']);	
		$I_Description = mysql_real_escape_string($_POST['I_Description']);
			
		// check if there is an existing order from the session where we save session id 
		if(!isset($_SESSION['O_ID'])) 
		{ // if there isn't an order, make new order in orders table and save its id in session array
			
			$today = date('Y-m-d : h-i-s');
			$sql_order = "INSERT INTO order (date) VALUES ('$today')";
			$result = mysqli_query($connection,$sql_order) or die(mysqli_error($connection));
			$O_ID = mysqli_insert_id($connection);
			$_SESSION['O_ID'] = $O_ID;
			
		}
		else 
		{
			//if there is an order , count items in order has the same type of added item
			$O_ID = $_SESSION['O_ID'];
			$sql_item_quantity = "select count(*) as Qty  from ordered_item where O_ID =$O_ID and I_ID = $I_ID";
			$result = mysqli_query($connection,$sql_item_quantity)or die(mysqli_error($connection));
			$row = mysqli_fetch_assoc($result);

		    $item_quantity = $row['Qty'];//$result->fetch_assoc()['quantity'];//$row[0];

			
		}
		//now we will add the new item <br>
		// if there is one or more from this item we only update the record of existed item .add one to the quantity and add an item price to the existing cost 
		if( intval($item_quantity) >= 1 ){
			$sql_add_item = "Update ordered_item set Qty=Qty+1 , Total_Price = Total_Price + $I_Price";
			
		}else{ 
		// there is no items in the same type .so,we make a new record to add the item
			$sql_add_item = "INSERT INTO ordered_item (O_ID,I_ID,I_Name,Qty,Total_Price ) VALUES ($O_ID,$I_ID,'$I_Name',$Qty,$Total_Price)";
			
		}
		$result = mysqli_query($connection,$sql_add_item) or die(mysqli_error($connection));
		if($result){
			$msg = "item was add";
		}else{
			$msg = "Cannot add item";
		}			
	break;	
	case"delete":
	// Code of deleting a spesific items details from order 
		$I_ID = intval($_GET['I_ID']);
		$O_ID = $_SESSION['O_ID'];
		$sql_item_delete = "DELETE FROM ordered_item where O_ID = $O_ID and I_ID = $I_ID ";
		$result = mysqli_query($connection,$sql_item_delete)or die(mysqli_error($connection).'-'. $sql_item_delete);
		if($result){
			$msg = "item was deleted";
		}else{
			$msg = "Cannot delete item";
		}	
		
	break;
	case"delete_all":
	// Code of deleting all items from order 
		$O_ID = $_SESSION['O_ID'];
		$sql_item_delete = "DELETE FROM ordered_item where O_ID = $O_ID ";
		$result = mysqli_query($connection,$sql_item_delete)or die(mysqli_error($connection));
		if($result){
			$msg = "Cart is empty";
		}else{
			$msg = "Cannot empty cart";
		}		
	break;
	case"add_one":
	//  Code of increasing the quantity of an item by one 
		$I_ID = intval($_GET['I_ID']);
		$O_ID = $_SESSION['O_ID'];
		$sql_add_item = "Update ordered_item set Qty=Qty+1 , Total_Price = ( Total_Price /( Qty - 1) ) * Qty where I_ID =$I_ID";
		$result = mysqli_query($connection,$sql_add_item)or die(mysqli_error($connection).'-'. $sql_item_delete);
		if($result){
			$msg = "item was added";
		}else{
			$msg = "Cannot add item";
		}	
	
	break;
	case"remove_one":
	//  Code of decreasing the quantity of an item by one 	
		$I_ID = intval($_GET['I_ID']);
		$O_ID = $_SESSION['O_ID'];
		$sql_remove_item = "Update ordered_item set Qty=Qty-1 , Total_Price = ( Total_Price /( Qty + 1) ) * Qty where I_ID =$I_ID";
		$result = mysqli_query($connection,$sql_remove_item)or die(mysqli_error($connection).'-'. $sql_item_delete);
		if($result){
			$msg = "item was removed";
		}else{
			$msg = "Cannot remove item";
		}		
		break;
			
		
	}	
	
}

if(isset($_SESSION['O_ID'])){
	// getting the saved items in the existing order
	$O_ID = mysql_real_escape_string($_SESSION['O_ID']) ;
	$sql_get_order_items = "select * from ordered_item where O_ID =$O_ID ";
	$cart_data = mysqli_query($connection,$sql_get_order_items)or die(mysqli_error($connection));
	$items_number = mysqli_num_rows($cart_data);
	
} 

// get the view code from template file
include("cart_template.php");

?>




