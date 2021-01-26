<?php 
	include "vue/vue_entete.php";
	include "vue/vue_menuGauche.php";
 ?>
<html>
<div id= "Corps">
<H1>Les Options </H1>
<ul>
<?php
	  
foreach ($lesThemes as $unTheme)
{
echo "<br>";
echo $unTheme['nomTheme'] ;
	foreach($lesOptions as $uneOption)
	{
		if ($uneOption['nomTheme'] == $unTheme['nomTheme'])
		{
			$wIdOption=$uneOption['idOption'];
			$wNomOption=$uneOption['nomOption'];
			// lien à modifier
			echo"  <li><A href='index.php'> $wNomOption </A></li>";
		}								
	}
	
}
?>
</ul>

</div>
</body>

</html>
