<h1>Modifier filière</h1>
 

<form name = "myForm" action = "" method = "post">

<pre> 
<input type="hidden" name="oldCode" value="<?= isset($_POST["oldCode"])?$_POST["oldCode"]:$filiere["CodeF"]?>"/>
Entrez le code de la filière:              
<input type="text" name="CodeF" value="<?= isset($_POST["CodeF"])?$_POST["CodeF"]:$filiere["CodeF"]?>"/>  

Entrez l'intitulé:
<input  type="text"  name="Intitule" size = "50" value="<?= isset($_POST["Intitule"])?$_POST["Intitule"]:$filiere["IntituleF"]?>" />  
<input  type = 'submit'  value =  'Envoyer'> <input  type = 'reset'  value =  'Annuler'>
</pre>
</form>