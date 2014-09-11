<?php
include 'apikeys.php';
include 'streams.php';
include 'curl.php';
include 'guzzle.php';
include 'json_output.php';

date_default_timezone_set( 'America/New_York' );

$plsget = 'http://api.placester.com/api/v2.1/listings?api_key=' . $plsapi;
$ddpost = 'https://app.datadoghq.com/api/v1/events?api_key=' . $ddapi;


pls_output( 'GET Placester Listings with Stream',  get_stream( $plsget ) );
pls_output( 'GET Placester Listings with cURL', get_curl( $plsget ) );
pls_output( 'GET Placester Listings with Guzzle', get_guzzle( $plsget ) );

$ddparams = array(
	'title' => 'web service test',
	'text'  => 'test',
);
$ddparams['text'] = "current time is " . date("F j, Y, g:i(s) a");
dd_output( 'POST Datadog Event with Stream', post_stream( $ddpost, $ddparams ) );

$ddparams['text'] = "current time is " . date("F j, Y, g:i(s) a");
dd_output( 'POST Datadog Event with cURL', post_curl( $ddpost, $ddparams ) );

$ddparams['text'] = "current time is " . date("F j, Y, g:i(s) a");
dd_output( 'POST Datadog Event with Guzzle', post_guzzle( $ddpost, $ddparams ) );

