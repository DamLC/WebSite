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
		<a href="index.php" >Accueil</a>
		 <a href="insectes.php">Des	insectes</a> 
			 <a	href="lien.php">liens utile</a>
			 <a href="inscription.php"class="active">Inscription</a>
			 <a href="admin.php">Espace admin</a>
			 </div>

	<div id="container">
	<br>
	<form id="inscription"method="POST" >
    		<h2>inscription</h2>
    		<br>
    		<input type="nom" id="nom"  placeholder="nom:" required>
    		<br>
            <input type="prenom" id="prenom"  placeholder="prénom:" required>
    		<br>
    		<input type="email" id="email"  placeholder="email:" required>
    		<br>
    		<input type="password" id="mdp"  placeholder="mot de passe :" required>
    		<br>
    		<input type="submit" id="valider" value="valider">
</form>
			<br>
			<br>
			<div id="status"></div>
    			
	</div>


	<script type="text/javascript" src="../js/inscription.js"></script>
</body>
</html>
