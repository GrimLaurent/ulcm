<?php
//récupération de l'identifiant formation passé en paramètre
$idFormationChoisi = $_GET["choixId"];
	
//Recuperation de la formation
include_once('modele/mod_detailFormation.php');

$uneFormation = get_detailFormation($idFormationChoisi);
//Recuperation des etablissements
$lesEtablissements = get_listeEtablissement($idFormationChoisi);


// affichage de  la    vue formation
include_once('vue/vue_detailFormation.php');	
	
?>