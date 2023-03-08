document.addEventListener("DOMContentLoaded", function () {

    const images = document.querySelectorAll("figure");
    const imageViewer = document.querySelector(".imageViewer");

    let currentImage;

    images.forEach(function (image, index) {
        image.addEventListener("click", function () {
            imageViewer.classList.add("visible");
            loadImage(index)
        });
    });

    imageViewer.addEventListener("click", function () {
        this.classList.remove("visible");
    });

    document.querySelectorAll('.nav_back').forEach(function (element) {
        element.addEventListener("click", function (evt) {
            evt.stopPropagation();
            loadImage(currentImage - 1)
        });
    });

    document.querySelectorAll('.nav_next').forEach(function (element) {
        element.addEventListener("click", function (evt) {
            evt.stopPropagation();
            loadImage(currentImage + 1)
        });
    });

    document.addEventListener("keydown", function (evt) {
        if (evt.key == "Escape")
            imageViewer.classList.remove("visible");
        else if (evt.key == "ArrowLeft")
            loadImage(currentImage - 1)
        else if (evt.key == "ArrowRight")
            loadImage(currentImage + 1)
    });


    function loadImage(index) {
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