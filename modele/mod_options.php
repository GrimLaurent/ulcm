<?php

function get_lesOptions() 
{
	global $bdd;
           
    $req = $bdd->prepare("SELECT * FROM `option`,theme where theme.idTheme = option.idTheme");
	$req->execute();
    $options = $req->fetchAll();
        
    return $options;
}

function get_lesThemes() 
{
	global $bdd;
           
    $req = $bdd->prepare("SELECT distinct nomTheme FROM theme,`option` where theme.idTheme = option.idTheme");
	$req->execute();
    $themes = $req->fetchAll();
        
    return $themes;
}
?>