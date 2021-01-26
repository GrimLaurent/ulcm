<?php
	//récupération des établissement
	include_once ('modele/mod_contact.php');
	$lesEtablissements = get_contact();
	$stCharles = get_stCharles();
	
	
	//affichage du tout
	include ('vue/vue_contact.php');
	
	

?>