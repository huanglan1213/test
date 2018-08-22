<?php
// 创建服务器
// 

$server = new swoole_server('127.0.0.1',9501);

/*
	$mode :swoole process 多进程方式
	$socke_type:swoole_sock_TCP
 */

$server->on('connect',function($serv,$fd){
	echo "建立连接\n";
});
$server->on('receive',function($serv,$fd,$from_id,$data){
	echo "接收数据\n";
	var_dump($data);
});
$server->on('close',function($serv,$fd){
	echo "连接关闭";
});


$server->start();