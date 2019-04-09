
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



