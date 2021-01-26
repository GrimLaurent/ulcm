<?php

// Connexion à la base de données bddULCM
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=bddULCM', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

?>