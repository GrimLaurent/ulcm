<?php
function get_contact() 
{
	global $bdd;
           
    $req = $bdd->prepare("SELECT * FROM etablissement where nomEtablissement not like '%st Charles Ste Croix%'");
	$req->execute();
    $lesEtats = $req->fetchAll();
        
    return $lesEtats;
}

function get_stCharles()
{
	global $bdd;
           
    $req = $bdd->prepare("SELECT * FROM etablissement where nomEtablissement like '%st Charles Ste Croix%'");
	$req->execute();
    $lesEtats = $req->fetchAll();
        
    return $lesEtats;
}
?>