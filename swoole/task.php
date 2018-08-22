<?php
/*
  	异步任务
 */

$serv = new swoole_server('127.0.0.1',9501);

$serv->set(array('task_worker_num' =>4  ));

$serv->on('receive',function($serv,$fd,$from_id,$data){
	$task_id = $serv->task($data);
	echo "异步任务ID：{$task_id}";
});

$serv->on('task',function($serv,$task_id,$from_id,$data){
	echo "执行异步id：{$task_id}";
	$serv->finish("$data -> OK");
});

$serv->on('finish',function($serv,$task_id,$data){
	echo "执行完成";
});

$serv->start();