<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Quentin Pérou | Graphisme</title>
    <?php require "require/head.html"; ?>
</head>

<body>
    <header>
        <?php require "require/header-enteteProjet.html"; ?>
        <?php require "require/header-menu.html"; ?>
    </header>

    <section id="accueilGraphisme" class="accueilProjet">
        <h2 id="titreAccueil" class="text-shadow-pop-right">Graphisme</h2>
        <svg width="40px" height="40px" class="scrollme">
            <path stroke="#ffffff" fill="none" stroke-width="2px" d="M2.000,5.000 L15.000,18.000 L28.000,5.000 " />
        </svg>
    </section>

    <main class="transitionMode mainProjet">
        <section id="graphisme-section-1" class="sectionProjet" style="background-image: url(projets/graphisme-biosse/biosse_mockup_1.jpg)">
            <a href="projets/biosse.php" class="contenuSectionProjet">
                <h3>BiOSSE</h3>
                <ul class="tags">
                    <li>2020</li>
                    <li>IUT</li>
                    <li>Charte-graphique</li>
                </ul>
                <p>Découvrir</p>
            </a>
        </section>

        <section id="graphisme-section-2" class="sectionProjet" style="background-image: url(projets/graphisme-technews/Magazine-Apple-Mockup.jpg)">
            <a href="projets/technews.php" class="contenuSectionProjet">
                <h3>TechNews</h3>
                <ul class="tags">
                    <li>2020</li>
                    <li>IUT</li>
                    <li>Mise-en-page</li>
                    <li>PAO</li>
                    <li>Adobe InDesign</li>
                </ul>
                <p>Découvrir</p>
            </a>
        </section>

        <section id="graphisme-section-3" class="sectionProjet" style="background-image: url(projets/graphisme-mmi-isometrique/mmi-isometrique.jpg)">
            <a href="projets/mmi-isometrique.php" class="contenuSectionProjet">
                <h3>MMI isométrique</h3>
                <ul class="tags">
                    <li>2019</li>
                    <li>IUT</li>
                    <li>Vectoriel</li>
                    <li>Affinity Designer</li>
                </ul>
                <p>Découvrir</p>
            </a>
        </section>

    </main>

    <?php require "require/footer.html"; ?>

</body>

</html>
