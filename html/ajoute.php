<?php
?>
<!DOCTYPE html>
<html>

<head>
	<title>Derrière chez moi</title>
	<link rel="stylesheet" type="text/css" href="../css/index.css">
</head>
<header>
	<div id="animate-area">
		<div id="head-text">Derrière chez moi...</div>
		<audio controls autoplay="autoplay">
			<source src="../son/derriere-chez-moi.mp3" type="audio/mpeg">
		</audio>
		<div id="head-text2">Devinez ce qu'il y a ?</div>
		<br>


	</div>

</header>

<body>
	<div id="menu" class="my-menu">
		<a href="index.php">Accueil</a>
		<a href="insectes.php">Des insectes</a>
		<a href="lien.php">liens utile</a>
		<a href="inscription.php">Inscription</a>
		<a href="admin.php" class="active">Espace admin</a>
	</div>

	<div id="container">
		<br>
		<form id="ajouter" method="POST">
			<h2>Ajouter </h2>
			<br>

			<input type="text" id="nom" placeholder="Nom :" required>
			<br>

			<Select id="espece" name="espece" required>
				<!-- <option selected="selected">Espèce :</option> -->
				<option value="">None</option>
				<option value="insectePollinisateur">insectes pollinisateur</option>
				<option value="insecteNonPollinisateur">insectes non pollinisateur</option>
				<option value="batracien">batraciens</option>
				<option value="reptile">réptiles</option>
				<option value="oiseaux">oiseaux</option>
				<option value="Mammifere">Mammifères</option>
			</Select>
			<br>
			<br>
			<input type="text" id="nbAppercu" placeholder="Nombre apperçu :" required>
			<br>
			<br>
			Description :
			<br>
			<textarea id="description" cols="100" rows="5" required>
</textarea>
			<br>
			<button type="submit">Valider</button>
			<br>
		</form>
		<div id="status"></div>
	</div>
	<script type="text/javascript" src="../js/ajoute.js"></script>
</body>

</html>