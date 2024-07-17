(function () {
    /******** GESTION de l'affichage des videos ********/

    const boutonVideo = document.querySelectorAll('[youtubePlayer]');
    const videoViewer = document.querySelector(".videoViewer");

    boutonVideo.forEach((btn, index) => {
        btn.addEventListener('click', (evt) => {
            let videoLink = btn.href.split("/");
            // console.log("videoLink", videoLink);

            // Si c'est une video youtube /et que le site n'est pas ouvert sur un mobile
            if (videoLink[2].startsWith("youtu") /*&& window.innerWidth > 768*/) {
                evt.preventDefault();
                videoViewer.querySelector('iframe').src = `https://www.youtube-nocookie.com/embed/${videoLink[videoLink.length - 1]}?showinfo=0&color=white&rel=0&autoplay=1&vq=hd1080`;
                videoViewer.querySelector('iframe').removeAttribute("style");
                videoViewer.classList.add("visible");
                // if (window.innerWidth < 768) {
                    // videoViewer.querySelector('iframe').requestFullscreen();
                // }
            } else {
                videoViewer.querySelector('iframe').style.display = "none";
            }
        });
    });

    videoViewer.querySelector('.close').addEventListener("click", function () {
        videoViewer.classList.remove("visible");
        videoViewer.querySelector('iframe').src = "";
    });

    videoViewer.addEventListener("click", function (evt) {
        if (evt.target == videoViewer) {
            videoViewer.classList.remove("visible");
            videoViewer.querySelector('iframe').src = "";
        }
    });

    document.addEventListener("keydown", function (evt) {
        if (evt.key == "Escape") {
            videoViewer.classList.remove("visible");
            videoViewer.querySelector('iframe').src = "";
        }
    });

})();