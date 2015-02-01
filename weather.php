<html>
<head>
	<title>My First Webpage</title>

	<meta charset="utf-8" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

	<style>
		
		html, body {
			height:100%;
		}
		
		
		.container {
			background-image:url("background.jpeg");
			width:100%;
			height:100%;
			background-size:cover;
			background-position:center;
			padding-top:150px;
		}
		
		.center {
			
			text-align:center;
			
		}
		
		.white {
			
			color:white;
			
		}
		
		p {
			
			padding-top:10px;
			padding-bottom:0px;
			
		}
		
		button{
			margin-top:10px;
		}

		.alert {
			
			margin-top:20px;
			opacity:0.8;
			display:none;
			
		}
		
	</style>
	

</head>

<body>
	
	<div class="container">
	
		<div class="row">
			
			<div class="col-md-6 col-md-offset-3 center">
				
				<h1 class="center white">Find out your local weather</h1>
				
				<p class="lead center white">Enter your city below :) </p>
				
				<form>
					
					<div class="form-group">
						
						<input type="text" class="form-control" name="city" id="city" 
						placeholder="Eg. London, Paris, New York..." />
						
					</div>
					
					<button id="findMyWeather" class="btn btn-success btn-lg">Find My Weather</button>
					
				</form>
				
			</div>	
			
		</div>
		
		<div id="success" class="alert alert-success">Success</div>
		
		<div id="fail" class="alert alert-danger">Could not find weather data for that city please try again!</div>
		
		<div id="noCity" class="alert alert-danger">Please enter a City!</div>
		
	</div>


	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	

	<!-- Latest compiled and minified JavaScript -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	
	<script>
	
	$("#findMyWeather").click(function(event) {
		
		event.preventDefault();
		
		if ($("#city").val()!="") {
			
		
			$.get("scraper.php?city="+$("#city").val(), function( data ) {
				
				if (data=="") {
					
					$(".alert").hide();
					$("#fail").fadeIn();
					
				} else {
					
					$(".alert").hide();
					$("#success").html(data).fadeIn();
					
				}
			
			});
		
		} else {
			
			$(".alert").hide();
			$("#noCity").fadeIn();
			
		}
		
	});
	
	</script>
	
</body>
</html>