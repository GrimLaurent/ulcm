<?php
//requête pour récupérer des informations sur l'option
function get_loption($idChoix)
{	global $bdd;
    $req = $bdd->prepare("SELECT nomOption, descOption FROM `option` WHERE idOption=" . $idChoix ."");
	$req->execute();
    $loption = $req->fetch();
        
    return $loption;
}

function get_leslycees($idChoix)
{	global $bdd;
    $req = $bdd->prepare("SELECT nomEtablissement, site FROM listeoption LO, etablissement E WHERE E.idEtablissement=LO.idEtablissement AND idOption=" . $idChoix ."");
	$req->execute();
    $loption = $req->fetchAll();
        
    return $loption;
}
?>