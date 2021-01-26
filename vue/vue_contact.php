<?php 
	include "vue/vue_entete.php";
	include "vue/vue_menuGauche.php";

	
?>

<html>
<div id= "Corps">
<BR/><BR/><BR/> <H1>Les Etablissements de L'ULCM </H1><BR/><BR/><BR/>
<table>
<?php
$i = 0;
foreach($lesEtablissements as $unEtablissement)
{
			
	if ($i ==0 or $i ==2 )
	{
		echo "<tr>";
	}
			
	$wNomEtat=$unEtablissement['nomEtablissement'];
	$wlogoEtat= "<img src='vue/image/logo/". $unEtablissement['logoEtablissement'] . "' width = '150px'/>";
	$wAdresseEtat=$unEtablissement['adresseEtablissement'];
	$wvilleEtat=$unEtablissement['ville'];
	$wCodePoEtat=$unEtablissement['codePostal'];
	$wTelEtat=$unEtablissement['numeroEtablissement'];	
	$wsiteEtat=$unEtablissement['siteEtablissement'];
					
					
	echo "<td> $wlogoEtat </td>";		
	echo "<td width = '20'></td>";
	echo "<td width = '400'><h2>$wNomEtat</h2>";
	echo "$wAdresseEtat <br> $wCodePoEtat  $wvilleEtat<br>";
	echo "Num&eacute;ro de t&eacute;l&eacute;phone: $wTelEtat<br>";
	echo "<a href=$wsiteEtat>site</a><br><br></td>";
	echo "<td width = '20'></td>";
			
			
	if ($i == 1 or $i== 3)
	{
		echo "</tr>";
	} 
	$i = $i +1;		
}
		

echo "</table> <br><br> <table>";		
echo "<tr><td colspan = '5' align = 'center'><h2>Etablissement St Charles Ste Croix</h2></td></tr>" ;
echo "<tr>";
$i=1;
foreach($stCharles as $pole)
{
			
	$wPoleEtat=$pole['poleEtablissement'];
	$wlogoEtat="<img src='vue/image/logo/". $pole['logoEtablissement'] . "' width = '150px'/>";
	$wAdresseEtat=$pole['adresseEtablissement'];
	$wvilleEtat=$pole['ville'];
	$wCodePoEtat=$pole['codePostal'];
	$wTelEtat=$pole['numeroEtablissement'];	
	$wsiteEtat=$pole['siteEtablissement'];
					
	if ($i == 1)
	{
		echo "<td> $wlogoEtat </td>";		
		echo "<td width = '20'></td>";
		$i = $i + 1;
	}
	echo "<td width='400'><h2>$wPoleEtat</h2>";
	echo "$wAdresseEtat <br> $wCodePoEtat  $wvilleEtat<br>";
	echo "Num&eacute;ro de t&eacute;l&eacute;phone: $wTelEtat<br>";
	echo "<a href=$wsiteEtat>site</a><br><br></td>";
	echo "<td width='20'></td>";
			
}
echo "</tr>";
?>
</table>

</div>
</body>

</html>