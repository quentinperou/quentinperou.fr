<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Quentin Pérou | Photographie</title>
    <?php require "require/head.html"; ?>
</head>

<body>
    <header>
        <?php require "require/header-enteteProjet.html"; ?>
        <?php require "require/header-menu.html"; ?>
    </header>

    <section id="accueilPhoto" class="accueilProjet">
        <h2 id="titreAccueil" class="text-shadow-pop-right">Photographie</h2>
        <svg width="40px" height="40px" class="scrollme">
            <path stroke="#ffffff" fill="none" stroke-width="2px" d="M2.000,5.000 L15.000,18.000 L28.000,5.000 " />
        </svg>
    </section>

    <main class="transitionMode mainProjet">

        <section id="instagramFeed">
            <a href="https://www.instagram.com/quentinperou/">
                <h3>Mon Instagram</h3>
            </a>

            <!-- LightWidget WIDGET -->
            <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>

            <!-- LightWidget WIDGET Responsive -->
            <iframe id="iframeInsta" src="//lightwidget.com/widgets/07f78d9ea4a057778daad68614cdc53b.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>

            <script>
                if (location.protocol == 'https:') {
                    document.getElementById("instagramFeed").insertAdjacentHTML("beforeend", '<a href="https://www.instagram.com/quentinperou/" id="lienInstaIframeHS">L\'intégration ne fonctionne pas ? Clique ici pour voir mon Instagram</a>');
                    document.getElementById("lienInstaIframeHS").style.textDecoration = "underline";
                    
                    document.getElementById("instagramFeed").insertAdjacentHTML("beforeend", '<a href="http://perso.univ-lemans.fr/~i191251/portfolio_v2.3/photographie.php" id="lienPortfolioIutIframeHS">Ou clique ici pour voir cette page fonctionnelle sur l\'ancien site en HTTP</a>');
                    document.getElementById("lienPortfolioIutIframeHS").style.textDecoration = "underline";
                }

            </script>

            <!-- une pensée pour Claire -->

        </section>

        <section id="photo-section-1" class="sectionProjet" style="background-image: url()">
            <a href="work-in-progress.php" class="contenuSectionProjet">
                <h3>Projet canditature <abbr class="infobulle" title="Bureau Des Étudiants">BDE</abbr> 2019-2020</h3>
                <ul class="tags">
                    <li>2019</li>
                    <li>IUT</li>
                    <li>BDE</li>
                </ul>
                <p>Découvrir</p>
            </a>
        </section>


    </main>

    <footer>
        <div class="goEnHaut" title="Revenir en haut de la page">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="18px" height="18px">
                <path d="M0 0h24v24H0V0z" fill="none" />
                <path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6 1.41 1.41z" />
            </svg>
        </div>
        <p>Copyright © 2020 Quentin Pérou | Made with ❤ by Quentin Pérou</p>
    </footer>

    <!--    JS    -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>

</body>

</html>
