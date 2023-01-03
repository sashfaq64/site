<script>
	
	//****************************************DETAILS ON EXTRA CREDIT IN THIS ASSIGNMENT*************************************************
	//1) Click on Healthy at the botton for a secret message
	//2) Values for the bill cannot be negative or over 10,000

</script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<!DOCTYPE html>
	<html>
		<head>
			<title>Fantastic Munchin</title>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

			<style>


			@font-face{font-family: AntiqueHeritage; src: url(AntiqueHeritagePersonalUseRegular-9Y9Wy.otf);}

			h2{font-family:AntiqueHeritage; margin-top:40px; margin-bottom:40px;}
			
			#result{
				position: absolute;
				width: 100%;
				max-width:870px;
				cursor: pointer;
				overflow-y: auto;
				max-height: 400px;
				box-sizing: border-box;
				z-index: 1001;
			}
			.link-class:hover{
				background-color:#f1f1f1;
			}
			body{margin: 0px 0px 0px 150px;}
			table{border:2px solid black; background-color:#FFFFE0; width:300px;}
			tr{text-align:center;}

			.long{width: 35px;}
			.short{width: 15px;}

			.button:hover {
			        background-color:#FF0000;
				color:#FFFFFF;
			}

			.button{
				text-align: center;
			}
		        #header{text-align: center; color: white;}
			#inedibleStyle{border:3px solid green;}
			#poisonousStyle{border:3px solid red; border-right:3px solid blue; border-left:4px solid blue;}
			#multi{color: green;}
			#lingual{color: red;}
			#tip{}		
		</style>
		
		<script>


		</script>
		</head>


		<body>
			


        <h1> Welcome to the High Times Munchn Lunchn &#8482;!</h1>
        <p> All our clients are served right!<mark><br>This website is still under construction, but our cafe is still open for business!</p>
        <h2> See the menu</h2>



	<div class = "container-fluid">

		<div class = "row">
			<div class = "col-sm-2" id="header" style = "background-color:green" >Item</div>
			<div class = "col-sm-2" id="header" style = "background-color:green" >Description</div>
			<div class = "col-sm-2" id="header" style = "background-color:green" >Price</div>
		</div>


		<div class = "row">
			<div class = "col-sm-2" style = "background-color:#9FE2BF"  data-toggle="tooltip" data-placement="left" data-animation="false" title="&#127822">
				<p type="button" class="button" id="snacks">Snacks</p>
			</div>
			<div class = "col-sm-2" style = "background-color:#9FE2BF" data-toggle="tooltip" data-placement="left" data-animation="false" title="&#127864">
				<p type="button" class="button" id="drinks"> Drinks</p>
			</div>
			<div class = "col-sm-2" style = "background-color:#9FE2BF" data-toggle="tooltip" data-placement="left" data-animation="false" title="&#127831">
				<p type="button" class="button" id="mains"> Mains</p>
			</div>
		</div>
		<div class = "row">
			<div class = "col-sm-2" style = "background-color:#9FE2BF" data-toggle="tooltip" data-placement="left" data-animation="false" title="&#127874">
				<p type="button" class="button" id="desserts">desserts</p>
			</div>
			<div class = "col-sm-2" style = "background-color:#9FE2BF" data-toggle="tooltip" data-placement="left" data-animation="false" title="&#127868">
				<p type="button" class="button" id="for kids"> For Kids</p>
			</div>
			<div class = "col-sm-2" style = "background-color:#9FE2BF" data-toggle="tooltip" data-placement="left" data-animation="false" title="&#128021">
				<p type="button" class="button" > For Pets</p>
			</div>
		</div>
		<div class = "row">
			<div class = "col-sm-2" style = "background-color:#9FE2BF" data-toggle="tooltip" data-placement="left" data-animation="false" title="&#127829">
				<p type="button" class="button" id="takeout"> Take Out</p>
			</div>
			<div class = "col-sm-2" style = "background-color:#9FE2BF" data-toggle="tooltip" data-placement="left" data-animation="false" title="&#127880">
				<p type="button" class="button" id="inedible"> Inedible</p>
			</div>
			<div class = "col-sm-2" style = "background-color:#9FE2BF" data-toggle="tooltip" data-placement="left" data-animation="false" title="&#9760">
				<p type="button" class="button" id="poisonous"> Poisonous</p>
			</div>
		</div>


	</div>

	<div id = "ajax">
	</div>


	<br><br>

	<button id="tipbtn" class="btn btn-info">Click to compute tip!</button>

	<br><br>

	<div id="tip" style ="visibility:hidden">

		<form id="myForm">
			
			<label for="bill"> Bill amount:</label><br>
			<input type="number" id="bill" name="bill" step="0.01" onkeyup = myFunction(this)><br>
		</form>

		<p id = "log"></p>


		<p id = "p%"></p>

	</div>



         <p> We are looking for employees who are</p>
         <ol>
                 <li>Reliable</li>
                 <li>Prompt</li>
                 <li>Friendly</li>
                 <ul>
                         <li>Able to deal with <i> obnoxious characters</i></li>
                         <li>Able to deal with <i> difficult managers</i></li>
                         <li>Able to cater to <i> the chef's whims</i></li>
                 </ul>

                 <li><span id = multi>Multi</span><span id = lingual>lingual</span></li>
                 <li onclick = secret(this)><b>Healthy</b></li>

         </ol>


			<br />
		</body>
</html>



<script>


function tip() {
	$('[data-toggle="tooltip"]').tooltip()
}

function secret(e) {

alert("To eat healthy, don't eat processed foods please!!!");
}

function myFunction(e) {


	var x = e.value;

	let pp = document.getElementById("p%");

	if(x > 10000 || x < 0){
		log.innerHTML = "";
		alert("This value is either too high or too low! Please enter valid tip amount!!! >:(");
		document.getElementById("myForm").reset();
		pp.innerHTML = "";
	}
	else{
		log.innerHTML = x;

		
		pp.innerHTML = "with 15% tip: $" +Math.round((x*1.15)*100)/100 + "<br>with 18$ tip: $" +Math.round((x*1.18)*100)/100 + "<br>with 20% tip: $" + Math.round((x*1.2)*100)/100 + "<br>with 25% tip: $" + Math.round((x*1.25)*100)/100;



	}

}




$(document).ready(function(){ 



	$("#tipbtn").on('click', function(event){
		event.stopPropagation();
		event.stopImmediatePropagation();


		var tip = document.getElementById('tip');
	
		tip.style.visibility = 'visible';
	
	});
 	




	$(".button").on('click', function(event){
	    event.stopPropagation();
	    event.stopImmediatePropagation();
	    //(... rest of your JS code)
	    //alert($(this).attr("id"));

	    

	    var id = $(this).attr("id");

	    if(typeof(id) != "undefined"){
		    $.ajax({
		    
			url: 'getmenu.php',
			method: "POST",
			data:{id:id},
			datatype: "JSON",
			success:function(data)
			{

			var obj = JSON.parse(data);
	
			$('#ajax').html("");
			$('#details').html("");
			$('#accesses').html("");

			let deets = document.createElement("h2");
			deets.innerHTML = "Details about " + id;
			$("#ajax").append(deets);

	
			let access = document.createElement("p");
			access.style.color = "red";

			access.innerHTML = "this information has been accessed " + obj.accesses + " times";
			$("#ajax").append(access);
	



			let table = document.createElement('table');
			
			$('#ajax').append(table);



			let header = document.createElement('tr');
			let item = document.createElement('th');
			item.innerHTML = "Item";
			let description = document.createElement('th');
			description.innerHTML = "Description";
			let price = document.createElement('th');
			price.innerHTML = "Price";

			item.style.textAlign = "left";
			description.style.textAlign = "left";
			price.style.textAlign = "left";
			
			header.append(item); 
			header.append(description);
			header.append(price);
		
			table.append(header);



			for(var i = 0; i < obj.details.length; i++){

				var thing = obj.details[i];

				let row2 = document.createElement('tr');
				let item1 = document.createElement('td');
				item1.innerHTML = thing.item;
				let description1 = document.createElement('td');
				description1.innerHTML = thing.description;
				let price1 = document.createElement('td');
				price1.innerHTML = "$" + thing.price;

				item1.style.textAlign = "left";
				description1.style.textAlign = "left";
				price1.style.textAlign = "left";

				row2.append(item1); row2.append(description1); row2.append(price1);
				table.append(row2);

		   
			}




				},
			error: function(XMLHttpRequest, textStatus, errorThrown) {
			  alert("some error");
			}
		    
		    
		    
	    })
	    }
	    else
		    $("#ajax").html("");
	});
	
});


</script>


