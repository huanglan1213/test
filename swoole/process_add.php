<?php
/*
$pro = new swoole_process(function ad(){
	echo "this is a process";
});
$pro-> start();

swoole_process::wait();
 */



$work = [];

$work_num = 3;

function doProcess(swoole_process $process){
	$process->write("PID : $process->pid");
	echo "写入信息: $process->pid, $process->cllback\n";
}


for ($i=0; $i < $work_num; $i++) { 
	$process = new swoole_process ("doProcess");
	$pid = $process->start();
	$work[$pid] =  $process;
}

foreach ($work as $process) {
	# code...
	swoole_event_add($process->pipe,function($pipe) use($process){
		$data = $process->read();
		echo "接收到 $data \n";
	});
}


swoole_process::wait();