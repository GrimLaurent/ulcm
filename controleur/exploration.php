<?php
//modèle qui permet de récupérer toutes les explorations
include_once "modele/mod_explorations.php";
$lesExplorations = get_lesExplorations();

//recuperation des themes d'explorations
$lesThemes = get_Themes();

// vue qui afiche toutes les explorations
include_once "vue/vue_explorations.php";


				
?>