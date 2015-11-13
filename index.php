<?php  
	// connexion à la base + debug
	$dsn = 'mysql:host=localhost;dbname=world;charset=utf8';
	$pdo = new PDO($dsn, 'root', 'webforce3');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	require 'functions.php';
	
	// nom des continents
	$Continent_names = getContinent($pdo);

	$strconnexion = 'mysql:host=localhost;dbname=world;charset=utf8';
	$pdo = new PDO($strconnexion, 'root', 'webforce3');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	require "functions.php";

	$liste_pays=getPays($pdo);
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>stat of world</title>

	<link rel="stylesheet" href="style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
<body>
	<main>
		<!--monde-->
		<div class="monde">
			<h1>Monde</h1> 
		</div>
		<!--les deux select -->

		<form action="index.php" method="get" accept-charset="utf-8">
			<select class="continent" name="continent">
				<option value="">Continent</option>
			</select>
			<input class="button_left" type="submit" name="submit_left" value="Envoyer">
		</form>
		<form action="index.php" method="get" accept-charset="utf-8">
			<select class="pays" name="pays" >
				<?php 
					foreach ($liste_pays as $key) {
						echo '<option value="'.$key['Code'] . '">'.$key['Name'].'</option>';
					}
				 ?>
				<option value="">Pays</option>
			</select>
			<input class="button_right" type="submit" name="submit_right" value="Envoyer">
		</form>

		<div class="clearfix"></div>
		
		<div class="div_left">
			<h1>Continent Démographie </h1>
			<?php 
				// nbre de pays
				if(isset($_GET['contient'])) {
					$nb_pays = NbrePays($continent, $pdo);
					echo 'Le nombre de pays : ' . $nb_pays .'<br>';
					// population
					$Total_population = getPopulation($continent, $pdo);
					echo 'Population totale : ' . $Total_population .'<br>';
				}
			?>
		</div>

		<div class="div_right">
			<h2> Démographie</h2>
			<!-- Si le pays est séléctionné alors ça affichera sa capital  -->
			<?php 
				if(isset($_GET['pays'])){
					$code = $_GET['pays'];
					$capital_pays = capitale($code,$pdo);
					print_r ($capital_pays);
					
				}

			 ?>

			<h2> Economie</h2>

		</div>
	</main>	
</body>
</html>