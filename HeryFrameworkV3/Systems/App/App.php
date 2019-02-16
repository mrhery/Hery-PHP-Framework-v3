<?php
require_once(dirname(__DIR__) . "/Misc/document_access.php");

class App{
	public function __construct($name = DEF_NAME){
		define("NAME", $name);
		
		$page = new Page();
		$page->title = "Hery - " . NAME;
		
		switch(Router::get("main")){
			case "index":
				
				$page->loadPage("index");
				$page->Render();
			break;
			
			case "test":
				$page->loadPage("test");
				$page->Render();
			break;
		}
		
		
	}
}

?>