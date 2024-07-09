<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Quentin Pérou | Mentions Légales</title>
    <meta name="description" content="Portfolio de Quentin Pérou, photographe et vidéaste." />
    <meta name="author" content="Quentin Pérou" />
    <meta name="keywords" content="quentin perou quentinperou  web portfolio mmi laval">
    <meta name="language" content="FR">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!--    MISE EN FORME AFFICHAGE LIEN    -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:creator" content="@quentinperou" />
    <meta property="og:url" content="https://quentinperou.fr" />
    <meta property="og:title" content="Quentin Pérou | Mentions Légales" />
    <meta property="og:description" content="Portfolio de Quentin Pérou, photographe et vidéaste." />
    <meta property="og:image" content="https://quentinperou.fr/images/photo_profil-4-c.jpg">

    <!--    ICON DU SITE    -->
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon" />

    <!--    TYPOGRAPHIE    -->
    <?php require_once('require/typo.html'); ?>

    <!--    CSS    -->
    <link rel="stylesheet" href="./style.css" type="text/css" />

    <!--    JS    -->
    <script src="./script.js"></script>
</head>

<body>
    <header>
        <div class="enteteContainer">
            <div class="websiteLogo">
                <a href="./" title="Revenir à l'accueil">
                    <span class="titreEnteteSite">QuentinPérou</span>
                </a>
            </div>
            <nav class="menu">
                <a href="./" class="menuElement">Accueil</a>
                <a href="./photographie/" class="menuElement">Photographie</a>
                <a href="./video/" class="menuElement">Vidéo</a>
                <a href="./3d/" class="menuElement">3D</a>
                <a href="./projets/" class="menuElement">Projets</a>
            </nav>
            <div class="burgerMenu " title="Menu">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </div>
    </header>

    <main>

        <section>
            <h2>Mentions Légales</h2>
            <div style="font-size: 16px;">
                <style>
                    h4 {
                        margin-bottom: 0;
                    }

                    p {
                        margin-top: 0;
                    }
                </style>
                <p>
                    En vigueur au 01/04/2020 Conformément aux dispositions des Articles 6-III et 19 de la Loi n°2004-575 du 21 juin 2004 pour la Confiance dans l’économie numérique, dite L.C.E.N., il est porté à la connaissance des Utilisateurs du site quentinperou.fr les présentes mentions légales.
                    <br>
                    La connexion et la navigation sur le site quentinperou.fr par l’Utilisateur implique acceptation intégrale et sans réserve des présentes mentions légales.
                    <br>
                    Ces dernières sont accessibles sur le site à la rubrique « Mentions légales ».
                </p>

                <h4>ARTICLE 1 : L’ÉDITEUR</h4>
                <p>L’édition et la direction de la publication du site www.quentinperou.fr est assurée par Quentin PEROU, domicilié à 44300 NANTES, dont l'adresse e-mail est quentinperou.contact@gmail.com.</p>

                <h4>ARTICLE 2 : L’HÉBERGEUR</h4>
                <p>L'hébergeur du site quentinperou.fr est la Société OVH, dont le siège social est situé au 2 rue Kellermann – BP 80157 59053 ROUBAIX CEDEX 1.</p>

                <h4>ARTICLE 3 : ACCÈS AU SITE</h4>
                <p>Le site est accessible par tout endroit, 7j/7, 24h/24 sauf cas de force majeure, interruption programmée ou non et pouvant découler d’une nécessité de maintenance.
                    <br>
                    En cas de modification, interruption ou suspension des services le site quentinperou.fr ne saurait être tenu responsable.
                </p>

                <h4>ARTICLE 4 : COLLECTE DES DONNÉES</h4>
                <p>Le site est exempté de déclaration à la Commission Nationale Informatique et Libertés (CNIL) dans la mesure où il ne collecte aucune donnée concernant les utilisateurs.</p>

                <h4>ARTICLE 5 : COOKIES</h4>
                <p>L’Utilisateur est informé que lors de ses visites sur le site, un cookie peut s’installer automatiquement sur son logiciel de navigation.
                    En naviguant sur le site, il les accepte.
                    <br>
                    Un cookie est un élément qui ne permet pas d’identifier l’Utilisateur mais sert à enregistrer des informations relatives à la navigation de celui-ci sur le site Internet. L’Utilisateur pourra désactiver ce cookie par l’intermédiaire des paramètres figurant au sein de son logiciel de navigation.
                </p>

                <h4>ARTICLE 6 : PROPRIÉTÉ INTELLECTUELLE</h4>
                <p>Toute utilisation, reproduction, diffusion, commercialisation, modification de toute ou partie du site quentinperou.fr , sans autorisation de l’Editeur est prohibée et pourra entraînée des actions et poursuites judiciaires telles que notamment prévues par le Code de la propriété intellectuelle et le Code civil.</p>


                <br>
                <p>Le code source du site est disponible sur GitHub : <a href="https://github.com/quentinperou/quentinperou.fr" target="_blank">https://github.com/quentinperou/quentinperou.fr</a></p>

            </div>
        </section>

    </main>

    <footer>
        <p>© 2023 Quentin Pérou </p>
    </footer>

</body>

</html>