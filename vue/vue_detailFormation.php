<?php 
	include "vue/vue_entete.php";
	include "vue/vue_menuGauche.php";
 ?>
<html>
<div id= "Corps">
<?php
echo "<BR/><u>" . $wNomFormation=$uneFormation['nomFormation'] . "</u><BR/><br>";
echo $uneFormation['DescFormation']	;
echo "<br><br>";
echo "Liste des lycées proposant cette formation : <br>";
foreach ($lesEtablissements as $unEtablissement) {
echo "<a href=".$unEtablissement['site'].">" .  $unEtablissement['nomEtablissement'] . "</a>";
echo "<br>";
}
?>

</div>
</body>

</html>