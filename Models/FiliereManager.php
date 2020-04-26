<?php 
require_once('Filiere.php');
class FiliereManager { 
    private $cn;
    
    public function __construct() {
		
		$this->cn = PDOFactory::getCn();
	
	}
	
	
	private function getCn(){
		return $this->cn;
	}

 

public function getListeFilieres(){
	return $this->getCn()->query("select* from filiere")->fetchAll();
}

public function getDetailFiliere($code) {
	return $this->getCn()->query("select * from Filiere where CodeF='$code'")-> fetch();
}

function ajouter_Filiere(Filiere $filiere){
$Rq = "insert into filiere (CodeF,IntituleF) values ('" . $filiere->getCodeF() . "','" . $filiere->getIntituleF() . "')";
}

function modifier_Filiere($t){
	$this->getCn()->prepare("update Filiere set CodeF=?,IntituleF=? where CodeF=?")->execute($t);		
}

function supprimer_Filiere($c){
	 
	$req="delete from filiere where CodeF='".$c."'";
	return $this->getCn()->query($req);
 
	 }
}