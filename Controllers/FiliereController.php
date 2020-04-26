<?php
require_once 'Library\BaseController.php';
require_once 'Library\Page.php';
require_once 'Library\Response.php';
require_once 'Models/FiliereManager.php';

class FiliereController extends BaseController {   
    private $manager;
	
	public function __construct(){
		parent::__construct();
		$this->manager = new FiliereManager();
	}
 
	public function Liste() {
		$filieres= $this->manager->getListeFilieres();
		
		$this->page->setView("Views/Filiere/vListeFiliere.php");
		$this->page->addData("filieres",$filieres);
		$response= new Response();
		$response->send($this->page);
	}
	public function supprimer(){
		$filiere= $this->manager->supprimer_Filiere($_GET['CodeF']);
		 header ("location: index.php?module=Filiere&action=liste");
		 
	} 
	public function modifier(){ 
		$this->page->setView("Views/Filiere/vModifierFiliere.php");
		
		$filiere= $this->manager->getDetailFiliere($_GET['CodeF']);
		$this->page->addData("filiere",$filiere); 
         $response= new Response();
		$response->send($this->page);
	}
	 public function inserer(){
		 
		$this->page->setView("Views/Filiere/vformAjouterFiliere.php");
		$response= new Response();
		$response->send($this->page); 
		if($_SERVER["REQUEST_METHOD"]=="POST"){
		$filiere= $this->manager->ajouter_Filiere($filiere);
	    
		 header ("location: index.php?module=Filiere&action=liste");
		}
	} 
}