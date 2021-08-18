
window.onload = __init__;
let Headers = [];
function __init__(){
    Writer();
    keymap();
    follower();
}

function clickherebutton(){
    let element = document.querySelector("#ClickHere");
    element.style.display = "block";
}
function onClickClickHere(){
    window.open("../../HTML/Desktop/Snake.html");
}
function Attacker(h){
    let Element = document.querySelector("#Player");
    h.style.left = h.getBoundingClientRect().left + "px";
    h.style.top = h.getBoundingClientRect().top + "px";
    document.querySelector("#frame").appendChild(h);
    h.style.position = "absolute";



    moveAttacker(Element, h);
}
function moveAttacker(Element, h){

    if(getComputedStyle(h).opacity !== "0"){
        h.style.transition = "all 3s linear";


        setTimeout(function(){

            h.style.left = getComputedStyle(Element).left;
            h.style.top = getComputedStyle(Element).top;

            if(h.style.left === getComputedStyle(Element).left && h.style.top === getComputedStyle(Element).top){
                moveAttacker(Element, h);
            }
        }, 60);
    }
}
function follower(){
    let Element = document.querySelector("#Player");
    let follow = document.querySelector("#Follower");

    setTimeout(function(){
        follow.style.left = getComputedStyle(Element).left;
        follow.style.top = getComputedStyle(Element).top;
        if(follow.style.left === getComputedStyle(Element).left && follow.style.top === getComputedStyle(Element).top){
            follower();
        }
    },  70);
}
function keymap(){
    document.addEventListener('keydown', function (event){
        let Element = document.querySelector("#Player");
        let frame = document.querySelector("#frame");
        let Top = parseInt(getComputedStyle(Element).top);
        let Left = parseInt(getComputedStyle(Element).left);


        if(event.key === "w"){ //UP
            if(Top < 0){
                Element.style.top = "100%";
            }
            else {
                Element.style.top = (Top - 10) + "px";
            }
        }
        else if(event.key === "a") { //Left
            if (Left <= 80) {
                Element.style.left = "100%";
            }
            else {
                Element.style.left = (Left - 10) + "px";
            }
        }
        else if(event.key === "s"){ //down
            if(Top >= window.innerHeight){
                Element.style.top = "0px";
            }
            else{
                Element.style.top = (Top + 10) + "px";

            }
        }
        else if(event.key === "d"){ //right
            if(Left >= frame.clientWidth){
                Element.style.left = "80px";
            }
            else{
                Element.style.left = (Left + 10) + "px";

            }
        }
    });
    document.addEventListener('click', function(event){
        clickherebutton();
        let x = event.clientX, y = event.clientY;
        let Player = document.querySelector("#Player");
        let Attack = document.createElement("div");
        Attack.className = "attack";
        let body = document.querySelector("#frame");

        body.appendChild(Attack);
        Attack.style.top = getComputedStyle(Player).top;
        Attack.style.left = getComputedStyle(Player).left;
        Attack.style.display = "block";
        Player.style.display = "block";
        document.querySelector("#Follower").style.display = "block";

        setTimeout(function(){
            Attack.style.top = y + "px";
            Attack.style.left = x + "px";
        }, 200);
        setTimeout(function(){
            for(let i = 0; i < Headers.length; i++){
                let rect = Headers[i].getBoundingClientRect();

                let differenceX = rect.right - rect.left, differenceY = rect.bottom - rect.top;
                if((rect.left < x && (rect.left + differenceX) > x) && (rect.top < y && (rect.top + differenceY) > y) && getComputedStyle(Headers[i]).opacity === "1"){
                    if(getComputedStyle(Headers[i]).position === "absolute"){
                        Headers[i].opacity = "0";
                    }
                    else{

                        Attacker(Headers[i]);
                    }

                    break;
                }
            }
        }, 1200);
        setTimeout(function(){
            Attack.remove();

        },1200);

    });
}

function Writer() {
    let txt1 = "Hi,";
    let txt2 = "I'm\u00A0Daniel\u00A0Williams.";
    let txt3 = "Computer\u00A0Science\u00A0Major";
    let txt4 = "Graduate\u00A0from\u00A0Penn\u00A0State\u00A0University";
        addText(txt1, 1,0);
        addText(txt2,2,0);
        addText(txt3,3,0);
        addText(txt4,4,0);

}
function addText(text, num, i){
    setTimeout(function(){
        let Element = document.createElement("h1");
        Headers.push(Element);
        Element.className = "IntroChar";
        Element.appendChild(document.createTextNode(text.charAt(i)));
        let id = "#Intro" + num;
        document.querySelector(id).appendChild(Element);
        i++;
        if(i === text.length){
            return;
        }
        else{
            addText(text,num,i);
        }
    },60);

}