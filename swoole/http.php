<?php 
$server = new swoole_http_server('0.0.0.0',9501);

$server->on('request',function($request,$response){
	var_dump($request);
	$response->header("Cntent-Type","text/html;chasrset=utf-8");
	$response->end("hello world ". rand(1,100));
});

$server->start();