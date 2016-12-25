<?php
//Control Panel
	//0-None, 1-Use
	$mysqluse_s = 1; 
	$phplibraryuse_s = 1; 
	$gzipcompress_s = 1;
	$turnofferror_s = 0;
	$usesession_s = 1;

// Configuration
$q = "'";
$p = '"';
$url_s = "https://" . $_SERVER['SERVER_NAME']."/~s3568988/";
$urlc_s = "https://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$phppath_s = "/home/s3568988/public_html/";
$title_s = "RMIT TEMPLATE";
$sitename_s = "Dr. Stranger";
$copyright_s = "2016";



// Page Setting
$background_p_pre = $url_s."img/LoadPageStar.gif";
$background_p_fin = "https://www.wallpapereast.com/static/images/6840652-pattern-wallpaper.jpg";
$copyright_s = $sitename_s." ".$copyright_s;
// PHP FUNCTION
	// Connecting MySQL
	if ($mysqluse_s == 1){
		include_once $phppath_s."setting/mysql_config.php";
	}
	// PHP Library Include
	if ($phplibraryuse_s == 1){
		include_once $phppath_s."setting/php_library.php";
	}
	if ($gzipcompress_s == 1){
		if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start('ob_gzhandler'); else ob_start(); 	
	}
	if ($turnofferror_s == 1){
		error_reporting(0);	
	}
	if ($usesession_s == 1){
		session_start();
	}
?>