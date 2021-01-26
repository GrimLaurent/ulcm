<?php 
	include "vue/vue_entete.php";
	include "vue/vue_menuGauche.php";
 ?>
<html>
<div id= "Corps">
portail ULCM


<br>
<br>
Video avec tout les domaines : <br><br>
<!--<img src='vue/video/domaine/Principal.png'/>-->

<object id="player1" type="application/x-shockwave-flash" data="http://localhost/site_ulcm/vue/video/player_flv_maxi.swf"> 
	<param name="movie" value="http://localhost/site_ulcm/vue/video/player_flv_maxi.swf" /> 
	<param name="allowFullScreen" value="true" /> 
	<param name="FlashVars" value="configxml=http://localhost/site_ulcm/vue/video/filmintulcm.xml" /> 
</object> 




<br><br><br>
<H2>Les Domaines </H2><BR><BR><BR>
<table align='center'>
<?php
$i = 0;
foreach($lesDomaines as $unDomaine)
{
	if ($i == 0 or $i == 4)
	{
		echo "<tr>";
	}
					
	$wIdDomaine=$unDomaine['idDomaine'];
	$wNomDomaine=$unDomaine['nomDomaine'];
	$wimageDomaine=$unDomaine['imgDomaine'];
					
	echo "<td><a href='index.php?section=detailDomaine&choixId=$wIdDomaine'> ";
	echo "<img src='vue/image/domaine/". $wimageDomaine . "'/><br>$wNomDomaine <a></td>";
										
				
	if ($i == 3 or $i== 7)
	{
		echo "</tr>";
	} 
	$i = $i +1;
			
}
?>
</table>
</div>
</body>

</html>


