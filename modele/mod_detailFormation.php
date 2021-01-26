<?php

function get_detailFormation($idFormation) 
{
	global $bdd;
           
    $req = $bdd->prepare("SELECT nomFormation, DescFormation, nomEtablissement, site FROM formation,listeFormation,Etablissement WHERE idEtablissement = idEtablissementLF
	and idFormation= idFormationLF and idFormation=" . $idFormation ."");
	$req->execute();
    $uneFormations = $req->fetch();
        
    return $uneFormations;
}

function get_listeEtablissement($idFormation) 
{
	global $bdd;
           
    $req = $bdd->prepare("SELECT nomEtablissement, site FROM Etablissement,listeFormation WHERE idEtablissement = idEtablissementLF and idFormationLF=" . $idFormation ."");
	$req->execute();
    $lesEtablissements = $req->fetchAll();
        
    return $lesEtablissements;
}

?>