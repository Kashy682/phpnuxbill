<?php

$protocol = (!empty($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] !== "off" || $_SERVER["SERVER_PORT"] == 443) ? "https://" : "http://";
$host = $_SERVER["HTTP_HOST"];
$baseDir = rtrim(dirname($_SERVER["SCRIPT_NAME"]), "/\\");
define("APP_URL", $protocol . $host . $baseDir);

// Live, Dev, Demo
$_app_stage = "Live";

// Database PHPNuxBill
$db_host	    = "sql201.infinityfree.com";
$db_user        = "if0_38648052";
$db_pass    	= "iCLNWNvkfo9atTB";
$db_name	    = "if0_38648052_netbill";

// Database Radius
$radius_host	    = "sql201.infinityfree.com";
$radius_user        = "if0_38648052";
$radius_pass    	= "iCLNWNvkfo9atTB";
$radius_name	    = "if0_38648052_netbill";

if($_app_stage!="Live"){
    error_reporting(E_ERROR);
    ini_set("display_errors", 1);
    ini_set("display_startup_errors", 1);
}else{
    error_reporting(E_ERROR);
    ini_set("display_errors", 0);
    ini_set("display_startup_errors", 0);
}
