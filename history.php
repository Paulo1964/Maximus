<?php

$radio = $_POST['currentradiourl'];
$port = $_POST['currentradioport'];
$open = fsockopen($radio , $port);  
if ($open) { 
fputs($open,"GET /7.html HTTP/1.1\nUser-Agent:Mozilla\n\n"); 
$read = fread($open,1000); 
$text = explode("content-type:text/html",$read); 
$text = explode(",",$text[1]); 
} else { $er="Connection denied!"; } 
$RadioDetails = "$text[6]";
$Radioart = "&Radioart=";
$Radioart .= $RadioDetails;
include "shoutcast_class.php";
$display_array = array("Stream URL"); 
// Enter Your Shoutcast Radio IP 
$radio = new Radio("88.198.72.46:9976"); 
$data_array = $radio->getServerInfo($display_array);
$HISTORY = $radio->getHistoryTable("/played.html");
$RadioH = "&RadioH=";
$RadioH .= $HISTORY;
echo $HISTORY;

