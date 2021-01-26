<?php
//Recuperation de tous les domaines
include_once('modele/mod_accueil.php');

$lesDomaines = get_domaine();


// affichage de  la    vue associée
include_once('vue/vue_accueil.php');

?>