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

        // document.getElementById('photoProfil').src = `images/photo_profil-${Math.floor(Math.random() * 4) + 1}-c.jpg`

        // document.querySelectorAll(".menuElement").forEach(function (element) {
        //     element.addEventListener("click", function (elem) {
        //         if (menu.classList.contains("visible")) {
        //             menu.classList.toggle("visible");
        //             burgerMenu.classList.toggle("change");
        //         }
        //         /** Scroll dans le menu **/
        //         if (this.getAttribute("href")[0] == '#') {
        //             elem.preventDefault();
        //             if (this.getAttribute("href") == '#')
        //                 document.querySelector("header").scrollIntoView();
        //             else
        //                 document.querySelector(`${this.getAttribute("href")}`).scrollIntoView();
        //         }

        //     });
        // });

        // document.querySelector(".goEnHaut").addEventListener("click", function (evt) {
        //     evt.preventDefault();
        //     document.querySelector("header").scrollIntoView();
        // });

    });

}());
