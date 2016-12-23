<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <!-- compatitbility meta -->
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <!--  Mobile meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Your items</title>
  <link rel="stylesheet" href="<a href="css/style.css">css/style.css</a>">
  </head>
  
  <body>
  <h1>Demo Shopping Cart</h1>
<div id='cart'>
<?php
$ok=1;
 if(isset($_SESSION['cart']))
 {
  foreach($_SESSION['cart'] as $k=>$v)
  {
   if(isset($v))
   {
   $ok=2;
   }
  }
 }
 if ($ok != 2)
  {
  echo '<p>You do not have any items in your shopping cart</p>';
 } else {
  $items = $_SESSION['cart'];
  echo '<p>You have <a href="cart.php">'.count($items).' items in your shopping cart</a></p>';
 }
?>
</div>
<?php

mysql_select_db("shop",$connect5);
$sql="select * from books order by id desc";
$query=mysql_query($sql);
if(mysql_num_rows($query) > 0)
{
 while($row=mysql_fetch_array($query))
 {
  echo "<div class=pro>";
  echo "<h3>$row[title]</h3>";
  echo "Tac Gia: $row[author] - Gia: ".number_format($row[price],3)." VND<br />";
  echo "<p align='right'><a href='addcart.php?item=$row[id]'>Mua Sach Nay</a></p>";
  echo "</div>";
 }
}
   
?>
  
 </body>
  