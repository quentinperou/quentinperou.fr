document.addEventListener("DOMContentLoaded", function () {

    ////// la version qui marche pas

    const gallerie = document.querySelectorAll(".gallerie");
    const imageViewer = document.querySelector(".imageViewer");
    let currentImage;


    gallerie.forEach(function (gallerie) {
        const images = gallerie.querySelectorAll("figure");
        images.forEach(function (image, index) {
            image.addEventListener("click", function () {
                console.log("image click", index);
                imageViewer.classList.add("visible");
                // console.log("images list", images);
                currentImage = index;
                loadImage(0, images)
            });
        });


    });


    function loadImage(val, images) {
        console.log("loadImage images", images);
        console.log("loadImage val", val);
        let index = currentImage + val;
        console.log("loadImage index", index);
        document.querySelector(".imageViewer img").setAttribute("src", images[index].querySelector("img").getAttribute("src"));
        document.querySelector(".imageViewer figcaption").innerHTML = images[index].querySelector("figcaption").innerHTML;
        currentImage = index;
        if (index == 0)
            document.querySelector('.nav_back').style.display = "none";
        else
            document.querySelector('.nav_back').style.display = "block";

        if (index == images.length - 1)
            document.querySelector('.nav_next').style.display = "none";
        else
            document.querySelector('.nav_next').style.display = "block";
    }


    document.querySelectorAll('.nav_back').forEach(function (element) {
        element.addEventListener("click", function (evt) {
            evt.stopPropagation();
            loadImage(- 1)
        });
    });

    document.querySelectorAll('.nav_next').forEach(function (element) {
        element.addEventListener("click", function (evt) {
            evt.stopPropagation();
            loadImage(+ 1)
        });
    });

    document.addEventListener("keydown", function (evt) {
        if (evt.key == "Escape")
            imageViewer.classList.remove("visible");
        else if (evt.key == "ArrowLeft")
            loadImage(- 1)
        else if (evt.key == "ArrowRight")
            loadImage(+ 1)
    });

    imageViewer.addEventListener("click", function () {
        this.classList.remove("visible");
    });


    /******** GESTION DU SWIPE ********/

    let touchstartX = 0
    let touchendX = 0

    function checkDirection() {
        if (Math.abs(touchstartX - touchendX) > 50) {
            if (touchendX < touchstartX) {
                // console.log('swiped left!');
                if (currentImage < images.length - 1)
                    loadImage(currentImage + 1)
            }
            if (touchendX > touchstartX) {
                // console.log('swiped right!');
                if (currentImage > 0)
                    loadImage(currentImage - 1)
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