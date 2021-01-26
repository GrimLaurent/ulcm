<?php 
	include "vue/vue_entete.php";
	include "vue/vue_menuGauche.php";
 ?>
<html>
<div id= "Corps">
<br><br>
<?php
echo "Les Formations du niveau " . $nomNiveau['nomNiveau'];
echo "<br>" . $nomNiveau['descNiveau']
?>

<ul>
	 
<?php
if ($idNiveauChoisi == 7)  
{
	foreach($lesFormations as $uneFormation)
	{	
		$wIdFormation=$uneFormation['idFormation'];
		$wNomFormation=$uneFormation['nomFormation'];
					
		echo"  <li><A href='index.php?section=detailFormation&choixId=$wIdFormation'> $wNomFormation </A></li>";
										
	}
} else {
	foreach($lesFormations as $uneFormation)
	{	
		$wIdFormation=$uneFormation['idFormation'];
		$wNomFormation=$uneFormation['nomFormation'];
		$wNomEtablissement=$uneFormation['nomEtablissement'];
		$wSiteFormation=$uneFormation['site'];
		
		if ($idNiveauChoisi == 9 or $idNiveauChoisi == 11) 
		{
			echo "<li><A href=$wSiteFormation> $wNomEtablissement </A></li>";
		} else {
			echo "<li><A href=$wSiteFormation> $wNomFormation </A></li>";
		}
	}
}
?>
</ul>

</div>
</body>

</html>