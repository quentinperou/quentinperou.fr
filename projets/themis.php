<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Quentin Pérou | Projet</title>

    <?php require "../require/urlBase.html"; ?>
    <?php require "../require/head.html"; ?>
</head>

<body>
    <header>
        <?php require "../require/header-enteteProjet.html"; ?>
        <?php require "../require/header-menu.html"; ?>
    </header>

    <section id="accueilThemis" class="accueilProjet projet">
        <h2 id="titreAccueil" class="text-shadow-pop-right">Themis</h2>
    </section>

    <main class="transitionMode unprojet">
        <section class="presentaionProjet">
            <a href="index.php?theme=tout" class="boutonRetour">Retour aux projets</a>
            <h2>Themis</h2>
            <ul class="tags">
                <li> <a href="index.php?theme=web" class="boutonTag"> Web </a> </li>
                <li>Web</li>
                <li>Graphisme</li>
                <li>2020</li>
                <li>IUT</li>
                <li><abbr title="Projet tutoré">PTUT</abbr></li>
                <li>Maquettage</li>
                <li>Prototypage</li>
                <li>Intégration</li>
            </ul>
            <p> Au deuxième semestre de mon DUT nous avons eu à réaliser par groupe de 6 étudiant un projet tutoré de développement web. Le thème de cette année était de créer une plateforme type forum sur le thème d'un sujet de société de notre choix. Nous somme donc parti sur une plateforme visant à entretenir les valeurs sociales, en proposant un service permettant à des jeunes déscolarisés, ou tout simplement à des jeunes ayant été écartées du monde du travail de renouer contact avec la vie active.</p>
            <p> J'ai donc réalisé dans un premier temps les maquettes en vectoriel sur Affinity Designer qu'un collègue a ensuite adapté en maquette interactive. </p>
            <p> Travaillant en équipe nous nous sommes réparti les tâches que nous avions définis selon le parcours utilisateur que nous voulions. Personnellement j'ai travaillé sur une grande partie du Front (HTML/CSS/JS) du projet. Soit en créant les pages, soit en reprenant celle faites par mes collègues et en y apportant quelques modification pour mieux les intégrées à l'ensemble de de l'architecture du site. </p>
            <div class="presentaionProjetLien">
                <a href="https://la-projets.univ-lemans.fr/~19mmi1pj01/" target="_blank">Voir le site</a>
                <a href="https://docs.google.com/document/d/1bDCt-DIVFYiinFAXnRPZ5FhkdLb129v8wUkxfpS17iE/edit?usp=sharing" target="_blank">Dossier d'avant-projet</a>
                <a href="https://drive.google.com/file/d/1oQbbOzRXezvqhXIzILD3yXns4gnTD-PX/view?usp=sharing" target="_blank">Maquette graphique</a>
            </div>

        </section>

        <section class="galerie">
            <img src="projets/web-themis/mockup-themis.jpg" alt="image d'illustsration">
            <img src="projets/web-themis/maquette-themis.jpg" title="Ensemble des planches de la maquette que j'ai réalisée">
            <img class="border" src="projets/web-themis/themis-inscription.png">
            <img class="border" src="projets/web-themis/themis-forum-accueil.png">
            <img class="border" src="projets/web-themis/themis-messagerie.png">
            <img class="border" src="projets/web-themis/themis-offreEmploi-accueil.png">

            <!--
            <div class="grilleImg grilleImg2x1">
                <img src="projets/web-portfolio-v2/portfolio_v2_page1.jpg" title="Croquis page 1">
                <img src="projets/web-portfolio-v2/portfolio_v2_page2.jpg" title="Croquis page 2">
            </div>
-->
            <!--            <img src="projets/web-portfolio-v2/portfolio-v2_Mockup-4-2.jpg">-->

            <!--
            <div class="itegrationYoutube">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/2WThzPxGlsY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
-->

        </section>
    </main>

    <?php require "../require/footer.html"; ?>

</body>

</html>
