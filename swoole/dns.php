<?php
// DNS查询
// 

swoole_async_dns_lookup("www.baidu.com",function($host,$ip){
	echo "$host $ip";
});
