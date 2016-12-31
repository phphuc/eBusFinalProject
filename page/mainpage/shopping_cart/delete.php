<?php
include_once "/home/s3568988/public_html/setting/config.php";
?>

<?php
$id = $_GET['id'];
unset($_SESSION['cart'][$id]);
header("location:list.php");
?>