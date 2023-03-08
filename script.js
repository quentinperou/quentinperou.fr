"use strict";
(function () {
    document.addEventListener("DOMContentLoaded", function () {

        /********** BLOQUE LE CLIC DROIT **********/
        document.addEventListener("contextmenu", function (evt) {
            evt.preventDefault();
        });

        /********** GESTION DU MENU BURGER **********/
        const menu = document.querySelector(".menu");
        const burgerMenu = document.querySelector(".burgerMenu");
        burgerMenu.addEventListener("click", function () {
            menu.classList.toggle("visible");
            this.classList.toggle("change");
        });

        /********** GESTION DES LIENS **********/
        document.querySelectorAll(".menuElement, .websiteLogo a, [href='#projets']").forEach(function (element) {
            element.addEventListener("click", function (elem) {
                if (menu.classList.contains("visible")) {
                    menu.classList.toggle("visible");
                    burgerMenu.classList.toggle("change");
                }

                if (this.getAttribute("href")[0] == '#') {
                    elem.preventDefault();
                    let url = window.location.href.split('/');
                    console.log(window.location.pathname, url);
                    console.log(url[url.length - 1])
                    if (this.getAttribute("href") == '#' && url[url.length - 1] == "")
                        document.querySelector("body").scrollIntoView();
                    else
                        document.querySelector(`${this.getAttribute("href")}`).scrollIntoView();
                }

            });
        });
        document.querySelector(".goEnHaut").addEventListener("click", function (evt) {
            evt.preventDefault();
            document.querySelector("body").scrollIntoView();
        });

    });
}());
