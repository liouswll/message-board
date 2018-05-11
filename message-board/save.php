<?php

	include('input.php');
	include('ceshi.php');
	$content = $_POST ['content'];
	$user = $_POST['user'];	
	//var_dump( $content,$user);

	


	$input = new input();

	


	$is =$input ->post( $content );
	if( $is == false ){
		die ('留言内容不正确');
	}



	$is =$input ->post( $user );	
	if( $is == false ){
		die ('留言人不正确');
	}	
	//var_dump( $content, $user);


	

	$intime = time();
	$sql = "INSERT INTO msg (content, user,intime) values ('{$content}','{$user}','{$intime}')";
	//echo $sql;
	$is = $ss ->query($sql);
	var_dump( $is);
	header("location:gbook.php");

?>