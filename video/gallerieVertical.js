(function () {
    const gallerieVertical = document.querySelector('.gallerieVertical-item');
    const gallerieVerticalContainer = document.querySelector('.gallerieVertical-container');
    const gallerieVerticalItems = document.querySelectorAll('.gallerieVertical-item .projetVertical');
    const gallerieVerticalNavBack = document.querySelector('.gallerie_nav.nav_back');
    const gallerieVerticalNavNext = document.querySelector('.gallerie_nav.nav_next');
    var gallerieVerticalIndex = 0;
    var gallerieVerticalItemWidth;
    var gallerieVerticalContainerWidth;
    var gallerieVerticalItemsLength;
    var gallerieVerticalItemsWidth;
    var gallerieVerticalItemsWidthMax;

    function initVertical() {
        gallerieVerticalItemWidth = gallerieVerticalItems[0].getBoundingClientRect().width + 5; //largeur d'un item meusurée + marge
        // console.log("gallerieVerticalItemWidth", gallerieVerticalItemWidth);
        gallerieVerticalContainerWidth = gallerieVerticalContainer.getBoundingClientRect().width; //largeur du container meusurée
        // console.log("gallerieVerticalContainerWidth", gallerieVerticalContainerWidth);
        gallerieVerticalItemsLength = gallerieVerticalItems.length - 1; //nombre d'items
        // console.log("gallerieVerticalItemsLength", gallerieVerticalItemsLength);
        gallerieVerticalItemsWidth = gallerieVerticalItemWidth * gallerieVerticalItemsLength; //largeur totale des items calculée
        // console.log("gallerieVerticalItemsWidth", gallerieVerticalItemsWidth);
        gallerieVerticalItemsWidthMax = gallerieVerticalItemsWidth - gallerieVerticalContainerWidth; // largeur max pour le défilement
        // console.log("gallerieVerticalItemsWidthMax", gallerieVerticalItemsWidthMax);

        // gallerieVertical.style.transform = 'translateX(' + (-gallerieVerticalItemWidth * gallerieVerticalIndex) + 'px)';
        gallerieVertical.style.transform = 'translateX(' + 0 + 'px)';
        gallerieVerticalIndex = 0;
        // valeurTranslateX = 0;

        gallerieVerticalNavBack.style.display = 'none';

        if (gallerieVerticalItemsWidth <= gallerieVerticalContainerWidth) {
            gallerieVerticalNavNext.style.display = 'none';
        }
        else {
            gallerieVerticalNavNext.style.display = 'block';
        }

    }
    initVertical();

    window.addEventListener("resize", initVertical);

    gallerieVerticalNavBack.addEventListener('click', gallerieVerticalBack);
    gallerieVerticalNavNext.addEventListener('click', gallerieVerticalNext);

    function gallerieVerticalBack() {
        if (gallerieVerticalIndex > 0) {
            gallerieVerticalIndex--;
            // console.log("gallerieVerticalIndex", gallerieVerticalIndex);
            gallerieVertical.style.transform = 'translateX(' + (-gallerieVerticalItemWidth * gallerieVerticalIndex) + 'px)';
            if (gallerieVerticalIndex == 0) {
                gallerieVerticalNavBack.style.display = 'none';
            }
            if (gallerieVerticalIndex < gallerieVerticalItemsLength - 1) {
                gallerieVerticalNavNext.style.display = 'block';
            }
        }
    }

    function gallerieVerticalNext() {
        if (gallerieVerticalIndex < gallerieVerticalItemsLength - 1 && gallerieVerticalItemWidth * gallerieVerticalIndex < gallerieVerticalItemsWidthMax) {
            gallerieVerticalIndex++;
            // console.log("gallerieVerticalIndex", gallerieVerticalIndex);
            gallerieVertical.style.transform = 'translateX(' + (-gallerieVerticalItemWidth * gallerieVerticalIndex) + 'px)';
            // console.log("gallerieVertical.style.transform", gallerieVertical.style.transform);
            if (gallerieVerticalIndex > 0) {
                gallerieVerticalNavBack.style.display = 'block';
            }
            if (gallerieVerticalIndex == gallerieVerticalItemsLength - 1 || gallerieVerticalItemWidth * gallerieVerticalIndex > gallerieVerticalItemsWidthMax) {
                gallerieVerticalNavNext.style.display = 'none';
            }
        }
    }



    /******** GESTION DU SWIPE ********/

    let touchstartX = 0
    let touchendX = 0
    var valeurTranslateX = 0;
    function checkDirection() {
        // console.log("valeurDiffProjetContainer", (gallerieVerticalContainerWidth - gallerieVerticalItemWidth));
        if (Math.abs(touchstartX - touchendX) > 50) {
            if (touchendX < touchstartX) {
                // console.log('swiped left!');
                if (gallerieVerticalIndex < gallerieVerticalItemsLength) {
                    gallerieVerticalIndex++;
                    console.log("gallerieVerticalIndex", gallerieVerticalIndex);
                    if (gallerieVerticalIndex == 1)
                        valeurTranslateX = valeurTranslateX - (gallerieVerticalItemWidth - (gallerieVerticalContainerWidth - gallerieVerticalItemWidth) / 2 - 2.5);
                    else if (gallerieVerticalIndex == gallerieVerticalItemsLength)
                        valeurTranslateX = valeurTranslateX - gallerieVerticalItemWidth + (gallerieVerticalContainerWidth - gallerieVerticalItemWidth) / 2 + 2.5;
                    else
                        valeurTranslateX = valeurTranslateX - gallerieVerticalContainerWidth + (gallerieVerticalContainerWidth - gallerieVerticalItemWidth);

                    console.log("valeurTranslateX", valeurTranslateX);
                    gallerieVertical.style.transform = 'translateX(' + valeurTranslateX + 'px)';
                }
            }
            if (touchendX > touchstartX) {
                // console.log('swiped right!');
                if (gallerieVerticalIndex > 0) {
                    gallerieVerticalIndex--;
                    console.log("gallerieVerticalIndex", gallerieVerticalIndex);
                    if (gallerieVerticalIndex == 0)
                        valeurTranslateX = valeurTranslateX + (gallerieVerticalItemWidth - (gallerieVerticalContainerWidth - gallerieVerticalItemWidth) / 2 - 2.5);
                    else if (gallerieVerticalIndex == gallerieVerticalItemsLength - 1)
                        valeurTranslateX = valeurTranslateX + gallerieVerticalItemWidth - (gallerieVerticalContainerWidth - gallerieVerticalItemWidth) / 2 - 2.5;
                    else
                        valeurTranslateX = valeurTranslateX + gallerieVerticalContainerWidth - (gallerieVerticalContainerWidth - gallerieVerticalItemWidth);


                    console.log("valeurTranslateX", valeurTranslateX);
                    gallerieVertical.style.transform = 'translateX(' + valeurTranslateX + 'px)';
                }
            }
        }
    }

    document.querySelector('.gallerieVertical-container').addEventListener('touchstart', e => {
        touchstartX = e.changedTouches[0].screenX
    });

    document.querySelector('.gallerieVertical-container').addEventListener('touchend', e => {
        touchendX = e.changedTouches[0].screenX
        checkDirection();
    });



    /******** GESTION DU En Savoir Plus ********/

    const enSavoirPlus = document.querySelectorAll('.projetVertical');
    const imageViewer = document.querySelector(".videoVerticalViewer");

    enSavoirPlus.forEach((btn, index) => {
        btn.addEventListener('click', () => {
            // btn.parentNode.classList.toggle('active');
            imageViewer.querySelector("div").innerHTML = btn.querySelector('div').innerHTML;
            imageViewer.querySelector("div").childNodes.forEach((child) => {
                child.hidden = false;
            });
            let videoLink = btn.querySelector('div a.bouton').href.split("/");
            // console.log("videoLink", videoLink);

            if (videoLink[2].startsWith("youtu")) {
                imageViewer.querySelector('iframe').src = `https://www.youtube-nocookie.com/embed/${videoLink[videoLink.length - 1]}?showinfo=0&color=white&rel=0`;
                imageViewer.querySelector('iframe').removeAttribute("style");
                imageViewer.querySelector("div a.bouton").style.display = "none";
            } else {
                imageViewer.querySelector("div a.bouton").removeAttribute("style");
                imageViewer.querySelector('iframe').style.display = "none";
            }
            // imageViewer.querySelector("div .enSavoirPlus").style.display = "none";
            imageViewer.classList.add("visible");
        });
    });

    imageViewer.querySelector('.close').addEventListener("click", function () {
        imageViewer.classList.remove("visible");
        imageViewer.querySelector('iframe').src = "";
    });

    imageViewer.addEventListener("click", function (evt) {
        if (evt.target == imageViewer) {
            imageViewer.classList.remove("visible");
            imageViewer.querySelector('iframe').src = "";
        }
    });

    document.addEventListener("keydown", function (evt) {
        if (evt.key == "Escape") {
            imageViewer.classList.remove("visible");
            imageViewer.querySelector('iframe').src = "";
        }
    });

})();