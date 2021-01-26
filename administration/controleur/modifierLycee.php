<?php
//récupération de l'id du lycée choisi
$idChoix = $_GET['idChoix'];

// module pour avoir les informations qui concernent le lycées
include_once"modele/mod_modifierLycee.php";
$lesInfos = get_infosLycee($idChoix);

// vue qui affiche le formulaire pour modifier le lycée choisi
include_once"vue/vue_modifierLycee.php";

?>