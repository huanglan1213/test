<?php
// 异步写入


$content = "Hello world";
swoole_async_write("2.txt",$content,function($filename){
	echo $filename;
},"FILE_APPEND");