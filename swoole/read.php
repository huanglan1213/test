<?php 
//异步文件读取
//

swoole_async_readfile("/1.txt",function($filename,$content){
	echo "$filename\n";
	echo "$content\n";
});