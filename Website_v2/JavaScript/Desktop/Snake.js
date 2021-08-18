let Direction = "right";
let Apple = false;
let apples = [];
let SnakeLinks = [];

window.onload = __init__;

function __init__(){
    CreateElements();
    KeyPressHandler();
}
function StartGame(){
    let GameArea = document.querySelector("#GameArea");
    let Snake = document.createElement("div");
        SnakeLinks.push(Snake);
        Snake.className = "Snake";
        Snake.id = "Snake";
    GameArea.appendChild(Snake);

    for(let i = 0; i < 5; i++){
        appendApple();
    }
    document.querySelector("#SnakeScore").innerHTML = "0";
    document.querySelector("#StartButton").style.opacity = "0";
    document.querySelector("#SnakeLose").style.display = "none";
    moveSnake();
}
function CreateElements(){
    let GameArea = document.createElement("div");
    GameArea.className = "GameArea";
    GameArea.id = "GameArea";
    document.querySelector("#GameContainer").appendChild(GameArea);
}
function KeyPressHandler(){
    document.addEventListener("keydown", function(event){
        let Dir = Direction;
        if(event.key === "w" && Dir !== "down"){
            Direction = "up";
        }
        else if(event.key === "s" && Dir !== "up"){
            Direction = "down";
        }
        else if(event.key === "a" && Dir !== "right"){
            Direction = "left";
        }
        else if(event.key === "d" && Dir !== "left"){
            Direction = "right";
        }
    });
}
function appendApple(){
    let GameArea = document.querySelector("#GameArea");
    let Border = GameArea.getBoundingClientRect();
    let x = Math.floor((Math.random() * Border.width));
    let y = Math.floor((Math.random() * Border.height));
    while(x % 15 !== 0) x++;
    while(y % 15 !== 0) y++;
    if(x >= Border.width - 20){
        x-=20;
    }
    if(y >= Border.height - 20){
        y-=20;
    }
    let tempApple = document.createElement("div");
    tempApple.style.position = "absolute";
    tempApple.className = "Food";
    tempApple.id = "Apple";
    tempApple.left = "0px";
    tempApple.top = "0px";
    tempApple.style.top = y + "px";
    tempApple.style.left = x + "px";
    apples.push(tempApple);
    GameArea.appendChild(tempApple);
}
function directSnake(Border){
    let CurrentKey = Direction
    let speed = 15;
    let Snake = document.querySelector("#Snake");
    let top = parseInt(getComputedStyle(Snake).top);
    let left = parseInt(getComputedStyle(Snake).left);
    for(let i = SnakeLinks.length - 1; i >= 1; i--){
        follow(i);
    }

    if(CurrentKey === "up"){
        if(top <= 0){
            SnakeLinks[0].style.top = (Border.height - 15) + "px";
        }
        else {
            SnakeLinks[0].style.top = (top - speed) + "px";
        }
    }
    else if(CurrentKey === "down"){
        if (top >= Border.height - 15) {
            SnakeLinks[0].style.top = "0px";

        }
        else {
            SnakeLinks[0].style.top = (top + speed) + "px";
        }
    }
    else if(CurrentKey === "left"){
        if(left <= 0){
            SnakeLinks[0].style.left = (Border.width - 15) + "px";
        }
        else{
            SnakeLinks[0].style.left = (left - speed) + "px";

        }
    }
    else if(CurrentKey === "right"){
        if (left >= Border.width - 15) {
            SnakeLinks[0].style.left = "0px";
        }
        else {
            SnakeLinks[0].style.left = (left + speed) + "px";
        }
    }
}
function moveSnake(){
    let IntervalID = setInterval(function(){
        let GameArea = document.querySelector("#GameArea");
        let Border = GameArea.getBoundingClientRect();
        let Snake = document.querySelector("#Snake");
        let SnakeBorder = Snake.getBoundingClientRect();

        if(!Apple){
            appendApple();
            Apple = true;
        }


        directSnake(Border);

        if(checkSnakeOverlap(SnakeBorder)){
            cleanup();
            document.querySelector("#SnakeLose").style.display = "block";
            document.querySelector("#StartButton").style.opacity = "1";
            clearInterval(IntervalID);


        }
        else {
            checkAppleBoundary(SnakeBorder, GameArea, Snake);

        }
    }, 65);

}
function cleanup(){
    for(let i = 0; i < SnakeLinks.length; i++){
        document.querySelector("#GameArea").removeChild(SnakeLinks[i]);
    }
    for(let i = 0; i < apples.length; i++){
        document.querySelector("#GameArea").removeChild(apples[i]);
    }


    SnakeLinks = [];



    apples = [];
}

function checkAppleBoundary(SnakeBorder, GameArea, Snake){

    for(let i = 0; i < apples.length; i ++) {
        let appleBorder = apples[i].getBoundingClientRect();

        /* Apple Corner Coordinates */
        let AppleTopLeftX = appleBorder.x, AppleTopLeftY = appleBorder.y;
        let AppleTopRightX = appleBorder.x + appleBorder.width, AppleTopRightY = appleBorder.y;

        let AppleBottomLeftX = appleBorder.x, AppleBottomLeftY = appleBorder.y + appleBorder.height;
        let AppleBottomRightX = appleBorder.x + appleBorder.width, AppleBottomRightY = appleBorder.y + appleBorder.height;

        /* Snake Corner Coordinates */
        let SnakeTopLeftX = SnakeBorder.x, SnakeTopLeftY = SnakeBorder.y;
        let SnakeTopRightX = SnakeBorder.x + SnakeBorder.width, SnakeTopRightY = SnakeBorder.y;

        let SnakeBottomLeftX = SnakeBorder.x, SnakeBottomLeftY = SnakeBorder.y + SnakeBorder.height;
        let SnakeBottomRightX = SnakeBorder.x + SnakeBorder.width, SnakeBottomRightY = SnakeBorder.y + SnakeBorder.height;


        if((AppleTopRightX <= SnakeTopLeftX && AppleTopRightX >= SnakeTopLeftX) && (AppleTopLeftY <= SnakeTopLeftY && AppleBottomLeftY >= SnakeTopLeftY)){
            AppleFound(GameArea, appleBorder, Snake, i);
            break;
        }
        else if((AppleTopLeftX <= SnakeTopRightX && AppleTopRightX >= SnakeTopRightX) && (AppleTopRightY <= SnakeTopRightY && AppleBottomRightY >= SnakeTopRightY)){
            AppleFound(GameArea, appleBorder, Snake, i);
            break;
        }
        else if((AppleTopLeftX <= SnakeBottomRightX && AppleTopRightX >= SnakeBottomRightX) && (AppleTopRightY <= SnakeBottomRightY && AppleBottomRightY >= SnakeBottomRightY)){
            AppleFound(GameArea, appleBorder, Snake, i);
            break;
        }
        else if((AppleBottomLeftX <= SnakeBottomLeftX && AppleBottomRightX >= SnakeBottomLeftX) && (AppleTopLeftY <= SnakeBottomLeftY && AppleBottomLeftY >= SnakeBottomLeftY)){
            AppleFound(GameArea, appleBorder, Snake, i);
            break;
        }

    }
}
function checkSnakeOverlap(SnakeBorder){
    /* Snake Corner Coordinates */
    if(apples.length > 1) {
        let SnakeTopLeftX = SnakeBorder.x, SnakeTopLeftY = SnakeBorder.y;
        let SnakeTopRightX = SnakeBorder.x + SnakeBorder.width, SnakeTopRightY = SnakeBorder.y;

        let SnakeBottomLeftX = SnakeBorder.x, SnakeBottomLeftY = SnakeBorder.y + SnakeBorder.height;
        let SnakeBottomRightX = SnakeBorder.x + SnakeBorder.width,
            SnakeBottomRightY = SnakeBorder.y + SnakeBorder.height;

        for (let i = SnakeLinks.length - 1; i > 1; i--) {
            let LinkBorder = SnakeLinks[i].getBoundingClientRect();

            let LinkTopLeftX = LinkBorder.x, LinkTopLeftY = LinkBorder.y;
            let LinkTopRightX = LinkBorder.x + LinkBorder.width, LinkTopRightY = LinkBorder.y;

            let LinkBottomRightX = LinkBorder.x + LinkBorder.width, LinkBottomRightY = LinkBorder.y + LinkBorder.height;
            let LinkBottomLeftX = LinkBorder.x, LinkBottomLeftY = LinkBorder.y + LinkBorder.height;

            if ((SnakeTopLeftX === LinkTopLeftX) && (LinkTopLeftY === SnakeTopLeftY) && (LinkTopRightX === SnakeTopRightX) && (LinkTopRightY === SnakeTopRightY) &&
                (LinkBottomRightX === SnakeBottomRightX) && (LinkBottomRightY === SnakeBottomRightY) && (SnakeBottomLeftX === LinkBottomLeftX) && (SnakeBottomLeftY === LinkBottomLeftY)) {
                return true;
            }
        }
    }
    else {
        return false;
    }
}
function AppleFound(GameArea, appleBorder, Snake, i){
    Apple = false;
    GameArea.removeChild(apples[i]);
    apples.splice(i, 1);
    SnakeLinks.push(document.createElement("div"));
    SnakeLinks[SnakeLinks.length - 1].className = "Snake";
    SnakeLinks[SnakeLinks.length - 1].style.left = Snake.style.left;
    SnakeLinks[SnakeLinks.length - 1].style.top = Snake.style.top;

    let Score = document.querySelector("#SnakeScore");
    Score.innerHTML = String((parseInt(Score.innerHTML) + 1));
    GameArea.appendChild(SnakeLinks[SnakeLinks.length - 1]);
}

function follow(i){
    if(SnakeLinks.length > 1 && i !== 0) {
        SnakeLinks[i].style.left = getComputedStyle(SnakeLinks[i - 1]).left;
        SnakeLinks[i].style.top = getComputedStyle(SnakeLinks[i - 1]).top;
    }
}
