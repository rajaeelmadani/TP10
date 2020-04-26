<?php
require_once 'Library\BaseController.php';
require_once 'Library\Page.php';
require_once 'Library\Response.php';
require_once 'Models/EtudiantManager.php';

class EtudiantController extends BaseController {   
    private $manager;
	
	public function __construct(){
		parent::__construct();
		$this->manager = new EtudiantManager();
	}
		
	//actions
	
		
	public function Liste() {
		$etudiants= $this->manager->getListe();
		
		$this->page->setView("Views/Etudiant/vListe.php");
		$this->page->addData("etudiants",$etudiants);
		$response= new Response();
		$response->send($this->page);
	}
	
	public function Detail() {
		
		$etudiant= $this->manager->getEtudiant($_GET["CodeE"]);		
		
		$this->page->setView("Views/Etudiant/vDetail.php");
		$this->page->addData("etudiant",$etudiant);
		$response= new Response();
		$response->send($this->page);
	}
	
	public function Modifier() { 	
		
		$this->page->setView("Views/Etudiant/vModifier.php");
		
	 	$etudiant= $this->manager->getEtudiant($_GET["CodeE"]);	
		$this->page->addData("etudiant",$etudiant);
		$response= new Response();
		$response->send($this->page);
		// $modifier= $this->manager->Modifier($etudiant);	 
	   if ($_SERVER["REQUEST_METHOD"]=="POST") {
	  $etudiant= $this->manager->modifier($etudiant);		
	 header("location:index.php?module=Etudiant&&action=detail&&code=".$etudiant["CodeE"]);
	  }	
	 
	}
	
	public function supprimer() {	
	  $etudiant= $this->manager->Supprimer($_GET["CodeE"]);		
	header("location:index.php?module=Etudiant&&action=liste");
	  	  
	}	
	
}
