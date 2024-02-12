<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Quentin Pérou | 3D</title>
    <meta name="description" content="Portfolio de Quentin Pérou, photographe et vidéaste." />
    <meta name="author" content="Quentin Pérou" />
    <meta name="keywords" content="quentin perou quentinperou portfolio mmi laval tsi angouleme audiovisuel">
    <meta name="language" content="FR">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!--    MISE EN FORME AFFICHAGE LIEN    -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:creator" content="@quentinperou" />
    <meta property="og:url" content="https://quentinperou.fr" />
    <meta property="og:title" content="Quentin Pérou | 3D" />
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
                <a href="#" class="menuElement selected">3D</a>
                <a href="../dev/" class="menuElement">DEV</a>
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
            <h2>Mes créations 3D sur Blender</h2>
            <div class="contenuSectionProjets" style="margin-top: 20px;">

                <div class="projet3d">
                    <div class="gallerie">
                        <figure>
                            <video autoplay muted loop src="./images/burger 0001-0060.webm"></video>
                            <figcaption>Animation d'un burger</figcaption>
                        </figure>
                        <figure>
                            <img src="./images/glass-of-ice-tea.webp" alt="">
                            <figcaption>Verre d'ice-tea</figcaption>
                        </figure>
                        <figure>
                            <img src="./images/chocolat-chaud7.webp" alt="">
                            <figcaption>Tasse de chocolat chaud</figcaption>
                        </figure>
                        <figure>
                            <img src="./images/palmier2.webp" alt="">
                            <figcaption>Petits palmiers sur une plage</figcaption>
                        </figure>
                        <figure>
                            <img src="./images/pot-plante9.webp" alt="">
                            <figcaption>Vera l'aloe vera</figcaption>
                        </figure>
                        <figure>
                            <img src="./images/cadeaux-noel3.webp" alt="">
                            <figcaption>Cadeaux de Noël</figcaption>
                        </figure>
                        <figure>
                            <img src="./images/candy2.webp" alt="">
                            <figcaption>Sucre d'orge</figcaption>
                        </figure>
                        <figure>
                            <img src="./images/mini-monde-lowpoly3-psd.webp" alt="">
                            <figcaption>Une mini planète</figcaption>
                        </figure>
                        <figure>
                            <img src="./images/Pot-a-crayons-3D.webp" alt="">
                            <figcaption>Le pot à crayon du reportage sur le métier d'opérateur XR.</figcaption>
                        </figure>
                        <figure>
                            <video autoplay muted loop src="./images/cut-loop.webm"></video>
                            <figcaption>Une animation qui boucle à l'infini</figcaption>
                        </figure>

                        <figure style="width: 40%;">
                            <img src="./images/metro.blend-eevee1.webp" alt="">
                            <figcaption>Une gare de métro</figcaption>
                        </figure>
                        <figure style="width: 40%;">
                            <img src="./images/neon.blend-eevee.webp" alt="">
                            <figcaption>Une modélisation issue d'un tutoriel que j'ai suivi afin d'apprendre les bases du logiciel Blender.</figcaption>
                        </figure>

                        <figure>
                            <img src="./images/Alain-le-plot2.webp" alt="">
                            <figcaption>Alain le plot - J'ai pas plus d'explication</figcaption>
                        </figure>
                        <figure>
                            <img src="./images/ice-cream2.webp" alt="">
                            <figcaption>Juste une glace</figcaption>
                        </figure>
                        <figure>
                            <img src="./images/AmongUs.webp" alt="">
                            <figcaption>Un couloir inspiré du jeu Among Us</figcaption>
                        </figure>
                    </div>
                    <div style="text-align: center; margin-top:20px;">
                        <a href="https://instagram.com/byquentin_" class="bouton btFill" target="_blank">Mon Instagram 3D</a>

                    </div>
                </div>

                <div class="projet3d">
                    <div>
                        <h3>TSI Studio</h3>
                        <p>L'objectif de ce projet était de créer un décor de studio avec un maximum de références à ma promotion de LP TSI.</p>
                    </div>
                    <div class="gallerie">
                        <figure>
                            <img src="./images/tsi-studio2.webp" alt="">
                            <figcaption>Un gros plan sur un détail de la scène</figcaption>
                        </figure>
                        <figure>
                            <img src="./images/tsi-studio1.webp" alt="">
                            <figcaption>Une capture d'écran de la 3D sans les textures</figcaption>
                        </figure>
                        <figure>
                            <img src="./images/tsi-studio3.webp" alt="">
                            <figcaption>Rendu final</figcaption>
                        </figure>
                    </div>
                </div>

                <div class="projet3d">
                    <div>
                        <h3>Ballons cœur</h3>
                        <p>J'ai souhaité faire une modélisation 3D dans le style St-Valentin. </p>
                    </div>
                    <div class="gallerie">
                        <figure>
                            <img src="./images/Love-Balloon1.webp" alt="">
                            <figcaption>Des ballons en forme de cœur sur un fond lumineux</figcaption>
                        </figure>
                        <figure>
                            <img src="./images/Love-Balloon2.webp" alt="">
                            <figcaption>Les ballons sur un fond sombre</figcaption>
                        </figure>
                        <figure>
                            <video autoplay muted loop src="./images/love-ballon-v1-evee_0001-0150.webm"></video>
                            <figcaption>Loop vidéo</figcaption>
                        </figure>
                    </div>
                </div>

                <div class="projet3d">
                    <div>
                        <h3>Emoji baleine</h3>
                        <p>Une blague partie trop loin...</p>
                    </div>
                    <div class="gallerie">
                        <figure style="background-color: #163040;">
                            <img src="./images/whale-emoji2.webp" alt="">
                            <figcaption>La Baleine au format PNG</figcaption>
                        </figure>
                        <figure>
                            <img src="./images/whale-demo3.webp" alt="">
                            <figcaption>Vue du dessus dans un décor.</figcaption>
                        </figure>
                        <figure>
                            <img src="./images/whale-demo2.webp" alt="">
                            <figcaption>Mise en situation dans un environnement style futuriste.</figcaption>
                        </figure>
                        <figure>
                            <video autoplay muted loop src="./images/whale-demo.webm"></video>
                            <figcaption>Animation vidéo de la baleine.</figcaption>
                        </figure>
                    </div>
                </div>

                <div class="projet3d">
                    <div>
                        <h3>Coucher de soleil</h3>
                        <p>Afin d'apprendre les bases de Blender, j'ai réalisé ce coucher de soleil sur l'océan.</p>
                    </div>
                    <div class="gallerie">
                        <figure style="background-color: #163040;">
                            <img src="./images/sunset.blend1.webp" alt="">
                            <figcaption>Un couher de soleil sur l'océan</figcaption>
                        </figure>
                        <figure>
                            <video autoplay muted loop src="./images/sunset.webm"></video>
                            <figcaption></figcaption>
                        </figure>
                    </div>
                </div>


            </div>


            <div class="imageViewer">
                <svg class="close" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="white">
                    <rect transform="rotate(45)" ry="0" y="-1" x="4.3137083" height="2" width="14" id="rect1006" />
                    <rect transform="rotate(-45)" ry="0" y="10.313708" x="-7" height="2" width="14" id="rect1006-5" />
                </svg>

                <img src="" alt="" hidden>
                <video controls autoplay muted loop src="" hidden></video>
                <figcaption></figcaption>

                <svg class="gallerie_nav nav_back" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6 1.41 1.41z" />
                </svg>

                <svg class="gallerie_nav nav_next" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6 1.41 1.41z" />
                </svg>
            </div>
            <script src="./imageViewer3d.js"></script>


        </section>

        <?php require_once('../require/contact.html'); ?>

    </main>

    <?php require_once('../require/footer.html'); ?>

</body>

</html>