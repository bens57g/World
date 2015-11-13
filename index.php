<?php  


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>stat of world</title>

	<link rel="stylesheet" href="style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="pigeons.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>
	<main>
		<!--monde-->
		<div class="monde">
			<h1>Monde</h1> 
		</div>
		<!--les deux select -->
		<select class="continent" name="continent">
			<option value=""></option>
		</select>

		<select class="pays" name="pays" placeholer="Continent">
			<option value=""></option>
		</select>

		<div class="clearfix"></div>
		
		<div class="div_left">
			<h1>Continent Démographie </h1>
		</div>

		<div class="div_right">
			<h1> Pays Démographie</h1>
		</div>

	</main>	
</body>
</html>