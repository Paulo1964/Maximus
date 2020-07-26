<?php
error_reporting(0);
$radio = $_POST['currentradiourl'];
$port = $_POST['currentradioport'];
$fp = @fsockopen($$radio , $port,$errno,$errstr,1);
//$open = fsockopen($radio , $port); 
include "shoutcast_class.php";
$display_array_song = array("Current Song");
$display_array = array("Stream URL"); 
// Enter Your Shoutcast Radio IP 
$radio = new Radio("88.198.72.46:9976"); 
$data_array_song = $radio->getServerInfo($display_array_song);
$data_array = $radio->getServerInfo($display_array);
$RadioDetails = $data_array_song[0];
echo $RadioDetails;
?>