<?php
function set_modifLycee($num,$site,$mail1,$mail2, $id)
{
	global $bdd;
           
    $req = $bdd->prepare("UPDATE etablissement
	set numeroEtablissement='$num', siteEtablissement='$site', email1='$mail1', email2='$mail2'
	where idEtablissement='" . $id . "'");
	$req->execute();
}

?>