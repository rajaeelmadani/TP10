<?php
require_once 'Library\Page.php';
require_once 'Library\Response.php';


abstract class BaseController {   
    protected $page;
	
	public function __construct(){
		$this->page = new Page();
	}
}
		