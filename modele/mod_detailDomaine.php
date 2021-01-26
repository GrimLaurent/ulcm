<?php

function get_nomDomaine($idDomaine) 
{
	global $bdd;
           
    $req = $bdd->prepare("SELECT nomDomaine,videoDomaine FROM domaine WHERE idDomaine=" . $idDomaine ."");
	$req->execute();
    $leDomaine = $req->fetch();
        
    return $leDomaine;
}

function get_detailDomaine($idDomaine) 
{
	global $bdd;
           
    $req = $bdd->prepare("SELECT idFormation,nomFormation,site,videoDomaine FROM formation,listeFormation,domaine WHERE idDomaine=idDomaineFormation and idFormation=idFormationLF and idDomaineFormation=" . $idDomaine ."");
	$req->execute();
    $lesFormations = $req->fetchAll();
        
    return $lesFormations;
}

function get_detailGeneral() 
{
	global $bdd;
           
    $req = $bdd->prepare("SELECT idFormation,nomFormation,videoDomaine FROM formation,domaine WHERE idDomaine=idDomaineFormation and idDomaineFormation=2");
	$req->execute();
    $lesFormationsGeneral = $req->fetchAll();
        
    return $lesFormationsGeneral;
}

?>