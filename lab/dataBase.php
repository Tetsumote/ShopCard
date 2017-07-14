<?php
//ini_set('display_errors', '0');
$message = '';
$db = new MySQLi('localhost','root','','sneakersshop');
if($db->connect_error){
	$message = $db->connect_error;
}else{
	$sql = 'SELECT * FROM sneakers';
	$result = $db->query($sql);
	if($db->error){
		$message = $db->error;
	}
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Fetch data from Database</title>
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php if($message){
	echo "<h2>$message<h2>";
}else{ ?>
<h1>Fetch data from DataBase</h1>
<div class="container-fluid">
	<div class="row">
<?php while ($row = $result->fetch_assoc()){ ?>

		<div class="col-sm-4">
			<ul>
				<li>
					<p><?php echo $row['image'];?></p>
					<h3><?php echo $row['title']; ?></h3>
					<p>From $<?php echo $row['price']; ?></p>
				</li>
			</ul>
		</div><!-- col-4 -->

<?php } //end of loop ?>
	</div><!-- row -->
</div><!-- container -->
<?php } //end of page ?>
</body>
</html>
