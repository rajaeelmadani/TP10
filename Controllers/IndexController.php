<?php

/*
require_once 'Library\BaseController.php';
require_once 'Library\Page.php';
require_once 'Library\Response.php';

*/

class IndexController extends BaseController {   
  //private $manager;
  //private $page;
	
	public function __construct(){
		parent::__construct();
		//$this->manager = new EtudiantManager();
		//$this->page = new Page();
	}
		
	//actions
	
	public function Index() {		
		$this->page->setView("Views/Index/vIndex.php");
		$response= new Response();
		$response->send($this->page);
	}
	
		
}
