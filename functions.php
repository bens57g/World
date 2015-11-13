<?php 
	// regroupement des fonctions

	// fonction qui récupère le nom de tous les continents
	function getContinent($pdo){
		$sql = 'SELECT Continent FROM country GROUP BY Continent';
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		$row = $stmt->fetchAll();
		return $row;
	}

	// fontion qui récupère le nombre de pays pour un continent choisi
	function NbrePays($continent, $pdo){
		$continent = $_GET['continent'];
		$sql = 'SELECT COUNT(*) AS nb FROM country WHERE Continent ="' .$continent .'";';
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		$row = $stmt->fetch();
		return $row['nb'];
	}

	function getPopulation($continent, $pdo){
		$continent = $_GET['continent'];
		$sql = 'SELECT SUM(Population) AS NbPop FROM country WHERE Continent ="'.$continent.'";';
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		$row = $stmt->fetchAll();
		return $row;
	}





?>