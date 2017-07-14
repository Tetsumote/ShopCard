<?php
ini_set('display_errors','0');
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
<style>
	ul li {
		display: inline-block;
		padding: 50px;
	}
</style>
</head>

<body>
<?php if($message){
	echo "<h2>$message<h2>";
}else{ ?>
<h1>Fetch data from DataBase</h1>

<?php
$i = 0;
while ($row = $result->fetch_assoc()){ 
	if($i % 4 === 0){ 
?>		
			<ul>
			<?php } ?>
				<li>
					<p><a href="details.php?id=<?php echo  $row['id']; ?>"><?php echo $row['image'];?></a></p>
					<h3><?php echo $row['title']; ?></h3>
					<p>From $<?php echo $row['price']; ?></p>
				</li>
				<?php $i++;
				if($i % 4 === 0){ ?>
			</ul>
		

<?php } //endif
} //end of loop ?>
	
<?php } //end of page ?>
</body>
</html>
