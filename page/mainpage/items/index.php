<?php
$sql="select * from item order by I_ID desc";
$query=mysql_query($sql);
if(mysql_num_rows($query) > 0)
{
 while($row=mysql_fetch_array($query))
 {
  echo "<div class='pro'>";
  echo "<h3>$row[title]</h3>";
  echo "Tac Gia: $row[author] - Gia: ".number_format($row[price],3)." VND<br />";
  echo "<p align='right'><a href='addcart.php?item=$row[id]'>Mua Sach Nay</a></p>";
  echo "</div>";
 }
}
?>


<?php
session_start();
$id=$_GET['item'];
if(isset($_SESSION['cart'][$id]))
{
 $qty = $_SESSION['cart'][$id] + 1;
}
else
{
 $qty=1;
}
$_SESSION['cart'][$id]=$qty;
header("location:cart.php");
exit();
?>