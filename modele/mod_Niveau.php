<?php
function get_niveau()
{
	global $bdd;
           
    $req = $bdd->prepare("SELECT * FROM niveau where ordre != 0 order by ordre");
	$req->execute();
    $niveau = $req->fetchAll();
        
    return $niveau;
}


?>