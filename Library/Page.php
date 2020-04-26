<?php

class Page {
    private $view;
	private $data = array();
	
	
	public function setView($view) {
		$this->view = $view;	
	}
	
	public function addData($var,$val) {
		$this->data[$var] = $val;	
	}
	
    
    public function genererPage() {	
		if (file_exists($this->view)) {            
            extract($this->data);
            ob_start();
            require $this->view;
            $view= ob_get_clean();
			
			ob_start();
			require  ("Views/templates/template1.php");
			$output= ob_get_clean();
			
			return $output;
			
        }
        else {
            throw new Exception("Vue '". $this->view . "' introuvable");
        }
	
	}
		
}
