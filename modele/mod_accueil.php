<?php
function get_domaine()
{
	    global $bdd;
           
    $req = $bdd->prepare("SELECT idDomaine,nomDomaine,imgDomaine FROM domaine where idDomaine != 9");
	$req->execute();
    $domaines = $req->fetchAll();
        
    return $domaines;
}


?>