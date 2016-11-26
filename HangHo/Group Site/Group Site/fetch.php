<?php
$newconn=mysql_connect("mekong.rmit.edu.vn", "s3461938", "11010100001011") or
    die("Could not connect: " . mysql_error());
mysql_select_db("mydb");

$result = mysql_query("SELECT Pr_Imange FROM s3461938.PRODUCTS");


while ($row = mysql_fetch_array($result, MYSQL_NUM))
	{
	$x=0;
	printf('<img src="');
	printf($row[$x]);
	printf('"/>');
	printf('<br/>');
	$x++;
}

mysql_free_result($result);
mysql_close($newconn);
?>