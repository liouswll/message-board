<?php
	$host = "127.0.0.1";
	$dbuser = "root";
	$pwd = "263135";
	$dbname = "kku";

	$ss =mysqli_connect($host,$dbuser,$pwd,$dbname);
 		
	if( $ss-> connect_error <> 0){
		die ('链接数据库失败');

	}
	$ss ->query('SET NAMESS UTF8');
	$sql = "SELECT *FROM  msg ORDER BY id DESC";

	$mysqli_result = $ss -> query($sql);
	if($mysqli_result === false){
		echo 'sql语句错误';
		exit;
	}

	$rows = [];
		while( $row = $mysqli_result -> fetch_array( MYSQLI_ASSOC)){
			$rows[]= $row;
		}
		//var_dump($rows);


?>








<!DOCTYPE html>
<html>
	<head>
		<meta charset='UTF-8'/>
		<title>留言板</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
		<div class='warp'>
			<div>
				<h1>请留言</h1>
			</div>
			<div class='add'>
				<form action="save.php"  method="post">
				<textarea name="content" class='content' cols='100' rows='6'></textarea>
				<br/>
				<input name="user" class='user' type='text'/>
				<input class='btn' type='submit' value='发表留言'/>
				</form>
			</div>

				<?php
					foreach($rows as $row){
				?>

			<div class="msg">
				<div class='info'>
					<span class='user'><?php echo  $row['user']?></span>
					<span class='time'><?php echo date( "Y-m-d H:i:s",$row['intime']); ?></span>
				</div>



				<div class='content'>
					<?php echo $row['content']?>
				</div>
			</div>
			<?php
				}
			?>





		</div>
	</body>
</html>