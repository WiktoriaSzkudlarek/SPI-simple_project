var colorWell;
var defaultColor = "#b0b0b0";

window.addEventListener("load", startup, false);
function startup() {
colorWell = document.querySelector("#kamyk-kolor");
colorWell.value = defaultColor;
colorWell.addEventListener("input", updateFirst, false);
colorWell.select();
}
function updateFirst(event) {
var cololor = document.querySelector(".rock-image img");
if (cololor) {
    cololor.style.background = event.target.value;
}
}