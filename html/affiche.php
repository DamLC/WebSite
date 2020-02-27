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
        <a href="index.php" class="active">Accueil</a>
        <a href="insectes.php">Des insectes</a>
        <a href="lien.php">liens utile</a>
        <a href="inscription.php">Inscription</a>
        <a href="admin.php">Espace admin</a>
    </div>

    <div id="container">

        <section>
            <button id="admin">affiche la liste des admins</button>
            <div class="container">
               
                <div class="reponse"></div>

            </div>

        </section>
        <section>
            <button id="visiteurnature">affiche la liste des données</button>
            <div class="container">
                <div class="reponse"></div>

            </div>

        </section>
    </div>
    <script type="text/javascript" src="../js/afficher.js"></script>
</body>


</html>