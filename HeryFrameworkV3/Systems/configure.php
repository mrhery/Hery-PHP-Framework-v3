<?php
#Load Misc File & Addon
require_once(__DIR__ . "/Misc/document_access.php");
require_once(__DIR__ . "/Misc/autoload.php");
require_once(__DIR__ . "/Misc/session.php");

#Database connection information.
#Has been tested and developed on MySQL
class Config{
	public static $host 	= "127.0.0.1";
	public static $database	= "";
	public static $username	= "";
	public static $password	= "";
}

#Put 1 to enable show error or otherwise put 0.
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

#Put your website URL
define("PORTAL", "https://web-url-here.com/");
?>