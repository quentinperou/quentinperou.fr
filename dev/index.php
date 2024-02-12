<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Quentin Pérou | DEV</title>
    <meta name="description" content="Portfolio de Quentin Pérou, photographe et vidéaste." />
    <meta name="author" content="Quentin Pérou" />
    <meta name="keywords" content="quentin perou quentinperou portfolio mmi laval tsi angouleme audiovisuel dev">
    <meta name="language" content="FR">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!--    MISE EN FORME AFFICHAGE LIEN    -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:creator" content="@quentinperou" />
    <meta property="og:url" content="https://quentinperou.fr" />
    <meta property="og:title" content="Quentin Pérou | DEV" />
    <meta property="og:description" content="Portfolio de Quentin Pérou, photographe et vidéaste." />
    <meta property="og:image" content="https://quentinperou.fr/images/photo_profil-4-c.jpg">

    <!--    ICON DU SITE    -->
    <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon" />

    <!--    TYPOGRAPHIE    -->
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

    <!--    CSS    -->
    <link rel="stylesheet" href="../style.css" type="text/css" />

    <!--    JS    -->
    <script src="../script.js"></script>

</head>

<body>
    <header>
        <div class="enteteContainer">
            <div class="websiteLogo">
                <a href="../" title="Revenir à l'accueil">
                    <span class="titreEnteteSite">Quentin Pérou</span>
                </a>
            </div>
            <nav class="menu">
                <a href="../" class="menuElement">Accueil</a>
                <a href="../photographie/" class="menuElement">Photographie</a>
                <a href="../video/" class="menuElement">Vidéo</a>
                <a href="../3d/" class="menuElement">3D</a>
                <a href="#" class="menuElement selected">DEV</a>
                <!-- <a href="#contact" class="menuElement">Contact</a> -->
            </nav>
            <div class="burgerMenu " title="Menu">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </div>
    </header>

    <main>

        <section id="projets">
            <h2>Mes projets</h2>
            <div class="contenuSectionProjets">

                <div class="projet">
                    <div>
                        <img src="./images/preview.png">
                    </div>
                    <div>
                        <h3>Twitch-HighlightedChat</h3>
                        <span class="projetAnnee">2021</span>
                        <p>Sur Twitch, il existe une fonctionnalité appelée les points de chaîne, que l'on accumule au fur et à mesure que l'on regarde une chaîne en live. Et avec ces points de chaîne, on peut récupérer des récompense, notamment un message mis en avant dans le tchat.</p>
                        <p>En 2020, alors que je regardais le live du streamer Ponce sur Twitch, je me suis rendu compte que les streamers rataient souvent ses fameux messages et que les viewers les copiait-collait jusqu'à ce que le streamer le voie pour que les points n'aient pas été dépensés pour rien.</p>
                        <p>J'ai donc développer un petit site qui une fois relier au tchat de son choix, afficherai uniquement les messages en avant. </p>
                        <p>Afin de mettre à disposition au plus grand nombre de personnes, j'ai choisi de rédiger l'interface en anglais.</p>
                        <a href="https://github.com/quentinperou/Twitch-HighlightedChat" class="bouton" target="_blank">Lien du GitHub</a>
                        <a href="https://highlightedchat.quentinperou.fr/" class="bouton" target="_blank">Lien du site</a>
                    </div>
                </div>

            </div>
            <div style="text-align: center; margin-top:20px;">
                <a href="https://github.com/quentinperou" class="bouton btFill" target="_blank">Mon GitHub</a>

            </div>
        </section>

        <?php require_once('../require/contact.html'); ?>

    </main>

    <?php require_once('../require/footer.html'); ?>

</body>

</html>