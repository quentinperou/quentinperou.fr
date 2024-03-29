document.addEventListener("DOMContentLoaded", function () {

    const txt = [`, qui est-ce ?`, `, que fait-il ?`];
    const cursor = "|";

    const titreElm = document.querySelector(".contenuSectionApropos div:nth-child(2) h3");

    const titreOrginal = titreElm.textContent;
    titreElm.innerHTML = `${titreOrginal}<span id="textContainer"></span><span id="cursor"></span>`;

    let curentTxt = 0;
    let stateCursor = false;
    let cursorElm = document.getElementById('cursor');
    let textElm = document.getElementById('textContainer');
    let cursorBlink;

    setTimeout(() => {
        write();
    }, 1500);


    function write() {
        clearInterval(cursorBlink);
        cursorElm.textContent = cursor;
        let curentLetter = 0;
        let intervalText = setInterval(() => {
            textElm.textContent += txt[curentTxt][curentLetter];
            curentLetter++;
            if (curentLetter == txt[curentTxt].length) {
                clearInterval(intervalText);
                startCursorBlink();
                setTimeout(() => {
                    if (curentTxt < txt.length - 1)
                        curentTxt++;
                    else
                        curentTxt--;
                    clear();
                }, 5000);
            }
        }, 150);
    }

    function clear() {
        clearInterval(cursorBlink);
        cursorElm.textContent = cursor;
        let curentLetter = textElm.textContent.length;
        let intervalText = setInterval(() => {
            textElm.textContent = textElm.textContent.substring(0, curentLetter - 1);
            curentLetter--;
            if (curentLetter == 0) {
                clearInterval(intervalText);
                startCursorBlink();
                setTimeout(() => {
                    write();
                }, 8000);
            }
        }, 100);
    }

    function startCursorBlink() {
        cursorBlink = setInterval(() => {
            switch (stateCursor) {
                case true:
                    cursorElm.textContent = cursor;
                    stateCursor = false;
                    break;

                case false:
                    cursorElm.textContent = "";
                    stateCursor = true;
                    break;
            }
        }, 500);
    }


    /********** Changement photo profil au click **********/
    document.getElementById("photoProfil").addEventListener("click", function () {
        let currentPhoto = this.src.split("-")[1];
        this.src = `images/photo_profil-${currentPhoto == 4 ? 1 : parseInt(currentPhoto) + 1}-c.jpg`;
    });

});