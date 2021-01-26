<?php

//récupération des enseignement d'exploration
include_once ('modele/mod_ajoutExploration.php');
$lesThemes = get_Theme();
$lesLycee = get_Lycee();

if(isset($_GET['ajout']))
{
	$nom = $_POST['nom'];
	$theme = $_POST['theme'];
	$desc = $_POST['desc'];
	ajout_Explo($nom , $theme , $desc);
	
	$lyceeAssocie = array();
	foreach($_POST['Lycee'] as $valeur)
	{
		$lyceeAssocie[] = $valeur;
	}
	
	ajout_ExploLycee($lyceeAssocie);
	
	header("location:index.php?section=exploration&ajout=1");
} else {

	// affichage de  la    vue associée
	include_once('vue/vue_ajoutExploration.php');
}
?>