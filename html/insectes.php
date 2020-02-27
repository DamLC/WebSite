<?php
?>
<!DOCTYPE html>
<html>

<head>
	<title>Derrière chez moi</title>
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<link rel="stylesheet" type="text/css" href="../css/buttom.css">
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
		<a href="insectes.php" class="active">Des insectes</a>
		<a href="lien.php">liens utile</a>
		<a href="inscription.php">Inscription</a>
		<a href="admin.php">Espace admin</a>
	</div>
	<div id="container-flex">
		<section>
			<button id="insectePollinisateur">Les insectes pollinisateurs :</button>
			<div class="container">
				<br> Ce sont ceux qui permettent aux plantes à fleurs de se
				reproduire. Si certaines plantes sont pollinisées par le vent , la
				plupart d'entre elles le sont, entièrement ou en partie, par les
				insectes qui viennent butiner pour se nourrir, et transportent ainsi
				involontairement les grains de pollen d'une fleur à une autre. Il y a
				plusieurs espèces d'insecte pollinisateur:
				<div class="reponse"></div>
			</div>
		</section>
		<section>
			<button id="insecteNonPollinisateur">Les insectes non pollinisateurs :</button>
			<div class="container">
				Il y a plusieurs espèces d'insecte non pollinisateur:<br>

				Les lépidoptères :<br>
				Ce sont les papillons. En France, on compte 5200 espèces de
				papillons.<br>

				Les hyménoptères :<br>
				Ce vaste ordre compte 8000 espèces en France qui regroupe de nombreux
				les guepes , les bourdons et les fourmis.<br>

				Les diptères :<br>
				Ce sont les mouches, mais aussi les syrphes et les
				bombyles qui font partie de cet ordre qui compte 8000 espèces en
				France.<br>

				Les coléoptères :<br>
				Ce sont tous les insectes à carapace, type scarabées, gendarmes,
				coccinelles,cétoine dorée, trichie commune ou
				encore l'oedemere noble. On compte 10.000 espèces en France.<br>
				<div class="reponse"></div>

			</div>

		</section>
		<section>
			<button id="mammifere">Les mammifères :</button>
			<div class="container">
				Classe d'animaux vertébrés, vivipares, qui sont caractérisés
				essentiellement par la présence de mamelles, d'un coeur à quatre
				cavités, d'un système nerveux et encéphalique développé, par une
				température interne constante et une respiration de type pulmonaire.
				<div class="reponse"></div>
			</div>


		</section>
		<section>
			<button id="oiseaux">Les oiseaux :</button>
			<div class="container">
				Animal ovipare appartenant à la classe des vertébrés
				tétrapodes, à sang chaud, au corps couvert de plumes, dont la tête
				est munie d'un bec cornu dépourvu de dents, dont les membres
				postérieurs sont des pattes et les membres antérieurs des ailes, ce
				qui le rend le plus souvent apte au vol.
				<div class="reponse"></div>

			</div>

		</section>
		<section>
			<button id="reptile">Les reptiles :</button>
			<div class="container">
				Ce sont des animaux vertébrés ovipares ou ovovivipares
				comprenant les tortues, les crocodiles, les sauriens (caméléon,
				iguane, lézard, orvet) et les serpents, caractérisés par une peau
				écailleuse, une fécondation interne, une température interne
				dépendante des conditions climatiques et dont certains sont venimeux.
				<div class="reponse"></div>

			</div>

		</section>
		<section>
			<button id="batracien">Les batraciens :</button>
			<div class="container">
				Ce sont des animaux à sang froid, à peau nue et humide, à
				respiration branchiale chez les larves (les têtards), presque
				toujours pulmo-cutanée chez les adultes, et dont le type est la
				grenouille.
				<div class="reponse"></div>

			</div>

		</section>
	</div>
	<script src="../js/insecte.js"></script>
</body>

</html>