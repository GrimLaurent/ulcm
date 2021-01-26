<?php

function get_user($log,$mdp)
//on cherche l'utilisateur pouvant correspondre à la connexion 
{
    global $bdd;
           
    $req = $bdd->prepare("SELECT * FROM user where loginUser='$log' and mdpUser='$mdp'");
	$req->execute();
    $user = $req->fetch();
        
    return $user;
}

?>