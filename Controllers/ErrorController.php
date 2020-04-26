<?php

/*
require_once 'Library\BaseController.php';
require_once 'Library\Page.php';
require_once 'Library\Response.php';

*/

class ErrorController extends BaseController {

	private $exception;
  
	public function __construct(Exception $e){
		parent::__construct();
		
		$this->exception=$e;
	}
		
		
	public function Error() {		
		$this->page->setView("Views/Error/vError.php");
		$this->page->addData("message",$this->exception->getMessage());
		$response= new Response();
		$response->send($this->page);		
	}
	
		
}
