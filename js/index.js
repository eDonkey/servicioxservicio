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
function checkDivVisible(divid) {
    divsearch = document.getElementById('searchcontainer').style.visibility;
    divlogin = document.getElementById('logincontainer').style.visibility;
    console.log(divsearch);
    console.log(divlogin);
    console.log(divid);
}