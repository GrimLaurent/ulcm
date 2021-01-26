<?php
//Recuperation de tous les niveaux
include_once('modele/mod_Niveau.php');

$lesNiveaux = get_niveau();


// affichage de  la    vue domaine
include_once('vue/vue_niveau.php');
?>