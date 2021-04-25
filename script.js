"use strict";

(function () {
    document.addEventListener("DOMContentLoaded", initialiser);

    /*********************************************************/
    /*                 DECLATATION VARIABLES                 */
    /*********************************************************/
    var pScroll = 0;
    let leTitre;
    let blocMain;

    /* scroll en haut de la page au chargement */
    /* $("html, body").animate({
         scrollTop: 0
     }, "slow");  */


    function initialiser(evt) {

        $("#fondMenu").hide();
        $(".goEnHaut").hide();

        $(".burgerMenu").click(burgerclick);
        $(".lienMenu").click(clickpage);

        pScroll = window.scrollY;
        window.addEventListener("scroll", onScroll);

        $(window).scroll(gestionTitre);


        leTitre = $(".titreEnteteSite");
        leTitre.css("display", "none");

        leTitre.on("transitionend", function (evt) {
            if (evt.originalEvent.propertyName == "opacity") {
                if (leTitre.css("opacity") == 0) {
                    leTitre.css("display", "none");
                }
            }
        });

        document.getElementById("themeCheck").addEventListener("input", theme);

        blocMain = $("main");

        const date = new Date();
        console.log("heure= " + date.getHours());

        //        if (date.getHours()<8 || date.getHours()>21)
        //             localStorage.setItem('theme', 'nuit');
        //        else
        //              localStorage.setItem('theme', 'jour');

        if (localStorage.getItem('theme') == null) {
            if (blocMain.hasClass("themeSombre") == true)
                localStorage.setItem('theme', 'nuit');
            else
                localStorage.setItem('theme', 'jour');
        }


        if (localStorage.getItem('theme') == "jour") {
            document.getElementById("themeCheck").checked = false;
            //            blocMain.removeClass("themeSombre");
            setThemeClair();
        } else if (localStorage.getItem('theme') == "nuit") {
            document.getElementById("themeCheck").checked = true;
            //            blocMain.addClass("themeSombre");
            setThemeSombre();
        }
        console.log("storage INIT theme = " + localStorage.getItem('theme'));

        setTimeout(function () {
            $(".transitionMode").css("transition", "color 500ms ease 0s, background 500ms ease 0s");
        }, 1);


        document.addEventListener("contextmenu", function (evt) {
            evt.preventDefault();
        });

        $(".goEnHaut").click(function(evt){
            $(window).scrollTop(0);
        });

    }

    /*********************************************************/
    /*                    GESTION DU MENU                    */
    /*********************************************************/
    function burgerclick(evt) {
        console.log("burger click"); /*****************************/

        $(this).toggleClass("change");
        $("body").toggleClass("translateMenu");
        remouvEventMenuClick();
    }

    function clickpage(evt) {
        console.log("main click"); /*****************************/

        $(".burgerMenu").removeClass("change");
        $("body").removeClass("translateMenu");

        remouvEventMenuClick();
    }

    function remouvEventMenuClick() {

        if ($("body").hasClass("translateMenu") == false) {
            $("main").off("click");
            console.log("event sur main qui dégage"); /*****************************/

            $("#fondMenu").fadeOut(500);
            $("#fondMenu").off("click");
        } else {
            $("main").click(clickpage);
            console.log("event sur main ajouté"); /*****************************/

            $("#fondMenu").fadeIn(500);
            $("#fondMenu").click(clickpage);
        }
    }

    /*********************************************************/
    /*                      MODE SOMBRE                      */
    /*********************************************************/
    function theme(evt) {
        console.log("Changement de theme"); /*****************************/

        //        blocMain.toggleClass("themeSombre");

        if (localStorage.getItem('theme') == "jour") {
            setThemeSombre();
        } else if (localStorage.getItem('theme') == "nuit") {
            setThemeClair();
        }

        console.log("storage theme = " + localStorage.getItem('theme')); /*****************************/
    }

    function setThemeSombre() {
        blocMain.addClass("themeSombre");
        $(".enteteSite").addClass("themeSombre");
        $(".burgerMenu").addClass("themeSombre");
        $("#a-propos").addClass("themeSombre");
        $("#contact button").addClass("themeSombre");
        $(".goEnHaut").addClass("themeSombre");
        localStorage.setItem('theme', 'nuit');
    }

    function setThemeClair() {
        blocMain.removeClass("themeSombre");
        $(".enteteSite").removeClass("themeSombre");
        $(".burgerMenu").removeClass("themeSombre");
        $("#a-propos").removeClass("themeSombre");
        $("#contact button").removeClass("themeSombre");
        $(".goEnHaut").removeClass("themeSombre");
        localStorage.setItem('theme', 'jour');
    }

    /*********************************************************/
    /*               DETECTION SENS DU SCROLL                */
    /*********************************************************/
    function onScroll(evt) {
        window.removeEventListener("scroll", onScroll);

        // console.log("→pscroll " + pScroll); /*****************************/
        // console.log("valeur actuel  " + window.scrollY); /*****************************/

        let nombreSection = document.getElementsByTagName("section").length;

        if (window.scrollY > pScroll) {
            console.log("dessend"); /*****************************/
        } else if (window.scrollY < pScroll) {
            console.log("monte"); /*****************************/
        }


        setTimeout(scrollAddEvt, 1000);
    }

    function scrollAddEvt() {
        window.addEventListener("scroll", onScroll);
        pScroll = window.scrollY;
        // console.log("--NEW pscroll " + pScroll); /*****************************/
        // console.log("___________________________ "); /*****************************/
    }

    /*********************************************************/
    /*        VISIBILITE TITRE EN-TETE ET GO-TOP             */
    /*********************************************************/
    function gestionTitre() {
        if (isScrolledIntoView($('#titreAccueil'))) {
            leTitre.removeClass("titreSiteVisible");
        } else {
            leTitre.css("display", "block");
            setTimeout(function () {
                leTitre.addClass("titreSiteVisible");
            }, 1);
        }

        var $window = $(window);
        let goTopBouton = $(".goEnHaut");
        if ($window.scrollTop() > $window.height() * 0.6) {
            goTopBouton.fadeIn(200);
        } else
            goTopBouton.fadeOut(200);

        // console.log("hauteur = "+$window.height()+"| position = "+$window.scrollTop()); /*****************************/

    }

    function isScrolledIntoView(elem) {
        var $elem = $(elem);
        var $window = $(window);

        var docViewTop = $window.scrollTop();
        var docViewBottom = docViewTop + $window.height();

        var elemTop = $elem.offset().top;
        var elemBottom = elemTop + $elem.height();

        // console.log("isScrolledIntoView : " + docViewTop + "--" + docViewBottom + "--" + elemTop + "--" + elemBottom); /*****************************/

        return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
    }

    /*********************************************************/
    /*                     FIN DU CODE                       */
    /*********************************************************/

}());
