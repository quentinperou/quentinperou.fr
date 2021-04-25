<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-161559296-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-161559296-1');

    </script>

    <meta charset="UTF-8" />
    <title>Quentin Pérou | Portfolio</title>

    <?php require "require/head.html"; ?>
</head>

<body index>
    <header>
        <div class="enteteSite transitionMode">
            <a href="index.php#" title="Revenir à l'accueil">
                <h1 class="titreEnteteSite">Quentin Pérou</h1>
            </a>
            <div class="burgerMenu transitionMode" title="Menu">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
            <div id="fondMenu"> </div>
        </div>

        <?php require "require/header-menu.html"; ?>
    </header>

    <?php //require "require/popup.php"; ?>

    <section id="accueilSite" class="accueil">
        <p><strong id="titreAccueil" class="text-shadow-pop-right">Quentin Pérou</strong></p>
        <svg width="30px" height="20px" class="scrollme">
            <path stroke="#ffffff" fill="none" stroke-width="2px" d="M2.000,5.000 L15.000,18.000 L28.000,5.000 " />
        </svg>
    </section>

    <main class="transitionMode mainIndex">

        <!--        <section id="instagramFeed">-->
        <!--             <a href="https://www.instagram.com/quentinperou/"> <h3>Mon Instagram</h3> </a>-->
        <!--             LightWidget WIDGET -->
        <!--
            <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>
            <iframe id="iframeInsta" src="//lightwidget.com/widgets/07f78d9ea4a057778daad68614cdc53b.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
            <script>
                if (location.protocol == 'https:') {
                    document.getElementById("instagramFeed").insertAdjacentHTML("beforeend", '<a href="https://www.instagram.com/quentinperou/" id="lienInstaIframeHS">L\'intégration ne fonctionne pas ? Clique ici pour voir mon Instagram</a>');
                    document.getElementById("lienInstaIframeHS").style.textDecoration = "underline";

                    document.getElementById("instagramFeed").insertAdjacentHTML("beforeend", '<a href="http://perso.univ-lemans.fr/~i191251/portfolio_v2.3/photographie.php" id="lienPortfolioIutIframeHS">Ou clique ici pour voir cette page fonctionnelle sur l\'ancien site en HTTP</a>');
                    document.getElementById("lienPortfolioIutIframeHS").style.textDecoration = "underline";
                }
            </script>
        </section>
-->

        <div id="iframe_content_up"></div>

        <section id="projets">
            <h2>Mes projets</h2>

            <div id="projetFiltre">
                <ul>
                    <li class="theme active" data-theme="tout">Tout</li>
                    <li class="theme" data-theme="photo">Photographie</li>
                    <li class="theme" data-theme="web">Web Developpement</li>
                    <li class="theme" data-theme="graphisme">Graphisme</li>
                    <li class="theme" data-theme="audiovisuel">Audiovisuel</li>
                </ul>

                <!-- SCRIPT DE FILTRAGE VIA URL -->
                <script>
                    // ./index.php?theme=photo
                    document.addEventListener("DOMContentLoaded", function() {
                        var parameters2 = window.location.search.split("=");
                        console.log("param filtre url: " + parameters2[1]);
                        if (parameters2[1] != undefined) {
                            let liste = document.getElementsByClassName("theme");
                            for (let elem of liste) {
                                if (elem.dataset.theme == parameters2[1])
                                    elem.click();

                                setTimeout(function() {
                                    document.getElementById("projets").scrollIntoView(true);
                                }, 350);
                            }
                        }
                    });

                </script>

            </div>

            <div class="contenuSectionReal">
                <!------------------------------------------------------->

                <!--
                <article class="sectionProjet photo" style="background-image: url(images/photo_profil.jpg)">
                    <div class="contenuSectionProjet">
                        <h3>Photo de canditature au <abbr class="infobulle" title="Bureau Des Étudiants">BDE</abbr> MMI</h3>
                        <ul class="tags">
                            <li>Photographie</li>
                            <li>2019</li>
                            <li>IUT</li>
                            <li>BDE</li>
                        </ul>
                        <a href="work-in-progress.php" class="boutonDecouvir btnTransiUp">
                            <p>Découvrir</p>
                        </a>
                    </div>
                </article>
-->

                <article class="sectionProjet photo" style="background-image: url(projets/mockup_insta.png)">
                    <div class="contenuSectionProjet">
                        <h3>Mon Instagram Photo</h3>
                        <ul class="tags">
                            <li>Photographie</li>
                        </ul>
                        <a href="https://instagram.com/quentinperou" target="_blank" class="boutonDecouvir">
                            <p>Découvrir</p>
                        </a>
                    </div>
                </article>

                <!--
                <article class="sectionProjet graphisme" style="background-image: url(projets/mockup_insta.png)">
                    <div class="contenuSectionProjet">
                        <h3>Mon Instagram Art/Creavive</h3>
                        <ul class="tags">
                            <li>Graphisme</li>
                            <li>3D</li>
                        </ul>
                        <a href="https://instagram.com/byquentin_" target="_blank" class="boutonDecouvir">
                            <p>Découvrir</p>
                        </a>
                    </div>
                </article>
-->

                <article class="sectionProjet web" style="background-image: url(projets/web-portfolio-v1/maquette_portfolio-mac.jpg)">
                    <div class="contenuSectionProjet">
                        <h3>Portfolio version 1</h3>
                        <ul class="tags">
                            <li>Web</li>
                            <li>2019</li>
                            <li>IUT</li>
                            <li>Maquettage</li>
                            <li>Intégration</li>
                        </ul>
                        <a href="projets/portfolio-v1.php" class="boutonDecouvir btnTransiUp">
                            <p>Découvrir</p>
                        </a>
                    </div>
                </article>

                <article class="sectionProjet graphisme" style="background-image: url(projets/graphisme-mmi-isometrique/mmi-isometrique.jpg)">
                    <div class="contenuSectionProjet">
                        <h3>MMI isométrique</h3>
                        <ul class="tags">
                            <li>Graphisme</li>
                            <li>2019</li>
                            <li>IUT</li>
                            <li>Vectoriel</li>
                            <li>Affinity Designer</li>
                        </ul>
                        <a href="projets/mmi-isometrique.php" class="boutonDecouvir btnTransiUp">
                            <p>Découvrir</p>
                        </a>
                    </div>
                </article>

                <article class="sectionProjet graphisme" style="background-image: url(projets/graphisme-biosse/biosse_mockup_1.jpg)">
                    <div class="contenuSectionProjet">
                        <h3>BiOSSE</h3>
                        <ul class="tags">
                            <li>Graphisme</li>
                            <li>2020</li>
                            <li>IUT</li>
                            <li>Charte-graphique</li>
                        </ul>
                        <a href="projets/biosse.php" class="boutonDecouvir btnTransiUp">
                            <p>Découvrir</p>
                        </a>
                    </div>
                </article>

                <article class="sectionProjet web" style="background-image: url(projets/web-portfolio-v2/portfolio-v2_Mockup-4.jpg);  background-position: 50% 90%; ">
                    <div class="contenuSectionProjet">
                        <h3 title="Vous êtes dessus !!">Portfolio version 2</h3>
                        <ul class="tags">
                            <li>Web</li>
                            <li>2020</li>
                            <li>IUT</li>
                            <li>Intégration</li>
                        </ul>
                        <a href="projets/portfolio-v2.php" class="boutonDecouvir btnTransiUp">
                            <p>Découvrir</p>
                        </a>
                    </div>
                </article>

                <article class="sectionProjet graphisme" style="background-image: url(projets/graphisme-technews/Magazine-Apple-Mockup.jpg)">
                    <div class="contenuSectionProjet">
                        <h3>TechNews</h3>
                        <ul class="tags">
                            <li>Graphisme</li>
                            <li>2020</li>
                            <li>IUT</li>
                            <li>Mise-en-page</li>
                            <li>PAO</li>
                            <li>Adobe InDesign</li>
                        </ul>
                        <a href="projets/technews.php" class="boutonDecouvir btnTransiUp">
                            <p>Découvrir</p>
                        </a>
                    </div>
                </article>

                <article class="sectionProjet audiovisuel" style="background-image: url(projets/video-explicative_Mavic-Air.jpg)">
                    <div class="contenuSectionProjet">
                        <h3>Vidéo explicative</h3>
                        <ul class="tags">
                            <li>Audiovisuel</li>
                            <li>2020</li>
                            <li>IUT</li>
                            <li>Vidéo</li>
                            <li>Adobe Premiere Pro</li>
                        </ul>
                        <a href="projets/video-explicative-MavicAir.php" class="boutonDecouvir btnTransiUp">
                            <p>Découvrir</p>
                        </a>
                    </div>
                </article>

                <article class="sectionProjet web graphisme" style="background-image: url(projets/web-themis/mockup-themis.jpg)">
                    <div class="contenuSectionProjet">
                        <h3>Themis</h3>
                        <ul class="tags">
                            <li>Web</li>
                            <li>Graphisme</li>
                            <li>2020</li>
                            <li>IUT</li>
                            <li><abbr title="Projet tutoré">PTUT</abbr></li>
                            <li>Maquettage</li>
                            <li>Prototypage</li>
                            <li>Intégration</li>
                        </ul>
                        <a href="projets/themis.php" class="boutonDecouvir btnTransiUp">
                            <p>Découvrir</p>
                        </a>
                    </div>
                </article>

                <!--
                <article class="sectionProjet audiovisuel">
                    <div class="contenuSectionProjet">
                        <h3>Vidéo Explainer</h3>
                        <ul class="tags">
                            <li>Audiovisuel</li>
                            <li>2020</li>
                            <li>IUT</li>
                            <li>Vidéo</li>
                        </ul>
                        <a href="work-in-progress.php" class="boutonDecouvir btnTransiUp">
                            <p>Découvrir</p>
                        </a>
                    </div>
                </article>
-->



                <!------------------------------------------------------->
            </div>
        </section>

        <section id="a-propos" class="transitionMode">
            <h2>À propos de moi</h2>
            <div class="contenuSectionApropos">
                <div>
                    <img id="photoProfil" src="images/photo_profil.jpg" alt="photo de Quentin Pérou">
                </div>
                <div>
                    <p>Je m'appelle <strong>Quentin Pérou</strong>, j'ai 20 ans et je suis actuellement en première année de <strong>DUT <abbr class="infobulle" title="Métiers du Multimédia et de l'Internet">MMI</abbr></strong> à Laval. J'ai obtenu mon BAC STI2D (avec 14/20) au lycée E.Livet à Nantes. Je suis <strong>passionné de photographie</strong> et de nouvelles technologies. J'adore le piano et la musique classique. Amoureux des beaux paysages, j'aime voyager avec mon appareil photo préféré.</p>
                    <p>Après avoir parcouru de nombreux domaines durant mes années de préparation du DUT, je souhaite continuer mes études en m'orientant vers les métiers de l'audiovisuel et du webdesign.</p>
                    <div class="div-a-propos-lien">
                        <a href="cv.php" class="a-propos-bouton">
                            <p>Voir le CV</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact">
            <h2>Contact</h2>
            <form method="post" action="index-form-mail.php">
                <fieldset>
                    <div>
                        <div>
                            <label for="prenom">Prénom</label>
                            <input type="text" id="prenom" name="prenom" required>
                        </div>
                        <div>
                            <label for="nom">Nom</label>
                            <input type="text" id="nom" name="nom" required>
                        </div>
                    </div>
                    <div>
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div>
                        <label for="objet">Objet</label>
                        <input type="text" id="objet" name="objet" required>
                    </div>
                    <div>
                        <label for="message">Message</label>
                        <textarea name="message" id="message" rows="8" cols="40" required placeholder="Votre message ici"></textarea>
                    </div>
                    <div class="formLigne">
                        <input type="checkbox" id="recevoirCopie" name="recevoirCopie">
                        <label for="recevoirCopie">Recevoir une copie du mail</label>
                    </div>
                </fieldset>
                <div id="divBoutonEnvoyer">
                    <button type="submit" class="transitionMode">Envoyer</button>
                </div>
            </form>

            <?php
                if(isset($_SESSION['message'])){
            ?>
            <!-- <p id="messageEnvoyer" class="retourMail">Votre message a bien été envoyé.</p>-->
            <p class="retourMail"> <?php echo($_SESSION['message']) ?> </p>
            <?php
                    unset($_SESSION['message']);
                }
            ?>
            <!-- <p id="messageErreur" class="retourMail">Une erreur c\'est produite...</p>-->
        </section>



    </main>

    <?php require "require/footer.html"; ?>

</body>

</html>
