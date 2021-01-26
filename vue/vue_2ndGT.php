<?php 
	include "vue/vue_entete.php";
	include "vue/vue_menuGauche.php";
	$lien = $unlien['Site'];
 ?>
<html>
<div id= "Corps">
<h1>Présentation de la seconde générale</h1>
<p> texte du lycée</p>

<h3>Les différentes secondes</h3>
<a href="index.php?section=Exploration" title="Exploration">Exploration</a>
<br>
<a href="index.php?section=Option" title="Otions facultatives">Options facultatives</a>
<br>
<?php
echo "<a href=".$lien.">Seconde spécifique hôtellerie et restauration</a>";
?>
</div>
</body>

</html>
