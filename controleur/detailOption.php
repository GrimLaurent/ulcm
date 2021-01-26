<?php
//récupération de l'id de l'option choisie
$idChoix = $_GET['idChoisi'];

//requête pour récupérer les détails de l'option
include_once"modele/mod_detailOption.php";
$loption = get_loption($idChoix);
$leslycees = get_leslycees($idChoix);

//vue qui affiche les détails de l'option choisie
include_once"vue/vue_detailOption.php";
?>