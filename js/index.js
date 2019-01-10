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
function checkDivVisible(divtoshow, divtohide, divtohide2) {
    hideDiv(divtohide);
    hideDiv(divtohide2);
    showDiv(divtoshow);  
//        divsearch = document.getElementById('searchcontainer');
//        divlogin = document.getElementById('logincontainer');
//        console.log(divsearch);
//        if (divsearch.style.visibility == "visible") {
//            hideDiv("searchcontainer");
//        }
//        if (divlogin.style.visibility == "visible") {
//            hideDiv("logincontainer");
//        }
//        showDiv(divid);
}