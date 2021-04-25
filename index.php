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

<body>
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
        <section id="projets">
            <h2>Mes projets</h2>
            <div class="contenuSectionReal">
                <div id="table-photo" class="categorie_projet">
                    <a href="photographie.php">
                        <h3>Photographie</h3>
                        <!-- <p>Voir les projets</p>-->
                    </a>
                </div>
                <div id="table-web" class="categorie_projet">
                    <a href="web-dev.php">
                        <h3>Web Developpement</h3>
                        <!-- <p>Voir les projets</p>-->
                    </a>
                </div>
                <div id="table-graphisme" class="categorie_projet">
                    <a href="graphisme.php">
                        <h3>Graphisme</h3>
                        <!-- <p>Voir les projets</p>-->
                    </a>
                </div>
                <div id="table-audiovisuel" class="categorie_projet">
                    <a href="audiovisuel.php">
                        <h3>Audiovisuel</h3>
                        <!--  <p>Voir les projets</p>-->
                    </a>
                </div>
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
