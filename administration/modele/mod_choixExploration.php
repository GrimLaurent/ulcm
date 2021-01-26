<?php

function get_Explo() 
{
	global $bdd;
           
    $req = $bdd->prepare("SELECT * FROM exploration");
	$req->execute();
    $exploration = $req->fetchAll();
        
    return $exploration;
}
?>