<?php

function get_lien2ndSpe() 
{
	global $bdd;
           
    $req = $bdd->prepare("SELECT Site FROM formation,listeFormation WHERE idFormation= idFormationLF and idFormation=89");
	$req->execute();
    $unlien = $req->fetch();
        
    return $unlien;
}

?>