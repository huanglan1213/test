<?php

/*
	进程通信
 */

$work = [];

$work_num = 2;

for ($i=0; $i < $work_num ; $i++) { 
	$process = new swoole_process("doProcess",false,false);  //创建子进程
	$process->useQueue(); //开启队列
	$pid = $process->start();
	$work[$pid] = $process;
}

function doProcess(swoole_process $process){
	$rec = $process->pop();
	echo "从主进程获取数据 : $rec\n";
	sleep(5);
	$process->exit(0);
}

foreach ($work as $pid => $process) {
	# code...
	$process->push("Hello $pid子进程\n");
}

for ($i=0; $i < $work_num ; $i++) { 
	# code...;
	$ret = swoole_process::wait();
	$pid = $ret['pid'];
	unset($work[$pid]);
	echo "$pid子进程退出\n";
}