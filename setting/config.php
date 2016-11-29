<?php
//Control Panel
	//0-None, 1-Use
	$mysqluse_s = 0; 
	$phplibraryuse_s = 1; 
	$gzipcompress_s = 1;
	$turnofferror_s = 1;
	$usesession_s = 1;

// Configuration
$q = "'";
$p = '"';
$url_s = "https://" . $_SERVER['SERVER_NAME']."/~s3568988/";
$urlc_s = "https://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$phppath_s = "/home/s3568988/public_html/";
$title_s = "RMIT TEMPLATE";
$sitename_s = "WebMaster <span style='font-size: 12px;position: absolute;margin-left: 95px;margin-top: -23px;'>&reg;</span>";

// Page Setting
$background_p_pre = $url_s."img/LoadPageStar.gif";
$background_p_fin = "https://www.wallpapereast.com/static/images/6840652-pattern-wallpaper.jpg";
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