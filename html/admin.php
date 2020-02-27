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
		<form id="connexion" method="POST">
			<h2>Connexion</h2>
			<br>

			<input type="email" id="email" placeholder="email" required>
			<br>
			<input type="password" id="mdp" placeholder="mot de passe :" required>
			<br>
			<input type="submit" id="valider" value="valider">
		</form>
		<br>
		<br>
		<div id="status"></div>

	</div>


	<script type="text/javascript" src="../js/connexion.js"></script>
</body>

</html>