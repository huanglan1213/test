<?php
/*
信号触发，定时器
 */

swoole_process::signal(SIGALRM,function (){
	static $i = 0;
	echo "$i \n";
	$i++;
	if ($i>10){
		swoole_process::alarm(-1);	
	}
});


swoole_process::alarm(100 * 1000);

swoole_process::wait()；