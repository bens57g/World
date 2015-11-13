<?php 
	// regroupement des fonction

// récupération des capitales 

	function capitale($pays,$pdo) {
		$sql = 'SELECT Capital FROM Country WHERE Name ="'.$pays.'";';
		$stmt = $pdo->query($sql);
		$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $row;
	}

 	function getPays($pdo) {
 		$sql ='SELECT Code, Name FROM Country';
 		$stmt = $pdo->query($sql);
 		$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
 		return $row;
 	}

?>