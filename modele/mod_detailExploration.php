<?php
//requête pour récupérer des informations sur l'option
function get_lexplo($idChoix)
{	global $bdd;
    $req = $bdd->prepare("SELECT nomExploration, descExplo FROM exploration WHERE idExploration=" . $idChoix ."");
	$req->execute();
    $explo = $req->fetch();
        
    return $explo;
}

function get_lycees($idChoix)
{	global $bdd;
    $req = $bdd->prepare("SELECT nomEtablissement, site FROM listeexploration LO, etablissement E WHERE E.idEtablissement=LO.idEtablissement AND idExploration=" . $idChoix ."");
	$req->execute();
    $lesLycees = $req->fetchAll();
        
    return $lesLycees;
}
?>