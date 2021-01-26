<?php 
	include "vue/vue_entete.php";
 ?>
<html>
<div id= "Corps">
<!--récupération des infos du lycée-->
<?php
$id = $lesInfos['idEtablissement'];
$nom = $lesInfos['nomEtablissement'];
$numero = $lesInfos['numeroEtablissement'];
$logo = $lesInfos['logoEtablissement'];
$site = $lesInfos['siteEtablissement'];
$email1 = $lesInfos['email1'];
$email2 = $lesInfos['email2'];
?>

<!--script pour vérifier la validité des champs-->
<script language="JavaScript">
		function isEmail(unMail){
			var maRegExp = new RegExp('^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$','i');
			if(maRegExp.test(unMail)){ 
				return true;
			}
			else {
				return false; 
			}
		}
		
		function isTel(unTel){
			var maRegExp = new RegExp('^0[1-68]([-. ]?[0-9]{2}){4}$','gi');
			if(maRegExp.test(unTel)){
				return true;
			}
			else{
				return false; 
			}
		}
		
		
		function ControlerChamp()
		{
			var ok=1		
					
			if (isTel(modifLycee.txtNum.value)==false)
				{ alert("Tel non valide");
				ok = 0;
				modifLycee.txtNum.border = "2px double #FF0000"; 
				}else {
				}
			
			
			//mail 1
			if (isEmail(modifLycee.txtMail1.value)==false){ 
					alert("Email non valide");
					ok = 0;
					modifLycee.border = "2px double #FF0000"; 
			}else{
			}
			
			//mail 2
			if (modifLycee.txtMail2.value != "")
			{
				if (isEmail(modifLycee.txtMail2.value)==false)
					{
						alert("Email 2 non valide");
						ok = 0;
						modifLycee.border = "2px double #FF0000"; 
				}else{
				}
			}
			
					
			if ( ok == 1) {
				modifLycee.submit();
			}
					
		}		
</script>


<h2> Modifier le <?php echo $nom; ?> </h2>

<form name="modifLycee" action="index.php?section=lyceeModifier" method="POST">
<table>
<?php
	echo "<input type='hidden' value='$id' name='txtId'>";
	echo "<tr><td>Numéro :</td><td><input name='txtNum' value='$numero' width='20px'></td><td>Site :</td><td><input name='txtSite' value='$site' width='500'></td></tr>";
	echo "<tr><td>Mail 1 :</td><td><input name='txtMail1' value='$email1' width='20px'></td><td>Mail 2 :</td><td><input name='txtMail2' value='$email2'></td></tr>";
?>
<tr><td colspan="2"><input type="button" name='btnValider' value='VALIDER' onClick="ControlerChamp()"></td></tr>
</table>
</form>


</div>
</body>

</html>

