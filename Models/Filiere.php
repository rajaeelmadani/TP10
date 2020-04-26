<?php
class Filiere {
	private $codeF;
	private $intituleF;
 

	public function __construct ($codeF,$intituleF) {
		$this->setCodeF($codeF);
		$this->setIntituleF($intituleF); 
	}

	//setters
	public function setCodeF($codeF) {
		$this->CodeF =$codeF;
	}

	public function IntituleF($intituleF) {
		$this->intituleF=$intituleF;
	}
 

	//getters

	public function getCodeF () {
		return $this->codeF;
	}
 	public function getIntituleF () {
		return $this->intituleF;
	}
	
}