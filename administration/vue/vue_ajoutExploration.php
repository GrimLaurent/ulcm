<?php 
	include "vue/vue_entete.php";
 ?>
<html>
<script language = 'JavaScript'>
function verifForm() {
	ok = 1;
	msg = "Certains champs sont non valides : \n";
	if (formExplo.nom.value == "") {
	ok = 0;
	msg = msg + "- le nom de l'enseignement n'est pas renseigner \n";
	}
	
	if (formExplo.desc.value == "") {
	ok = 0;
	msg = msg + "- la description n'est pas renseigner \n";
	}

	if (ok == 0) {
		alert (msg);
	} else {
		formExplo.submit();
	}
}
</script>

<div id= "Corps">

<h3>Ajouter un enseignement d'exploration : </h3>

<form method='post' action='index.php?section=ajoutExplo&ajout=1' name='formExplo'>
<table>
<tr><td>Nom de l'enseignement d'exploration : </td>
<td> <input type='text' name='nom'> </td></tr>

<tr><td>Thème : </td>
<td> <select name='theme'> 
<?php
foreach ($lesThemes as $unTheme)
{
	echo "<option value=" . $unTheme['idTheme'] . ">" . $unTheme['nomTheme'] . "</option>";
}
?>
</select> </td></tr>

<tr><td>Description de l'enseignement d'exploration : </td>
<td> <textarea name='desc' maxlength = '500' cols='50' rows ='5'></textarea> </td></tr>

<tr><td>Lycées proposant cet enseignement d'exploration : </td>
<td> 
<table>
<?php
foreach ($lesLycee as $unLycee)
{
	$name = "site" . $unLycee['idEtablissement'];
	echo "<tr><td><input type = 'checkBox'  name='Lycee[]' value=" . $unLycee['idEtablissement'] . ">" . $unLycee['nomEtablissement'] . "</td>";
	echo "<td><input type = 'text'  name=$name value=Site correspondant ></td></tr>";
}
?>
</table>
</td></tr>

<tr><td colspan = '2' align='center'> <input type ='button' value='Valider' onClick='return verifForm()'> </td></tr>
</table>
</form>

</div>
</body>

</html>

