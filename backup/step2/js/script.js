	var sum = 0;
	var demo = document.getElementById('demo');
	var price = document.getElementsByClassName('price');
	console.log(price);
	var total = '';
	var totalArray = [];

	var submit = document.getElementById("sendButton");
	
	submit.addEventListener('click',function(e){
		e.preventDefault();
		for(var i = 0; i < price.length;i++){
		total = Number(price[i].id)* price[i].value;
		totalArray.push(total); 
		
	}
	totalArray.forEach(myFunction);
	
	function myFunction(item) {
    sum += item;
    demo.innerHTML = sum + ' $';
	totalArray = [];	
	
	}
	sum = 0;
	});