src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js";

window.onload = loadDoc;


function loadDoc() {
    const xhttp = new XMLHttpRequest();
    xhttp.open("GET", "../../Images/CPU.jpg", true);
    xhttp.send();
    let div = document.querySelector("#back");

    div.style.height = "100px";
    div.style.width = "100px";
    div.style.backgroundColor = "blue";
    div.style.position = "absolute";
    div.style.right = "0";



    let img = document.createElement("img");
    img.src = xhttp.response;
    div.appendChild(img);


    console.log(xhttp);


}