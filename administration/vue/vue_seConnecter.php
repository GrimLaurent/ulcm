<?php 
	include "vue/vue_entete.php";
 ?>
<html>
<div id= "Corps">

<Form action = "index.php?section=verifConnexion" METHOD = "POST" name = "FormConnexion">
<br><br><br>

<h1>Se connecter</h1>
<br>
    <TABLE align="center">
        
	    <TR><TD>Votre login   </TD><TD><INPUT NAME='login' size=20 ></TD></TR>
        <TR><TD>Votre mot de passe </TD><TD><INPUT type ='password' NAME='mdp' size=20 ></TD></TR>

		<TR><Td colspan =2><input type="submit" value="Valider" ></Td></TR>
	</TABLE>
		

</FORM>

		 
</div>


</html>