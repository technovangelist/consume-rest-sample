<?php
function get_stream($url) {
	$response = file_get_contents( $url );
	return json_decode( $response,true );
}


function post_stream($url,$params) {
	$data = json_encode( $params );

	$options = array(
		'http' => array(
			'method' => 'POST',
			'header' => ['Content-Type: application/json'],
			'content' => $data
		)
	);
	$context = stream_context_create( $options );
	$response = file_get_contents( $url, false, $context );
	return json_decode($response,true);

}