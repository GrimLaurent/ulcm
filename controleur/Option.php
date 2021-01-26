<?php
//modèle qui permet de récupérer toutes les options
include_once "modele/mod_options.php";
$lesOptions = get_lesOptions();

//recuperation des themes d'options
$lesThemes = get_lesThemes();

// vue qui afiche toutes les options
include_once "vue/vue_options.php";


				
?>