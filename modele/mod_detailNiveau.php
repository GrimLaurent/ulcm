<?php

function get_nomNiveau($idNiveau) 
{
	global $bdd;
           
    $req = $bdd->prepare("SELECT nomNiveau,descNiveau FROM niveau WHERE idNiveau=" . $idNiveau ."");
	$req->execute();
    $leNiveau = $req->fetch();
        
    return $leNiveau;
}

function get_detailNiveau($idNiveau) 
{
	global $bdd;
           
    $req = $bdd->prepare("SELECT idFormation,nomFormation,site,nomEtablissement FROM formation,listeFormation,etablissement WHERE idEtablissement=idEtablissementLF and idFormation=idFormationLF and idNiveauFormation=" . $idNiveau ."");
	$req->execute();
    $lesFormations = $req->fetchAll();
        
    return $lesFormations;
}

function get_detailGeneral() 
{
	global $bdd;
           
    $req = $bdd->prepare("SELECT idFormation,nomFormation FROM formation WHERE idNiveauFormation=7");
	$req->execute();
    $lesFormationsGeneral = $req->fetchAll();
        
    return $lesFormationsGeneral;
}

?>