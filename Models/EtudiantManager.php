<?php
//require_once ("Etudiant.php");
class EtudiantManager {
    /** Objet PDO d'accès à la BD */
    private $cn;
    
    public function __construct() {
		
		$this->cn = PDOFactory::getCn();
	
	}
	
	
	private function getCn(){
		return $this->cn;
	}

	public function Ajouter(Etudiant $etudiant) {
		
	$Rq = "insert into etudiant (Nom,Prenom) values ('" . $etudiant->getNom() . "','" . $etudiant->getPrenom() . "')";
	$resultat = $this->getCn()->exec($Rq);
	}

	public function getEtudiant($code) {	
		return $this->getCn()->query("select * from Etudiant where CodeE='" . $code ."'")->fetch();		
	}

	public function getListe() {		
		return $this->getCn()->query("select * from etudiant")->fetchAll();		
	}
   function getListeEtudiants($f=NULL){
	$clauseWhere= empty($f)? " ": " where Filiere = '$f' ";
	return $this->getCn()->query("select* from etudiant " . $clauseWhere)->fetchAll();
    }
	public function modifier(Etudiant $etudiant) {			
  
	 return $this->getCn()->exec("update etudiant set CodeE='".$etudiant->getCode()."', Nom='".$etudiant->getNomE() ."', Prenom='".$etudiant->getPrenomE() ."',Filiere='" .$etudiant->getFiliereE() ."',Note='".$etudiant->getNoteE()."' where CodeE='".$etudiant->getCode()."'");
  
}	
 

  	public function Supprimer($code) {		
			 
	$req="delete from etudiant where CodeE='".$code."'";
	return $this->getCn()->query($req);

	}  

	
}