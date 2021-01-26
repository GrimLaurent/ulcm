<?php
//récupération de l'identifiant domaine passé en paramètre
$idNiveauChoisi = $_GET["choixId"];
	
//récupération du nom du domaine	
include_once('modele/mod_detailNiveau.php');

$nomNiveau = get_nomNiveau($idNiveauChoisi); 

if ($idNiveauChoisi == 7) 
{
//Recuperation de toutes les formations du domaine General
$lesFormations = get_detailGeneral();

} else {
//Recuperation de toutes lesformations du domaine choisi
$lesFormations = get_detailNiveau($idNiveauChoisi);
}

// affichage de  la    vue domaine
include_once('vue/vue_detailNiveau.php');	
	
?>
	