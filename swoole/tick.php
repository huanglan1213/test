<?php
	swoole_timer_tick(2000,function($time_id){
        echo "执行{$time_id}\n";
        $time_id =$time_id++; 
	});

    swoole_timer_after(4000,function(){
        echo "开始执行2\n";
    });