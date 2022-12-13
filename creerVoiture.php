<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Creer Voiture</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
  <?php if(!empty($_POST)){
	echo'<h1> Validé </h1>';

		$marque = $_POST["marque"];
		$couleur = $_POST["couleur"];
		$immatriculation = $_POST["immatriculation"];

		echo $immatriculation;
		echo "<br>";
		echo $marque;
		echo "<br>";
		echo $couleur;
		
		
	}
	else{
		echo'<h1> Erreur </h1>';
	}
 ?>



</body>
</html>