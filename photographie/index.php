<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Quentin Pérou | Photographie</title>
    <meta name="description" content="Portfolio de Quentin Pérou, photographe et vidéaste." />
    <meta name="author" content="Quentin Pérou" />
    <meta name="keywords" content="quentin perou quentinperou portfolio mmi laval tsi angouleme audiovisuel">
    <meta name="language" content="FR">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!--    MISE EN FORME AFFICHAGE LIEN    -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:creator" content="@quentinperou" />
    <meta property="og:url" content="https://quentinperou.fr" />
    <meta property="og:title" content="Quentin Pérou | Photographie" />
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
                <a href="#" class="menuElement selected">Photographie</a>
                <a href="../video/" class="menuElement">Vidéo</a>
                <a href="../3d/" class="menuElement">3D</a>
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

        <section id="gallerie">
            <h2>Mes photographies</h2>
            <div class="gallerie">
                <?php
                $dir = './photos/';
                $ext = '.webp';
                $pattern = '/^([0-9]*||[0-9]*\.[0-9]*)_/';
                $dirArray = scandir($dir, SCANDIR_SORT_DESCENDING);

                natsort($dirArray);
                // $dirArray = array_reverse($dirArray);
                foreach ($dirArray as $img) {
                    $extension = substr($img, -strlen($ext));
                    if ($extension == $ext) {
                ?>
                        <figure>
                            <img src="./photos/<?php echo $img ?>" alt="image">
                            <figcaption><?php echo preg_replace($pattern, "", substr($img, 0, -strlen($ext))) ?></figcaption>
                        </figure>
                <?php
                    }
                }
                ?>

            </div>
            <div class="imageViewer">
                <svg class="close" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="white">
                    <rect transform="rotate(45)" ry="0" y="-1" x="4.3137083" height="2" width="14" id="rect1006" />
                    <rect transform="rotate(-45)" ry="0" y="10.313708" x="-7" height="2" width="14" id="rect1006-5" />
                </svg>

                <img src="" alt="">
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
            <script src="./imageViewer.js"></script>
        </section>


        <?php require_once('../require/contact.html'); ?>

    </main>

    <?php require_once('../require/footer.html'); ?>

</body>

</html>