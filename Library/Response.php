<?php

class Response {
        
    public function send(Page $page) {
		die($page->genererPage());		
	}
	
	public function redirect($location) {
			header('Location: '.$location);
            exit;		
	}
	
	
}
