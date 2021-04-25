<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Quentin Pérou</title>
    <?php require "require/head.html"; ?>
</head>

<body>
    <header>
        <?php require "require/header-enteteProjet.html"; ?>
        <?php require "require/header-menu.html"; ?>
    </header>

    <main>
        <section class="workinprogress">
            <h2>Work in progress ...</h2>
            <div class="chargement"></div>
            <p>Ça arrive bientôt !</p>
        </section>

        <style>
            main p {
                font-size: 20px;
            }

            .lds-dual-ring {
                display: inline-block;
                width: 80px;
                height: 80px;
            }

            .workinprogress {
                /* height: 80vh;*/
                height: calc(100vh - 90px);
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .chargement:after {
                content: " ";
                display: block;
                width: 64px;
                height: 64px;
                margin: 8px;
                border-radius: 50%;
                border: 6px solid #7e7e7e;
                border-color: #838383 transparent #838383 transparent;
                animation: annimChargement 1.2s linear infinite;
            }

            @keyframes annimChargement {
                0% {
                    transform: rotate(0deg);
                }

                100% {
                    transform: rotate(360deg);
                }
            }

            footer {
                position: fixed;
                bottom: 0;
                width: 100%
            }

        </style>

    </main>

    <?php require "require/footer.html"; ?>

</body>

</html>
