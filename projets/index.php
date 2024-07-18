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
    <meta property="og:title" content="Quentin Pérou | Projets" />
    <meta property="og:description" content="Portfolio de Quentin Pérou, photographe et vidéaste." />
    <meta property="og:image" content="https://quentinperou.fr/images/photo_profil-4-c.jpg">

    <!--    ICON DU SITE    -->
    <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon" />

    <!--    TYPOGRAPHIE    -->
    <?php require_once('../require/typo.html'); ?>

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
                    <span class="titreEnteteSite">QuentinPérou</span>
                </a>
            </div>
            <nav class="menu">
                <a href="../" class="menuElement">Accueil</a>
                <a href="../photographie/" class="menuElement">Photographie</a>
                <a href="../video/" class="menuElement">Vidéo</a>
                <!-- <a href="../3d/" class="menuElement">3D</a> -->
                <a href="../projets/" class="menuElement selected">Projets</a>
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
            <!-- <p>Sur cette page vous trouverez mes différents projets dans d'autre dommaines que la vidéo ou la photographie.</p> -->
            <div class="contenuSectionProjets">

                <div class="projet">
                    <div class="projet-image">
                        <img src="./images/bigCineLive.webp">
                        <img class="projet-background" src="./images/bigCineLive.webp">
                    </div>
                    <div class="projet-texte">
                        <h3>Overlay de l'émission BigCineLive sur Twitch</h3>
                        <span class="projetType">Graphisme & Motion Design / 3D / OBS Studio / Développement WEB</span>
                        <span class="projetAnnee">2023</span>
                        <p>Pour l'émission <i>BigCineLive</i> créée par Benjamin Thouet & Emmanuel Anthony et diffusée sur la plateforme Twitch, j'ai été responsable de la production des overlays et des miniatures. </p>
                        <p>Pour les écrans de début et de fin de stream, j'ai créé un décor en 3D sur Blender puis exporté des prises de vues vers After Effects afin d'ajouter le motion design.</p>
                        <p>J'ai également configurer OBS Studio afin d'afficher les différentes caméras lors des Live. Les habillages de texte interactif (classement, timer, synthés) ont été développés en HTML/CSS/JS puis implémentés à OBS.</p>
                        <a href="https://youtu.be/bGtx2jMKf9o" class="bouton" target="_blank" youtubePlayer>Le waiting screen</a>
                        <a href="https://youtu.be/qiyNTLT-K7M" class="bouton" target="_blank" youtubePlayer>Un replay sur YouTube</a>
                        <!-- <a href="https://twitch.tv/bigbt_" class="bouton" target="_blank">La chaine Twitch de BigBT</a> -->
                    </div>
                </div>

                <div class="projet">
                    <div class="projet-image">
                        <img src="./images/preview-HighlightedChat-v2.webp">
                        <img class="projet-background" src="./images/preview-HighlightedChat-v2.webp">
                    </div>
                    <div class="projet-texte">
                        <h3>Twitch-HighlightedChat</h3>
                        <span class="projetType">Développement WEB</span>
                        <span class="projetAnnee">2021</span>
                        <p>Lors des diffusions live sur la plateforme Twitch, les viewers peuvent mettre des messages en avant dans le tchat contre des points de chaîne accumulés lors du visionnage.</p>
                        <p>Il était alors difficile pour les streamer de voir les messages en avant sans les perdre dans le flux de messages.
                            J'ai donc décidé de proposer une solution simple à ce problème : un streamer peut relier son tchat à mon site qui affiche alors uniquement les messages en avant.</p>
                        <p>Aujourd'hui, le streamer Ponce utilise le site au quotidien.</p>
                        <p>L'outil à été rédigé en anglais afin de profiter à un plus grand nombre d'utilisateurs.</p>
                        <a href="https://github.com/quentinperou/Twitch-HighlightedChat" class="bouton" target="_blank">Lien du GitHub</a>
                        <a href="https://highlightedchat.quentinperou.fr/" class="bouton" target="_blank">Lien du site</a>
                    </div>
                </div>


            </div>
            <!-- <div style="text-align: center; margin-top:20px;">
                <a href="https://github.com/quentinperou" class="bouton btFill" target="_blank">Mon GitHub</a>
            </div> -->

            <div class="imageViewer videoViewer">
                <svg class="close" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="white">
                    <rect transform="rotate(45)" ry="0" y="-1" x="4.3137083" height="2" width="14" id="rect1006" />
                    <rect transform="rotate(-45)" ry="0" y="10.313708" x="-7" height="2" width="14" id="rect1006-5" />
                </svg>

                <iframe src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <script src="../video/video.js"></script>
        </section>

        <?php require_once('../require/contact.html'); ?>

    </main>

    <?php require_once('../require/footer.html'); ?>

</body>

</html>