<?php

function ajout_Explo($nomExploration,$idTheme,$descExplo) 
{
	global $bdd;
           
    $req = $bdd->prepare("Insert into exploration (nomExploration,idTheme,idFormation,descExplo) values ('" . $nomExploration . "',$idTheme,2,'" . $descExplo . "')");
	$req->execute();

}

function ajout_ExploLycee($liste) 
{
	global $bdd;
           
    $req = $bdd->prepare("select max(idExploration) from Exploration");
	$req->execute();
	
	$idExplo = $req -> fetchColumn();
	
	foreach ($liste as $idLycee) 
	{
		$req2 = $bdd->prepare("insert into listeexploration (idExploration,idEtablissement) values ($idExplo,$idLycee)");
		$req2->execute();
	}
}

function get_Theme()
{
	global $bdd;
           
    $req = $bdd->prepare("Select * from theme");
	$req->execute();
	
	$lesThemes = $req -> fetchAll();
	return $lesThemes;
}

function get_Lycee()
{
	global $bdd;
           
    $req = $bdd->prepare("Select * from etablissement where idEtablissement != 6");
	$req->execute();
	
	$lesLycees = $req -> fetchAll();
	return $lesLycees;
}
?>