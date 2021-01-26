<?php
//test de $cnxAdh pour voir s'il s'agit d'une connexion ou d'une déconnexion

if ($cnxAdh=='v')
{
//il s'agit d'une demande de connexion 

	//on récupère les éléments de la vue seConnecter 
	$login=$_POST['login'];
	$mdp=$_POST['mdp'];
	
	//on fait appel à la fonction de vérification de ces infos dans la contrôleur appli
		
	include_once('modele/mod_appli.php');
	
	$user = get_user($login,$mdp);
	
	//et on teste pour savoir si l'adhérent a été trouvé ou non 
	if ($user['idUser'] != "")
	//l'adhérent est trouvé ; on peut garder en mémoire ses identifiant ,nom et prénom
	{
		$_SESSION['validiteConnexion'] = true;
		header ("location:index.php?section=accueil"); 
	}
	else
	{
		$_SESSION['validiteConnexion'] = false;
		header("location:index.php");
	}
	
}
else
{
	//il s'agit d'une déconnexion 
	$_SESSION = array();
	session_destroy();
	//pour l'instant : RAS
	header("location:index.php");
}

