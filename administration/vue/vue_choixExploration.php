<?php 
	include "vue/vue_entete.php";
 ?>
<html>
<div id= "Corps">

<?php
if (isset($_GET['ajout'])) {
echo "ajout bien effectué";
}
?>

<h3><a href='index.php?section=ajoutExplo'> Ajouter un enseignement d'exploration </a></h3>
<h3> Mettre à jour un enseignement d'exploration: </h3>

<ul>
<?php
foreach ($lesExplorations as $explo)
{
	$id = $explo['idExploration'] ;
	echo "<li><a href=index.php?section=modifExplo&idchoix=$id>" . $explo['nomExploration'] . "</a></li>";
}

?>
</ul>
</div>
</body>

</html>


