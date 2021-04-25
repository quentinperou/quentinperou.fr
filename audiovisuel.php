<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Quentin Pérou | Audiovisuel</title>
    <?php require "require/head.html"; ?>
</head>

<body>
    <header>
        <?php require "require/header-enteteProjet.html"; ?>
        <?php require "require/header-menu.html"; ?>
    </header>

    <section id="accueilAudiovisuel" class="accueilProjet">
        <h2 id="titreAccueil" class="text-shadow-pop-right">Audiovisuel</h2>
        <svg width="40px" height="40px" class="scrollme">
            <path stroke="#ffffff" fill="none" stroke-width="2px" d="M2.000,5.000 L15.000,18.000 L28.000,5.000 " />
        </svg>
    </section>

    <main class="transitionMode mainProjet">
        <section id="audiovisuel-section-1" class="sectionProjet" style="background-image: url(projets/video-explicative_Mavic-Air.jpg)">
            <a href="projets/video-explicative-MavicAir.php" class="contenuSectionProjet">
                <h3>Vidéo explicative (à venir)</h3>
                <ul class="tags">
                    <li>2020</li>
                    <li>IUT</li>
                    <li>Vidéo</li>
                    <li>Adobe Premiere Pro</li>
                </ul>
                <p>Découvrir</p>
            </a>
        </section>

        <!--
        <section id="audiovisuel-section-2" class="sectionProjet" style="background-image: url()">
            <a href="" class="contenuSectionProjet">
                <h3>audiovisuel 2</h3>
                <ul class="tags">
                    <li>2020</li>
                    <li>IUT</li>
                    <li></li>
                    <li></li>
                </ul>
                <p>Découvrir</p>
            </a>
        </section>
-->

    </main>

    <?php require "require/footer.html"; ?>

</body>

</html>
