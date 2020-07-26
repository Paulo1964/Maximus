<?php
include 'fm_api_key.php';
$SongTitle = $_POST['name'];
$get = file_get_contents('http://ws.audioscrobbler.com/2.0/?method=track.search&track=' .urlencode($SongTitle). '&api_key=' .$API_KEY. '&format=json&limit=1');
echo $get;
// if($get->results->trackmatches->track->image){
// 	foreach($get->results->trackmatches->track->image as $image) {
// 	$image = (array) $image;
// 		if($image['size'] === 'extralarge'){
// 			$res = "<img height=100% width=100% src='". $image['#text'] ."'>";
// 		}
// 	}
// }else{
// 	$res = "<img height=100% width=100% src='images/noCover.jpg'>";
// }
//echo $res;
?>