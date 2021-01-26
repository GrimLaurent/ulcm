<?php 
	include "vue/vue_entete.php";
 ?>
<html>
<div id= "Corps">

<h2> Gestion des lycées </h2>
	<ul>
		<?php
		foreach ($lycees as $unlycees)
		{
			$id = $unlycees['idEtablissement'];
			$nom = $unlycees['nomEtablissement'];
			echo "<li><a href='index.php?section=modifierLycee&idChoix=$id' >$nom</a></li>";
		}
		foreach ($stCharles as $uneAdresse)
		{
			$id = $uneAdresse['idEtablissement'];
			$nom = $uneAdresse['nomEtablissement'];
			$pole = $uneAdresse['poleEtablissement'];
			echo "<li><a href='index.php?section=modifierLycee&idChoix=$id' >$nom $pole</a></li>";
		}

		?>
	</ul>
</div>
</body>

</html>

