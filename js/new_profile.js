function showApiKey(apikey) {
    input = document.getElementById("apikey");
    input.value = apikey;
    console.log("DISPLAYING APIKEY");
    input.disabled="true";
    console.log("DISABLING INPUT");
    input.select();
    document.execCommand("copy");
    console.log("VALUE COPIED");
//    div = document.getElementById(divid);
//    div.style.visibility = "visible";
//    div.style.opacity = 1;
//    console.log("DIV VISIBLE");
}