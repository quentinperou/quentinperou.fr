document.addEventListener("DOMContentLoaded", function () {

    const txt = [`, c'est qui ?`, `, il fait quoi ?`];
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
                    console.log("hop");
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


});