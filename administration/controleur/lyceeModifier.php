<?php
//récupération des champs pour la modification

$num = $_POST['txtNum'];
$site = $_POST['txtSite'];
$mail1 = $_POST['txtMail1'];
$mail2 = $_POST['txtMail2'];
$id = $_POST['txtId'];


//module pour mettre à jour le lycée
include_once"modele/mod_lyceeModifier.php";
set_modifLycee($num,$site,$mail1,$mail2,$id);

//vue après la mise à jour
header("location:index.php?section=lycee");
?>