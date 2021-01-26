<?php
// modèle pour récupérer le lien de la 2nd spécifique hôtelerie et restauration
include_once "modele/mod_2ndGT.php";

$unlien = get_lien2ndSpe();

//vue pour récupérer la seconde générale
include_once "vue/vue_2ndGT.php";


?>