<html>
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  
<style type="text/css">
h2{
	text-align:center;
	color:#8f72cc;
}
#div1{
padding:100px;	  
  background: #ebe6e6; 
   padding-left:400px;
	}
.form-control{
	width:500px;
}
</style>
</head>
<body>
 
<h2>Modifier Etudiant</h2>


<form action="" method="POST" >
<input type="hidden" name="Code" value="<?= isset($_POST["Code"])?$_POST["Code"]:$etudiant["CodeE"]?>"/>

<div id="div1">
 
 
<td>Entrer le CodeE:</td>
<input type="text"  name="Code" value="<?= isset($_POST["Code"])?$_POST["Code"]:$etudiant["CodeE"]?>" class="form-control"></br></br>
 
<td>Entrer le nom:</td>
<input type="text"  name="NomE" value="<?= isset($_POST["NomE"])?$_POST["NomE"]:$etudiant["Nom"]?>" class="form-control"></br></br>
<td>Entrer le prenom :</td>
<input type="text"  name="PrenomE" value="<?= isset($_POST["PrenomE"])?$_POST["PrenomE"]:$etudiant["Prenom"]?>" class="form-control" ></br></br>
 
<select name="FiliereE" value = "<?= isset($_POST["FiliereE"])?$_POST["FiliereE"]:$etudiant["Filiere"]?>">
 <option value="SMI" selected>Science mathematique et informatique</option>
 <option value="SMP">Science mathematique et physique</option>
 <option value="SMC">Science mathematique et chimie</option>
 <option value="SMA">Science mathematique et application </option>
	
</select></br></br>
 
<input type="text" name="NoteE" value="<?= isset($_POST["NoteE"])?$_POST["NoteE"]:$etudiant["Note"]?>" class="form-control" ></br></br>

<input type = "submit" value ="Modifier" name="Modifier">  
  <input type = "reset" value ="Annuler"/>
</div>
</form>

<body>
</html>