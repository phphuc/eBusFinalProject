<?php
include_once "/home/s3568988/public_html/setting/config.php";
?>
<?php
function regexCheck($regexPattern, $string){
	return (preg_match($regexPattern,$string)?true:false);
}
?>
<?php
//Regex Library
$regexMail = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$regexPassword = "";

?>