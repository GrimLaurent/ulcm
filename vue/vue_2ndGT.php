<?php 
	include "vue/vue_entete.php";
	include "vue/vue_menuGauche.php";
	$lien = $unlien['Site'];
 ?>
<html>
<div id= "Corps">
<h1>Pr�sentation de la seconde g�n�rale</h1>
<p> texte du lyc�e</p>

<h3>Les diff�rentes secondes</h3>
<a href="index.php?section=Exploration" title="Exploration">Exploration</a>
<br>
<a href="index.php?section=Option" title="Otions facultatives">Options facultatives</a>
<br>
<?php
echo "<a href=".$lien.">Seconde sp�cifique h�tellerie et restauration</a>";
?>
</div>
</body>

</html>
