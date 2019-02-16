<?php
//load assets file

if(Router::get("main") == "assets"){
	$path = Router::get("path");
	
	Loader::Asset($path);
}
