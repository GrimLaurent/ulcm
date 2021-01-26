<?php
function get_infosLycee($id)
{
	global $bdd;
           
    $req = $bdd->prepare("SELECT * FROM etablissement where idEtablissement= " . $id . ";");
	$req->execute();
    $lesInfos = $req->fetch();
        
    return $lesInfos;
}
?>