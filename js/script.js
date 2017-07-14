	var sum = 0;
	var demo = document.getElementById('demo');
	var price = document.getElementsByClassName('price');
	var total = '';
	var totalArray = [];

	var submit = document.getElementById("sendButton");
	var form = document.getElementById("myForm");
	form.addEventListener('change',function(){
		var txt = 0;
		var deliver = document.getElementsByClassName('deliver');
		
		for(var j = 0; j < deliver.length;j++){
			if(deliver[j].checked){
			txt = deliver[j].value;
			}
		}
		var send = 0;
	
		for(var i = 0; i < price.length;i++){
		total = Number(price[i].id)* price[i].value;
		totalArray.push(total); 
		
		if(price[i].value > 0){
		send += price[i].value * Number(txt);
			}
		}
		
	totalArray.forEach(myFunction);
	
		function myFunction(item) {
		sum += Number(item);
		demo.innerHTML =  sum + send + ' $';
		totalArray = [];	
	}
	sum = 0;
	});
	submit.addEventListener('click',function(){
		form.submit();
	});
