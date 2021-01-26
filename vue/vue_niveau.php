<?php 
	include "vue/vue_entete.php";
	include "vue/vue_menuGauche.php";
 ?>
<html>
<div id= "Corps">
		<BR/><BR/><BR/> <H1>Les Niveaux </H1><BR/><BR/><BR/>
		<ul>
	  <?php
			foreach($lesNiveaux as $unNiveau)
				{	
					$wIdNiveau=$unNiveau['idNiveau'];
					$wNomNiveau=$unNiveau['nomNiveau'];
					
					if ($wIdNiveau != 2) {
						echo "<li><A href='index.php?section=detailNiveau&choixId=$wIdNiveau'> $wNomNiveau </A></li>";
					} else 
						echo "<li><A href='index.php?section=2ndGT'> $wNomNiveau </A></li>";
						
				}
		?>
		</ul>

</div>
</body>

</html>
