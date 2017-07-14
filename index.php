<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Product Card</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="container-fluid">
	<div class="row">
	<div class="col-sm-12">
	<h1>Product card</h1>	
	</div>
	<form id="myForm" action="form.php" method="post">
	<div class="col-sm-4 marginBottom">
		<h2>Basketball Sneakers</h2>
		<p>Run faster, pass faster.</p>
		<span>Price: $90/pair</span><br>
		<label for="txt-q-bball">Quantity:</label>
		<input type="number" min="0" name="Sneakers_Basketball" size="3" placeholder="0" id="90" class="price">
		<input type="hidden" name="price_Sneakers_Basketball"  value="90">
	</div>
	<div class="col-sm-4 marginBottom">
		<h2>Football Sneakers</h2>
		<p>Run faster, kick more acuracy.</p>
		<span>Price: $60/pair</span><br>
		<label for="txt-q-bball">Quantity:</label>
		<input type="number" min="0" name="Sneakers_Football" size="3" placeholder="0" id="60" class="price">
		<input type="hidden" name="price_Sneakers_Football"  value="60">
	</div>
	<div class="col-sm-4 marginBottom">
		<h2>Tennis Sneakers</h2>
		<p>Run faster, hit faster.</p>
		<span>Price: $30/pair</span><br>
		<label for="txt-q-bball">Quantity:</label>
		<input type="number" min="0" name="Sneakers_Tennis" size="3" placeholder="0" id="30" class="price">
		<input type="hidden" name="price_Sneakers_Tennis"  value="30">
		
	</div>
	<div class="col-sm-4 marginBottom">
		<h2>Rugby Sneakers</h2>
		<p>Run faster, genarate more power.</p>
		<span>Price: $190/pair</span><br>
		<label for="txt-q-bball">Quantity:</label>
		<input type="number" min="0" name="Sneakers_Rugby" size="3" placeholder="0" id="190" class="price">
		<input type="hidden" name="price_Sneakers_Rugby"  value="190">
	</div>
	<div class="col-sm-4 marginBottom">
		<h2>Voleyball Sneakers</h2>
		<p>Run faster, jump higher</p>
		<span>Price: $45/pair</span><br>
		<label for="txt-q-bball">Quantity:</label>
		<input type="number" min="0" name="Sneakers_Voleyball" size="3" placeholder="0" id="45" class="price">
		<input type="hidden" name="price_Sneakers_Voleyball" value="45">
	</div>
	<div class="col-sm-4 marginBottom">
		<h2>Running Sneakers</h2>
		<p>Run faster, don't slow down.</p>
		<span>Price: $70/pair</span><br>
		<label for="txt-q-bball">Quantity:</label>
		<input type="number" min="0" name="Sneakers_Running" size="3" placeholder="0" id="70" class="price">
		<input type="hidden" name="price_Sneakers_Running"  value="70">
	</div>
	
	
	<div class="col-sm-12">
	<div class="col-sm-4">
	<label for="s-state">State (required):</label>
		<select name="" id="s-state">
			<option value="">-select-</option>
			<option value="CA">California</option>
			<option value="IL">Illinois</option>
			<option value="NH">New Hampshire</option>
		</select>
		</div><!-- col-4 -->
		<div class="col-sm-4">
		<label for="r-method-pickup">Shipping and Handling:</label><br>
			<input class="deliver" type="radio" id="r-method-pickup" name="r_method" value="0" checked>
			<label for="r-method-pickup" >Pickup (free)</label><br>
			<input class="deliver" type="radio" name="r_method" id="r-method-usps" value="2"><label for="r-method-usps">US Mail($2/item)</label><br>
			<input class="deliver" type="radio" name="r_method" id="r-method-ups" value="3"><label for="r-method-ups">UPS ($3/item)</label>
		</div>
		<div class="col-sm-4">
			<h3>Special gift:</h3>
			<input type="checkbox" value="YES" name="c-special-gift" id="c-special-gift"><label for="c-special-gift"> Suprice include in price.</label>
		</div>
	</div><!-- col-12 -->
	
	
	<input type="button" value="Submit" name="order" id="sendButton" class="btn">
	
	</form><!-- form -->
		<div id="demo">$</div>
	</div><!-- row -->
</div><!-- container -->









<script src="js/script.js"></script>
</body>
</html>
