document.addEventListener("DOMContentLoaded", function () {

    const imageViewer = document.querySelector(".imageViewer");


    function Gallerie(gallerie, index) {
        this.gallerieIndex = index;
        this.currentImage = 0;
        this.images = gallerie.querySelectorAll(".gallerie figure");
        console.log("Init:images gallerie", this.gallerieIndex, this.images);

        gallerie.setAttribute("data-gallerieIndex", this.gallerieIndex);

        let cetteGallerie = this;
        this.images.forEach(function (image, index) {
            image.addEventListener("click", function () {
                console.log("gallerie:", cetteGallerie.gallerieIndex, " | click image:", index);
                imageViewer.classList.add("visible");
                cetteGallerie.currentImage = index;
                cetteGallerie.loadImage(0);
                imageViewer.setAttribute("data-gallerieIndex", cetteGallerie.gallerieIndex);
            });
        });

        this.loadImage = function (val) {
            let index = this.currentImage + val;
            console.log("LoadImage: Gallerie", this.gallerieIndex, "Index", index);
            if (index < 0 || index >= this.images.length)
                return;
            document.querySelector(".imageViewer figcaption").innerHTML = this.images[index].querySelector("figcaption").innerHTML;
            if (this.images[index].querySelector("img") != null) {
                document.querySelector(".imageViewer video").hidden = true;
                document.querySelector(".imageViewer video").setAttribute("src", "");
                document.querySelector(".imageViewer img").setAttribute("src", this.images[index].querySelector("img").getAttribute("src"));
                document.querySelector(".imageViewer img").hidden = false;
            }
            else if (this.images[index].querySelector("video") != null) {
                document.querySelector(".imageViewer img").hidden = true;
                document.querySelector(".imageViewer img").setAttribute("src", "");
                document.querySelector(".imageViewer video").setAttribute("src", this.images[index].querySelector("video").getAttribute("src"));
                document.querySelector(".imageViewer video").hidden = false;
            }
            this.currentImage = index;

            if (index == 0) {
                document.querySelector('.nav_back').style.display = "none";
            } else
                document.querySelector('.nav_back').style.display = "block";

            if (index == this.images.length - 1) {
                document.querySelector('.nav_next').style.display = "none";
            } else
                document.querySelector('.nav_next').style.display = "block";
        };
    }


    const gallerieListe = [];
    document.querySelectorAll(".gallerie").forEach(function (gallerie, index) {
        gallerieListe.push(new Gallerie(gallerie, index));
    });


    document.querySelectorAll('.nav_back').forEach(function (element) {
        element.addEventListener("click", function (evt) {
            evt.stopPropagation();
            // console.log("nav:gallerieIndex ", imageViewer.getAttribute("data-gallerieIndex"));
            gallerieListe[imageViewer.getAttribute("data-gallerieIndex")].loadImage(- 1);
        });
    });

    document.querySelectorAll('.nav_next').forEach(function (element) {
        element.addEventListener("click", function (evt) {
            evt.stopPropagation();
            gallerieListe[imageViewer.getAttribute("data-gallerieIndex")].loadImage(+ 1);
        });
    });

    document.addEventListener("keydown", function (evt) {
        if (evt.key == "Escape")
            imageViewer.classList.remove("visible");
        else if (evt.key == "ArrowLeft")
            gallerieListe[imageViewer.getAttribute("data-gallerieIndex")].loadImage(- 1);
        else if (evt.key == "ArrowRight")
            gallerieListe[imageViewer.getAttribute("data-gallerieIndex")].loadImage(+ 1);
    });

    imageViewer.addEventListener("click", function () {
        this.classList.remove("visible");
        imageViewer.removeAttribute("data-gallerieIndex");
        document.querySelector(".imageViewer video").setAttribute("src", "");
        document.querySelector(".imageViewer img").setAttribute("src", "");
    });


    /******** GESTION DU SWIPE ********/

    let touchstartX = 0
    let touchendX = 0

    function checkDirection() {
        let laGallerie = gallerieListe[imageViewer.getAttribute("data-gallerieIndex")];
        if (Math.abs(touchstartX - touchendX) > 50) {
            if (touchendX < touchstartX) {
                // console.log('swiped left!');
                if (laGallerie.currentImage < laGallerie.images.length - 1)
                    laGallerie.loadImage(+ 1);
            }
            if (touchendX > touchstartX) {
                // console.log('swiped right!');
                if (laGallerie.currentImage > 0)
                    laGallerie.loadImage(- 1);
            }
        }
    }

    document.querySelector('.imageViewer').addEventListener('touchstart', e => {
        touchstartX = e.changedTouches[0].screenX
    })

    document.querySelector('.imageViewer').addEventListener('touchend', e => {
        touchendX = e.changedTouches[0].screenX
        checkDirection()
    })

});