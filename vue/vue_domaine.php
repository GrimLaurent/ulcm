<?php 
	include "vue/vue_entete.php";
	include "vue/vue_menuGauche.php";
 ?>
<html>
<div id= "Corps">
		<BR/><BR/><BR/> <H1>Les Domaines </H1><BR/><BR/><BR/>
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
