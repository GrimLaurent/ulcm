<?php


//Recuperation de tous les domaines
include_once('modele/mod_domaine.php');

$lesDomaines = get_domaine();


// affichage de  la    vue domaine
include_once('vue/vue_domaine.php');
?>