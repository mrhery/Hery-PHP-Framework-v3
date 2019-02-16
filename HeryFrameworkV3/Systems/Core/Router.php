<?php

class Router{
	public static function get($type){
		$arr = explode("/", ROUTE);
		
		if(count($arr) > 0){
			switch($type){
				case "main":
					return (isset($arr[0]) && !empty($arr[0])) ? $arr[0] : "index";
				break;
				
				case "sub":
					return isset($arr[1]) ? $arr[1] : false;
				break;
				
				case "view":
					return isset($arr[2]) ? $arr[2] : false;
				break;
				
				case "path":
					array_shift($arr);
					return implode("/", $arr);
				break;
				
				default:
					return isset($arr[$type]) ? $arr[$type] : "";
				break;
			}
		}else{
			return "index";
		}
	}
	
	
	public static function pathToAsset(){
		$a = explode("/", ROUTE);
		$n = count($a);
		
		$path = "";
		for($i = 0; $i < ($n - 1); $i++){
			$path .= "../";
		}
		
		return $path;
	}
}

?>