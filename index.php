<?php 

//autochargement des classes,

function __autoload($class_name){

$paths= array("Library/","Models/","Controllers/");

foreach($paths as $path){
	if(file_exists($path . $class_name . ".php")){
		require_once($path . $class_name . ".php"); 
	}
}


}
 
try{
	session_start();
	
	//Routeur...
	$Module = isset($_GET["module"])? ucFirst($_GET["module"]) : "Index";
	$action = isset($_GET["action"])? $_GET["action"] : "index";
	
	$Controller= $Module."Controller";
 
	
	if(file_exists("Controllers/".$Controller.".php")) {
		require_once ("Controllers/".$Controller.".php");		
		$controller = new $Controller();
		 
		if (method_exists($controller,$action)) {
			$controller->$action($_REQUEST);
			 
		}
		else
			throw new Exception("Cette action n'est pas autorisée");
	}
	else
		throw new Exception("Ce module n'est pas pris en charge!...");
	
		
}
catch(Exception $e) {
	$controller=new ErrorController($e);
	$controller->Error($e);	
}
