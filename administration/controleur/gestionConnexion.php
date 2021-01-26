<?php
//test de $cnxAdh pour voir s'il s'agit d'une connexion ou d'une d�connexion

if ($cnxAdh=='v')
{
//il s'agit d'une demande de connexion 

	//on r�cup�re les �l�ments de la vue seConnecter 
	$login=$_POST['login'];
	$mdp=$_POST['mdp'];
	
	//on fait appel � la fonction de v�rification de ces infos dans la contr�leur appli
		
	include_once('modele/mod_appli.php');
	
	$user = get_user($login,$mdp);
	
	//et on teste pour savoir si l'adh�rent a �t� trouv� ou non 
	if ($user['idUser'] != "")
	//l'adh�rent est trouv� ; on peut garder en m�moire ses identifiant ,nom et pr�nom
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
	//il s'agit d'une d�connexion 
	$_SESSION = array();
	session_destroy();
	//pour l'instant : RAS
	header("location:index.php");
}

