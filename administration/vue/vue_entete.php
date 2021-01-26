<html>
<head>
<link href="vue/feuilleULCM.css" rel="stylesheet" type="text/css" /> 
<link href="vue/feuilleULCM_nav.css" rel="stylesheet" type="text/css" /> 
</head>
<body>
<div id= "Haut">
<h1> Administration du site ULCM </h1>
<br>
<!--<a href="index.php?section=domaine" title="domaine">Domaine</a>-->

</div>

<div id= "espace">
</div>

<?php
if ($_SESSION['validiteConnexion'] == True)  {
?>

<div id= "Lien">

<ul class="nav">
	<li class="nav-item"><a href="index.php?section=accueil">Accueil</a></li>
	<li class="nav-item"><a href="index.php?section=accueil">Gestion des formations</a></li>
	<li class="nav-item"><a href="index.php?section=accueil">Gestion des options</a></li>
	<li class="nav-item"><a href="index.php?section=exploration">Gestion des enseignements d'exploration</a></li>
	<li class="nav-item"><a href="index.php?section=lycee">Gestion des Lycées</a></li>
<!--	<li class="nav-item">
		<a href="#">Catalogue</a>
		<ul class="nav sub-nav">
			<li class="sub-nav-item"><a href="#">TESTE</a></li>
			<li class="sub-nav-item"><a href="#">Test</a></li>
		</ul>
	</li>-->

<div id= "deconnexion">
<li class="nav-item"><a href="../index.php">Voir le site</a></li>
<li class="nav-item"><a href="index.php?section=deconnexion">Deconnexion</a></li>
</div>

</ul>

</div>

<?php
}
?>
</body>

</html>


