<?php
session_start();
	
	
	if(isset($_POST['r_method'])){ 
	
	
	foreach ($_POST AS $key => $value){
		if(strpos($key, 'Sneakers') === 0){
		$_SESSION['qty'][substr($key,0)] = $value;
			}
		if(strpos($key, 'price') === 0){
		$_SESSION['price'][substr($key,6)] = $value;
			}
		if(strpos($key, 'Sneakers') === 0){
		$_SESSION['name'][substr($key,0)] = $key;
			}
		}
	} 

$total = 0;
//unset($_SESSION['quantity']['Sneakers_Rugby']);
if(isset($_POST['cancel'])){
	$_SESSION = array();
	session_destroy();
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dokument bez tytułu</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<h1>Your Order</h1>
	<?php if(!isset($_SESSION['qty']) || array_sum($_SESSION['qty']) === 0){ ?>
	<p>Your basket is empty.</p>
	<?php  }else{ ?>
	<p>Please check the details of your order.</p>
	<table>
		<tr>
			<th>Item</th>
			<th>Quantity</th>
			<th>Price</th>
			<th>Cost</th>
		</tr>
		<?php foreach($_SESSION['qty'] AS $sneakers => $amount): 
		if ($amount != ""):
		?>
		<tr>
			<td><?php echo str_replace('_',' ',$sneakers); ?></td>
			<td><?php echo $amount; ?></td>
			<td><?php echo $_SESSION['price'][$sneakers]; ?></td>
			<td>$<?php echo $cost = $amount * $_SESSION['price'][$sneakers]; 
				
				$total += $cost; ?></td>
		</tr>
		<?php 
		endif;
		endforeach; ?>
		<tr>
			<td colspan="3">Shipping</td>
			<td><?php 
				if($total < 75){
					echo '$10';
					$total += 10;
				}else{
					echo 'FREE';
				}
				?></td>
		</tr>
		<tr>
			<td colspan="3">Total</td>
			<td>$<?php echo $total; ?></td>
		</tr>
	</table>
<?php } ?>

<form method="post">
<input class="btn" type="submit" value="cancel order" name="cancel">	
</form>

</body>
</html>