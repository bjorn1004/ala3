//all code here is purely used for gags
var pizzadance = document.getElementById("pizzadance"),
    playing = false;


function playAudio() {
    "use strict";
    if (playing === false || pizzadance.ended === true) {
        pizzadance.play();
        playing = true;
    } else {
        pizzadance.load();
        playing = false;
    }
}


var spintowin = 0;

function spin() {
    if (spintowin > 3) {
        document.getElementById('spinImg').classList.add('rotate');
        document.querySelector("body").style.fontFamily = 'Comic Sans MS';
        const el = document.querySelector(".container");
        del(el);
        setTimeout(function () {
            document.getElementById('spinImg').classList.remove('rotate');
        }, 3000);
    } else {
        spintowin++;
    }
}

function del(el) {
    setTimeout(function () {
        el.removeChild(el.firstChild);
        spin();
    }, 1000);
}
