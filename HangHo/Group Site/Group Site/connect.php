<?php
$newconn=mysql_connect("mekong.rmit.edu.vn", "s3461938", "11010100001011") or
    die("Could not connect: " . mysql_error());
mysql_select_db("mydb");

$result = mysql_query("SELECT Pr_Imange FROM s3461938.PRODUCTS");
?>