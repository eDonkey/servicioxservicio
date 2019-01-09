function showDiv(divid) {
    div = document.getElementById(divid);
    div.style.visibility = "visible";
    div.style.opacity = 1;
    console.log("DIV VISIBLE");
}
function hideDiv(divid) {
    div = document.getElementById(divid);
    div.style.visibility = "hidden";
    div.style.opacity = 0;
    console.log("DIV OCULTO");
}