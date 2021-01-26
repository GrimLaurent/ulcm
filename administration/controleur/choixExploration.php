<?php

//récupération des enseignement d'exploration
include_once ('modele/mod_choixExploration.php');
$lesExplorations = get_explo();

// affichage de  la    vue associée
include_once('vue/vue_choixExploration.php');
?>