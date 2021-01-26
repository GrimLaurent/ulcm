<?php
//module pour récupérer les lycée
include_once"modele/mod_lycee.php";
$lycees = get_contact();
$stCharles = get_stCharles();

//vue qui affiche les liens qui pour modifier un lycées
include_once"vue/vue_lycee.php";

?>