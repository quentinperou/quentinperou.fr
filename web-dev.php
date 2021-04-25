<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Quentin Pérou | Web Developpement</title>
    <?php require "require/head.html"; ?>
</head>

<body>
    <header>
        <?php require "require/header-enteteProjet.html"; ?>
        <?php require "require/header-menu.html"; ?>
    </header>

    <section id="accueilWeb" class="accueilProjet">
        <h2 id="titreAccueil" class="text-shadow-pop-right">Web Developpement</h2>
        <svg width="40px" height="40px" class="scrollme">
            <path stroke="#ffffff" fill="none" stroke-width="2px" d="M2.000,5.000 L15.000,18.000 L28.000,5.000 " />
        </svg>
    </section>

    <main class="transitionMode mainProjet">
        <section id="web-section-1" class="sectionProjet" style="background-image: url(projets/web-portfolio-v1/maquette_portfolio-mac.jpg)">
            <a href="projets/portfolio-v1.php" class="contenuSectionProjet">
                <h3>Portfolio version 1</h3>
                <ul class="tags">
                    <li>2020</li>
                    <li>IUT</li>
                    <li>Maquettage</li>
                    <li>Intégration</li>
                </ul>
                <p>Découvrir</p>
            </a>
        </section>

        <section id="web-section-2" class="sectionProjet" style="background-image: url(projets/web-portfolio-v2/portfolio-v2_Mockup-4.jpg);  background-position: 50% 90%; ">
            <a href="projets/portfolio-v2.php" class="contenuSectionProjet">
                <h3 title="Vous êtes dessus !!">Portfolio version 2</h3>
                <ul class="tags">
                    <li>2020</li>
                    <li>IUT</li>
                    <li>Intégration</li>
                </ul>
                <p>Découvrir</p>
            </a>
        </section>

        <section id="web-section-3" class="sectionProjet">
            <a href="work-in-progress.php" class="contenuSectionProjet">
                <h3>Themis (à venir)</h3>
                <ul class="tags">
                    <li>2020</li>
                    <li>IUT</li>
                    <li><abbr title="Projet tutoré">PTUT</abbr></li>
                    <li>Maquettage</li>
                    <li>Prototypage</li>
                    <li>Intégration</li>
                </ul>
                <p>Découvrir</p>
            </a>
        </section>

    </main>

    <?php require "require/footer.html"; ?>

</body>

</html>
