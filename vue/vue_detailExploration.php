<?php 
	include "vue/vue_entete.php";
	include "vue/vue_menuGauche.php";
 ?>
<html>
<div id= "Corps">
<H1>
	Enseignement d'exploration <?php echo $lexplo['nomExploration'] ;?>
</H1>
	<?php echo $lexplo['descExplo'] ;?>
	
<h3>Le ou les établissements</h3>

<?php
	foreach ($leslycees as $unEtablissement)
	{
		$nom = $unEtablissement['nomEtablissement'];
		$site = $unEtablissement['site'];
		echo "<a href=$site>$nom</a><br>";
	}

?>

</div>
</body>

</html>
