<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Quentin Pérou | Vidéo</title>
    <meta name="description" content="Portfolio de Quentin Pérou, photographe et vidéaste." />
    <meta name="author" content="Quentin Pérou" />
    <meta name="keywords" content="quentin perou quentinperou portfolio mmi laval tsi angouleme audiovisuel videaste photographe">
    <meta name="language" content="FR">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!--    MISE EN FORME AFFICHAGE LIEN    -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:creator" content="@quentinperou" />
    <meta property="og:url" content="https://quentinperou.fr" />
    <meta property="og:title" content="Quentin Pérou | Vidéo" />
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
                <a href="#" class="menuElement selected">Vidéo</a>
                <!-- <a href="../3d/" class="menuElement">3D</a> -->
                <a href="../projets/" class="menuElement">Projets</a>
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
            <h2>Mes réalisations</h2>
            <div class="contenuSectionProjets" style="margin-top: 30px;">
                <h3 style="margin-bottom: 20px;">Format verticaux</h3>
                <div class="contenuSectionProjetsVertical">
                    <div class="gallerieVertical-container">
                        <div class="gallerieVertical-item">

                            <div class="projetVertical">
                                <img src="./images/video-fuji-gfx100II.webp" alt="">
                                <div>
                                    <h3>Présentation produit : Fujifilm GFX100II</h3>
                                    <span class="projetAnnee" hidden>2024</span>
                                    <p hidden></p>
                                    <a href="https://youtube.com/shorts/UhnSbY5a2Zo" class="bouton btInvert" target="_blank" hidden>Voir sur YouTube</a>
                                </div>
                            </div>
                            <!-- <div class="projetVertical">
                                <img src="./images/video-nikon-z8.webp" alt="">
                                <div>
                                    <h3>Présentation produit : Nikon Z8</h3>
                                    <span class="projetAnnee" hidden>2023</span>
                                    <p hidden></p>
                                    <a href="https://youtube.com/shorts/bOo7NpoF_gc" class="bouton btInvert" target="_blank" hidden>Voir sur YouTube</a>
                                </div>
                            </div> -->
                            <div class="projetVertical">
                                <img src="./images/video-Bienvenue-concept-Store-Photo2.webp" alt="">
                                <div>
                                    <h3>Vidéo de présentation du magasin Concept Store Photo Nantes</h3>
                                    <span class="projetAnnee" hidden>2023</span>
                                    <p hidden></p>
                                    <a href="https://youtube.com/shorts/lYdqjxQmYpg" class="bouton btInvert" target="_blank" hidden>Voir sur YouTube</a>
                                    <a href="https://www.instagram.com/reel/C524S1rqBjv/" class="bouton btInvert" target="_blank" hidden>Voir sur Instagram</a>
                                </div>
                            </div>
                            <div class="projetVertical">
                                <img src="./images/video-noel-csp.webp" alt="">
                                <div>
                                    <h3>Vidéo de noël de Concept Store Photo</h3>
                                    <span class="projetAnnee" hidden>2023</span>
                                    <p hidden></p>
                                    <!-- <span class="bouton btFillInvert enSavoirPlus" target="_blank">En savoir plus</span> -->
                                    <a href="https://youtube.com/shorts/S6PclI447Ig" class="bouton btInvert" target="_blank" hidden>Voir sur YouTube</a>
                                    <!-- <a href="https://www.instagram.com/reel/C0CNQTJqkpN/" class="bouton btInvert" target="_blank" hidden>Voir sur Instagram</a> -->
                                </div>
                            </div>
                            <div class="projetVertical">
                                <img src="./images/video-canon-r7.webp" alt="">
                                <div>
                                    <h3>Présentation produit : Canon R7</h3>
                                    <span class="projetAnnee" hidden>2023</span>
                                    <p hidden>En tant que salarié chez Concept Store Photo j'ai réalisé intégralement cette vidéo de présentation du boitier hybride de chez Canon, le EOS R7. </p>
                                    <!-- <span class="bouton btFillInvert enSavoirPlus" target="_blank">En savoir plus</span> -->
                                    <!-- <a href="https://www.instagram.com/reel/C0zH7d3KB2s" class="bouton btInvert" target="_blank" hidden>Voir sur Instagram</a> -->
                                    <a href="https://youtube.com/shorts/QfzT6ghnNVw" class="bouton btInvert" target="_blank" hidden>Voir sur YouTube</a>
                                </div>
                            </div>
                            <div class="projetVertical">
                                <img src="./images/video-sony-a6700.webp" alt="">
                                <div>
                                    <h3>Présentation produit : Sony a6700</h3>
                                    <span class="projetAnnee" hidden>2023</span>
                                    <p hidden>Une vidéo verticale pour la communication Instagram de mon employeur. Du cadrage à la post-production je maitrise 100% de la création de cette vidéo. </p>
                                    <!-- <span class="bouton btFillInvert enSavoirPlus" target="_blank">En savoir plus</span> -->
                                    <a href="https://youtube.com/shorts/Kh52-sd8DKo" class="bouton btInvert" target="_blank" hidden>Voir sur YouTube</a>
                                    <!-- <a href="https://www.instagram.com/reel/CyneT-SqhQc" class="bouton btInvert" target="_blank" hidden>Voir sur Instagram</a> -->
                                </div>
                            </div>
                            <div class="projetVertical">
                                <img src="./images/julie.webp" alt="">
                                <div>
                                    <h3>Court-métrage "Julie !"</h3>
                                    <span class="projetAnnee" hidden>2022</span>
                                    <p hidden>"Julie !" est un court-métrage au format vertical réalisé dans le cadre du festival Courant 3D d'Angoulême. Sur ce projet, j'ai été Directeur de la photographie. J'ai également participé au montage et réalisé l'étalonnage. Par ailleurs j'étais photographe plateau durant le tournage.</p>
                                    <!-- <span class="bouton btFillInvert enSavoirPlus" target="_blank">En savoir plus</span> -->
                                    <a href="https://youtu.be/T1gQjSipqpI" class="bouton btInvert" target="_blank" hidden>Voir sur YouTube</a>
                                </div>
                            </div>
                            <div class="projetVertical">
                                <img src="./images/longWayToGo.webp" alt="">
                                <div>
                                    <h3>Court-métrage / clip "Long Way To Go"</h3>
                                    <span class="projetAnnee" hidden>2022</span>
                                    <p hidden>Pour cette vidéo réalisée en vertical pour le festival Courant 3D, j'ai été cadreur et photographe plateau.</p>
                                    <!-- <span class="bouton btFillInvert enSavoirPlus" target="_blank">En savoir plus</span> -->
                                    <a href="https://youtu.be/fjDIPealt2o" class="bouton btInvert" target="_blank" hidden>Voir sur YouTube</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <svg class="gallerie_nav nav_back" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6 1.41 1.41z" />
                    </svg>
                    <svg class="gallerie_nav nav_next" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6 1.41 1.41z" />
                    </svg>

                    <div class="imageViewer videoVerticalViewer">
                        <svg class="close" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="white">
                            <rect transform="rotate(45)" ry="0" y="-1" x="4.3137083" height="2" width="14" id="rect1006" />
                            <rect transform="rotate(-45)" ry="0" y="10.313708" x="-7" height="2" width="14" id="rect1006-5" />
                        </svg>

                        <iframe src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <div></div>
                    </div>
                    <script src="./gallerieVertical.js"></script>
                </div>
            </div>

            <h3 style="margin-top: 80px; width: 100%;">Format horizontaux</h3>
            <style>
                .projet:first-child {
                    margin-top: 20px;
                }
            </style>
            <div class="contenuSectionProjets">

                <!-- <div class="projet">
                    <div>
                        <img src="./images/showreel2023.webp" alt="">
                    </div>
                    <div class="projet-texte">
                        <h3>Mon SHOWREEL 2023</h3>
                        <p>Dans le cadre de mon actuelle recherche d'emploi, j'ai réalisé cette bande-démo afin de vous présenter rapidement mes compétences et réalisations.</p>
                        <p>En cours de remontage…</p>
                        <a href="https://youtu.be/mteXXkZctvc" class="bouton" target="_blank">Voir la vidéo</a>
                    </div>
                </div> -->

                <div class="projet">
                    <div>
                        <img src="./images/miniature-video-4-ans-vue-du-ciel.webp" alt="">
                        <!-- <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/of8xKUOjzvw?showinfo=0&rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
                    </div>
                    <div class="projet-texte">
                        <h3>Vidéo "4 ANNÉES VUES DU CIEL"</h3>
                        <span class="projetAnnee">2023</span>
                        <p>Après plusieurs années à sillonner la France avec mon drone et à accumuler les images, j'ai décidé de faire un montage afin de partager ces beaux paysages ! </p>
                        <p>Les plans ont été filmés par mes soins avec un drone DJI Mavic Air puis montés sur le logiciel Adobe Premiere Pro.</p>
                        <a href="https://youtu.be/of8xKUOjzvw" class="bouton" target="_blank" youtubePlayer>Voir la vidéo</a>
                    </div>
                </div>

                <div class="projet">
                    <div>
                        <img src="./images/operateurXr.webp" alt="">
                        <!-- <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/QEnCnQl_C3Q?showinfo=0&rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
                    </div>
                    <div class="projet-texte">
                        <h3>Reportage "Réalité ou illusion"</h3>
                        <span class="projetAnnee">2022</span>
                        <p>Au cours de ma licence professionnelle à l'IUT d'Angoulême, j'ai pu réaliser un reportage sur le métier d'opérateur XR. A cette occasion je me suis rendu dans les studios de TSF à Paris avec Thomas Zych, Julie Patron et Benjamin Thouet afin de rencontrer les équipes de l'entreprise MADO XR. <br> Pour ce reportage <strong>j'ai réalisé les effets spéciaux</strong> de l'intoduction avec les logiciels Blender pour la 3D et After Effects pour le compositing. Je me suis également occupé de l'<strong>étalonnage</strong> de la vidéo ansi que des synthés pour lesquels j'ai créé une template d'animation Premiere Pro (.mogrt) sous After Effects.</p>
                        <p>Ce reportage a été récompensé d'un <strong>Clap d'Argent</strong> au concours national "Je Filme Le Métier Qui Me Plaît" en juin 2022.</p>
                        <a href="https://youtu.be/QEnCnQl_C3Q" class="bouton" target="_blank" youtubePlayer>Voir la vidéo</a>
                        <a href="https://parcoursmetiers.tv/video/13143-realite-ou-illusion" class="bouton" target="_blank">Site officiel</a>
                    </div>
                </div>

                <div class="projet">
                    <div>
                        <img src="./images/passeRecompose.webp" alt="">
                        <!-- <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/0WIhy1HRjoI?showinfo=0&rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
                    </div>
                    <div class="projet-texte">
                        <h3>Court-métrage "Passé recomposé"</h3>
                        <span class="projetAnnee">2022</span>
                        <p>En mars 2022 j'ai travaillé sur un court-métrage réalisé en 48 heures dans le cadre d'un concours étudiant dans mon université. Sur ce projet, j'ai notamment été <strong>cadreur</strong>, sondier et <strong>photographe de plateau</strong>.</p>
                        <a href="https://youtu.be/0WIhy1HRjoI" class="bouton" target="_blank" youtubePlayer>Voir la vidéo</a>
                    </div>
                </div>

                <div class="projet">
                    <div>
                        <img src="./images/clipBigbtCorps.webp" alt="">
                        <!-- <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/thFsG2O4Vuc?rel=0&showinfo=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
                    </div>
                    <div class="projet-texte">
                        <h3>Clip "Corps, Yseult - COVER"</h3>
                        <span class="projetAnnee">2021</span>
                        <p>Sur ce clip réalisé par Benjamin Thouet, j'ai été en charge de l'<strong>étalonnage</strong> de la vidéo et des prises de vues au <strong>drone</strong> sur le tournage. </p>
                        <a href="https://youtu.be/thFsG2O4Vuc" class="bouton" target="_blank" youtubePlayer>Voir la vidéo</a>
                    </div>
                </div>

                <!-- <div class="projet">
                    <div>
                        <img src="./images/julie.webp" alt="">
                        <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/T1gQjSipqpI?showinfo=0&rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="projet-texte">
                        <h3>Court-métrage "Julie !"</h3>
                        <p>"Julie !" est un court-métrage au format vertical réalisé dans le cadre du festival Courant 3D d'Angoulême. Sur ce projet, j'ai été Directeur de la photographie. J'ai également participé au <strong>montage</strong> et réalisé l'<strong>étalonnage</strong>. Par ailleurs j'étais <strong>photographe plateau</strong> durant le tournage.</p>
                        <a href="https://youtu.be/T1gQjSipqpI" class="bouton" target="_blank">Voir la vidéo</a>
                    </div>
                </div> -->

                <!-- <div class="projet">
                    <div>
                        <img src="./images/longWayToGo.webp" alt="">
                        <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/fjDIPealt2o?showinfo=0&rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="projet-texte">
                        <h3>Court-métrage/clip "Long Way To Go"</h3>
                        <p>Pour cette vidéo réalisée en vertical pour le festival Courant 3D, j'ai été <strong>cadreur</strong> et <strong>photographe plateau</strong>.</p>
                        <a href="https://youtu.be/fjDIPealt2o" class="bouton" target="_blank">Voir la vidéo</a>
                    </div>
                </div> -->

                <div class="projet">
                    <div>
                        <img src="./images/barDeDemain.webp" alt="">
                    </div>
                    <div class="projet-texte">
                        <h3>Reportage "Les Bars de demain"</h3>
                        <span class="projetAnnee">2022</span>
                        <p>Lors de mes études, j'ai été amené à travailler sur un reportage traitant des bars après la pandémie de Covid-19. Sur ce projet, j'ai réalisé le <strong>cadrage</strong> de certains plans ainsi que l'<strong>étalonnage</strong>.</p>
                        <a href="https://youtu.be/CKjpEEx5yN8" class="bouton" target="_blank" youtubePlayer>Voir la vidéo</a>
                    </div>
                </div>

                <div class="projet">
                    <div>
                        <img src="./images/video-explicative_Mavic-Air.webp" alt="">
                    </div>
                    <div class="projet-texte">
                        <h3>Vidéo explicative sur un drone</h3>
                        <span class="projetAnnee">2020</span>
                        <p>Cette vidéo a été réalisée à 100% par mes soins dans le cadre de mon DUT MMI en 2020 pendant le confinement. L'objectif était de présenter et d'expliquer rapidement le fonctionnement d'un objet dans un format type réseaux sociaux. J'ai donc choisi mon drone comme sujet puis filmé et monté tous les plans nécessaires.</p>
                        <a href="https://youtu.be/2WThzPxGlsY" class="bouton" target="_blank" youtubePlayer>Voir la vidéo</a>
                    </div>
                </div>

                <div class="projet">
                    <div>
                        <img src="./images/lePeche.webp" alt="">
                    </div>
                    <div class="projet-texte">
                        <h3>Court-métrage "Le Péché"</h3>
                        <span class="projetAnnee">2020</span>
                        <p>Court-métrage réalisé en 48h dans le cadre du "48 Hour Film Project" de Nantes en 2020. Sur ce projet, j'ai participé au <strong>montage</strong> ainsi qu'à l'élaboration du décor. J'ai également réalisé des <strong>photos de plateau</strong> pour l'équipe. </p>
                        <a href="https://youtu.be/NSizfEfcmlQ" class="bouton" target="_blank" youtubePlayer>Voir la vidéo</a>
                    </div>
                </div>

                <div class="projet">
                    <div>
                        <img src="./images/CV-vidéo-2020.webp" alt="">
                    </div>
                    <div class="projet-texte">
                        <h3>CV vidéo 2020</h3>
                        <span class="projetAnnee">2020</span>
                        <p>Dans le cadre de mon DUT MMI j'ai réalisé un CV au format vidéo afin d'apuyer mes candidatures lors de ma recherche de stage. Ce projet m'a permis d'utiliser Adobe After Effects pour faire l'ensemble du motion-design.</p>
                        <a href="https://youtu.be/PnZMezw47SI" class="bouton" target="_blank" youtubePlayer>Voir la vidéo</a>
                    </div>
                </div>

            </div>

            <div class="imageViewer videoViewer">
                <svg class="close" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="white">
                    <rect transform="rotate(45)" ry="0" y="-1" x="4.3137083" height="2" width="14" id="rect1006" />
                    <rect transform="rotate(-45)" ry="0" y="10.313708" x="-7" height="2" width="14" id="rect1006-5" />
                </svg>

                <iframe src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <script src="./video.js"></script>
        </section>

        <?php require_once('../require/contact.html'); ?>

    </main>

    <?php require_once('../require/footer.html'); ?>

</body>

</html>