<?php
$message = '';
$db = new MySQLi('localhost','root','','sneakersshop');
if($db->connect_error){
	$message = $db->connect_error;
}else{
	$sql = 'SELECT * FROM sneakers WHERE id=' . $db-> real_escape_string($_GET['id']);
	$result = $db->query($sql);
	if($db->error){
		$message = $db->error;
	}else{
		$row = $result->fetch_assoc();
	}
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dokument bez tytułu</title>
</head>

<body>
<?php if ($message){ ?>
<h1>Oops! There seems to be a problem.</h1>
<?php //echo "<p>$message</p>";
				   }else{ ?>
<ul>
	<li><?php echo $row['title']?></li>
	<li><?php echo $row['description']?></li>
	<li><?php echo $row['price']?>$</li>
</ul>

<?php } ?>

</body>
</html>