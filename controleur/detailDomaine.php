<?php
//récupération de l'identifiant domaine passé en paramètre
$idDomaineChoisi = $_GET["choixId"];
	
//récupération du nom du domaine	
include_once('modele/mod_detailDomaine.php');

$nomDomaine = get_nomDomaine($idDomaineChoisi); 

if ($idDomaineChoisi == 2) 
{
//Recuperation de toutes les formations du domaine General
$lesFormations = get_detailGeneral();

} else {
//Recuperation de toutes lesformations du domaine choisi
$lesFormations = get_detailDomaine($idDomaineChoisi);
}

// affichage de  la    vue domaine
include_once('vue/vue_detailDomaine.php');	
	
?>
	