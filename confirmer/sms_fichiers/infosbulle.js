// Gestion des info bulles et de l'aide r�duite

// PARAMETRES MODIFIABLES
var delaiAffBull = 2000
var delaiAffStat = 900
var autoEffBull  = 5000
var delaiEffBull = 200
var delaiEffStat = 200
var DecalVertic  = 16
var DecalHoriz   = 6
var TailleText   = 'font-size: 11px'  
var PolicText    = 'Tahoma,Arial'     
var CouleurTexte = '#494B5D'          
var CouleurFond  = '#FFFFCC'          
var CouleurBord  = '#786654'
var CouleurOmbr  = '#000000'

// PARAMETRES A NE PAS MODIFIER
var AffichBull=setTimeout('document.getElementById("infoBull").style.visibility = "visible";document.getElementById("ombrBull").style.visibility = "visible"',delaiAffBull);
clearTimeout(AffichBull);
var EffacBull=setTimeout('Vt=2;effacem()',delaiEffBull);
clearTimeout(EffacBull);
var EffacAutoBull=setTimeout('Vt=1;effacem();window.status=""',autoEffBull);
clearTimeout(EffacAutoBull);
var tempo=setTimeout('if(Vt==1)Opac=Opac-3;OpacOmbr=OpacOmbr-3;if(Vt==2)Opac=Opac-8;OpacOmbr=OpacOmbr-8;effacem()',Vitess/1000);
clearTimeout(tempo);
var AffStat=setTimeout('window.status=textBull',delaiAffStat);
clearTimeout(AffStat);

// DECLARATIONS
var textBull     = ''
var Vitess       = 1
var Opac         = 100
var OpacOmbr     = 20
var Opac_2       = 10
var Opac_2Ombr   = .2
var Vt           = 0
var EffB         = 0
var larg_ecran_B = 0
var haut_ecran_B = 0
var Long         = 0
var limiteH      = 0
var limiteV      = 0
var retourB      = 0
var PosHoriz     = 0
var PosVertic    = 0
var PosBullHoriz = 0
var PosBullVerti = 0
var scrollPag    = 0
var limiteBull   = 0

var ns4=document.layers?1:0
var ie4=document.all?1:0
var ns6=document.getElementById&&!document.all?1:0

if(navigator.appName.substring(0,3) == "Net")
	document.captureEvents(Event.MOUSEMOVE);

//Capture de la position de la souris
document.onmousemove = get_mouse;

//Transfert de la position de la souris
function get_mouse(e){                                                      
	x = (navigator.appName.substring(0,3) == "Net") ? e.pageX : event.x+document.body.scrollLeft;
	y = (navigator.appName.substring(0,3) == "Net") ? e.pageY : event.y+document.body.scrollTop;
	    PosBullHoriz = x;
        PosBullVerti = y;
}

function affichBulle(Bull){                                                  // Affichage de la bulle
        larg_ecran_B = document.body.clientWidth;                            // Recadrage dans l'�cran
        haut_ecran_B = document.body.clientHeight;
        scrollPag = document.body.scrollTop;
        if (ie4)Long = (Bull.length * (60 / 13)) + 26; 
        if (ns6)Long = (Bull.length * (60 / 13)) + 50;                       // (50) A adapter selon de la police 
        limiteH = PosBullHoriz + Long + DecalHoriz;
        limiteV = scrollPag + haut_ecran_B;
        retourB = limiteH - larg_ecran_B;
        PosHoriz = PosBullHoriz + DecalHoriz;
        PosVertic = PosBullVerti + DecalVertic;
        limiteBull = PosBullVerti + 30;
        if (limiteH > larg_ecran_B)PosHoriz = PosHoriz - retourB;
        if (limiteBull > limiteV)PosVertic = PosVertic - 40;
        if (Bull == 0){                                                      // Test de la pr�sence du texte
        clearTimeout(AffichBull);
        clearTimeout(EffacAutoBull);
        clearTimeout(AffStat);
        EffacBull=setTimeout('Vt=2;effacem()',delaiEffBull);
        setTimeout('ChxLien=0',300);
        }
        else if (Bull != 0){var textBull = Bull;                             // R�cuperation du texte
        if (document.getElementById){document.getElementById("infoBull").style.visibility = "hidden";document.getElementById("ombrBull").style.visibility = "hidden";}
        Opac = 100;OpacOmbr = 20
   
var cadreBull = '<table border="0" cellpadding="0" cellspacing="0"'+         // Cadre de la bulle
                ' style="border:0px solid '+CouleurBord+'; border-collapse: collapse; font-family: '+PolicText+'; '+TailleText+'; color: '+CouleurTexte+'; margin-left: 8; filter: alpha(opacity='+Opac+'); -moz-opacity: '+Opac_2+'"><tr><td style="border-style:solid; border-width:1px; margin-left: 8;" bgcolor="'+CouleurFond+'" bordercolor="'+CouleurBord+'" Width=><nobr>&nbsp; '+textBull+' &nbsp;</nobr></td></tr></table>'
var ombreBull = '<table border="0" cellpadding="0" cellspacing="0"'+         // Ombre de la bulle
                ' style="border:0px solid '+CouleurBord+'; border-collapse: collapse; font-family: '+PolicText+'; '+TailleText+'; color: '+CouleurTexte+'; margin-left: 8; filter: alpha(opacity='+OpacOmbr+'); -moz-opacity: '+Opac_2Ombr+'"><tr><td style="border-style:solid; border-width:0px; margin-left: 8;" bgcolor="'+CouleurOmbr+'" bordercolor="'+CouleurBord+'" Width=><nobr>&nbsp; '+textBull+'&nbsp;</nobr></td></tr></table>' 
        
        
        if ((document.getElementById) && (document.getElementById("infoBull").style.visibility != "visible")){
            document.getElementById("infoBull").innerHTML = cadreBull;      // Affichage du cadre avec le texte 
            document.getElementById("ombrBull").innerHTML = ombreBull;
            AffichBull=setTimeout('document.getElementById("infoBull").style.visibility = "visible";document.getElementById("ombrBull").style.visibility = "visible"',delaiAffBull);
            document.getElementById("infoBull").style.top = PosVertic;      // position verticale
            document.getElementById("infoBull").style.left = PosHoriz;      // Position horizontale
            document.getElementById("ombrBull").style.top = PosVertic + 5;  // position verticale
            document.getElementById("ombrBull").style.left = PosHoriz + 8;  // Position horizontale
            EffacAutoBull=setTimeout('Vt=1;effacem();window.status=""',autoEffBull);
            clearTimeout(EffacBull);
            }
        }
        afftextStat(Bull);                                                  // Transfert du texte pour la barre de status
}

function afftextStat(text){                                                 // Affichage du texte de la barre de status
        if(text != 0){textBull = text;
        AffStat=setTimeout('window.status=textBull',delaiAffStat)}
        else {setTimeout("window.status=''",delaiEffStat)}
}

function effacem(){
var cadreBull = '<table border="1" cellpadding="0" cellspacing="0"'+        // Cadre de la bulle
                ' style="border:1px solid '+CouleurBord+'; border-collapse: collapse; font-family: '+PolicText+'; '+TailleText+'; color: '+CouleurTexte+'; margin-left: 8; filter: alpha(opacity='+Opac+'); -moz-opacity: '+Opac_2+'"><tr><td style="border-style:solid; border-width:1px; margin-left: 8;" bgcolor="'+CouleurFond+'" bordercolor="'+CouleurBord+'" Width=><nobr>&nbsp; '+textBull+' &nbsp;</nobr></td></tr></table>'
var ombreBull = '<table border="0" cellpadding="0" cellspacing="0"'+        // Ombre de la bulle
                ' style="border:0px solid '+CouleurBord+'; border-collapse: collapse; font-family: '+PolicText+'; '+TailleText+'; color: '+CouleurTexte+'; margin-left: 8; filter: alpha(opacity='+OpacOmbr+'); -moz-opacity: '+Opac_2Ombr+'"><tr><td style="border-style:solid; border-width:0px; margin-left: 8;" bgcolor="'+CouleurOmbr+'" bordercolor="'+CouleurBord+'" Width=><nobr>&nbsp; '+textBull+'&nbsp;</nobr></td></tr></table>'

        document.getElementById("infoBull").innerHTML = cadreBull
        document.getElementById("ombrBull").innerHTML = ombreBull
        if (ie4) tempo=setTimeout('if(Vt==1)Opac=Opac-3;OpacOmbr=OpacOmbr-3;if(Vt==2)Opac=Opac-8;OpacOmbr=OpacOmbr-8;effacem()',Vitess/1000)
        else {document.getElementById("infoBull").innerHTML = "";document.getElementById("ombrBull").innerHTML = "";}           // Adapter l'effacement en douceur pour Netscape, Firefox, etc...
        if (Opac <= 0) {
        clearTimeout(tempo)
        document.getElementById("infoBull").innerHTML = ""
        document.getElementById("ombrBull").innerHTML = ""
        }
}

document.write('<DIV id=infoBull STYLE="position: absolute;z-Index:10"></DIV><DIV id=ombrBull STYLE="position: absolute;z-Index:9"></DIV>')


function StatusMessage(over,msg) 
{
	if(over==true) 
	{
	affichBulle(msg);
	}
		
	else 
	{
	affichBulle(0);
	}
}

function StatusMessage2(over,msg) 
{
	if(over==true) 
	{
	affichBulle2(msg);
	}
		
	else 
	{
	affichBulle2(0);
	}
}

function affichBulle2(Bull){                                                  // Affichage de la bulle
        larg_ecran_B = document.body.clientWidth;                            // Recadrage dans l'�cran
        haut_ecran_B = document.body.clientHeight;
        scrollPag = document.body.scrollTop;
        if (ie4)Long = (Bull.length * (60 / 13)) + 26; 
        if (ns6)Long = (Bull.length * (60 / 13)) + 50;                       // (50) A adapter selon de la police 
        limiteH = PosBullHoriz + Long + DecalHoriz;
        limiteV = scrollPag + haut_ecran_B;
        retourB = limiteH - larg_ecran_B;
        PosHoriz = PosBullHoriz + DecalHoriz;
        PosVertic = PosBullVerti + DecalVertic - 50;
        limiteBull = PosBullVerti + 30;
        if (limiteH > larg_ecran_B)PosHoriz = PosHoriz - retourB;
        if (limiteBull > limiteV)PosVertic = PosVertic - 40;
        if (Bull == 0){                                                      // Test de la pr�sence du texte
        clearTimeout(AffichBull);
        clearTimeout(EffacAutoBull);
        clearTimeout(AffStat);
        EffacBull=setTimeout('Vt=2;effacem()',delaiEffBull);
        setTimeout('ChxLien=0',300);
        }
        else if (Bull != 0){var textBull = Bull;                             // R�cuperation du texte
        if (document.getElementById){document.getElementById("infoBull").style.visibility = "hidden";document.getElementById("ombrBull").style.visibility = "hidden";}
        Opac = 100;OpacOmbr = 20
   
var cadreBull = '<table border="0" cellpadding="0" cellspacing="0"'+         // Cadre de la bulle
                ' style="border:0px solid '+CouleurBord+'; border-collapse: collapse; font-family: '+PolicText+'; '+TailleText+'; color: '+CouleurTexte+'; margin-left: 8; filter: alpha(opacity='+Opac+'); -moz-opacity: '+Opac_2+'"><tr><td style="border-style:solid; border-width:1px; margin-left: 8;" bgcolor="'+CouleurFond+'" bordercolor="'+CouleurBord+'" Width=><nobr>&nbsp; '+textBull+' &nbsp;</nobr></td></tr></table>'
var ombreBull = '<table border="0" cellpadding="0" cellspacing="0"'+         // Ombre de la bulle
                ' style="border:0px solid '+CouleurBord+'; border-collapse: collapse; font-family: '+PolicText+'; '+TailleText+'; color: '+CouleurTexte+'; margin-left: 8; filter: alpha(opacity='+OpacOmbr+'); -moz-opacity: '+Opac_2Ombr+'"><tr><td style="border-style:solid; border-width:0px; margin-left: 8;" bgcolor="'+CouleurOmbr+'" bordercolor="'+CouleurBord+'" Width=><nobr>&nbsp; '+textBull+'&nbsp;</nobr></td></tr></table>' 
        
        
        if ((document.getElementById) && (document.getElementById("infoBull").style.visibility != "visible")){
            document.getElementById("infoBull").innerHTML = cadreBull;      // Affichage du cadre avec le texte 
            document.getElementById("ombrBull").innerHTML = ombreBull;
            AffichBull=setTimeout('document.getElementById("infoBull").style.visibility = "visible";document.getElementById("ombrBull").style.visibility = "visible"',delaiAffBull);
            document.getElementById("infoBull").style.top = PosVertic;      // position verticale
            document.getElementById("infoBull").style.left = PosHoriz;      // Position horizontale
            document.getElementById("ombrBull").style.top = PosVertic + 5;  // position verticale
            document.getElementById("ombrBull").style.left = PosHoriz + 8;  // Position horizontale
            EffacAutoBull=setTimeout('Vt=1;effacem();window.status=""',autoEffBull);
            clearTimeout(EffacBull);
            }
        }
        afftextStat(Bull);                                                  // Transfert du texte pour la barre de status
}