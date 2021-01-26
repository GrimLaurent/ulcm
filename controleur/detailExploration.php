<?php
//récupération de l'id de l'option choisie
$idChoix = $_GET['idChoisi'];

//requête pour récupérer les détails de l'option
include_once "modele/mod_detailExploration.php";
$lexplo = get_lexplo($idChoix);
$leslycees = get_lycees($idChoix);

//vue qui affiche les détails de l'option choisie
include_once "vue/vue_detailExploration.php";
?>