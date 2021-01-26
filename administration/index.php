<?php
session_start();
include_once('modele/connexionBDD.php');

if (!isset($_SESSION['validiteConnexion']))
{
	$_SESSION['validiteConnexion'] = False;
}

if (!isset($_GET['section']) OR $_GET['section'] == 'index')
{
    include_once('controleur/seConnecter.php');
}

else
{
	if($_GET['section']== 'verifConnexion')
	{
		$cnxAdh='v';
		include_once('controleur/gestionConnexion.php');
	}
	
	if($_GET['section']== 'deconnexion')
	{
		include_once('controleur/gestionConnexion.php');
	}
	
	if($_GET['section']== 'accueil')
	{
		include_once('controleur/accueil.php');
	}
	
	if($_GET['section']== 'exploration')
	{
		include_once('controleur/choixExploration.php');
	}
	
	if($_GET['section']== 'ajoutExplo')
	{
		include_once('controleur/ajoutExploration.php');
	}
	
	if($_GET['section']== 'modifExplo')
	{
		include_once('controleur/modifExploration.php');
	}
	
	if($_GET['section']== 'lycee')
	{
		include_once('controleur/lycee.php');
	}

	if($_GET['section']== 'modifierLycee')
	{
		include_once('controleur/modifierLycee.php');
	}
	
	if($_GET['section']== 'lyceeModifier')
	{
		include_once('controleur/lyceeModifier.php');
	}

}
?>

