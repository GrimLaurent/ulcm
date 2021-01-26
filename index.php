<?php

include_once('modele/connexionBDD.php');


if (!isset($_GET['section']) OR $_GET['section'] == 'index')
{
    include_once('controleur/accueil.php');
}

else
{
	if($_GET['section']== 'domaine')
	{
		include_once('controleur/domaine.php');
	}
	if($_GET['section'] == 'detailDomaine')
	{
		include_once('controleur/detailDomaine.php');
	}
	
	if($_GET['section'] == 'detailFormation')
	{
		include_once('controleur/detailFormation.php');
	}
	
	if($_GET['section'] == 'niveau')
	{
		include_once('controleur/niveau.php');
	}
	
	if($_GET['section'] == '2ndGT')
	{
		include_once('controleur/2ndGT.php');
	}
	
	if($_GET['section'] == 'detailNiveau')
	{
		include_once('controleur/detailNiveau.php');
	}
	
	if($_GET['section'] == 'Option')
	{
		include_once('controleur/Option.php');
	}
	
		if($_GET['section'] == 'Contact')
	{
		include_once('controleur/contact.php');
	}
	
}
?>

