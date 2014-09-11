<?php

function pls_output($title, $json){
	echo "<h1>$title</h1>";
	echo "Total Listings: " . $json['total'] . "<br>";
//	$listing = $json['listings'][0];
	for($i=0;$i<10;$i++){
		$listing = $json['listings'][ $i ];
		echo $listing['location']['address'] . ", " . $listing['location']['locality'] . ", ";
		echo $listing['cur_data']['beds'] . " Beds<br>";
	}
}

function dd_output($title,$json){
	echo "<h1>$title</h1>";
	echo "Status: " . $json['status'] . "<br>";
	echo "<a href='" . $json['event']['url'] . "' target='_blank'>View</a><br>";
}
