<?php
$serv = new swoole_server("0.0.0.0",9502,SWOOLE_PROCESS,SWOOLE_SOCK_UDP);

$serv->on('packet',function($serv,$data,$fd){
    //反馈信息
    $serv->sendto($fd['addresss'],$fd['port'],"Server:data");
    var_dump($fd);
});

$serv->start();

