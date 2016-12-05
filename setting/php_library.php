<?php
include_once "/home/s3568988/public_html/setting/config.php";
?>
<?php
function regexCheck($regexPattern, $string){
	return (preg_match($regexPattern,$string)?true:false);
}

function redirectURL ($redirectInSecond, $toURL){
	return header( "refresh:".$redirectInSecond.";url=".$toURL."" );	
}
function debugToConsole( $data ) {
// IN Test
    if ( is_array( $data ) )
        $output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
    else
        $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";

    //echo $output;
}
?>
<?php
//Regex Library
$regexMail = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$regexPassword = "";

?>