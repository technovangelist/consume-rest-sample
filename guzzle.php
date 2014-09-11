<?php
require_once 'vendor/autoload.php';

function get_guzzle($url){
	$client = new GuzzleHttp\Client();
	$response = $client->get( $url );

	return $response->json();
}

function post_guzzle($url,$params){
	$data = json_encode( $params );
	$client = new GuzzleHttp\Client();
	$response = $client->post($url,['body' => $data]);
	return $response->json();
}