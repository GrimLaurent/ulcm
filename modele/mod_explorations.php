<?php

function get_lesExplorations() 
{
	global $bdd;
           
    $req = $bdd->prepare("SELECT * FROM exploration,theme where theme.idTheme = exploration.idTheme");
	$req->execute();
    $explo = $req->fetchAll();
        
    return $explo;
}

function get_Themes() 
{
	global $bdd;
           
    $req = $bdd->prepare("SELECT distinct nomTheme FROM theme,exploration where theme.idTheme = exploration.idTheme");
	$req->execute();
    $themes = $req->fetchAll();
        
    return $themes;
}
?>