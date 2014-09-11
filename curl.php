<?php
function get_curl($url){
	$curl = curl_init( $url );
	curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
	$response = curl_exec( $curl );

	return json_decode( $response,true );
}

function post_curl($url, $params){
	$data = json_encode( $params );
	$curl = curl_init( $url );
	curl_setopt( $curl, CURLOPT_CUSTOMREQUEST, 'POST' );
	curl_setopt( $curl, CURLOPT_POSTFIELDS, $data );
	curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
	curl_setopt( $curl, CURLOPT_HTTPHEADER, array(
		'Content-Type:application/json',
		'Content-Length:' . strlen( $data )
	) );

	$response = curl_exec( $curl );
	return json_decode($response, true);
}