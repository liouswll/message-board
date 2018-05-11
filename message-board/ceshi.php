<?php

	$host = "127.0.0.1";
	$dbuser = "root";
	$pwd = "263135";
	$dbname = "kku";

	$ss =mysqli_connect($host,$dbuser,$pwd,$dbname);
	if( $ss-> connect_error <> 0){
		die ('链接数据库失败');
	}
	$ss ->query("STE NAMES UTF8");


?>