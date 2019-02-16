<?php
require_once(__DIR__ . "/Misc/document_access.php");
require_once(__DIR__ . "/Misc/autoload.php");
session_start();

###################################################
###################DO NOT EDIT BELOW###############
###################################################
/*#*/ define("SYSTEM", __DIR__ . "/");	   		  #
/*#*/ define("VIEW", SYSTEM . "App/View/");		  #
/*#*/ define("PAGES", VIEW . "pages/");    		  #
/*#*/ define("ASSET", SYSTEM . "Assets/"); 		  #
/*#*/ define("UPLOAD", ASSET . "medias/"); 		  #
/*#*/ define("CLASSES", SYSTEM . "App/Classes/"); #
/*#*/ define("ROUTE", Input::get("route")); 	  #
/*#*/ define("DEF_NAME", "Developed with HPF");	  #
###################################################

#Load Misc File & Addon
require_once(__DIR__ . "/Misc/session.php");
require_once(__DIR__ . "/Misc/asset_loader.php");

#Database Configuration
require_once(__DIR__ . "/configure.php");

#Web Application
require_once(__DIR__ . "/App/App.php");
?>