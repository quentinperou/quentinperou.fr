"use strict";
(function () {
    document.addEventListener("DOMContentLoaded", initialiser);

    /*********************************************************/
    /*                 DECLATATION VARIABLES                 */
    /*********************************************************/
    // var pScroll = 0;
    let leTitre;
    let blocMain;

    /*********************************************************/
    /*                   FONCTION PRINCIPALE                 */
    /*********************************************************/
    function initialiser(evt) {

        $("#fondMenu").hide();
        $(".goEnHaut").hide();

        /********** CLIC DANS LE MENU **********/
        $(".burgerMenu").click(burgerclick);
        $(".lienMenu").click(clickpage);
        $(".titre").click(clickpage);

        /********** LE SCROL - mais ça sert a rien **********/
        /*
        pScroll = window.scrollY;
        window.addEventListener("scroll", onScroll);
        */

        /********** AFFICHAGE DU TITRE DU SITE **********/
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

        /********** THEME **********/
        document.getElementById("themeCheck").addEventListener("input", theme);

        blocMain = $("main");

        const date = new Date();
        console.log("heure= " + date.getHours()); //------------------ligne de log

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
            setThemeClair();
        } else if (localStorage.getItem('theme') == "nuit") {
            document.getElementById("themeCheck").checked = true;
            setThemeSombre();
        }
        console.log("storage INIT theme = " + localStorage.getItem('theme')); //------------------ligne de log

        /********** Fonction de transition couleur background **********/
        setTimeout(function () {
            $(".transitionMode").css("transition", "color 500ms ease 0s, background 500ms ease 0s");
        }, 1);

        /********** BLOQUE LE CLIC DROIT **********/
        document.addEventListener("contextmenu", function (evt) {
            evt.preventDefault();
        });

        /********** REMONTER EN HAUT DE LA PAGE **********/
        $(".goEnHaut").click(function (evt) {
            $(window).scrollTop(0);
        });




        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            // true for mobile device
//            document.write("mobile device");

            $(window).scroll(function () {
                //          console.log("test 1");
                $('.sectionProjet').each(function () {
                    //              console.log("test 2");
                    let elem = $(this)
                    //              console.log(elem);
                    if (isScrolledIntoView(elem)) {
                        //                  elem.trigger("mouseenter");
                        elem.children(".contenuSectionProjet").css("left", "0")
                        console.log("visible");
                        console.log(elem);
                        console.log("--------------------------------");
                    } else
                        elem.children(".contenuSectionProjet").css("left", "-100%")
                });



            });
        }


    }

    /*********************************************************/
    /*                    GESTION DU MENU                    */
    /*********************************************************/
    function burgerclick(evt) {
        console.log("burger click"); //------------------ligne de log

        $(this).toggleClass("change");
        $("body").toggleClass("translateMenu");
        remouvEventMenuClick();
    }

    function clickpage(evt) {
        console.log("main click"); //------------------ligne de log

        $(".burgerMenu").removeClass("change");
        $("body").removeClass("translateMenu");

        remouvEventMenuClick();
    }

    function remouvEventMenuClick() {
        if ($("body").hasClass("translateMenu") == false) {
            $("main").off("click");
            console.log("event sur main qui dégage"); //------------------ligne de log

            $("#fondMenu").fadeOut(500);
            $("#fondMenu").off("click");
        } else {
            $("main").click(clickpage);
            console.log("event sur main ajouté"); //------------------ligne de log

            $("#fondMenu").fadeIn(500);
            $("#fondMenu").click(clickpage);
        }
    }

    /*********************************************************/
    /*                      MODE SOMBRE                      */
    /*********************************************************/
    function theme(evt) {
        console.log("Changement de theme"); //------------------ligne de log
        //  blocMain.toggleClass("themeSombre");

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
        $("#projetFiltre").addClass("themeSombre");
        localStorage.setItem('theme', 'nuit');
    }

    function setThemeClair() {
        blocMain.removeClass("themeSombre");
        $(".enteteSite").removeClass("themeSombre");
        $(".burgerMenu").removeClass("themeSombre");
        $("#a-propos").removeClass("themeSombre");
        $("#contact button").removeClass("themeSombre");
        $(".goEnHaut").removeClass("themeSombre");
        $("#projetFiltre").removeClass("themeSombre");
        localStorage.setItem('theme', 'jour');
    }

    /*********************************************************/
    /*               DETECTION SENS DU SCROLL                */
    /*********************************************************/
    /* 
    function onScroll(evt) {
         window.removeEventListener("scroll", onScroll);

         // console.log("→pscroll " + pScroll); //------------------ligne de log
         // console.log("valeur actuel  " + window.scrollY); //------------------ligne de log

         let nombreSection = document.getElementsByTagName("section").length;

         if (window.scrollY > pScroll) {
             console.log("dessend"); //------------------ligne de log
         } else if (window.scrollY < pScroll) {
             console.log("monte"); //------------------ligne de log
         }
         setTimeout(scrollAddEvt, 1000);
     }

     function scrollAddEvt() {
         window.addEventListener("scroll", onScroll);
         pScroll = window.scrollY;
         // console.log("--NEW pscroll " + pScroll); //------------------ligne de log
         // console.log("___________________________ "); //------------------ligne de log
     }
     */

    /*********************************************************/
    /*        VISIBILITE TITRE EN-TETE ET GO-TOP             */
    /*********************************************************/
    function gestionTitre() {
        if (document.body.hasAttribute("index")) {
            if (isScrolledIntoView($('#titreAccueil'))) {
                leTitre.removeClass("titreSiteVisible");
            } else {
                leTitre.css("display", "block");
                setTimeout(function () {
                    leTitre.addClass("titreSiteVisible");
                }, 1);
            }
        }

        var $window = $(window);
        let goTopBouton = $(".goEnHaut");
        if ($window.scrollTop() > $window.height() * 0.6) {
            goTopBouton.fadeIn(200);
        } else
            goTopBouton.fadeOut(200);

        // console.log("hauteur = "+$window.height()+"| position = "+$window.scrollTop()); //------------------ligne de log
    }

    function isScrolledIntoView(elem) {
        var $elem = $(elem);
        var $window = $(window);

        var docViewTop = $window.scrollTop();
        var docViewBottom = docViewTop + $window.height();

        var elemTop = $elem.offset().top;
        var elemBottom = elemTop + $elem.height();

        // console.log("isScrolledIntoView : " + docViewTop + "--" + docViewBottom + "--" + elemTop + "--" + elemBottom); //------------------ligne de log

        return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
    }


    /*********************************************************/
    /*                GESTION FILTRE PROJET                  */
    /*********************************************************/

    let $filtre = $(".theme");
    let $lesProjets = $(".sectionProjet");

    $filtre.click(function () {
        $filtre.removeClass("active");
        $(this).addClass("active");

        let theme = $(this).data("theme")
        console.log("theme : " + theme); //------------------ligne de log

        $lesProjets.show();

        $lesProjets.each(function () {
            if (theme == "tout")
                $(this).show();
            else if (!$(this).hasClass(theme)) {
                $(this).hide();
            }
        });
    });


    /*********************************************************/
    /*                    TRANSITION PAGE                    */
    /*********************************************************/

    /********** TRANSITION UP **********/
    $(".btnTransiUp").click(function (e) {
        e.preventDefault();
        let lien = $(this).attr('href');
        console.log(lien); //------------------ligne de log

        let divIframeUp = $("#iframe_content_up");
        divIframeUp.html('<iframe src="" id="iframeTrans"></iframe>')
        divIframeUp.css("top", "0");
        divIframeUp.children().attr('src', lien);
        setTimeout(function () {
            window.location.href = lien;
        }, 500);
    });

    /********** TRANSITION DOWN **********/
    $(".boutonTag, .boutonRetour").click(function (e) {
        e.preventDefault();
        let lienTag = $(this).attr('href');
        console.log(lienTag); //------------------ligne de log

        document.getElementsByTagName("main")[0].insertAdjacentHTML("afterbegin", '<div id="iframe_content_down"></div>')
        console.log(document.getElementsByTagName("main")); //------------------ligne de log

        let divIframe2 = $("#iframe_content_down");
        divIframe2.html('<iframe src="" id="iframeTrans"></iframe>')
        divIframe2.css("top", "0");
        divIframe2.children().attr('src', lienTag);
        setTimeout(function () {
            window.location.href = lienTag;
        }, 460);
    });


    /*********************************************************/
    /*                    ----------------                   */
    /*********************************************************/
    /*  
    $(window).scroll(function () {
          console.log("test 1");
          $('.sectionProjet').each(function () {
              console.log("test 2");
              let elem = $(this)
              console.log(elem);
              if (isScrolledIntoView(elem)) {
                  elem.trigger("mouseenter");
                  console.log("visible");
              }
          });
           console.log("--------------------------------");
      });
      */



    /*********************************************************/
    /*                     FIN DU CODE                       */
    /*********************************************************/

}());
