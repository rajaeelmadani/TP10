<h1>Détail de l'étudiant: </h1>

<hr />
 
<b> Code :    <?= $etudiant["CodeE"]    ?>  </b><br />
<b> Nom :     <?= $etudiant["Nom"]     ?>  </b><br />
<b> Prénom :  <?= $etudiant["Prenom"]  ?>  </b><br />
<b> Filière : <?= $etudiant["Filiere"] ?>  </b><br />
<b> Note :    <?= $etudiant["Note"]    ?>  </b><br />
<div align="right">
<a href ="index.php?module=Etudiant&action=modifier&CodeE=<?= $etudiant["CodeE"]?>">Modifier un étudiant</a> |
<a href ="index.php?module=Etudiant&action=supprimer&CodeE=<?= $etudiant["CodeE"]?>">Supprimer un étudiant</a>

</div>
