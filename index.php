<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Quentin Pérou | Portfolio</title>
    <meta name="description" content="Portfolio de Quentin Pérou, photographe et vidéaste." />
    <meta name="author" content="Quentin Pérou" />
    <meta name="keywords" content="quentin perou quentinperou portfolio mmi laval tsi angouleme audiovisuel videaste photographe">
    <meta name="language" content="FR">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!--    MISE EN FORME AFFICHAGE LIEN    -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:creator" content="@quentinperou" />
    <meta property="og:url" content="https://quentinperou.fr" />
    <meta property="og:title" content="Quentin Pérou | Portfolio" />
    <meta property="og:description" content="Portfolio de Quentin Pérou, photographe et vidéaste." />
    <meta property="og:image" content="https://quentinperou.fr/images/photo_profil-4-c.jpg">

    <!--    ICON DU SITE    -->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />

    <!--    TYPOGRAPHIE    -->
    <?php require_once('require/typo.html'); ?>

    <!--    CSS    -->
    <link rel="stylesheet" href="style.css" type="text/css" />

    <!--    JS    -->
    <script src="script.js"></script>
</head>

<body>
    <header>
        <div class="enteteContainer">
            <div class="websiteLogo">
                <a href="#" title="Revenir à l'accueil">
                    <span class="titreEnteteSite">QuentinPérou</span>
                </a>
            </div>
            <nav class="menu">
                <a href="#" class="menuElement selected">Accueil</a>
                <a href="./photographie/" class="menuElement">Photographie</a>
                <a href="./video/" class="menuElement">Vidéo</a>
                <!-- <a href="./3d/" class="menuElement">3D</a> -->
                <a href="./projets/" class="menuElement">Projets</a>
                <!-- <a href="#contact" class="menuElement">Contact</a> -->
            </nav>
            <div class="burgerMenu " title="Menu">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </div>
    </header>

    <section id="accueil">
        <div>
            <h1 class="titreAccueil">Quentin Pérou</h1>
            <p class="sousTitreAccueil">Photographe et vidéaste</p>
        </div>
        <a href="#projets" class="scrollme">
            <svg width="30px" height="20px">
                <path stroke="#ffffff" fill="none" stroke-width="2px" d="M2.000,5.000 L15.000,18.000 L28.000,5.000 " />
            </svg>
        </a>
        <div class="fondAcceuil">
            <!-- <img src="images/header-accueil.jpg" alt=""> -->
            <!-- <video id="videoH" preload="none" muted loop src="https://quentinperou.dyjix.fr/showreel-home-website.webm" type="video/webm"></video> -->
            <video id="videoH" preload="none" muted loop src="home-website.webm" type="video/webm"></video>
        </div>
        <script src="mobileAndTabletCheck.js"></script>
        <script>
            //lecture de la vidéo en fonction du device - si mobile, pas de lecture video
            // if (mobileAndTabletCheck() == false)
            document.querySelector('#videoH').play();

            //zoom dans la vidéo au scroll
            window.addEventListener('scroll', function() {
                var scroll = window.pageYOffset;
                var video = document.querySelector('.fondAcceuil');
                video.style.transform = 'scale(' + map_range(scroll, 0, window.innerHeight, 1, 1.6) + ')';
            });

            function map_range(value, low1, high1, low2, high2) {
                return low2 + (high2 - low2) * (value - low1) / (high1 - low1);
            }
        </script>
    </section>

    <main>

        <section id="projets">
            <h2>Mon showreel !</h2>
            <iframe id="showreel" src="https://www.youtube-nocookie.com/embed/t_VYn4xi-I4?showinfo=0&rel=0&vq=hd1080" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <style>
                #showreel {
                    /* height: 550px; */
                    width: 100%;
                    margin-top: 30px;
                    margin-bottom: 100px;
                    aspect-ratio: 16/9;
                }

                /* @media screen and (max-width: 800px) {
                    #showreel {
                        height: 350px;
                    }
                } */
            </style>
            <!-- <a href="https://quentinperou.fr/showreel" class="bouton" target="_blank">Voir mon Showreel</a> -->

            <!-- <h2>Ma dernière réalisation</h2>
            <div class="contenuSectionProjets">
                <div class="projet" style="margin: 30px 0 60px 0;">
                    <div>
                        <iframe src="https://www.youtube-nocookie.com/embed/of8xKUOjzvw?showinfo=0&rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div>
                        <h3>Vidéo "4 ANNÉES VUES DU CIEL"</h3>
                        <p>Après plusieurs années à sillonner la France avec mon drone et à accumuler les images, j'ai décidé de faire un montage afin de partager ces beaux paysages ! </p>
                        <p>Les plans ont été filmés par mes soins avec un DJI Mavic Air puis montés sur le logiciel Adobe Premiere Pro.</p>
                    </div>
                </div>
            </div> -->
            <!-- <div style="margin-bottom: 40px;">
                <a href="./video/" class="bouton btFill" style="margin: 10px 10px 10px 0;">Voir mes réalisations vidéo</a>
                <a href="./photographie/" class="bouton btFill" style="margin: 10px 10px 10px 0;">Voir mes photographies</a>
            </div> -->
        </section>

        <section id="a-propos">
            <h2>À propos de moi</h2>
            <div class="contenuSectionApropos">
                <div>
                    <img id="photoProfil" src="images/photo_profil-<?php echo (rand(2, 4)); ?>-c.jpg" alt="photo de Quentin Pérou" title="Clique pour voir...">
                </div>
                <div>
                    <h3>Quentin Pérou</h3>
                    <p><strong>Passionné d'audiovisuel</strong> depuis de nombreuses années, en 2019 suite à mon BAC Technologique je me suis orienté vers un DUT Métiers du Multimédia et de l'Internet (MMI) puis vers une <strong>Licence Professionnelle Techniques du Son et de l'Image</strong> (TSI). En parallèle de mes études, je réalisais des photographies pour le loisir ainsi que sur des évènements étudiants.</p>
                    <p>En 2022, j’ai effectué un stage de 4 mois en tant que <strong>Community Manager</strong> au sein d’un camping du groupe Capfun. J’ai pu y développer mes compétences en <strong>photographie</strong> ainsi que découvrir puis réaliser la <strong>régie son et lumière</strong> des spectacles et animations. Cette expérience m’a apporté beaucoup sur le plan humain et professionnel, notamment en me faisant gagner en autonomie.</p>
                    <p>Depuis avril 2023, j'ai rejoint l'équipe des magasins Concept Store Photo en tant que vendeur et animateur commercial. </p>
                    <!-- <p>Je suis <strong>actuellement à la recherche d’un emploi</strong> en tant que cadreur/monteur ou réalisateur live et suis à l'écoute de vos propositions !</p> -->
                    <p>Je reste cependant <strong>ouvert à vos propositions</strong> sur des postes comme cadreur/monteur ou réalisateur live.</p>
                    <!-- <p>Je suis également disponible pour des missions de <strong>photographie</strong> et de <strong>vidéo</strong> (mariage, évènementiel, immobilier, etc.).</p> -->
                    <div class="div-a-propos-lien">
                        <!-- <a href="https://drive.google.com/file/d/1TRwvM2xTOazDUme9OiBqHHkWhjWb-yud/view" class="bouton" target="_blank">Mon CV</a> -->
                    </div>
                </div>
            </div>
            <script src="./a-propos.js"></script>
        </section>

        <?php require_once('require/contact.html'); ?>

    </main>

    <?php require_once('require/footer.html'); ?>

</body>

</html>