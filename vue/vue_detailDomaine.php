<?php 
	include "vue/vue_entete.php";
	include "vue/vue_menuGauche.php";
 ?>
<html>
<div id= "Corps">
<br><br>
<?php
echo "Les Formations du domaine " . $nomDomaine['nomDomaine'];
echo "<br<br>";
echo "<br><img src='vue/video/domaine/".$nomDomaine['videoDomaine'] . "'/>";
?>

<ul>
	 
<?php
if ($idDomaineChoisi == 2)  
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
		$wSiteFormation=$uneFormation['site'];
					
		echo"  <li><A href=$wSiteFormation> $wNomFormation </A></li>";
										
	}
}
?>
</ul>

</div>
</body>

</html>