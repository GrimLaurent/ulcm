<?php 
	include "vue/vue_entete.php";
	include "vue/vue_menuGauche.php";
 ?>
<html>
<div id= "Corps">
<H1>Les Explorations </H1>
<ul>
<?php
	  
foreach ($lesThemes as $unTheme)
{
	echo "<br>";
	echo $unTheme['nomTheme'] ;
	foreach($lesExplorations as $uneExploration)
	{
		if ($uneExploration['nomTheme'] == $unTheme['nomTheme'])
		{
			$wIdExploration=$uneExploration['idExploration'];
			$wNomExploration=$uneExploration['nomExploration'];
			// lien à modifier
			echo"  <li><A href='index.php?section=detailExploration&idChoisi=$wIdExploration'> $wNomExploration </A></li>";
		}								
	}
	
}
?>
</ul>

</div>
</body>

</html>
