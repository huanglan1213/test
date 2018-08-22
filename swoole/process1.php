<?php

function doProcess(swoole_process $worker){
	echo "PID : " ,$worker->pid,"\n";
	sleep(10);

}


$process = new swoole_process("doProcess");
$pid = $process-> start();

$process = new swoole_process("doProcess");
$pid = $process-> start();

$process = new swoole_process("doProcess");
$pid = $process-> start();

swoole_process::wait();